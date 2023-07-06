<?php
     
    $with_photo_section = "include/mainContent/accountInfoAndActivitiesWithPhoto.php";
    $nav_section = "include/mainContent/accountInfoAndActivitiesNav.php";
    $personal_info_section = "include/mainContent/accountInfoAndActivitiesPersonalInfo.php";
    $account_summary_section = "include/mainContent/accountInfoAndActivitiesAccountSummary.php";

    if ($nav_id == "SAVINGS") {
        
        $with_photo_section = "include/mainContent/accountInfoAndActivitiesWithPhoto.php";
        $nav_section = "include/mainContent/accountInfoAndActivitiesNav.php";
        $personal_info_section = "include/mainContent/accountInfoAndActivitiesSavingsInfo.php";
        $account_summary_section = "";

    } elseif ($nav_id == "LOAN") {
        
        $with_photo_section = "include/mainContent/accountInfoAndActivitiesWithPhoto.php";
        $nav_section = "include/mainContent/accountInfoAndActivitiesNav.php";
        $personal_info_section = "include/mainContent/accountInfoAndActivitiesLoanInfo.php";
        $account_summary_section = "";

    } elseif ($nav_id == "CONTRIBUTION") {
        
        $with_photo_section = "include/mainContent/accountInfoAndActivitiesWithPhoto.php";
        $nav_section = "include/mainContent/accountInfoAndActivitiesNav.php";
        $personal_info_section = "include/mainContent/accountInfoAndActivitiesContributionInfo.php";
        $account_summary_section = "";

    } elseif ($nav_id == "AKAWO") {
        
        $with_photo_section = "include/mainContent/accountInfoAndActivitiesWithPhoto.php";
        $nav_section = "include/mainContent/accountInfoAndActivitiesNav.php";
        $personal_info_section = "include/mainContent/accountInfoAndActivitiesAkawoInfo.php";
        $account_summary_section = "";

    } elseif ($nav_id == "THRIFT") {
        
        $with_photo_section = "include/mainContent/accountInfoAndActivitiesWithPhoto.php";
        $nav_section = "include/mainContent/accountInfoAndActivitiesNav.php";
        $personal_info_section = "include/mainContent/accountInfoAndActivitiesThriftInfo.php";
        $account_summary_section = "";

    } elseif ($nav_id == "DUES") {
        
        $with_photo_section = "include/mainContent/accountInfoAndActivitiesWithPhoto.php";
        $nav_section = "include/mainContent/accountInfoAndActivitiesNav.php";
        $personal_info_section = "include/mainContent/accountInfoAndActivitiesDuesInfo.php";
        $account_summary_section = "";

    } elseif ($nav_id == "MCARD") {
        
        $with_photo_section = "include/mainContent/accountInfoAndActivitiesWithPhoto.php";
        $nav_section = "include/mainContent/accountInfoAndActivitiesNav.php";
        $personal_info_section = "include/mainContent/accountInfoAndActivitiesMcardInfo.php";
        $account_summary_section = "";

    } elseif ($nav_id == "PERSONAL_INFO_EDIT") {
        
        $with_photo_section = "include/mainContent/accountInfoAndActivitiesWithPhoto.php";
        $nav_section = "include/mainContent/accountInfoAndActivitiesNav.php";
        $personal_info_section = "include/mainContent/accountInfoAndActivitiesPersonalInfoEdit.php";
        $account_summary_section = "";

    } elseif ($nav_id == "PERSONAL_INFO_VIEW") {
        
        $with_photo_section = "include/mainContent/accountInfoAndActivitiesWithPhoto.php";
        $nav_section = "include/mainContent/accountInfoAndActivitiesNav.php";
        $personal_info_section = "include/mainContent/accountInfoAndActivitiesPersonalInfoView.php";
        $account_summary_section = "";

    } elseif ($nav_id == "EDIT_PHOTO") {
        
        $with_photo_section = "include/mainContent/accountInfoAndActivitiesWithPhoto.php";
        $nav_section = "include/mainContent/accountInfoAndActivitiesNav.php";
        $personal_info_section = "include/mainContent/accountInfoAndActivitiesWithPhotoEdit.php";
        $account_summary_section = "";

    } elseif ($nav_id == "SEND_MAIL") {
        
        $with_photo_section = "include/mainContent/accountInfoAndActivitiesWithPhoto.php";
        $nav_section = "include/mainContent/accountInfoAndActivitiesNav.php";
        $personal_info_section = "include/mainContent/accountInfoAndActivitiesPersonalInfoView.php";
        $account_summary_section = "";

    }
    
?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Account Info and Activities</h1>
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="container">
                        <div class="main-body">
                            <div style="line-height:100%;">
                                <br>
                            </div>
                            <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <?php include $with_photo_section;?>
                                        </div>
                                    </div>
                                    <div class="card mt-3">
                                        <?php include $nav_section;?>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <?php include $personal_info_section;?>
                                        </div>
                                    </div>

                                    <?php
                                    
                                        if ($account_summary_section == "") {
                                            // Do nothing
                                        } else {

                                            echo '
                                                <div class="row gutters-sm">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="card h-100">
                                                            <div class="card-body">';
                                                            include $account_summary_section;
                                                            echo '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ';

                                        }
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>