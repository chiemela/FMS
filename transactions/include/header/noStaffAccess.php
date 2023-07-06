<?php

// If user is 'Staff' don't give access to this page
if ($_SESSION["role"] == "Staff") {

    header("location: home.php");
    exit;

}

?>