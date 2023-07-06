<?php

    // create url variable to point to the next page
    $form_url = "createMember.php?status=UPDATE_REQUEST&acc_number=$acc_number&registered_date=$registered_date&registered_by=$registered_by";
    
?>
<form method="POST" action="<?php echo $form_url?>">
    <h6 class="d-flex align-items-center mb-3" style="color:black;">Personal Info Edit</h6>
    <div style="line-height:10%;">
        <br>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Title</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="<?php echo $title?>">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">First Name</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <div class="form-group">
                <input type="text" class="form-control" name="firstName" placeholder="<?php echo $first_name?>">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Last Name</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <div class="form-group">
                <input type="text" class="form-control" name="lastName" placeholder="<?php echo $last_name?>">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Other Names</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <div class="form-group">
                <input type="text" class="form-control" name="middleName" placeholder="<?php echo $other_name?>">
            </div>
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
            <div class="form-group">
                <input type="tel" class="form-control" name="phoneNumber" placeholder="<?php echo $phone?>">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Email</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="<?php echo $email?>">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Gender</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1" name="gender" placeholder="<?php echo $gender;?>" required autofocus >
                    <option><?php echo $gender;?></option>    
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">State</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1" name="state" placeholder="" required autofocus >
                    <option><?php echo $state;?></option>
                    <option>Abia</option>
                    <option>Adamawa</option>
                    <option>Akwa Ibom</option>
                    <option>Anambra</option>
                    <option>Bauchi</option>
                    <option>Bayelsa</option>
                    <option>Benue</option>
                    <option>Borno</option>
                    <option>Cross River</option>
                    <option>Delta</option>
                    <option>Ebonyi</option>
                    <option>Edo</option>
                    <option>Ekiti</option>
                    <option>Enugu</option>
                    <option>FCT (Abuja)</option>
                    <option>Gombe</option>
                    <option>Imo</option>
                    <option>Jigawa</option>
                    <option>Kaduna</option>
                    <option>Kano</option>
                    <option>Katsina</option>
                    <option>Kebbi</option>
                    <option>Kogi</option>
                    <option>Kwara</option>
                    <option>Lagos</option>
                    <option>Nasarawa</option>
                    <option>Niger</option>
                    <option>Ogun</option>
                    <option>Ondo</option>
                    <option>Osun</option>
                    <option>Oyo</option>
                    <option>Plateau</option>
                    <option>Rivers</option>
                    <option>Sokoto</option>
                    <option>Taraba</option>
                    <option>Yobe</option>
                    <option>Zamfara</option>
                </select>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Adress Line 1</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <div class="form-group">
                <input type="text" class="form-control" name="address_1" placeholder="<?php echo $address_1?>">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Adress Line 2</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <div class="form-group">
                <input type="text" class="form-control" name="address_2" placeholder="<?php echo $address_2?>">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Next Of Kin</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <div class="form-group">
                <input type="text" class="form-control" name="nextOfKin" placeholder="<?php echo $next_of_kin?>">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Next Of Kin Phone</h6>
        </div>
        <div class="col-sm-8 text-secondary">
            <div class="form-group">
                <input type="text" class="form-control" name="nextOfKinPhoneNumber" placeholder="<?php echo $next_of_kin_phone?>">
            </div>
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
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-paper-plane text-white-50"></i> 
                Save
            </button>
            <a class="btn btn-outline-primary" href="javascript:window.open('','_self').close();">
                <i class="fas fa-times-circle" aria-hidden="true"></i> 
                Close
            </a>
        </div>
    </div>
</form>