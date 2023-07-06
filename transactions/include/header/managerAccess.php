<?php

// If user is not a 'Manager' don't give access to this page
if ($_SESSION['role'] == "Manager" || $_SESSION['role'] == "Developer") {

    // OK

} else {

    header("location: home.php");
    exit;

}

?>