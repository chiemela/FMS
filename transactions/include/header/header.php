<?php
if ($_SESSION['role'] == "Board member") {

    // do nothing

} else {
    
    $unread_messages_count = 5;
    $pending = "Pending";
    $locked = "Locked";
    $sidebar_mamgement_section_savings_credit = 0;
    $sidebar_mamgement_section_savings_debit = 0;
    $sidebar_mamgement_section_contribution_credit = 0;
    $sidebar_mamgement_section_dues = 0;
    $sidebar_mamgement_section_mcard = 0;
    $sidebar_mamgement_section_loan_booking = 0;
    $sidebar_mamgement_section_loan_repayment = 0;
    $sidebar_mamgement_section_akawo_credit = 0;
    $sidebar_mamgement_section_akawo_debit = 0;
    $sidebar_mamgement_section_thrift_create_group = 0;
    $sidebar_mamgement_section_thrift_locked_group = 0;
    $sidebar_mamgement_section_thirft_redeem_pending = 0;
    $sidebar_chairman_section_contribution_debit = 0;
    $sidebar_chairman_section_contribution_market_balance = 0;
    $sidebar_mamgement_section_balance_sheet_node = 0;


    // Get TABLE 'ckc_2021_savings_credit' data that are pending
    $sql = "SELECT post_status FROM ckc_2021_savings_credit WHERE post_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_savings_credit += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    } else{
        echo "pending POST ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Get TABLE 'ckc_2021_savings_debit' data that are pending
    $sql = "SELECT post_status FROM ckc_2021_savings_debit WHERE post_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_savings_debit += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    } else{
        echo "pending POST ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Get TABLE 'ckc_2021_contribution_credit' data that are pending
    $sql = "SELECT post_status FROM ckc_2021_contribution_deposit_pending WHERE post_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_contribution_credit += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    } else{
        echo "pending POST ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Get TABLE 'ckc_2021_dues_credit' data that are pending
    $sql = "SELECT post_status FROM ckc_2021_dues_credit WHERE post_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_dues += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    } else{
        echo "pending POST ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Get TABLE 'ckc_2021_mcard_credit' data that are pending
    $sql = "SELECT post_status FROM ckc_2021_mcard_credit WHERE post_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_mcard += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    } else{
        echo "pending POST ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Get TABLE 'ckc_2021_loan_get' data that are pending
    $sql = "SELECT post_status FROM ckc_2021_loan_get WHERE post_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_loan_booking += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    } else{
        echo "pending POST ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Get TABLE 'ckc_2021_loan_return_pending' data that are pending
    $sql = "SELECT post_status FROM ckc_2021_loan_return_pending WHERE post_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_loan_repayment += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    } else{
        echo "pending POST ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Get TABLE 'ckc_2021_akawo_redeem_pending' data that are pending
    $sql = "SELECT post_status FROM ckc_2021_akawo_redeem_pending WHERE post_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_akawo_redeem_pending += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    } else{
        echo "pending POST ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Get TABLE 'ckc_2021_akawo_debit_pending' data that are pending
    $sql = "SELECT post_status FROM ckc_2021_akawo_debit_pending WHERE post_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_akawo_debit_pending += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    } else{
        echo "pending POST ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Get TABLE 'ckc_2021_thrift_credit' data that are pending
    $sql = "SELECT post_status FROM ckc_2021_thrift_create_group WHERE post_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_thrift_create_group += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    } else{
        echo "pending POST ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Get TABLE 'ckc_2021_thrift_credit' data that are locked
    $sql = "SELECT locked_status FROM ckc_2021_thrift_create_group WHERE locked_status = '$locked'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_thrift_locked_group += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    } else{
        echo "pending POST ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Get TABLE 'ckc_2021_thrift_credit' data that are pending
    $sql = "SELECT post_status FROM ckc_2021_thirft_redeem_pending WHERE post_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_thirft_redeem_pending += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    } else{
        echo "pending POST ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Get TABLE 'ckc_2021_contribution_debit' data that are pending
    $sql = "SELECT post_status FROM ckc_2021_contribution_debit WHERE post_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_chairman_section_contribution_debit += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    } else{
        echo "pending POST ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Get TABLE 'ckc_2021_contribution_market_balance' data that are pending
    $sql = "SELECT post_status FROM ckc_2021_contribution_market_balance WHERE post_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_chairman_section_contribution_market_balance += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    }

    // Get TABLE 'ckc_2021_balance_sheet_assets' data that are pending
    $sql = "SELECT id FROM ckc_2021_balance_sheet_assets_pending WHERE debit_balance_status = '$pending' OR credit_balance_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_balance_sheet_node += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    }

    // Get TABLE 'ckc_2021_balance_sheet_liability_pending' data that are pending
    $sql = "SELECT id FROM ckc_2021_balance_sheet_liability_pending WHERE debit_balance_status = '$pending' OR credit_balance_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_balance_sheet_node += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    }

    // Get TABLE 'ckc_2021_balance_sheet_income_pending' data that are pending
    $sql = "SELECT id FROM ckc_2021_balance_sheet_income_pending WHERE debit_balance_status = '$pending' OR credit_balance_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_balance_sheet_node += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    }

    // Get TABLE 'ckc_2021_balance_sheet_expense_pending' data that are pending
    $sql = "SELECT id FROM ckc_2021_balance_sheet_expense_pending WHERE debit_balance_status = '$pending' OR credit_balance_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_balance_sheet_node += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    }

    // Get TABLE 'ckc_2021_balance_sheet_contigent_assets_pending' data that are pending
    $sql = "SELECT id FROM ckc_2021_balance_sheet_contigent_assets_pending WHERE debit_balance_status = '$pending' OR credit_balance_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_balance_sheet_node += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    }

    // Get TABLE 'ckc_2021_balance_sheet_contigent_liability_pending' data that are pending
    $sql = "SELECT id FROM ckc_2021_balance_sheet_contigent_liability_pending WHERE debit_balance_status = '$pending' OR credit_balance_status = '$pending'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sidebar_mamgement_section_balance_sheet_node += 1;
            }  
            // Free result set
            mysqli_free_result($result);
        } else{
            // No pending post found
        }
    }
    
    // Get TABLE 'ckc_2021_balance_sheet_contigent_assets_pending' data
    $sql = "SELECT id FROM ckc_2021_balance_sheet_contigent_assets_pending WHERE debit_balance_status = '$pending' OR credit_balance_status = '$pending'";

    if ($result = mysqli_query($link, $sql)) {

        if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_array($result)) {

                $contigent_assets_pending_count += 1;

            }

            // Free result set
            mysqli_free_result($result);

        }

    } else {

        echo "ckc_2021_balance_sheet_contigent_assets_pending ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

    // Get TABLE 'ckc_2021_balance_sheet_contigent_liability_pending' data
    $sql = "SELECT id FROM ckc_2021_balance_sheet_contigent_liability_pending WHERE debit_balance_status = '$pending' OR credit_balance_status = '$pending'";

    if ($result = mysqli_query($link, $sql)) {

        if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_array($result)) {

                $contigent_liability_pending_count += 1;

            }

            // Free result set
            mysqli_free_result($result);

        }

    } else {

        echo "ckc_2021_balance_sheet_contigent_liability_pending ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

    // Get TABLE 'ckc_2021_balance_sheet_expense_pending' data
    $sql = "SELECT id FROM ckc_2021_balance_sheet_expense_pending WHERE debit_balance_status = '$pending' OR credit_balance_status = '$pending'";

    if ($result = mysqli_query($link, $sql)) {

        if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_array($result)) {

                $expense_pending_count += 1;

            }

            // Free result set
            mysqli_free_result($result);

        }

    } else {

        echo "ckc_2021_balance_sheet_expense_pending ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

    // Get TABLE 'ckc_2021_balance_sheet_income_pending' data
    $sql = "SELECT id FROM ckc_2021_balance_sheet_income_pending WHERE debit_balance_status = '$pending' OR credit_balance_status = '$pending'";

    if ($result = mysqli_query($link, $sql)) {

        if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_array($result)) {

                $income_pending_count += 1;

            }

            // Free result set
            mysqli_free_result($result);

        }

    } else {

        echo "ckc_2021_balance_sheet_income_pending ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

    // Get TABLE 'ckc_2021_balance_sheet_liability_pending' data
    $sql = "SELECT id FROM ckc_2021_balance_sheet_liability_pending WHERE debit_balance_status = '$pending' OR credit_balance_status = '$pending'";

    if ($result = mysqli_query($link, $sql)) {

        if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_array($result)) {

                $liability_pending_count += 1;

            }

            // Free result set
            mysqli_free_result($result);

        }

    } else {

        echo "ckc_2021_balance_sheet_liability_pending ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

    // Get TABLE 'ckc_2021_balance_sheet_assets_pending' data
    $sql = "SELECT id FROM ckc_2021_balance_sheet_assets_pending WHERE debit_balance_status = '$pending' OR credit_balance_status = '$pending'";

    if ($result = mysqli_query($link, $sql)) {

        if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_array($result)) {

                $assets_pending_count += 1;

            }

            // Free result set
            mysqli_free_result($result);

        }

    } else {

        echo "ckc_2021_balance_sheet_liability_pending ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

    //  "Add New Record" alerts
    $sidebar_staff_section_staff = $sidebar_mamgement_section_savings_credit + $sidebar_mamgement_section_savings_debit + $sidebar_mamgement_section_contribution_credit + $sidebar_mamgement_section_dues + $sidebar_mamgement_section_mcard + $sidebar_mamgement_section_loan_booking + $sidebar_mamgement_section_loan_repayment + $sidebar_mamgement_section_akawo_create + $sidebar_mamgement_section_akawo_redeem_pending + $sidebar_mamgement_section_akawo_debit_pending + $sidebar_mamgement_section_thrift_create_group + $sidebar_mamgement_section_thrift_locked_group + $sidebar_mamgement_section_thirft_redeem_pending + $sidebar_chairman_section_contribution_debit + $sidebar_chairman_section_contribution_market_balance;

    if ($sidebar_staff_section_staff > 99) {

        $sidebar_staff_section_staff = "99+";

    } elseif ($sidebar_staff_section_staff > 60) {

        $sidebar_staff_section_staff = "60+";

    } elseif ($sidebar_staff_section_staff > 40) {

        $sidebar_staff_section_staff = "40+";

    } elseif ($sidebar_staff_section_staff > 20) {

        $sidebar_staff_section_staff = "20+";

    } elseif ($sidebar_staff_section_staff > 10) {

        $sidebar_staff_section_staff = "10+";

    }

    
    // "Office Account" alerts
    if ($sidebar_mamgement_section_balance_sheet_node > 99) {

        $sidebar_mamgement_section_balance_sheet_node = "99+";

    } elseif ($sidebar_mamgement_section_balance_sheet_node > 60) {

        $sidebar_mamgement_section_balance_sheet_node = "60+";

    } elseif ($sidebar_mamgement_section_balance_sheet_node > 40) {

        $sidebar_mamgement_section_balance_sheet_node = "40+";

    } elseif ($sidebar_mamgement_section_balance_sheet_node > 20) {

        $sidebar_mamgement_section_balance_sheet_node = "20+";

    } elseif ($sidebar_mamgement_section_balance_sheet_node > 10) {

        $sidebar_mamgement_section_balance_sheet_node = "10+";

    }


    //  "Management" alerts
    $sidebar_mamgement_section_management = $sidebar_mamgement_section_savings_credit + $sidebar_mamgement_section_savings_debit + $sidebar_mamgement_section_contribution_credit + $sidebar_mamgement_section_dues + $sidebar_mamgement_section_mcard + $sidebar_mamgement_section_loan_booking + $sidebar_mamgement_section_loan_repayment + $sidebar_mamgement_section_akawo_create + $sidebar_mamgement_section_akawo_redeem_pending + $sidebar_mamgement_section_akawo_debit_pending + $sidebar_mamgement_section_thrift_create_group + $sidebar_mamgement_section_thrift_locked_group + $sidebar_mamgement_section_thirft_redeem_pending + $sidebar_chairman_section_contribution_debit + $sidebar_chairman_section_contribution_market_balance + $sidebar_mamgement_section_balance_sheet_node;

    if ($sidebar_mamgement_section_management > 99) {

        $sidebar_mamgement_section_management = "99+";

    } elseif ($sidebar_mamgement_section_management > 60) {

        $sidebar_mamgement_section_management = "60+";

    } elseif ($sidebar_mamgement_section_management > 40) {

        $sidebar_mamgement_section_management = "40+";

    } elseif ($sidebar_mamgement_section_management > 20) {

        $sidebar_mamgement_section_management = "20+";

    } elseif ($sidebar_mamgement_section_management > 10) {

        $sidebar_mamgement_section_management = "10+";

    }

    $sidebar_chairman_section_administration = 0;

    if ($sidebar_chairman_section_administration > 99) {

        $sidebar_chairman_section_administration = "99+";

    } elseif ($sidebar_chairman_section_administration > 60) {

        $sidebar_chairman_section_administration = "60+";

    } elseif ($sidebar_chairman_section_administration > 40) {

        $sidebar_chairman_section_administration = "40+";

    } elseif ($sidebar_chairman_section_administration > 20) {

        $sidebar_chairman_section_administration = "20+";

    } elseif ($sidebar_chairman_section_administration > 10) {

        $sidebar_chairman_section_administration = "10+";

    }

    

}



?>
<link rel="icon" type="image/png" href="img/logo.png"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" 
/>

<!-- Custom styles for this template-->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<link href="css/sb-admin-2.css" rel="stylesheet">
<link href="css/datepicker.css" rel="stylesheet">
