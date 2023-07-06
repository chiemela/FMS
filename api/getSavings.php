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
function get_savings_credit() {

    try {

        global $link;
    
        $id = null;
        $acc_number = null;
        $amount = null;
        $staff_email = null;
        $staff_name = null;
        $post_status = null;
        $voucher_date = null;
        $approved_by = null;
        $approved_day = null;
        $approved_month = null;
        $approved_year = null;
        $creation_date = null;
        
        // used to perform additional operations within the API
        $return_error = true;
        $approved = "Approved";
    
        $sql = "SELECT * FROM ckc_2021_savings_credit WHERE post_status = '$approved'";
        $stmnt = $link->prepare($sql);
        $stmnt->execute();
        $stmnt->bind_result(
            $id,
            $acc_number,
            $amount,
            $staff_email,
            $staff_name,
            $post_status,
            $voucher_date,
            $approved_by,
            $approved_day,
            $approved_month,
            $approved_year,
            $creation_date
        );
    
        while ($stmnt->fetch()) {
    
            $return_error = false;
            $data[] = array(
          
                "id" =>$id,
                "acc_number" => $acc_number,
                "amount" => $amount,
                "staff_email" => $staff_email,
                "staff_name" => $staff_name,
                "post_status" => $post_status,
                "voucher_date" => $voucher_date,
                "approved_by" => $approved_by,
                "approved_day" => $approved_day,
                "approved_month" => $approved_month,
                "approved_year" => $approved_year,
                "creation_date" => $creation_date
        
            );
        
        }
    
        return $res = $return_error ? $return_error : $data;

    } catch (\Throwable $th) {
        echo $th;
    }

}


/*
function get_savings_debit() {

    try {

        global $link;
    
        $id = null;
        $acc_number = null;
        $amount = null;
        $staff_email = null;
        $staff_name = null;
        $post_status = null;
        $voucher_date = null;
        $approved_by = null;
        $approved_day = null;
        $approved_month = null;
        $approved_year = null;
        $creation_date = null;
        
        // used to perform additional operations within the API
        $return_error = true;
        $approved = "Approved";
    
        $sql = "SELECT * FROM ckc_2021_savings_debit WHERE post_status = '$approved'";
        $stmnt = $link->prepare($sql);
        $stmnt->execute();
        $stmnt->bind_result(
            $id,
            $acc_number,
            $amount,
            $staff_email,
            $staff_name,
            $post_status,
            $voucher_date,
            $approved_by,
            $approved_day,
            $approved_month,
            $approved_year,
            $creation_date
        );
    
        while ($stmnt->fetch()) {
    
            $return_error = false;
            $data[] = array(
          
                "id" => $id,
                "acc_number" => $acc_number,
                "amount" => $amount,
                "staff_email" => $staff_email,
                "staff_name" => $staff_name,
                "post_status" => $post_status,
                "voucher_date" => $voucher_date,
                "approved_by" => $approved_by,
                "approved_day" => $approved_day,
                "approved_month" => $approved_month,
                "approved_year" => $approved_year,
                "creation_date" => $creation_date
        
            );
        
        }
    
        return $res = $return_error ? $return_error : $data;

    } catch (\Throwable $th) {
        echo $th;
    }

}



function get_savings_credit_where($var) {

    try {

        global $link;
    
        $id = null;
        $acc_number = null;
        $amount = null;
        $staff_email = null;
        $staff_name = null;
        $post_status = null;
        $voucher_date = null;
        $approved_by = null;
        $approved_day = null;
        $approved_month = null;
        $approved_year = null;
        $creation_date = null;
        $return_error = true;
    
        $sql = 'SELECT * FROM ckc_2021_savings_credit WHERE acc_number = ?';
        $stmnt = $link->prepare($sql);
        $stmnt->bind_param("s", $var);
        $stmnt->execute();
        $stmnt->bind_result(
            $id,
            $acc_number,
            $amount,
            $staff_email,
            $staff_name,
            $post_status,
            $voucher_date,
            $approved_by,
            $approved_day,
            $approved_month,
            $approved_year,
            $creation_date
        );
    
        while ($stmnt->fetch()) {
    
            $return_error = false;
            $data[] = array(
          
                "id" => $id,
                "acc_number" => $acc_number,
                "amount" => $amount,
                "staff_email" => $staff_email,
                "staff_name" => $staff_name,
                "post_status" => $post_status,
                "voucher_date" => $voucher_date,
                "approved_by" => $approved_by,
                "approved_day" => $approved_day,
                "approved_month" => $approved_month,
                "approved_year" => $approved_year,
                "creation_date" => $creation_date
        
            );
        
        }
    
        return $res = $return_error ? $return_error : $data;

    } catch (\Throwable $th) {
        echo $th;
    }

}



function get_savings_debit_where($var) {

    try {

        global $link;
    
        $id = null;
        $acc_number = null;
        $amount = null;
        $staff_email = null;
        $staff_name = null;
        $post_status = null;
        $voucher_date = null;
        $approved_by = null;
        $approved_day = null;
        $approved_month = null;
        $approved_year = null;
        $creation_date = null;
        $return_error = true;
    
        $sql = 'SELECT * FROM ckc_2021_savings_debit WHERE acc_number = ?';
        $stmnt = $link->prepare($sql);
        $stmnt->bind_param("s", $var);
        $stmnt->execute();
        $stmnt->bind_result(
            $id,
            $acc_number,
            $amount,
            $staff_email,
            $staff_name,
            $post_status,
            $voucher_date,
            $approved_by,
            $approved_day,
            $approved_month,
            $approved_year,
            $creation_date
        );
    
        while ($stmnt->fetch()) {
    
            $return_error = false;
            $data[] = array(
          
                "id" => $id,
                "acc_number" => $acc_number,
                "amount" => $amount,
                "staff_email" => $staff_email,
                "staff_name" => $staff_name,
                "post_status" => $post_status,
                "voucher_date" => $voucher_date,
                "approved_by" => $approved_by,
                "approved_day" => $approved_day,
                "approved_month" => $approved_month,
                "approved_year" => $approved_year,
                "creation_date" => $creation_date
        
            );
        
        }
    
        return $res = $return_error ? $return_error : $data;

    } catch (\Throwable $th) {
        echo $th;
    }

}

//$stmnt->close();
*/
?>