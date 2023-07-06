<?php
$nav_id_personal_info_edit = "&nav_id=PERSONAL_INFO_EDIT";
$nav_id_personal_info_view = "&nav_id=PERSONAL_INFO_VIEW";
?>
<h6 class="d-flex align-items-center mb-3" style="color:black;">Personal Info</h6>
    <div style="line-height:10%;">
        <br>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Title</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $title?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">First Name</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $first_name?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Last Name</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $last_name?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Other Names</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $other_name?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Account Number</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $acc_number?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Phone</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $phone?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Registered By</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $registered_by?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Registered Date</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $registered_date?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <?php
            
                // If user is not 'Staff' or 'Developer' don't give access to this Button
                if ($_SESSION["role"] == "Staff" || $_SESSION['role'] == "Developer") {

                    echo '
                        <a class="btn btn-primary " target="__blank" href="viewMemberRecord.php'.$user_url.$nav_id_personal_info_edit.'">
                            <i class="fas fa-edit text-white-50"></i> 
                            Edit Details
                        </a>
                    ';

                }

            ?>
            <a class="btn btn-outline-primary" target="__blank" href="viewMemberRecord.php<?php echo $user_url.$nav_id_personal_info_view?>">
                <i class="fa fa-eye" aria-hidden="true"></i> 
                View More
            </a>
        </div>
    </div>