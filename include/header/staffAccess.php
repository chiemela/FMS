<?php

// If user is not 'Staff' or 'Developer' don't give access to this page
if ($_SESSION["role"] == "Staff" || $_SESSION['role'] == "Developer") {

    // OK

} else {

    header("location: home.php");
    exit;

}

?>