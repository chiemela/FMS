<br/>
<br/>
<br/>
<label>Account name: <?php echo $memberFullName?></label>
<br/>
<label>Account number: <?php echo $acc_number?></label>
<br/>
<label>Subscription session: <?php echo $subscription_session?></label>
<br/>
<label>Subscription package: <?php echo $session_package?></label>
<br/>
<label>Amount: ₦<?php echo $english_format_number = number_format($amount, 2)?></label>
<br/>
<label>Amount due: ₦<?php echo $english_format_number = number_format($amount_due, 2)?></label>
<br/>
<label>Duration: <?php echo $duration." ".$duration_unit?>s</label>
<br/>
<label>Amount redeemed: ₦<?php echo $english_format_number = number_format($amount_redeemed, 2)?></label>
<br/>
<label>Balance remaining: ₦<?php echo $english_format_number = number_format(($balance = $amount - $amount_redeemed), 2)?></label>
<br/>
<label>
    ₦ withdrawable: 
    <?php
        $withdrawable = $amount_redeemed - $amount_due;
        
        if ($withdrawable < 0) {

            echo $withdrawable = "-₦".number_format(abs($withdrawable), 2);

        } else {

            echo $withdrawable = "₦".number_format($withdrawable, 2);

        }
    ?>
</label>
<br/>
<?php

$payments_remaining = $amount_redeemed / $amount_due;
$payments_remaining = $duration - $payments_remaining;

    
// get contribution deposit progress bar
$contribution_basket_progress_bar = ($amount_redeemed * 100) / $amount;
echo '
    <br/>
    <h1 class="display-1 text-primary text-center">'. $payments_remaining .'</h1>
    <h4 class="display-6 text-primary text-center">'. $duration_unit .'(s) payment remaining</h4>
    <div class="progress mb-3" style="height: 5px">
        <div class="progress-bar bg-primary" role="progressbar" style="width: '.$contribution_basket_progress_bar.'%" aria-valuemin="0" aria-valuemax="100">
        </div>
    </div>
    <!-- to insert specified line height -->
    <div class="text-center" style="margin-top:-20px;">';

        if ($contribution_basket_progress_bar == 100) {

            echo "100%";

        } elseif ($contribution_basket_progress_bar >= 90) {

            echo "90%";

        } elseif ($contribution_basket_progress_bar >= 80) {

            echo "80%";

        } elseif ($contribution_basket_progress_bar >= 70) {

            echo "70%";

        } elseif ($contribution_basket_progress_bar >= 60) {

            echo "60%";

        } elseif ($contribution_basket_progress_bar >= 50) {

            echo "50%";

        } elseif ($contribution_basket_progress_bar >= 40) {

            echo "40%";

        } elseif ($contribution_basket_progress_bar >= 30) {

            echo "30%";

        } elseif ($contribution_basket_progress_bar >= 20) {

            echo "20%";

        } elseif ($contribution_basket_progress_bar >= 10) {

            echo "10%";

        } elseif ($contribution_basket_progress_bar >= 5) {

            echo "5%";

        } elseif ($contribution_basket_progress_bar < 5) {

            echo "0%";

        }'

    </div>
';
?>