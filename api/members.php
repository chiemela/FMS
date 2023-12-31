<?php

function get_members() {

    global $link;

    $reg_no = null;
    $title = null;
    $first_name = null;
    $last_name  = null;
    $other_name = null;
    $acc_number = null;
    $phone = null;
    $email = null;
    $address_1 = null;
    $address_2 = null;
    $state = null;
    $gender = null;
    $next_of_kin = null;
    $next_of_kin_phone = null;
    $reg_date = null;
    $reg_by = null;
    $last_updated_day = null;
    $last_updated_month = null;
    $last_updated_year = null;
    $last_updated_datetime = null;
    $creation_date = null;

    $sql = 'SELECT * FROM members';
    $stmnt = $link->prepare($sql);
    $stmnt->execute();
    $stmnt->bind_result(
                    $reg_no,
                    $title,
                    $first_name,
                    $last_name ,
                    $other_name,
                    $acc_number,
                    $phone,
                    $email,
                    $address_1,
                    $address_2,
                    $state,
                    $gender,
                    $next_of_kin,
                    $next_of_kin_phone,
                    $reg_date,
                    $reg_by,
                    $last_updated_day,
                    $last_updated_month,
                    $last_updated_year,
                    $last_updated_datetime,
                    $creation_date
                );

    while ($stmnt->fetch()) {

        $data[] = array(
      
            "acc_number" => $acc_number,
            "title" => $title,
            "first_name" => $first_name,
            "last_name" => $last_name,
            "other_name" => $other_name
    
        );
    
    }

    return $data;

}

function get_members_where($acc_number) {

    global $link;

    $reg_no = null;
    $title = null;
    $first_name = null;
    $last_name  = null;
    $other_name = null;
    // $acc_number = null; this is already passed in the function call
    $phone = null;
    $email = null;
    $address_1 = null;
    $address_2 = null;
    $state = null;
    $gender = null;
    $next_of_kin = null;
    $next_of_kin_phone = null;
    $reg_date = null;
    $reg_by = null;
    $last_updated_day = null;
    $last_updated_month = null;
    $last_updated_year = null;
    $last_updated_datetime = null;
    $creation_date = null;

    $sql = 'SELECT * FROM members WHERE acc_number = ?';
    $stmnt = $link->prepare($sql);
    $stmnt->bind_param("s", $acc_number);
    $stmnt->execute();
    $stmnt->bind_result(
                    $reg_no,
                    $title,
                    $first_name,
                    $last_name ,
                    $other_name,
                    $acc_number,
                    $phone,
                    $email,
                    $address_1,
                    $address_2,
                    $state,
                    $gender,
                    $next_of_kin,
                    $next_of_kin_phone,
                    $reg_date,
                    $reg_by,
                    $last_updated_day,
                    $last_updated_month,
                    $last_updated_year,
                    $last_updated_datetime,
                    $creation_date
                );

    while ($stmnt->fetch()) {

        $data[] = array(
      
            "acc_number" => $acc_number,
            "title" => $title,
            "first_name" => $first_name,
            "last_name" => $last_name,
            "other_name" => $other_name
    
        );
    
    }

    return $data;

}

//$stmnt->close();

?>