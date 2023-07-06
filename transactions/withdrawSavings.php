<?php
// Initialize the session
session_start();

// Include config file
require_once "../../config.php";


// Check if user authenticated correctly
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== 5005) {

    header("location: ../../../auth.php");
    exit;

}

// give page access to only staff
include "include/header/staffAccess.php";


$return_status = "Incomplete";
$savingsTotalBalance = 0;
$savingsCreditBalance = 0;
$savingsPendingDebit = 0;
$savingsTotalPendingDebit = 0;
$savingsDebitBalance = 0;
$acc_number = $_GET["accNumber"];
$memberFullName = $_GET["memberFullName"];
$approved = "Approved";
$pending = "Pending";
$countApproved = 0;
$countPost = 0;
$no_approved_post = 0;
$pendingPost = 0;

// Get number of approved posts
$sql = "SELECT * FROM ckc_2021_savings_debit WHERE acc_number = '$acc_number' AND post_status = '$approved'";

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_array($result)) {

            $countApproved += 1;
            $savingsDebitBalance += $row['amount'];

        }

        // Free result set
        mysqli_free_result($result);

    }

} else {

    echo "APPROVED POST ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Get the number of Pending POSTS
$sql = "SELECT post_status FROM ckc_2021_savings_debit WHERE acc_number = '$acc_number'";

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_array($result)) {

            $countPost += 1;

        }

        // Free result set
        mysqli_free_result($result);

    } else {

        $no_approved_post = 1;

    }

} else {

    echo "NUMBER OF POST ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Get the total Savings debit balance
$sql = "SELECT * FROM ckc_2021_savings_debit WHERE acc_number = '$acc_number' AND post_status = '$pending'";

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_array($result)) {

            $savingsPendingDebit += $row['amount'];
            $pendingPost += 1;

        }

        // Free result set
        mysqli_free_result($result);

    }
    
} else {

    echo "NUMBER OF POST ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Get the total approved Savings credit balance
$sql = "SELECT * FROM ckc_2021_savings_credit WHERE acc_number = '$acc_number' AND post_status = '$approved'";

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_array($result)) {

            $savingsCreditBalance += $row['amount'];

        }

        // Free result set
        mysqli_free_result($result);

    }
    
} else {

    echo "NUMBER OF POST ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Get the total loans balance to check if savings is withdrawable
$sql = "SELECT balance FROM ckc_2021_loan_return WHERE acc_number = '$acc_number' AND return_status = '$return_status'";                
$balance = 0;

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_array($result)) {

            $balance = $row['balance'];

        }

        // Free result set
        mysqli_free_result($result);

    }
    
} else {

    echo "NUMBER OF POST ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$savingsTotalBalance = $savingsCreditBalance - $savingsDebitBalance;

// custom form url
$form_url = "debitSavings.php?accNumber=".$_SESSION["accNumber"];

/*
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $savingsTotalPendingDebit = $_POST["amount"] + $savingsPendingDebit;
    $_SESSION["voucher_date"] = $_POST["voucher_date"];
    // Check if Total savings balance is withdrawable
    
    // Redirect user to debitSavings.php
    header("location: debitSavings.php");

    
    // Check if user still has a loan debt and don't allow them to withdraw below their debt
    $withdrawable_balance = $savingsTotalBalance - $balance;
    if($withdrawable_balance >= 0) {
        if($_POST["amount"] <= $withdrawable_balance) {
            // Check if Post amount is lesser than Grand total to prevent staff from posting
            if($savingsTotalBalance >= $savingsTotalPendingDebit) {
                // Check if Post amount is lesser than the total approved balance
                if($_POST["amount"] <= ($savingsTotalBalance - 1000)) {
                    // Assign form values to variables
                    $_SESSION["amount"] = $_POST["amount"];
            
                    // Redirect user to debitSavings.php
                    header("location: debitSavings.php");
                } else {
                    $_SESSION["debitSavingsSuccessMsg"] = "Posting unsuccessful due to insufficient funds. Note: You cannot withdraw your last ₦1,000";
            
                    // Redirect user to withdrawSavings.php
                    header("location: withdrawSavings.php");
                }
            } else {
                $_SESSION["debitSavingsSuccessMsg"] = "Posting unsuccessful for this account number - ".$_SESSION["accNumber"].". Check the TOTAL BALANCE and pending posts or Try a lesser amount";
            
                // Redirect user to withdrawSavings.php
                header("location: withdrawSavings.php");
            }
        } else {
            $_SESSION["debitSavingsSuccessMsg"] = "Posting unsuccessful for this account number - ".$_SESSION["accNumber"].". You cannot withdraw more than your available balance of ₦".$withdrawable_balance;
        
            // Redirect user to withdrawSavings.php
            header("location: withdrawSavings.php");
        }
    } else {
        $_SESSION["debitSavingsSuccessMsg"] = "Posting unsuccessful for this account number - ".$_SESSION["accNumber"].". Amount cannot be withdrawn because you still have loan debt";
    
        // Redirect user to withdrawSavings.php
        header("location: withdrawSavings.php");
    }
    
}
*/
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
            <div class="row">
                    <style>
                        .zoom {
                        transition: transform .2s; /* Animation */
                        width: 50%;
                        height: auto;
                        margin: 0 auto;
                        }

                        .zoom:hover {
                        transform: scale(0.8); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
                        }
                    </style>
                <div class="form-group col-md-3">
                </div>
                <div class="form-group col-md-3">
                    <div class="zoom text-center">
                        <a href="authAddSavings.php" title="Savings Credit"><img src="img/ckc-credit.png" class="img-fluid" alt="Savings Credit"></a>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="zoom text-center">
                        <a href="authWithdrawSavings.php" title="Savings Debit"><img src="img/ckc-debit.png" class="img-fluid" alt="Savings Debit"></a>
                    </div>
                </div>
                <div class="form-group col-md-3">
                </div>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">  
            <div class="col-lg-12 mb-12">
                <!-- Add Akawo -->
                <div class="card shadow mb-12">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="m-0 font-weight-bold text-primary">Withdraw Savings (Withdraw from Savings)</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action=<?php echo $form_url?>>
                            
                            <div class="row">
                                <!-- Member name - (Savings) -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-light shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Member Name</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $memberFullName;?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Member account number - (Savings) -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Member account number</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_SESSION["accNumber"];?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Debit balance - (Savings) -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Total Balance (Savings)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">₦<?php echo $english_format_number = number_format($savingsTotalBalance, 2)?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Total Debit approved - (Savings) -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Approved post (Savings)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?php 
                                                            if ($no_approved_post == 1){
                                                                echo "<p class='lead'><em>No Posts records found.</em></p>";
                                                            } else {
                                                                echo $countApproved."/".$countPost;
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-8">
                                    <h4 id="amount"></h4>
                                </div>
                                <div class="form-group col-md-4">
                                    <?php
                                        if($savingsTotalBalance > 0 ) {
                                            if($pendingPost < 1) {
                                                echo '
                                                <label>Withdrawal amount</label>
                                                <input type="number" class="form-control"  name="amount" id="nameb" placeholder="New Amount" required autofocus step=".01">';
                                            }
                                        } else {
                                            echo '<p style="color:red;">Withdrawal disabled due to insufficient balance</p>';
                                        }
                                    ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-8">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Remark (500 characters only)</label>
                                        <textarea maxlength="500" class="form-control" id="exampleFormControlTextarea1" name="description" rows="5" placeholder="Type here..."  required autofocus></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Voucher Date</label>
                                    <div class='input-group date' style="cursor: default;">
                                        <input type='text' id='datepicker' class="form-control input-lg dateselect datepicker"  name="voucher_date" placeholder="yyyy-mm-dd"   required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-8">
                                </div>
                                <div class="form-group col-md-4">
                                    <?php
                                        // check if user has an unpaid loan
                                        // if($balance < $savingsTotalBalance) {
                                            // Check if Total savings balance is withdrawable
                                            if($savingsTotalBalance > 0 ) {
                                                if($pendingPost < 1) {
                                                    echo '<button type="submit" class="justify-content-center btn btn-primary"><i
                                                    class="fa fa-paper-plane fa-sm text-white-50"></i> Post Savings
                                                    </button>';
                                                } else {
                                                    echo '<p>Please approve or cancel all pending post before applying again</p>';
                                                }
                                            } else {
                                                echo '<p style="color:red;">Insufficient funds!</p>';
                                            }
                                        /*} else {
                                            echo '<p style="color:red;">Insufficient funds! You still have an unpaid loan debt.</p>';
                                        }
                                        */
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-8">
                                </div>
                                <div class="form-group col-md-4">
                                </div>
                            </div>
                            <p style="padding-left:10px; padding-right:10px;">
                                <?php
                                    echo $_SESSION["debitSavingsSuccessMsg"];
                                ?>
                            </p>

                            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

                            <!-- The actions below is triggered on the Rate input box -->
                            <script>
                                
                                // "function formatCurrency(total)" will get "interestValue" and format it to currency format
                                function formatCurrency(total) {

                                    var neg = false;

                                    var total = parseInt($("#nameb").val()) || 0;

                                    if(total < 0) {
                                        neg = true;
                                        total = Math.abs(total);
                                    }

                                    return (neg ? "-₦" : '₦') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();

                                }


                                $( "#nameb" ).keyup(function() {
                                var amount = $("#nameb").val();
                                $("#amount").text("Amount: " + formatCurrency(amount));
                                });
                            </script>
                            <script>
                                
                                // "function formatCurrency(total)" will get "interestValue" and format it to currency format
                                function formatCurrency(total) {

                                    var neg = false;

                                    var total = parseInt($("#nameb").val()) || 0;

                                    if(total < 0) {
                                        neg = true;
                                        total = Math.abs(total);
                                    }

                                    return (neg ? "-₦" : '₦') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();

                                }


                                
                                $( "#nameb" ).mouseover(function() {
                                var amount = $("#nameb").val();
                                $("#amount").text("Amount: " + formatCurrency(amount));
                                });
                            </script>
                            <script>
                                
                                // "function formatCurrency(total)" will get "interestValue" and format it to currency format
                                function formatCurrency(total) {

                                    var neg = false;

                                    var total = parseInt($("#nameb").val()) || 0;

                                    if(total < 0) {
                                        neg = true;
                                        total = Math.abs(total);
                                    }

                                    return (neg ? "-₦" : '₦') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();

                                }


                                
                                $( "#nameb" ).mouseup(function() {
                                var amount = $("#nameb").val();
                                $("#amount").text("Amount: " + formatCurrency(amount));
                                });
                            </script>

                            <!-- The actions below is triggered on the Amount Given input box -->
                            <script>
                                
                                // "function formatCurrency(total)" will get "interestValue" and format it to currency format
                                function formatCurrency(total) {

                                    var neg = false;

                                    var total = parseInt($("#nameb").val()) || 0;

                                    if(total < 0) {
                                        neg = true;
                                        total = Math.abs(total);
                                    }

                                    return (neg ? "-₦" : '₦') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();

                                }


                                
                                $( "#nameb" ).keyup(function() {
                                var amount = $("#nameb").val();
                                $("#amount").text("Amount: " + formatCurrency(amount));
                                });
                            </script>
                            <script>
                                
                                // "function formatCurrency(total)" will get "interestValue" and format it to currency format
                                function formatCurrency(total) {

                                    var neg = false;

                                    var total = parseInt($("#nameb").val()) || 0;

                                    if(total < 0) {
                                        neg = true;
                                        total = Math.abs(total);
                                    }

                                    return (neg ? "-₦" : '₦') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();

                                }


                                
                                $( "#nameb" ).mouseover(function() {
                                var amount = $("#nameb").val();
                                $("#amount").text("Amount: " + formatCurrency(amount));
                                });
                            </script>
                            <script>
                                
                                // "function formatCurrency(total)" will get "interestValue" and format it to currency format
                                function formatCurrency(total) {

                                    var neg = false;

                                    var total = parseInt($("#nameb").val()) || 0;

                                    if(total < 0) {
                                        neg = true;
                                        total = Math.abs(total);
                                    }

                                    return (neg ? "-₦" : '₦') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();

                                }


                                
                                $( "#nameb" ).mouseup(function() {
                                var amount = $("#nameb").val();
                                $("#amount").text("Amount: " + formatCurrency(amount));
                                });
                            </script>
                            <hr/>
                            <br/>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Withdrawal history</label>
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                            <?php
                                                $acc_number = $_SESSION["accNumber"];
                                                // Attempt select query execution
                                                $sql = "SELECT * FROM ckc_2021_savings_debit WHERE acc_number = $acc_number";
                                                if($result = mysqli_query($link, $sql)){
                                                    if(mysqli_num_rows($result) > 0){
                                                        echo "<thead>";
                                                            echo "<tr>";
                                                                echo "<th>Amount</th>";
                                                                echo "<th>Posted by</th>";
                                                                echo "<th>Staff email</th>";
                                                                echo "<th>Post status</th>";
                                                                echo "<th>Debit date</th>";
                                                            echo "</tr>";
                                                        echo "</thead>";
                                                        echo "<tfoot>";
                                                            echo "<tr>";
                                                                echo "<th>Amount</th>";
                                                                echo "<th>Posted by</th>";
                                                                echo "<th>Staff email</th>";
                                                                echo "<th>Post status</th>";
                                                                echo "<th>Debit date</th>";
                                                            echo "</tr>";
                                                        echo "</tfoot>";
                                                        echo "<tbody>";
                                                        
                                                        // $savingsDebitBalance = 0;
                                                        while($row = mysqli_fetch_array($result)){
                                                            echo "<tr>";
                                                                echo "<td>" . "₦".$english_format_number = number_format($row['amount'], 2). "</td>";
                                                                echo "<td>" . $row['staff_name'] . "</td>";
                                                                echo "<td>" . $row['staff_email'] . "</td>";
                                                                echo "<td>" . $row['post_status'] . "</td>";
                                                                echo "<td>" . $row['creation_date'] . "</td>";
                                                            echo "</tr>";
                                                        }
                                                        echo "</tbody>";                            
                                                        
                                                        // Free result set
                                                        mysqli_free_result($result);
                                                    } else{
                                                        echo "<p class='lead'><em>No records were found.</em></p>";
                                                    }
                                                } else{
                                                    echo "DEBIT HISTORY ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                }

                                                // Close connection
                                                mysqli_close($link);
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <p></p>
                            <div class="form-row"><div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>
                        </form>
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
    <?php include "include/footer/footer.php";?>
            
</body>

</html>