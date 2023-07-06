<div class="row">
    <div class="col-lg-5">
        <div style="line-height:5px;">
            <br>
        </div>
        <h6 class="d-flex align-items-center mb-3" style="color:black;">Akawo Transaction History</h6>
    </div>
    <div class="col-lg-7">
        <h4 class="text-right mb-3" style="color:grey;" id="transaction_balance"></h4>
    </div>
</div>
<div style="line-height:60%;">
    <br>
</div>
<div class="table-responsive">
    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
        <?php
        
            // Get details of approved Akawo booking to account number
            $sql = "SELECT amount_per_week, akawo_id, creation_date, staff_name FROM ckc_2021_akawo_create WHERE complete_status = '$incomplete' AND acc_number = '$acc_number'";
                    
            $count_array_number = 1;

            if ($result = mysqli_query($link, $sql)) {

                if (mysqli_num_rows($result) > 0) {
                    
                    while ($row = mysqli_fetch_array($result)) {

                        // Change the format of date coming from database
                        $row_Date = strtotime($row['creation_date']);
                        $amount_per_week = 31 * $row['amount_per_week'];
                        
                        // Obtain a list of columns
                        $newdata = array(
                            'amount' => $amount_per_week,
                            'voucher_date' => date('Y-m-d', $row_Date),
                            'staff_name' => $row['staff_name'],
                            'acc_type' => "debit",
                            'akawo_id' => $row['akawo_id']
                        );

                        $transaction_history[$count_array_number][] = $newdata;
                        $transaction_amount_per_week += $amount_per_week;
                        $count_array_number++;

                    }

                    // Free result set
                    mysqli_free_result($result);

                } else {

                    // echo "<p class='lead'><em>No pending Savings (Dbit).</em></p>";

                }

            } else {

                // echo "CREDIT HISTORY ERROR: Could not able to execute $sql. " . mysqli_error($link);

            }

            // Get details of approved Akawo repayment to account number
            $sql = "SELECT redeem_per_week, akawo_id, voucher_date, staff_name FROM ckc_2021_akawo_redeem WHERE acc_number = '$acc_number' AND post_status = '$approved'";

            if ($result = mysqli_query($link, $sql)) {

                if (mysqli_num_rows($result) > 0) {
                    
                    while ($row = mysqli_fetch_array($result)) {
                        // Attempt select query execution
                        
                        // Obtain a list of columns
                        $newdata = array(
                            'amount' => $row['redeem_per_week'],
                            'voucher_date' => $row['voucher_date'],
                            'staff_name' => $row['staff_name'],
                            'acc_type' => "credit",
                            'akawo_id' => $row['akawo_id']
                        );

                        $transaction_history[$count_array_number][] = $newdata;
                        $transaction_redeem_per_week += $row['redeem_per_week'];
                        $count_array_number++;

                    }

                    // Free result set
                    mysqli_free_result($result);

                } else {

                    // echo "<p class='lead'><em>No pending Savings (Dbit).</em></p>";

                }

            } else {

                // echo "REPAYMENT HISTORY ERROR: Could not able to execute $sql. " . mysqli_error($link);

            }

            // Create new array with KEY VALUE pairs to store values gotten from Akawo booked and repaid
            $voucher_date_array = array();
            $superhero = array();
            $counter = 1;

            // Expand the array key-value-pair gotten from the database
            foreach ($transaction_history as $k => $v) {

                // Check if the expanded key-value-pair is still array and expand it the more
                if (is_array($v)) {

                    // Get the inner array and assign to a new array with key-value-pair
                    foreach ($v as $k2 => $v2) {

                        $superhero[$counter] = $v2;
                        $counter++;

                    }

                }

            }
            
            // Get the "voucher_date" and assign it to a new array with the index number
            foreach ($superhero as $k3 => $v3) {

                $voucher_date_array[$k3] = $v3["voucher_date"];

            }
            
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Akawo ID</th>";
                    echo "<th>Amount</th>";
                    echo "<th>Voucher date</th>";
                    echo "<th>Posted by</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tfoot>";
                echo "<tr>";
                    echo "<th>Akawo ID</th>";
                    echo "<th>Amount</th>";
                    echo "<th>Voucher date</th>";
                    echo "<th>Posted by</th>";
                echo "</tr>";
            echo "</tfoot>";
            echo "<tbody>";
            
            // This will sort the "voucher_date" in descending order still maintaining the index
            arsort($voucher_date_array);

            // Attempt to insert both savings credit and debit according to "voucher_date"
            foreach (array_keys($voucher_date_array) as $key => $val) {
                
                $transaction_amount = $superhero[$val]["amount"];
                $transaction_voucher_date = $superhero[$val]["voucher_date"];
                $transaction_staff_name = $superhero[$val]["staff_name"];
                $transaction_acc_type = $superhero[$val]["acc_type"];
                $transaction_akawo_id = $superhero[$val]["akawo_id"];
                
                echo "<tr>";

                    echo "<td>" . $transaction_akawo_id . "</td>";

                    // Check if amount is coming from "credit_table" or "debit_table"
                    if ($transaction_acc_type == "credit") {
                        
                        echo "<td style='color:#32CD32; width:25%;'>" . "₦".$english_format_number = number_format($transaction_amount, 2). "</td>";

                    } elseif ($transaction_acc_type == "debit") {
                        
                        echo "<td style='color:#FF3131; width:25%;'>" . "-₦".$english_format_number = number_format($transaction_amount, 2). "</td>";

                    }
                    
                    echo "<td>" . $transaction_voucher_date . "</td>";
                    echo "<td>" . $transaction_staff_name . "</td>";
                echo "</tr>";

            }

            echo "</tbody>";

        ?>
    </table>
                            
    <?php

        // Get the difference in the Credit and debit transactions
        $transaction_balance = $transaction_redeem_per_week - $transaction_amount_per_week;

    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>

        // "function formatCurrency(total)" will get "$transaction_balance" and format it to currency format
        function formatCurrency(total) {

            var neg = false;

            if(total < 0) {
                neg = true;
                total = Math.abs(total);
            }

            return (neg ? "-₦" : '₦') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();

        }

        $("#transaction_balance").append("Balance: " + formatCurrency(<?php echo $transaction_balance?>));

    </script>

</div>