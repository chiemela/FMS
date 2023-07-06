<?php
// Initialize the session
session_start();

// Include config file
require_once "../../config.php";


// Check if license has expired
$sqlLicense = "SELECT * FROM license WHERE id ='1'";
if($resultLicense = mysqli_query($link, $sqlLicense)){
    if(mysqli_num_rows($resultLicense) > 0){
        while($rowLicense = mysqli_fetch_array($resultLicense)){
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
        }
        // Free result set
        mysqli_free_result($resultLicense);
    } else{
        echo "<p class='lead'><em>No records were found.</em></p>";
    }
} else{
    echo "ERROR: Could not able to execute $sqlLicense. " . mysqli_error($link);
}


// Check if license has expired then destroy session
if($oldDate < $newDate){
    
  // Destroying session
    session_destroy();
} 

// Check if user authenticated correctly
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== 5005){
    header("location: ../../../auth.php");
    exit;
}

// If user is not a staff don't give access to this page
if($_SESSION['role'] == "Manager" || $_SESSION['role'] == "Chairman"){
    header("location: home.php");
    exit;
}


// Get the data from the URL
$validateAccountNumber = $_GET['validateAccountNumber'];
$accNumber = $_GET['acc_number'];
$memberFullName = $_GET['memberFullName'];
$url_redirect = "?accNumber=$accNumber&memberFullName=$memberFullName";

// Check if account number validation returns successful = OK
if ($validateAccountNumber == "OK") {
    
    header("location: addSavings.php$url_redirect");
    exit;

}

      


// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Assign form values to variables
    $_SESSION["accNumber"] = $_POST["accNumber"];
    $_SESSION["validateSenderURI"] = "authAddSavings.php";
    // Clear error message
    $_SESSION["acc_number_err"] = " ";

    // Redirect user to enter YEAR ONE page
    header("location: validateAccountNumber.php");

}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Accountant | CTKF Co-operative Powered By Eliam Technologies</title>
    <?php include "include/header/header.php"?>

</head>

<body id="page-top">

    <?php include "include/sidebar/sidebar.php"?>
    <?php include "include/topBar/topBar.php"?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Account Validation</h1>
        </div>

        <!-- Content Row -->
        <div class="row">  
            <div class="col-lg-12 mb-12">
                <!-- Member Authentication -->
                <div class="card shadow mb-12">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="m-0 font-weight-bold text-primary">Member Authentication</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="row">
                                <div class="form-group col-md-4">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Account number</label>
                                    <input type="number" class="form-control"  name="accNumber" placeholder="Account number" required autofocus >
                                </div>
                                <div class="form-group col-md-4">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                </div>
                                <div class="form-group col-md-4">
                                    <button type="submit" class="justify-content-center btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Authenticate
                                    </button>
                                </div>
                                <div class="form-group col-md-4">
                                </div>
                            </div>
                        </form>
                        <br/>
                        <br/>
                        <?php echo $_SESSION["acc_number_err"]?>
                        <p></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

            
    <?php include "include/footer/footer-copyright.php";?>
    <?php include "include/mainContent/mainContent.php";?>

     <!-- Bootstrap core JavaScript-->
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
            
</body>

</html>