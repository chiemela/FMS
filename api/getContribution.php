<?php
/**
 * INSTRUCTIONS ON HOW TO USE THIS API: Paste the code below in the receiving file to access the email at [0] item. Use loop to iterate all items
 * include "./api/getUsers.php";
 * $users = get_users();
 * echo "<br>your address: ".$address = $users[0]["email"];
 *  example:
 *   <tbody>
 *   <?php
 *       if ($services !== true) {
 *       $i = 0;
 *       $serial_number = 1;
 *       while ($i < count($services)) {
 *           echo '
 *           <tr>
 *               <td>'.$serial_number.'</td>
 *               <td>'.$services[$i]['service_id'].'</td>
 *               <td>'.$services[$i]['service_name'].'</td>
 *               <td>'.$services[$i]['service_cost'].'</td>
 *               <td>'.$services[$i]['image'].'</td>
 *               <td>'.$services[$i]['service_availability_status'].'</td>
 *               <td>'.$services[$i]['service_last_updated_datetime'].'</td>
 *               <td>'.$services[$i]['creation_date'].'</td>
 *           </tr>
 *           ';
 *           $i++;
 *           $serial_number++;
 *       }
 *       }
 *   ?>
 *   </tbody>
 */
function get_contribution_deposit() {

    try {

        global $link;
    
        $id = null;
        $subscription_id = null;
        $subscription_session = null;
        $session_package = null;
        $acc_number = null;
        $amount_deposit = null;
        $description = null;
        $subscription_due_date = null;
        $staff_email = null;
        $staff_name = null;
        $post_status = null;
        $voucher_date = null;
        $approved_by = null;
        $approved_day = null;
        $approved_month = null;
        $approved_year = null;
        $approval_datetime = null;
        $creation_date = null;

        $approved = "Approved";
        $return_error = true;
    
        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE post_status = '$approved'";
        $stmnt = $link->prepare($sql);
        $stmnt->execute();
        $stmnt->bind_result(
            $id,
            $subscription_id,
            $subscription_session,
            $session_package,
            $acc_number,
            $amount_deposit,
            $description,
            $subscription_due_date,
            $staff_email,
            $staff_name,
            $post_status,
            $voucher_date,
            $approved_by,
            $approved_day,
            $approved_month,
            $approved_year,
            $approval_datetime,
            $creation_date
        );
    
        while ($stmnt->fetch()) {
    
            $return_error = false;
            $data[] = array(
          
                "id" => $id,
                "subscription_id" => $subscription_id,
                "subscription_session" => $subscription_session,
                "session_package" => $session_package,
                "acc_number" => $acc_number,
                "amount_deposit" => $amount_deposit,
                "description" => $description,
                "subscription_due_date" => $subscription_due_date,
                "staff_email" => $staff_email,
                "staff_name" => $staff_name,
                "post_status" => $post_status,
                "voucher_date" => $voucher_date,
                "approved_by" => $approved_by,
                "approved_day" => $approved_day,
                "approved_month" => $approved_month,
                "approved_year" => $approved_year,
                "approval_datetime" => $approval_datetime,
                "creation_date" => $creation_date
        
            );
        
        }
    
        return $res = $return_error ? $return_error : $data;

    } catch (\Throwable $th) {
        echo $th;
    }

}



function get_contribution_debit() {

    try {

        global $link;
    
        $id = null;
        $amount = null;
        $manager_name = null;
        $chairman_name = null;
        $chairman_consent = null;
        $manager_consent = null;
        $voucher_date = null;
        $decision_count = null;
        $post_status = null;
        $chairman_approval_datetime = null;
        $manager_approval_datetime = null;
        $staff_email = null;
        $staff_name = null;
        $approval_datetime = null;
        $creation_date = null;

        $approved = "Approved";
        $return_error = true;
    
        $sql = "SELECT * FROM ckc_2021_contribution_debit WHERE post_status = '$approved'";
        $stmnt = $link->prepare($sql);
        $stmnt->execute();
        $stmnt->bind_result(
            $id,
            $amount,
            $manager_name,
            $chairman_name,
            $chairman_consent,
            $manager_consent,
            $voucher_date,
            $decision_count,
            $post_status,
            $chairman_approval_datetime,
            $manager_approval_datetime,
            $staff_email,
            $staff_name,
            $approval_datetime,
            $creation_date
        );
    
        while ($stmnt->fetch()) {
    
            $return_error = false;
            $data[] = array(
          
                "id" => $id,
                "amount" => $amount,
                "manager_name" => $manager_name,
                "chairman_name" => $chairman_name,
                "chairman_consent" => $chairman_consent,
                "manager_consent" => $manager_consent,
                "voucher_date" => $voucher_date,
                "decision_count" => $decision_count,
                "post_status" => $post_status,
                "chairman_approval_datetime" => $chairman_approval_datetime,
                "manager_approval_datetime" => $manager_approval_datetime,
                "staff_email" => $staff_email,
                "staff_name" => $staff_name,
                "approval_datetime" => $approval_datetime,
                "creation_date" => $creation_date
        
            );
        
        }
    
        return $res = $return_error ? $return_error : $data;

    } catch (\Throwable $th) {
        echo $th;
    }

}



function get_contribution_deposit_where($var) {

    try {

        global $link;
    
        $id = null;
        $subscription_id = null;
        $subscription_session = null;
        $session_package = null;
        $acc_number = null;
        $amount_deposit = null;
        $description = null;
        $subscription_due_date = null;
        $staff_email = null;
        $staff_name = null;
        $post_status = null;
        $voucher_date = null;
        $approved_by = null;
        $approved_day = null;
        $approved_month = null;
        $approved_year = null;
        $approval_datetime = null;
        $creation_date = null;

        $approved = "Approved";
        $return_error = true;
    
        $sql = "SELECT * FROM ckc_2021_contribution_deposit WHERE post_status = '$approved' AND id = ?";
        $stmnt = $link->prepare($sql);
        $stmnt->bind_param("s", $var);
        $stmnt->execute();
        $stmnt->bind_result(
            $id,
            $subscription_id,
            $subscription_session,
            $session_package,
            $acc_number,
            $amount_deposit,
            $description,
            $subscription_due_date,
            $staff_email,
            $staff_name,
            $post_status,
            $voucher_date,
            $approved_by,
            $approved_day,
            $approved_month,
            $approved_year,
            $approval_datetime,
            $creation_date
        );
    
        while ($stmnt->fetch()) {
    
            $return_error = false;
            $data[] = array(
          
                "id" => $id,
                "subscription_id" => $subscription_id,
                "subscription_session" => $subscription_session,
                "session_package" => $session_package,
                "acc_number" => $acc_number,
                "amount_deposit" => $amount_deposit,
                "description" => $description,
                "subscription_due_date" => $subscription_due_date,
                "staff_email" => $staff_email,
                "staff_name" => $staff_name,
                "post_status" => $post_status,
                "voucher_date" => $voucher_date,
                "approved_by" => $approved_by,
                "approved_day" => $approved_day,
                "approved_month" => $approved_month,
                "approved_year" => $approved_year,
                "approval_datetime" => $approval_datetime,
                "creation_date" => $creation_date
        
            );
        
        }
    
        return $res = $return_error ? $return_error : $data;

    } catch (\Throwable $th) {
        echo $th;
    }

}

//$stmnt->close();

?>