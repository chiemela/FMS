<?php

if ($savings <= 10000) {

    $savings_threshold = 10000;

} elseif ($savings <= 100000) {

    $savings_threshold = 100000;

} elseif ($savings <= 1000000) {

    $savings_threshold = 1000000;

} elseif ($savings <= 5000000) {

    $savings_threshold = 5000000;

} elseif ($savings <= 10000000) {

    $savings_threshold = 10000000;

} elseif ($savings <= 50000000) {

    $savings_threshold = 50000000;

} elseif ($savings <= 100000000) {

    $savings_threshold = 100000000;

} elseif ($savings <= 500000000) {

    $savings_threshold = 500000000;

} elseif ($savings <= 1000000000) {

    $savings_threshold = 1000000000;

} elseif ($savings <= 2000000000) {

    $savings_threshold = 2000000000;

} elseif ($savings <= 10000000000) {

    $savings_threshold = 10000000000;

} elseif ($savings <= 100000000000) {

    $savings_threshold = 100000000000;

} elseif ($savings > 100000000000) {

    $savings_threshold = 1000000000000;

}


if ($dues_credit <= 10000) {

    $dues_threshold = 10000;

} elseif ($dues_credit <= 100000) {

    $dues_threshold = 100000;

} elseif ($dues_credit <= 1000000) {

    $dues_threshold = 1000000;

} elseif ($dues_credit <= 5000000) {

    $dues_threshold = 5000000;

} elseif ($dues_credit <= 10000000) {

    $dues_threshold = 10000000;

} elseif ($dues_credit <= 50000000) {

    $dues_threshold = 50000000;

} elseif ($dues_credit <= 100000000) {

    $dues_threshold = 100000000;

} elseif ($dues_credit <= 500000000) {

    $dues_threshold = 500000000;

} elseif ($dues_credit <= 1000000000) {

    $dues_threshold = 1000000000;

} elseif ($dues_credit <= 2000000000) {

    $dues_threshold = 2000000000;

} elseif ($dues_credit <= 10000000000) {

    $dues_threshold = 10000000000;

} elseif ($dues_credit <= 100000000000) {

    $dues_threshold = 100000000000;

} elseif ($dues_credit > 100000000000) {

    $dues_threshold = 1000000000000;

}


if ($mcard_credit <= 10000) {

    $mcard_threshold = 10000;

} elseif ($mcard_credit <= 100000) {

    $mcard_threshold = 100000;

} elseif ($mcard_credit <= 1000000) {

    $mcard_threshold = 1000000;

} elseif ($mcard_credit <= 5000000) {

    $mcard_threshold = 5000000;

} elseif ($mcard_credit <= 10000000) {

    $mcard_threshold = 10000000;

} elseif ($mcard_credit <= 50000000) {

    $mcard_threshold = 50000000;

} elseif ($mcard_credit <= 100000000) {

    $mcard_threshold = 100000000;

} elseif ($mcard_credit <= 500000000) {

    $mcard_threshold = 500000000;

} elseif ($mcard_credit <= 1000000000) {

    $mcard_threshold = 1000000000;

} elseif ($mcard_credit <= 2000000000) {

    $mcard_threshold = 2000000000;

} elseif ($mcard_credit <= 10000000000) {

    $mcard_threshold = 10000000000;

} elseif ($mcard_credit <= 100000000000) {

    $mcard_threshold = 100000000000;

} elseif ($mcard_credit > 100000000000) {

    $mcard_threshold = 1000000000000;

}

$savings_aria_valuenow = ($savings * 100) / $savings_threshold;

$loan_aria_valuenow = ($loan_principal_interest * 100) / ($loan_threshold = $loan_repayment);

$contribution_aria_valuenow = ($contribution_amount_due * 100) / ($contribution_threshold = $contribution_amount_expecting);

$akawo_aria_valuenow = ($akawo_redeem_per_week * 100) / ($akawo_threshold = $akawo_amount_per_week);

$thrift_aria_valuenow = ($thrift_redeem_success_count * 100) / $thrift_threshold;

$dues_aria_valuenow = ($dues_credit * 100) / $dues_threshold;

$mcard_aria_valuenow = ($mcard_credit * 100) / $mcard_threshold;

?>
<h6 class="d-flex align-items-center mb-3" style="color:black;">Account Summary</h6>

<small>Savings - Savings threshold: <?php echo "₦".$english_format_number = number_format($savings, 2)." / ₦".$english_format_number = number_format($savings_threshold, 2);?></small>
<div class="progress mb-3" style="height: 5px">
    <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $savings_aria_valuenow;?>%" aria-valuenow="<?php echo $savings_aria_valuenow;?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<small>Loan - Loan threshold: <?php echo "₦".$english_format_number = number_format($loan_principal_interest, 2)." / ₦".$english_format_number = number_format($loan_threshold, 2);?></small>
<div class="progress mb-3" style="height: 5px">
    <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $loan_aria_valuenow;?>%" aria-valuenow="<?php echo $loan_aria_valuenow;?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<small>Contribution - Contribution threshold: <?php echo "₦".$english_format_number = number_format($contribution_amount_due, 2)." / ₦".$english_format_number = number_format($contribution_threshold, 2);?></small>
<div class="progress mb-3" style="height: 5px">
    <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $contribution_aria_valuenow;?>%" aria-valuenow="<?php echo $contribution_aria_valuenow;?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<small>Akawo - Akawo threshold: <?php echo "₦".$english_format_number = number_format($akawo_redeem_per_week, 2)." / ₦".$english_format_number = number_format($akawo_threshold, 2);?></small>
<div class="progress mb-3" style="height: 5px">
    <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $akawo_aria_valuenow;?>%" aria-valuenow="<?php echo $akawo_aria_valuenow;?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<small>Thrift - Thrift threshold: <?php echo "₦".$english_format_number = number_format($thrift_redeem_success_count, 2)." / ₦".$english_format_number = number_format($thrift_threshold, 2);?></small>
<div class="progress mb-3" style="height: 5px">
    <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $thrift_aria_valuenow;?>%" aria-valuenow="<?php echo $thrift_aria_valuenow;?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<small>Dues - Dues threshold: <?php echo "₦".$english_format_number = number_format($dues_credit, 2)." / ₦".$english_format_number = number_format($dues_threshold, 2);?></small>
<div class="progress mb-3" style="height: 5px">
    <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $dues_aria_valuenow;?>%" aria-valuenow="<?php echo $dues_aria_valuenow;?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<small>M|Card - M|Card threshold: <?php echo "₦".$english_format_number = number_format($mcard_credit, 2)." / ₦".$english_format_number = number_format($mcard_threshold, 2);?></small>
<div class="progress mb-3" style="height: 5px">
    <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $mcard_aria_valuenow;?>%" aria-valuenow="<?php echo $mcard_aria_valuenow;?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>