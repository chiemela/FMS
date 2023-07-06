<?php
// Initialize the session
session_start();
 

// Include config file
require_once "config.php";

$sqlLicense = "SELECT * FROM license WHERE id ='1'";
if($resultLicense = mysqli_query($link, $sqlLicense)){
    if(mysqli_num_rows($resultLicense) > 0){
        while($rowLicense = mysqli_fetch_array($resultLicense)){
            // Assign old license date
            $oldDate = $rowLicense['valid_until'];
            // Assign current license date
            $newDate = date("Y-m-d");
            // Assign date sections into variable
            $time=strtotime($oldDate);
            $month=date("F",$time);
            $year=date("Y",$time);
            $day=date("j",$time);
            // license number
            $license_key = $rowLicense['license_key'];
        }
        // Free result set
        mysqli_free_result($resultLicense);
    } else{
        echo "<p class='lead'><em>No records were found.</em></p>";
    }
} else{
    echo "ERROR: Could not able to execute $sqlLicense. " . mysqli_error($link);
}
if($oldDate > $newDate){
    // Redirect user to home page
    $licenseMsg = "Active";
    $activeNumber = 1;
} else{
    $licenseMsg = "Expired";
    $activeNumber = 0;
}





// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Destroying session
    session_destroy();
    // Redirect user to enter YEAR ONE page
    header("location: https://paystack.com/pay/christthekingfellowshipmulti-purposeco-operativesociety");
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="license/images/logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accountant | CTKF Co-operative Powered By Eliam Technologies</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="license/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="license/css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="signup-form" class="signup-form">
                        <div class="text-center">
                            <img src="license/images/Eliam-Technologies-logo.png" alt="Eliam-Technologies-logo">
                        </div>
                        <h2 class="form-title">
                            <?php 
                                if($activeNumber == 1){
                                    echo "SWAV License ";
                                    echo "<span style=color:#2ba348;>".$licenseMsg."</span>";
                                } elseif($activeNumber == 0){
                                    echo "SWAV License ";
                                    echo "<span style=color:red;>".$licenseMsg."</span>";
                                }
                                
                            ?>
                        </h2>
                        <div class="form-group">
                            <p class="text-center mb-2">
                                <strong>License Key: <?php echo $license_key?></strong>
                                </br><strong>Expiry Date</strong>
                                </br><strong class="mb-8"><?php echo $day." ".$month." ".$year?></strong>
                            </p>
                        </div>
                        <div class="form-group">
                            <?php 
                                if($activeNumber == 1){
                                    echo '<div class="text-center">';
                                        echo '<img src="license/images/activated.png" alt="activated">';
                                    echo '</div>';
                                } elseif($activeNumber == 0){
                                    echo '<input type="submit" name="submit" id="submit" class="form-submit" value="Renew License"/>';
                                }
                            ?>
                        </div>
                        <!--<div class="loginhere">-->
                            <?php 
                                if($activeNumber == 1){
                                    echo 
                                        '<span style="padding-right:5px;"> <a href="https://eliamtechnologies.com/privacy-and-cookies/">Privacy & Cookie Policy</a></span>
                                        <span style="padding-right:5px; padding-left:5px;"><a href="https://eliamtechnologies.com/terms-of-use/">Terms of Use</span>
                                        <span style="padding-right:5px; padding-left:5px;"><a href="https://www.eliamtechnologies.com">Return Home</span>
                                        <span style="padding-left:10px;"><a href="auth.php">Login</a></span>';
                                }
                                if($activeNumber == 0){
                                    echo 'Already renewed your license ? <a href="auth.php" class="loginhere-link">Login here</a>';
                                } 
                            ?>
                        <!-- div -->
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <!-- <script src="license/vendor/jquery/jquery.min.js"></script>
    <script src="license/js/main.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>