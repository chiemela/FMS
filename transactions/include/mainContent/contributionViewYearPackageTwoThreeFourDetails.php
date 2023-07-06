<?php
    function january() {

        global $date_month, $weekly_date_day, $count, $zero_date, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        date_default_timezone_set('Europe/London'); // Get the current datetime for London
        $date = date('Y-m-d'); // Get the current date
        $date = explode('-', $date); // explode to get array of YY-MM-DD
        //formatted results of array would be
        $date[0] = date('Y'); // YY
        $date[1] = $date_month;   // MM
        $date[2] = $weekly_date_day;   // DD
        // then implode the array again for datetime format.
        $new_subscription_due_date = implode('-', $date);
        $dt = strtotime($new_subscription_due_date);
        $new_subscription_due_date = date("Y-m-d", strtotime("+".$zero_date." month", $dt));

        // Get all possible Subscription dates
        while($count < 2){
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
            
            $date = explode('-', $new_subscription_due_date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $count = $date[1];   // MM

        }

        $due_date = 7;
        $zero_date += 1;

    }


    function february() {

        global $date_month, $weekly_date_day, $count, $zero_date, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

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
            
            $date = explode('-', $new_subscription_due_date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $count = $date[1];   // MM

        }

        $due_date = 7;
        $zero_date += 1;

    }


    function march() {

        global $date_month, $weekly_date_day, $count, $zero_date, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

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
            
            $date = explode('-', $new_subscription_due_date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $count = $date[1];   // MM

        }

        $due_date = 7;
        $zero_date += 1;

    }


    function april() {

        global $date_month, $weekly_date_day, $count, $zero_date, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;


        // Get all possible Subscription dates
        while($count < 5){
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
            
            $date = explode('-', $new_subscription_due_date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $count = $date[1];   // MM

        }

        $due_date = 7;
        $zero_date += 1;

    }


    function may() {

        global $date_month, $weekly_date_day, $count, $zero_date, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;


        // Get all possible Subscription dates
        while($count < 6){
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
            
            $date = explode('-', $new_subscription_due_date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $count = $date[1];   // MM

        }

        $due_date = 7;
        $zero_date += 1;

    }


    function june() {

        global $date_month, $weekly_date_day, $count, $zero_date, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        // Get all possible Subscription dates
        while($count < 7){
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
            
            $date = explode('-', $new_subscription_due_date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $count = $date[1];   // MM

        }

        $due_date = 7;
        $zero_date += 1;

    }


    function july() {

        global $date_month, $weekly_date_day, $count, $zero_date, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        // Get all possible Subscription dates
        while($count < 8){
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
            
            $date = explode('-', $new_subscription_due_date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $count = $date[1];   // MM

        }

        $due_date = 7;
        $zero_date += 1;

    }


    function august() {

        global $date_month, $weekly_date_day, $count, $zero_date, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;


        // Get all possible Subscription dates
        while($count < 9){
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
            
            $date = explode('-', $new_subscription_due_date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $count = $date[1];   // MM

        }

        $due_date = 7;
        $zero_date += 1;

    }


    function september() {

        global $date_month, $weekly_date_day, $count, $zero_date, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;


        // Get all possible Subscription dates
        while($count < 10){
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
            
            $date = explode('-', $new_subscription_due_date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $count = $date[1];   // MM

        }

        $due_date = 7;
        $zero_date += 1;

    }


    function october() {

        global $date_month, $weekly_date_day, $count, $zero_date, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;


        // Get all possible Subscription dates
        while($count < 11){
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
            
            $date = explode('-', $new_subscription_due_date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $count = $date[1];   // MM

        }

        $due_date = 7;
        $zero_date += 1;

    }


    function november() {

        global $date_month, $weekly_date_day, $count, $zero_date, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;


        // Get all possible Subscription dates
        while($count < 12){
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
            
            $date = explode('-', $new_subscription_due_date); // explode to get array of YY-MM-DD
            //formatted results of array would be
            $count = $date[1];   // MM

        }

        $due_date = 7;
        $zero_date += 1;

    }


    function december() {

        global $date_month, $weekly_date_day, $count, $zero_date, $subscription_id, $sql, $new_subscription_due_date, $approved, $link, $sql, $result, $row, $current_month, $amount_due, $english_format_number, $due_date;

        // Get all possible Subscription dates
        if ($count >= 12){
            $payment_count = 1;
            while ($payment_count < 3) {
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
                
                $payment_count += 1;
                

            }


        }

        $due_date = 7;
        $zero_date = 0;

    }
?>