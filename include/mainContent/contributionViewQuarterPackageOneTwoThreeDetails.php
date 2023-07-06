<?php

    function january() {

        global $quarter_unavailable, $year_quarter, $first_quarter, $weekly_date_day, $count, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        
        $year_quarter += 1; // increment variable to know if current month is in the $first_quarter of the year

        if ($year_quarter <= $first_quarter) {

            $date_month_quarterly = '01'; // assign the value of day-of-the-month for january
            $zero_date_quarterly = 0; // assign the value of month-of-the-year for january
            date_default_timezone_set('Europe/London'); // Get the current datetime for London
            $date = date('Y-m-d'); // Get the current date
            $date = explode('-', $date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $date[0] = date('Y'); // YY
            $date[1] = $date_month_quarterly;   // MM
            $count = $date[1];
            $date[2] = $weekly_date_day;   // DD
            // then implode the array again for datetime format.
            $new_subscription_due_date = implode('-', $date);
            $dt = strtotime($new_subscription_due_date);
            $new_subscription_due_date = date("Y-m-d", strtotime("+".$zero_date_quarterly." month", $dt));
    
            // Get all possible Subscription dates
            while($count <= 5){
                echo '
                    <div class="col-xl-3 col-md-6 mb-3">';
                        // Get 'contribution_deposit' date payment history
                        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE subscription_id = '$subscription_id' AND subscription_due_date = '$new_subscription_due_date' AND post_status = '$approved'";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    $current_month = "Paid";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                $current_month = "Not Paid";
                            }
                        } else{
                            echo "PAID STATUS ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }  
                        // Change 'border-left' color to green or red
                        if($current_month == "Paid"){
                            echo '<div class="card border-left-success shadow h-100 py-2">';
                        } else{
                            echo '<div class="card border-left-danger shadow h-100 py-2">';
                        }
                        echo '
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$new_subscription_due_date
                                        .'</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">₦'.$english_format_number = number_format($amount_due, 2).'</div>';
                                        
                                        // Display Redeem history status
                                        if($current_month == "Paid"){
                                            echo '<br/><div><h6 class="m-0 text-success"><i
                                            class="fa fa-check-circle fa-sm text-success-50"></i>&nbsp;PAID</h6></div>';
                                        } else{
                                            echo '<br/><div><h6 class="m-0 text-danger"><i
                                            class="fa fa-times-circle fa-sm text-danger-50"></i>&nbsp;NOT PAID</h6></div>';
                                        }
                                        echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
    
                $new_subscription_due_date = date('Y-m-d', strtotime("+".$due_date." days", strtotime($new_subscription_due_date)));
                $count += 1;
    
            }
    
            $due_date = 7;
            $count = 1;

        }

    }


    function february() {

        global $quarter_unavailable, $year_quarter, $first_quarter, $weekly_date_day, $count, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        
        $year_quarter += 1; // increment variable to know if current month is in the $first_quarter of the year

        if ($year_quarter <= $first_quarter) {

            $date_month_quarterly = '02'; // assign the value of day-of-the-month for february
            $zero_date_quarterly = 0; // assign the value of month-of-the-year for february
            date_default_timezone_set('Europe/London'); // Get the current datetime for London
            $date = date('Y-m-d'); // Get the current date
            $date = explode('-', $date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $date[0] = date('Y'); // YY
            $date[1] = $date_month_quarterly;   // MM
            $date[2] = $weekly_date_day;   // DD
            // then implode the array again for datetime format.
            $new_subscription_due_date = implode('-', $date);
            $dt = strtotime($new_subscription_due_date);
            $new_subscription_due_date = date("Y-m-d", strtotime("+".$zero_date_quarterly." month", $dt));
    
            // Get all possible Subscription dates
            while($count <= 4){
                echo '
                    <div class="col-xl-3 col-md-6 mb-3">';
                        // Get 'contribution_deposit' date payment history
                        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE subscription_id = '$subscription_id' AND subscription_due_date = '$new_subscription_due_date' AND post_status = '$approved'";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    $current_month = "Paid";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                $current_month = "Not Paid";
                            }
                        } else{
                            echo "PAID STATUS ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }  
                        // Change 'border-left' color to green or red
                        if($current_month == "Paid"){
                            echo '<div class="card border-left-success shadow h-100 py-2">';
                        } else{
                            echo '<div class="card border-left-danger shadow h-100 py-2">';
                        }
                        echo '
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$new_subscription_due_date
                                        .'</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">₦'.$english_format_number = number_format($amount_due, 2).'</div>';
                                        
                                        // Display Redeem history status
                                        if($current_month == "Paid"){
                                            echo '<br/><div><h6 class="m-0 text-success"><i
                                            class="fa fa-check-circle fa-sm text-success-50"></i>&nbsp;PAID</h6></div>';
                                        } else{
                                            echo '<br/><div><h6 class="m-0 text-danger"><i
                                            class="fa fa-times-circle fa-sm text-danger-50"></i>&nbsp;NOT PAID</h6></div>';
                                        }
                                        echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
    
                $new_subscription_due_date = date('Y-m-d', strtotime("+".$due_date." days", strtotime($new_subscription_due_date)));
                $count += 1;
    
            }
    
            $due_date = 7;
            $count = 1;

        } else {
            echo '
                <div class="h5 mb-0 font-weight-bold text-gray-800">'.$quarter_unavailable.'</div>
            ';
        }

    }


    function march() {

        global $quarter_unavailable, $year_quarter, $first_quarter, $weekly_date_day, $count, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        
        $year_quarter += 1; // increment variable to know if current month is in the $first_quarter of the year

        if ($year_quarter <= $first_quarter) {

            $date_month_quarterly = '03'; // assign the value of day-of-the-month for march
            $zero_date_quarterly = 0; // assign the value of month-of-the-year for march
            date_default_timezone_set('Europe/London'); // Get the current datetime for London
            $date = date('Y-m-d'); // Get the current date
            $date = explode('-', $date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $date[0] = date('Y'); // YY
            $date[1] = $date_month_quarterly;   // MM
            $date[2] = $weekly_date_day;   // DD
            // then implode the array again for datetime format.
            $new_subscription_due_date = implode('-', $date);
            $dt = strtotime($new_subscription_due_date);
            $new_subscription_due_date = date("Y-m-d", strtotime("+".$zero_date_quarterly." month", $dt));
    
            // Get all possible Subscription dates
            while($count <= 5){
                echo '
                    <div class="col-xl-3 col-md-6 mb-3">';
                        // Get 'contribution_deposit' date payment history
                        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE subscription_id = '$subscription_id' AND subscription_due_date = '$new_subscription_due_date' AND post_status = '$approved'";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    $current_month = "Paid";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                $current_month = "Not Paid";
                            }
                        } else{
                            echo "PAID STATUS ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }  
                        // Change 'border-left' color to green or red
                        if($current_month == "Paid"){
                            echo '<div class="card border-left-success shadow h-100 py-2">';
                        } else{
                            echo '<div class="card border-left-danger shadow h-100 py-2">';
                        }
                        echo '
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$new_subscription_due_date
                                        .'</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">₦'.$english_format_number = number_format($amount_due, 2).'</div>';
                                        
                                        // Display Redeem history status
                                        if($current_month == "Paid"){
                                            echo '<br/><div><h6 class="m-0 text-success"><i
                                            class="fa fa-check-circle fa-sm text-success-50"></i>&nbsp;PAID</h6></div>';
                                        } else{
                                            echo '<br/><div><h6 class="m-0 text-danger"><i
                                            class="fa fa-times-circle fa-sm text-danger-50"></i>&nbsp;NOT PAID</h6></div>';
                                        }
                                        echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
    
                $new_subscription_due_date = date('Y-m-d', strtotime("+".$due_date." days", strtotime($new_subscription_due_date)));
                $count += 1;
    
            }
    
            $due_date = 7;
            $count = 1;

        } else {
            echo '
                <div class="h5 mb-0 font-weight-bold text-gray-800">'.$quarter_unavailable.'</div>
            ';
        }

    }


    function april() {

        global $quarter_unavailable, $year_quarter, $first_quarter, $weekly_date_day, $count, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        
        $year_quarter += 1; // increment variable to know if current month is in the $first_quarter of the year

        if ($year_quarter <= $first_quarter) {

            $date_month_quarterly = '04'; // assign the value of day-of-the-month for april
            $zero_date_quarterly = 0; // assign the value of month-of-the-year for april
            date_default_timezone_set('Europe/London'); // Get the current datetime for London
            $date = date('Y-m-d'); // Get the current date
            $date = explode('-', $date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $date[0] = date('Y'); // YY
            $date[1] = $date_month_quarterly;   // MM
            $date[2] = $weekly_date_day;   // DD
            // then implode the array again for datetime format.
            $new_subscription_due_date = implode('-', $date);
            $dt = strtotime($new_subscription_due_date);
            $new_subscription_due_date = date("Y-m-d", strtotime("+".$zero_date_quarterly." month", $dt));
    
            // Get all possible Subscription dates
            while($count < 4){
                echo '
                    <div class="col-xl-3 col-md-6 mb-3">';
                        // Get 'contribution_deposit' date payment history
                        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE subscription_id = '$subscription_id' AND subscription_due_date = '$new_subscription_due_date' AND post_status = '$approved'";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    $current_month = "Paid";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                $current_month = "Not Paid";
                            }
                        } else{
                            echo "PAID STATUS ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }  
                        // Change 'border-left' color to green or red
                        if($current_month == "Paid"){
                            echo '<div class="card border-left-success shadow h-100 py-2">';
                        } else{
                            echo '<div class="card border-left-danger shadow h-100 py-2">';
                        }
                        echo '
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$new_subscription_due_date
                                        .'</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">₦'.$english_format_number = number_format($amount_due, 2).'</div>';
                                        
                                        // Display Redeem history status
                                        if($current_month == "Paid"){
                                            echo '<br/><div><h6 class="m-0 text-success"><i
                                            class="fa fa-check-circle fa-sm text-success-50"></i>&nbsp;PAID</h6></div>';
                                        } else{
                                            echo '<br/><div><h6 class="m-0 text-danger"><i
                                            class="fa fa-times-circle fa-sm text-danger-50"></i>&nbsp;NOT PAID</h6></div>';
                                        }
                                        echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
    
                $new_subscription_due_date = date('Y-m-d', strtotime("+".$due_date." days", strtotime($new_subscription_due_date)));
                $count += 1;
    
            }
    
            $due_date = 7;
            $count = 1;

        } else {
            echo '
                <div class="h5 mb-0 font-weight-bold text-gray-800">'.$quarter_unavailable.'</div>
            ';
        }

    }



    function may() {

        global $quarter_unavailable, $year_quarter, $second_quarter, $weekly_date_day, $count, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        
        $year_quarter += 1; // increment variable to know if current month is in the $second_quarter of the year

        if ($year_quarter <= $second_quarter) {

            $date_month_quarterly = '05'; // assign the value of day-of-the-month for may
            $zero_date_quarterly = 0; // assign the value of month-of-the-year for may
            date_default_timezone_set('Europe/London'); // Get the current datetime for London
            $date = date('Y-m-d'); // Get the current date
            $date = explode('-', $date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $date[0] = date('Y'); // YY
            $date[1] = $date_month_quarterly;   // MM
            $date[2] = $weekly_date_day;   // DD
            // then implode the array again for datetime format.
            $new_subscription_due_date = implode('-', $date);
            $dt = strtotime($new_subscription_due_date);
            $new_subscription_due_date = date("Y-m-d", strtotime("+".$zero_date_quarterly." month", $dt));
    
            // Get all possible Subscription dates
            while($count <= 5){
                echo '
                    <div class="col-xl-3 col-md-6 mb-3">';
                        // Get 'contribution_deposit' date payment history
                        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE subscription_id = '$subscription_id' AND subscription_due_date = '$new_subscription_due_date' AND post_status = '$approved'";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    $current_month = "Paid";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                $current_month = "Not Paid";
                            }
                        } else{
                            echo "PAID STATUS ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }  
                        // Change 'border-left' color to green or red
                        if($current_month == "Paid"){
                            echo '<div class="card border-left-success shadow h-100 py-2">';
                        } else{
                            echo '<div class="card border-left-danger shadow h-100 py-2">';
                        }
                        echo '
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$new_subscription_due_date
                                        .'</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">₦'.$english_format_number = number_format($amount_due, 2).'</div>';
                                        
                                        // Display Redeem history status
                                        if($current_month == "Paid"){
                                            echo '<br/><div><h6 class="m-0 text-success"><i
                                            class="fa fa-check-circle fa-sm text-success-50"></i>&nbsp;PAID</h6></div>';
                                        } else{
                                            echo '<br/><div><h6 class="m-0 text-danger"><i
                                            class="fa fa-times-circle fa-sm text-danger-50"></i>&nbsp;NOT PAID</h6></div>';
                                        }
                                        echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
    
                $new_subscription_due_date = date('Y-m-d', strtotime("+".$due_date." days", strtotime($new_subscription_due_date)));
                $count += 1;
    
            }
    
            $due_date = 7;
            $count = 1;

        } else {
            echo '
                <div class="h5 mb-0 font-weight-bold text-gray-800">'.$quarter_unavailable.'</div>
            ';
        }

    }


    function june() {

        global $quarter_unavailable, $year_quarter, $second_quarter, $weekly_date_day, $count, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        
        $year_quarter += 1; // increment variable to know if current month is in the $second_quarter of the year

        if ($year_quarter <= $second_quarter) {

            $date_month_quarterly = '06'; // assign the value of day-of-the-month for june
            $zero_date_quarterly = 0; // assign the value of month-of-the-year for june
            date_default_timezone_set('Europe/London'); // Get the current datetime for London
            $date = date('Y-m-d'); // Get the current date
            $date = explode('-', $date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $date[0] = date('Y'); // YY
            $date[1] = $date_month_quarterly;   // MM
            $date[2] = $weekly_date_day;   // DD
            // then implode the array again for datetime format.
            $new_subscription_due_date = implode('-', $date);
            $dt = strtotime($new_subscription_due_date);
            $new_subscription_due_date = date("Y-m-d", strtotime("+".$zero_date_quarterly." month", $dt));
    
            // Get all possible Subscription dates
            while($count <= 5){
                echo '
                    <div class="col-xl-3 col-md-6 mb-3">';
                        // Get 'contribution_deposit' date payment history
                        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE subscription_id = '$subscription_id' AND subscription_due_date = '$new_subscription_due_date' AND post_status = '$approved'";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    $current_month = "Paid";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                $current_month = "Not Paid";
                            }
                        } else{
                            echo "PAID STATUS ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }  
                        // Change 'border-left' color to green or red
                        if($current_month == "Paid"){
                            echo '<div class="card border-left-success shadow h-100 py-2">';
                        } else{
                            echo '<div class="card border-left-danger shadow h-100 py-2">';
                        }
                        echo '
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$new_subscription_due_date
                                        .'</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">₦'.$english_format_number = number_format($amount_due, 2).'</div>';
                                        
                                        // Display Redeem history status
                                        if($current_month == "Paid"){
                                            echo '<br/><div><h6 class="m-0 text-success"><i
                                            class="fa fa-check-circle fa-sm text-success-50"></i>&nbsp;PAID</h6></div>';
                                        } else{
                                            echo '<br/><div><h6 class="m-0 text-danger"><i
                                            class="fa fa-times-circle fa-sm text-danger-50"></i>&nbsp;NOT PAID</h6></div>';
                                        }
                                        echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
    
                $new_subscription_due_date = date('Y-m-d', strtotime("+".$due_date." days", strtotime($new_subscription_due_date)));
                $count += 1;
    
            }
    
            $due_date = 7;
            $count = 1;

        } else {
            echo '
                <div class="h5 mb-0 font-weight-bold text-gray-800">'.$quarter_unavailable.'</div>
            ';
        }

    }


    function july() {

        global $quarter_unavailable, $year_quarter, $second_quarter, $weekly_date_day, $count, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        
        $year_quarter += 1; // increment variable to know if current month is in the $second_quarter of the year

        if ($year_quarter <= $second_quarter) {

            $date_month_quarterly = '07'; // assign the value of day-of-the-month for july
            $zero_date_quarterly = 0; // assign the value of month-of-the-year for july
            date_default_timezone_set('Europe/London'); // Get the current datetime for London
            $date = date('Y-m-d'); // Get the current date
            $date = explode('-', $date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $date[0] = date('Y'); // YY
            $date[1] = $date_month_quarterly;   // MM
            $date[2] = $weekly_date_day;   // DD
            // then implode the array again for datetime format.
            $new_subscription_due_date = implode('-', $date);
            $dt = strtotime($new_subscription_due_date);
            $new_subscription_due_date = date("Y-m-d", strtotime("+".$zero_date_quarterly." month", $dt));
    
            // Get all possible Subscription dates
            while($count <= 5){
                echo '
                    <div class="col-xl-3 col-md-6 mb-3">';
                        // Get 'contribution_deposit' date payment history
                        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE subscription_id = '$subscription_id' AND subscription_due_date = '$new_subscription_due_date' AND post_status = '$approved'";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    $current_month = "Paid";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                $current_month = "Not Paid";
                            }
                        } else{
                            echo "PAID STATUS ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }  
                        // Change 'border-left' color to green or red
                        if($current_month == "Paid"){
                            echo '<div class="card border-left-success shadow h-100 py-2">';
                        } else{
                            echo '<div class="card border-left-danger shadow h-100 py-2">';
                        }
                        echo '
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$new_subscription_due_date
                                        .'</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">₦'.$english_format_number = number_format($amount_due, 2).'</div>';
                                        
                                        // Display Redeem history status
                                        if($current_month == "Paid"){
                                            echo '<br/><div><h6 class="m-0 text-success"><i
                                            class="fa fa-check-circle fa-sm text-success-50"></i>&nbsp;PAID</h6></div>';
                                        } else{
                                            echo '<br/><div><h6 class="m-0 text-danger"><i
                                            class="fa fa-times-circle fa-sm text-danger-50"></i>&nbsp;NOT PAID</h6></div>';
                                        }
                                        echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
    
                $new_subscription_due_date = date('Y-m-d', strtotime("+".$due_date." days", strtotime($new_subscription_due_date)));
                $count += 1;
    
            }
    
            $due_date = 7;
            $count = 1;

        } else {
            echo '
                <div class="h5 mb-0 font-weight-bold text-gray-800">'.$quarter_unavailable.'</div>
            ';
        }

    }


    function august() {

        global $quarter_unavailable, $year_quarter, $second_quarter, $weekly_date_day, $count, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        
        $year_quarter += 1; // increment variable to know if current month is in the $second_quarter of the year

        if ($year_quarter <= $second_quarter) {

            $date_month_quarterly = '08'; // assign the value of day-of-the-month for august
            $zero_date_quarterly = 0; // assign the value of month-of-the-year for august
            date_default_timezone_set('Europe/London'); // Get the current datetime for London
            $date = date('Y-m-d'); // Get the current date
            $date = explode('-', $date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $date[0] = date('Y'); // YY
            $date[1] = $date_month_quarterly;   // MM
            $date[2] = $weekly_date_day;   // DD
            // then implode the array again for datetime format.
            $new_subscription_due_date = implode('-', $date);
            $dt = strtotime($new_subscription_due_date);
            $new_subscription_due_date = date("Y-m-d", strtotime("+".$zero_date_quarterly." month", $dt));
    
            // Get all possible Subscription dates
            while($count < 3){
                echo '
                    <div class="col-xl-3 col-md-6 mb-3">';
                        // Get 'contribution_deposit' date payment history
                        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE subscription_id = '$subscription_id' AND subscription_due_date = '$new_subscription_due_date' AND post_status = '$approved'";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    $current_month = "Paid";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                $current_month = "Not Paid";
                            }
                        } else{
                            echo "PAID STATUS ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }  
                        // Change 'border-left' color to green or red
                        if($current_month == "Paid"){
                            echo '<div class="card border-left-success shadow h-100 py-2">';
                        } else{
                            echo '<div class="card border-left-danger shadow h-100 py-2">';
                        }
                        echo '
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$new_subscription_due_date
                                        .'</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">₦'.$english_format_number = number_format($amount_due, 2).'</div>';
                                        
                                        // Display Redeem history status
                                        if($current_month == "Paid"){
                                            echo '<br/><div><h6 class="m-0 text-success"><i
                                            class="fa fa-check-circle fa-sm text-success-50"></i>&nbsp;PAID</h6></div>';
                                        } else{
                                            echo '<br/><div><h6 class="m-0 text-danger"><i
                                            class="fa fa-times-circle fa-sm text-danger-50"></i>&nbsp;NOT PAID</h6></div>';
                                        }
                                        echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
    
                $new_subscription_due_date = date('Y-m-d', strtotime("+".$due_date." days", strtotime($new_subscription_due_date)));
                $count += 1;
    
            }
    
            $due_date = 7;
            $count = 1;

        } else {
            echo '
                <div class="h5 mb-0 font-weight-bold text-gray-800">'.$quarter_unavailable.'</div>
            ';
        }

    }



    function september() {

        global $quarter_unavailable, $year_quarter, $third_quarter, $weekly_date_day, $count, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        
        $year_quarter += 1; // increment variable to know if current month is in the $third_quarter of the year

        if ($year_quarter <= $third_quarter) {

            $date_month_quarterly = '09'; // assign the value of day-of-the-month for september
            $zero_date_quarterly = 0; // assign the value of month-of-the-year for september
            date_default_timezone_set('Europe/London'); // Get the current datetime for London
            $date = date('Y-m-d'); // Get the current date
            $date = explode('-', $date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $date[0] = date('Y'); // YY
            $date[1] = $date_month_quarterly;   // MM
            $date[2] = $weekly_date_day;   // DD
            // then implode the array again for datetime format.
            $new_subscription_due_date = implode('-', $date);
            $dt = strtotime($new_subscription_due_date);
            $new_subscription_due_date = date("Y-m-d", strtotime("+".$zero_date_quarterly." month", $dt));
    
            // Get all possible Subscription dates
            while($count <= 5){
                echo '
                    <div class="col-xl-3 col-md-6 mb-3">';
                        // Get 'contribution_deposit' date payment history
                        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE subscription_id = '$subscription_id' AND subscription_due_date = '$new_subscription_due_date' AND post_status = '$approved'";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    $current_month = "Paid";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                $current_month = "Not Paid";
                            }
                        } else{
                            echo "PAID STATUS ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }  
                        // Change 'border-left' color to green or red
                        if($current_month == "Paid"){
                            echo '<div class="card border-left-success shadow h-100 py-2">';
                        } else{
                            echo '<div class="card border-left-danger shadow h-100 py-2">';
                        }
                        echo '
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$new_subscription_due_date
                                        .'</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">₦'.$english_format_number = number_format($amount_due, 2).'</div>';
                                        
                                        // Display Redeem history status
                                        if($current_month == "Paid"){
                                            echo '<br/><div><h6 class="m-0 text-success"><i
                                            class="fa fa-check-circle fa-sm text-success-50"></i>&nbsp;PAID</h6></div>';
                                        } else{
                                            echo '<br/><div><h6 class="m-0 text-danger"><i
                                            class="fa fa-times-circle fa-sm text-danger-50"></i>&nbsp;NOT PAID</h6></div>';
                                        }
                                        echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
    
                $new_subscription_due_date = date('Y-m-d', strtotime("+".$due_date." days", strtotime($new_subscription_due_date)));
                $count += 1;
    
            }
    
            $due_date = 7;
            $count = 1;

        } else {
            echo '
                <div class="h5 mb-0 font-weight-bold text-gray-800">'.$quarter_unavailable.'</div>
            ';
        }

    }


    function october() {

        global $quarter_unavailable, $year_quarter, $third_quarter, $weekly_date_day, $count, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        
        $year_quarter += 1; // increment variable to know if current month is in the $third_quarter of the year

        if ($year_quarter <= $third_quarter) {

            $date_month_quarterly = '10'; // assign the value of day-of-the-month for october
            $zero_date_quarterly = 0; // assign the value of month-of-the-year for october
            date_default_timezone_set('Europe/London'); // Get the current datetime for London
            $date = date('Y-m-d'); // Get the current date
            $date = explode('-', $date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $date[0] = date('Y'); // YY
            $date[1] = $date_month_quarterly;   // MM
            $date[2] = $weekly_date_day;   // DD
            // then implode the array again for datetime format.
            $new_subscription_due_date = implode('-', $date);
            $dt = strtotime($new_subscription_due_date);
            $new_subscription_due_date = date("Y-m-d", strtotime("+".$zero_date_quarterly." month", $dt));
    
            // Get all possible Subscription dates
            while($count <= 5) {
                echo '
                    <div class="col-xl-3 col-md-6 mb-3">';
                        // Get 'contribution_deposit' date payment history
                        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE subscription_id = '$subscription_id' AND subscription_due_date = '$new_subscription_due_date' AND post_status = '$approved'";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    $current_month = "Paid";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                $current_month = "Not Paid";
                            }
                        } else{
                            echo "PAID STATUS ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }  
                        // Change 'border-left' color to green or red
                        if($current_month == "Paid"){
                            echo '<div class="card border-left-success shadow h-100 py-2">';
                        } else{
                            echo '<div class="card border-left-danger shadow h-100 py-2">';
                        }
                        echo '
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$new_subscription_due_date
                                        .'</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">₦'.$english_format_number = number_format($amount_due, 2).'</div>';
                                        
                                        // Display Redeem history status
                                        if($current_month == "Paid"){
                                            echo '<br/><div><h6 class="m-0 text-success"><i
                                            class="fa fa-check-circle fa-sm text-success-50"></i>&nbsp;PAID</h6></div>';
                                        } else{
                                            echo '<br/><div><h6 class="m-0 text-danger"><i
                                            class="fa fa-times-circle fa-sm text-danger-50"></i>&nbsp;NOT PAID</h6></div>';
                                        }
                                        echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
    
                $new_subscription_due_date = date('Y-m-d', strtotime("+".$due_date." days", strtotime($new_subscription_due_date)));
                $count += 1;
    
            }
    
            $due_date = 7;
            $count = 1;

        } else {
            echo '
                <div class="h5 mb-0 font-weight-bold text-gray-800">'.$quarter_unavailable.'</div>
            ';
        }

    }


    function november() {

        global $quarter_unavailable, $year_quarter, $third_quarter, $weekly_date_day, $count, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        
        $year_quarter += 1; // increment variable to know if current month is in the $third_quarter of the year

        if ($year_quarter <= $third_quarter) {

            $date_month_quarterly = '11'; // assign the value of day-of-the-month for november
            $zero_date_quarterly = 0; // assign the value of month-of-the-year for november
            date_default_timezone_set('Europe/London'); // Get the current datetime for London
            $date = date('Y-m-d'); // Get the current date
            $date = explode('-', $date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $date[0] = date('Y'); // YY
            $date[1] = $date_month_quarterly;   // MM
            $date[2] = $weekly_date_day;   // DD
            // then implode the array again for datetime format.
            $new_subscription_due_date = implode('-', $date);
            $dt = strtotime($new_subscription_due_date);
            $new_subscription_due_date = date("Y-m-d", strtotime("+".$zero_date_quarterly." month", $dt));
    
            // Get all possible Subscription dates
            while($count <= 5){
                echo '
                    <div class="col-xl-3 col-md-6 mb-3">';
                        // Get 'contribution_deposit' date payment history
                        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE subscription_id = '$subscription_id' AND subscription_due_date = '$new_subscription_due_date' AND post_status = '$approved'";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    $current_month = "Paid";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                $current_month = "Not Paid";
                            }
                        } else{
                            echo "PAID STATUS ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }  
                        // Change 'border-left' color to green or red
                        if($current_month == "Paid"){
                            echo '<div class="card border-left-success shadow h-100 py-2">';
                        } else{
                            echo '<div class="card border-left-danger shadow h-100 py-2">';
                        }
                        echo '
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$new_subscription_due_date
                                        .'</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">₦'.$english_format_number = number_format($amount_due, 2).'</div>';
                                        
                                        // Display Redeem history status
                                        if($current_month == "Paid"){
                                            echo '<br/><div><h6 class="m-0 text-success"><i
                                            class="fa fa-check-circle fa-sm text-success-50"></i>&nbsp;PAID</h6></div>';
                                        } else{
                                            echo '<br/><div><h6 class="m-0 text-danger"><i
                                            class="fa fa-times-circle fa-sm text-danger-50"></i>&nbsp;NOT PAID</h6></div>';
                                        }
                                        echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
    
                $new_subscription_due_date = date('Y-m-d', strtotime("+".$due_date." days", strtotime($new_subscription_due_date)));
                $count += 1;
    
            }
    
            $due_date = 7;
            $count = 1;

        } else {
            echo '
                <div class="h5 mb-0 font-weight-bold text-gray-800">'.$quarter_unavailable.'</div>
            ';
        }

    }


    function december() {

        global $quarter_unavailable, $year_quarter, $third_quarter, $weekly_date_day, $count, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        
        $year_quarter += 1; // increment variable to know if current month is in the $third_quarter of the year

        if ($year_quarter <= $third_quarter) {

            $date_month_quarterly = '12'; // assign the value of day-of-the-month for december
            $zero_date_quarterly = 0; // assign the value of month-of-the-year for december
            date_default_timezone_set('Europe/London'); // Get the current datetime for London
            $date = date('Y-m-d'); // Get the current date
            $date = explode('-', $date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $date[0] = date('Y'); // YY
            $date[1] = $date_month_quarterly;   // MM
            $date[2] = $weekly_date_day;   // DD
            // then implode the array again for datetime format.
            $new_subscription_due_date = implode('-', $date);
            $dt = strtotime($new_subscription_due_date);
            $new_subscription_due_date = date("Y-m-d", strtotime("+".$zero_date_quarterly." month", $dt));
    
            // Get all possible Subscription dates
            while ($count < 3) {
                echo '
                    <div class="col-xl-3 col-md-6 mb-3">';
                        // Get 'contribution_deposit' date payment history
                        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE subscription_id = '$subscription_id' AND subscription_due_date = '$new_subscription_due_date' AND post_status = '$approved'";
                        if ($result = mysqli_query($link, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)){
                                    $current_month = "Paid";
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                $current_month = "Not Paid";
                            }
                        } else {
                            echo "PAID STATUS ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }  
                        // Change 'border-left' color to green or red
                        if ($current_month == "Paid") {
                            echo '<div class="card border-left-success shadow h-100 py-2">';
                        } else {
                            echo '<div class="card border-left-danger shadow h-100 py-2">';
                        }
                        echo '
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$new_subscription_due_date
                                        .'</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">₦'.$english_format_number = number_format($amount_due, 2).'</div>';
                                        
                                        // Display Redeem history status
                                        if($current_month == "Paid"){
                                            echo '<br/><div><h6 class="m-0 text-success"><i
                                            class="fa fa-check-circle fa-sm text-success-50"></i>&nbsp;PAID</h6></div>';
                                        } else{
                                            echo '<br/><div><h6 class="m-0 text-danger"><i
                                            class="fa fa-times-circle fa-sm text-danger-50"></i>&nbsp;NOT PAID</h6></div>';
                                        }
                                        echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
    
                $new_subscription_due_date = date('Y-m-d', strtotime("+".$due_date." days", strtotime($new_subscription_due_date)));
                $count += 1;
    
            }
    
            $due_date = 7;
            $count = 1;

        } else {
            echo '
                <div class="h5 mb-0 font-weight-bold text-gray-800">'.$quarter_unavailable.'</div>
            ';
        }

    }
?>