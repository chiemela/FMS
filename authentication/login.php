<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== 3010){
    header("location: ../auth.php");
    exit;
}

 
// Include config file
require_once "config.php";


// Check if license has expired
$sqlLicense = "SELECT * FROM license WHERE id ='1'";

if ($resultLicense = mysqli_query($link, $sqlLicense)) {

    if (mysqli_num_rows($resultLicense) > 0) {

        while ($rowLicense = mysqli_fetch_array($resultLicense)) {

            // Assign old license date
            $oldDate = $rowLicense['valid_until'];
            // Assign current license date
            $newDate = date("Y-m-d");
            // Assign date sections into variable
            $time = strtotime($oldDate);
            $month = date("F",$time);
            $monthNumeric = date("m",$time);
            $year = date("Y",$time);
            $day = date("j",$time);
            $oldDateFormated = $day." ".$month." ".$year;

            // This creates a unique year for Akawo_ID
            $time = strtotime($newDate);
            $unique_year = date("Y",$time);

        }

        // Free result set
        mysqli_free_result($resultLicense);

    } else {

        echo "<p class='lead'><em>No records were found.</em></p>";

    }

} else {

    echo "ERROR: Could not able to execute $sqlLicense. " . mysqli_error($link);

}


// Check if license has expired then destroy session
if ($oldDate <= $newDate) {
    
  // Destroying session
    session_destroy();

}

 
// Define variables and initialize with empty values
$email = $_SESSION["useremail"];



 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){                   
                            session_start();      
                            // Store data in session variables
                            $_SESSION["loggedin"] = 5005;
                            $_SESSION["email_err"] = " ";
                            $_SESSION["password_err"] = " ";
                            $flexibleURL = "xoqrzy/admin/home.php";
                          
                          	// Check if license has expired
                            $sqlLicense = "SELECT * FROM license WHERE id ='1'";

                            if ($resultLicense = mysqli_query($link, $sqlLicense)) {

                                if (mysqli_num_rows($resultLicense) > 0) {

                                    while ($rowLicense = mysqli_fetch_array($resultLicense)) {

                                        // Assign old license date
                                        $oldDate = $rowLicense['valid_until'];
                                        // Assign current license date
                                        $newDate = date("Y-m-d");
                                        // Assign date sections into variable
                                        $time = strtotime($oldDate);
                                        $month = date("F",$time);
                                        $monthNumeric = date("m",$time);
                                        $year = date("Y",$time);
                                        $day = date("j",$time);
                                        $oldDateFormated = $day." ".$month." ".$year;

                                        // This creates a unique year for Akawo_ID
                                        $time = strtotime($newDate);
                                        $unique_year = date("Y",$time);

                                    }

                                    // Free result set
                                    mysqli_free_result($resultLicense);

                                } else {

                                    echo "<p class='lead'><em>No records were found.</em></p>";

                                }

                            } else {

                                echo "ERROR: Could not able to execute $sqlLicense. " . mysqli_error($link);

                            }


                            // Check if license has expired then destroy session
                            if ($oldDate < $newDate) {

                              // Destroying session
                              session_destroy();
                              header("location: ../auth.php");
                              exit;

                            }
                          
                            // Redirect user to welcome page
                            header("location: ".$flexibleURL);
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                            $_SESSION["password_err"] = $password_err;
                        }
                    }
                } else{
                    // Display an error message if email doesn't exist
                    $email_err = "No account found with that email.";
                    $_SESSION["email_err"] = $email_err;
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<title>Accountant | Eliam Technologies</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../E-Accountant-icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<div class="text-center">
					<img src="../images/SWAV.png">
				</div>
				<span class="login100-form-title p-b-41">
                    Hi, <?php echo $_SESSION["username"] ?>
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

					<div class="wrap-input100 validate-input" data-validate="Enter password" <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>>
						<input class="input100" type="password" name="password" placeholder="Password" required autofocus>
						<span class="focus-input100 help-block" data-placeholder="&#xe80f;"><?php echo "<h6 style='text-align:center;'>". $_SESSION["password_err"]." ". $_SESSION["email_err"] ?></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit" value="Login">
                            Continue
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>