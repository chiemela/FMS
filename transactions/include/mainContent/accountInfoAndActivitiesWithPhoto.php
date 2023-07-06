<?php
$nav_id_edit_photo = "&nav_id=EDIT_PHOTO";
$nav_id_send_mail = "&nav_id=SEND_MAIL";
?>
<div class="d-flex flex-column align-items-center text-center">
    <img src="img/undraw_profile.svg" alt="Admin" class="rounded-circle" width="150">
    <div class="mt-3">
        Account Name
        <br/>
        <h4><?php echo $member_full_name?></h4>
        <p class="text-secondary mb-1">
            Account Number
            <br/>
            <b><?php echo $acc_number?></b>
        </p>
        <p class="text-muted font-size-sm">
            Account Status
            <br/>
            <b style="color:#32CD32;">Active</b>
        </p>
        <a class="btn btn-primary" target="__blank" href="viewMemberRecord.php<?php echo $user_url.$nav_id_edit_photo?>">
            <i class="fas fa-camera text-white-50"></i> 
            Edit Photo
        </a>
        <button class="btn btn-outline-primary">
            <i class="fa fa-envelope" aria-hidden="true"></i> 
            Send Mail
        </button>
    </div>
</div>