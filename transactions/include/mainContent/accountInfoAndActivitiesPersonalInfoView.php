<h6 class="d-flex align-items-center mb-3" style="color:black;">View Account Personal Info</h6>
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
            <h6 class="mb-0">Email</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $email?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Address 1</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $address_1?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Address 2</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $address_2?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">State</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $state?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Gender</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $gender?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Next Of Kin</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $next_of_kin?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Next Of Kin Phone</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $next_of_kin_phone?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Redistered Date</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php echo $registered_date?>
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
            <h6 class="mb-0">Last Update</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <?php
                // Assign date sections into variable
                $time = strtotime($last_updated_datetime);
                $month = date("F",$time);
                $year = date("Y",$time);
                $day = date("j",$time);
                $hour = date("g",$time);
                $minute = date("i",$time);
                $time_of_day = date("a",$time);
                $last_updated_datetime = $month." ".$day.", ".$year.", ".$hour.":".$minute." ".$time_of_day;
                echo $last_updated_datetime
            ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-outline-primary" href="javascript:window.open('','_self').close();">
                <i class="fas fa-times-circle" aria-hidden="true"></i> 
                Close
            </a>
        </div>
    </div>