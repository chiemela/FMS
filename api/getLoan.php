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
function get_loan() {

    try {

        global $link;

        // fields from the database table
        $id = null;
        $acc_number = null;
        $amount_given = null;
        $rate = null;
        $month_duration = null;
        $interest = null;
        $voucher_date = null;
        $loan_count = null;
        $maturity_date = null;
        $principal_interest = null;
        $balance = null;
        $return_status = null;
        $staff_email = null;
        $staff_name = null;
        $post_status = null;
        $approved_by = null;
        $approved_day = null;
        $approved_month = null;
        $approved_year = null;
        $completion_date = null;
        $creation_date = null;
        
        // used to perform additional operations within the API
        $return_error = true;
        $approved = "Approved";
    
        $sql = "SELECT * FROM ckc_2021_loan_return WHERE post_status = '$approved'";
        $stmnt = $link->prepare($sql);
        $stmnt->execute();
        $stmnt->bind_result(
            $id,
            $acc_number,
            $amount_given,
            $rate,
            $month_duration,
            $interest,
            $voucher_date,
            $loan_count,
            $maturity_date,
            $principal_interest,
            $balance,
            $return_status,
            $staff_email,
            $staff_name,
            $post_status,
            $approved_by,
            $approved_day,
            $approved_month,
            $approved_year,
            $completion_date,
            $creation_date
        );
    
        while ($stmnt->fetch()) {
    
            $return_error = false;
            $data[] = array(

                "id" => $id,
                "acc_number" => $acc_number,
                "amount_given" => $amount_given,
                "rate" => $rate,
                "month_duration" => $month_duration,
                "interest" => $interest,
                "voucher_date" => $voucher_date,
                "loan_count" => $loan_count,
                "maturity_date" => $maturity_date,
                "principal_interest" => $principal_interest,
                "balance" => $balance,
                "return_status" => $return_status,
                "staff_email" => $staff_email,
                "staff_name" => $staff_name,
                "post_status" => $post_status,
                "approved_by" => $approved_by,
                "approved_day" => $approved_day,
                "approved_month" => $approved_month,
                "approved_year" => $approved_year,
                "completion_date" => $completion_date,
                "creation_dat" => $creation_date
        
            );
        
        }
    
        return $res = $return_error ? $return_error : $data;

    } catch (\Throwable $th) {
        echo $th;
    }

}



function get_loan_where($var) {

    try {

        global $link;
    
        // fields from the database table
        $id = null;
        $acc_number = null;
        $amount_given = null;
        $rate = null;
        $month_duration = null;
        $interest = null;
        $voucher_date = null;
        $loan_count = null;
        $maturity_date = null;
        $principal_interest = null;
        $balance = null;
        $return_status = null;
        $staff_email = null;
        $staff_name = null;
        $post_status = null;
        $approved_by = null;
        $approved_day = null;
        $approved_month = null;
        $approved_year = null;
        $completion_date = null;
        $creation_date = null;
        
        // used to perform additional operations within the API
        $return_error = true;
        $approved = "Approved";
    
        $sql = "SELECT * FROM ckc_2021_loan_return WHERE post_status = '$approved' AND acc_number = '$acc_number'";
        $stmnt = $link->prepare($sql);
        $stmnt->bind_param("s", $var);
        $stmnt->execute();
        $stmnt->bind_result(
            $id,
            $acc_number,
            $amount_given,
            $rate,
            $month_duration,
            $interest,
            $voucher_date,
            $loan_count,
            $maturity_date,
            $principal_interest,
            $balance,
            $return_status,
            $staff_email,
            $staff_name,
            $post_status,
            $approved_by,
            $approved_day,
            $approved_month,
            $approved_year,
            $completion_date,
            $creation_date
        );
    
        while ($stmnt->fetch()) {
    
            $return_error = false;
            $data[] = array(
          
                "id" => $id,
                "acc_number" => $acc_number,
                "amount_given" => $amount_given,
                "rate" => $rate,
                "month_duration" => $month_duration,
                "interest" => $interest,
                "voucher_date" => $voucher_date,
                "loan_count" => $loan_count,
                "maturity_date" => $maturity_date,
                "principal_interest" => $principal_interest,
                "balance" => $balance,
                "return_status" => $return_status,
                "staff_email" => $staff_email,
                "staff_name" => $staff_name,
                "post_status" => $post_status,
                "approved_by" => $approved_by,
                "approved_day" => $approved_day,
                "approved_month" => $approved_month,
                "approved_year" => $approved_year,
                "completion_date" => $completion_date,
                "creation_dat" => $creation_date
        
            );
        
        }
    
        return $res = $return_error ? $return_error : $data;

    } catch (\Throwable $th) {
        echo $th;
    }

}


?>