<?php
// redirect url for all contribution packages
$url = "contributionSettings.php";
$yearly_package_one_url = "?subscription_session=Yearly&session_package=Package One";
$yearly_package_two_url = "?subscription_session=Yearly&session_package=Package Two";
$yearly_package_three_url = "?subscription_session=Yearly&session_package=Package Three";
$yearly_package_four_url = "?subscription_session=Yearly&session_package=Package Four";
$quarterly_package_one_url = "?subscription_session=Quarterly&session_package=Package One";
$quarterly_package_two_url = "?subscription_session=Quarterly&session_package=Package Two";
$quarterly_package_three_url = "?subscription_session=Quarterly&session_package=Package Three";
?>
<div class="row">
    <div class="col-md-12">
        <h4 class="m-0 font-weight-bold text-primary">Settings | Contribution | Yearly</h4>
    </div>
</div>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="row">
        <style>
            .zoom {
            transition: transform .2s; /* Animation */
            width: 80%;
            height: auto;
            margin: 0 auto;
            }

            .zoom:hover {
            transform: scale(0.8); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
            }
        </style>
        <div class="form-group col-md-3">
            <div class="zoom text-center">
                <a href="<?php echo $url.$yearly_package_one_url?>" title="Package one"><img src="img/contribution-year-package1.png" class="img-fluid" alt="Package one"></a>
            </div>
        </div>
        <div class="form-group col-md-3">
            <div class="zoom text-center">
                <a href="<?php echo $url.$yearly_package_two_url?>" title="Package two"><img src="img/contribution-year-package2.png" class="img-fluid" alt="Package two"></a>
            </div>
        </div>
        <div class="form-group col-md-3">
            <div class="zoom text-center">
                <a href="<?php echo $url.$yearly_package_three_url?>" title="Package three"><img src="img/contribution-year-package3.png" class="img-fluid" alt="Package three"></a>
            </div>
        </div>
        <div class="form-group col-md-3">
            <div class="zoom text-center">
                <a href="<?php echo $url.$yearly_package_four_url?>" title="Package four"><img src="img/contribution-year-package4.png" class="img-fluid" alt="Package four"></a>
            </div>
        </div>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-12">
        <h4 class="m-0 font-weight-bold text-primary">Settings | Contribution | Quarterly</h4>
    </div>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="row">
        <div class="form-group col-md-3">
            <div class="zoom text-center">
                <a href="<?php echo $url.$quarterly_package_one_url?>" title="Package one"><img src="img/contribution-quarter-package1.png" class="img-fluid" alt="Package one"></a>
            </div>
        </div>
        <div class="form-group col-md-3">
            <div class="zoom text-center">
                <a href="<?php echo $url.$quarterly_package_two_url?>" title="Package two"><img src="img/contribution-quarter-package2.png" class="img-fluid" alt="Package two"></a>
            </div>
        </div>
        <div class="form-group col-md-3">
            <div class="zoom text-center">
                <a href="<?php echo $url.$quarterly_package_three_url?>" title="Package three"><img src="img/contribution-quarter-package3.png" class="img-fluid" alt="Package three"></a>
            </div>
        </div>
    </div>
</div>