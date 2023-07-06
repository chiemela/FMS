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
function get_akawo_redeem() {

    try {

        global $link;

        $id = null;
        $akawo_id = null;
        $acc_number = null;
        $acc_name = null;
        $redeem_per_week = null;
        $redeem_due_date = null;
        $voucher_date = null;
        $staff_email = null;
        $staff_name = null;
        $post_status = null;
        $description = null;
        $approved_by = null;
        $approved_day = null;
        $approved_month = null;
        $approved_year = null;
        $approval_datetime = null;
        $creation_date = null;

        // used to perform additional operations within the API
        $return_error = true;
        $approved = "Approved";
    
        $sql = "SELECT * FROM ckc_2021_akawo_redeem WHERE post_status = '$approved'";
        $stmnt = $link->prepare($sql);
        $stmnt->execute();
        $stmnt->bind_result(
            $id,
            $akawo_id,
            $acc_number,
            $acc_name,
            $redeem_per_week,
            $redeem_due_date,
            $voucher_date,
            $staff_email,
            $staff_name,
            $post_status,
            $description,
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
                "akawo_id" => $akawo_id,
                "acc_number" => $acc_number,
                "acc_name" => $acc_name,
                "redeem_per_week" => $redeem_per_week,
                "redeem_due_date" => $redeem_due_date,
                "voucher_date" => $voucher_date,
                "staff_email" => $staff_email,
                "staff_name" => $staff_name,
                "post_status" => $post_status,
                "description" => $description,
                "approved_by" => $approved_by,
                "approved_day" => $approved_day,
                "approved_mont" => $approved_month,
                "approved_year" => $approved_year,
                "approval_date" => $approval_datetime,
                "creation_date" => $creation_date
        
            );
        
        }
    
        return $res = $return_error ? $return_error : $data;

    } catch (\Throwable $th) {
        echo $th;
    }

}



function get_akawo_debit() {

    try {

        global $link;

        $id = null;
        $akawo_id = null;
        $acc_number = null;
        $acc_name = null;
        $amount = null;
        $voucher_date = null;
        $staff_email = null;
        $staff_name = null;
        $post_status = null;
        $description = null;
        $approved_by = null;
        $approved_day = null;
        $approved_month = null;
        $approved_year = null;
        $approval_datetime = null;
        $creation_date = null;

        // used to perform additional operations within the API
        $return_error = true;
        $approved = "Approved";
    
        $sql = "SELECT * FROM ckc_2021_akawo_debit WHERE post_status = '$approved'";
        $stmnt = $link->prepare($sql);
        $stmnt->execute();
        $stmnt->bind_result(
            $id,
            $akawo_id,
            $acc_number,
            $acc_name,
            $amount,
            $voucher_date,
            $staff_email,
            $staff_name,
            $post_status,
            $description,
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
                "akawo_id" => $akawo_id,
                "acc_number" => $acc_number,
                "acc_name" => $acc_name,
                "amount" => $amount,
                "voucher_date" => $voucher_date,
                "staff_email" => $staff_email,
                "staff_name" => $staff_name,
                "post_status" => $post_status,
                "description" => $description,
                "approved_by" => $approved_by,
                "approved_day" => $approved_day,
                "approved_mont" => $approved_month,
                "approved_year" => $approved_year,
                "approval_date" => $approval_datetime,
                "creation_date" => $creation_date
        
            );
        
        }
    
        return $res = $return_error ? $return_error : $data;

    } catch (\Throwable $th) {
        echo $th;
    }

}



function get_user_where($var) {

    try {

        global $link;
    
        $id = null;
        $first_name = null;
        $last_name = null;
        $phone  = null;
        $email = null;
        $password = null;
        $address = null;
        $location = null;
        $role = null;
        $last_updated_datetime = null;
        $creation_date = null;
        $return_error = true;
    
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmnt = $link->prepare($sql);
        $stmnt->bind_param("s", $var);
        $stmnt->execute();
        $stmnt->bind_result(
            $id,
            $first_name,
            $last_name,
            $phone,
            $email,
            $password,
            $address,
            $location,
            $role,
            $last_updated_datetime,
            $creation_date
        );
    
        while ($stmnt->fetch()) {
    
            $return_error = false;
            $data[] = array(
          
                "id" => $id,
                "first_name" => $first_name,
                "last_name" => $last_name,
                "phone" => $phone,
                "email" => $email,
                "address" => $address,
                "location" => $location,
                "role" => $role,
                "last_updated_datetime" => $last_updated_datetime,
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