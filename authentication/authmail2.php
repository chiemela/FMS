<?php

// Initialize the session
session_start();

// Include config file
require_once "../config.php";

// Check if license has expired
$sqlLicense = "SELECT * FROM license WHERE id ='1'";

if ($resultLicense = mysqli_query($link, $sqlLicense)) {

    if (mysqli_num_rows($resultLicense) > 0) {

        while ($rowLicense = mysqli_fetch_array($resultLicense)) {

            // Assign old license date
            $oldDate = $rowLicense['valid_until'];
            // Assign current license date
            $newDate = date("Y-m-d");
            // Assign date sections into variable
            $time = strtotime($oldDate);
            $month = date("F",$time);
            $year = date("Y",$time);
            $day = date("j",$time);
            $oldDateFormated = $day." ".$month." ".$year;

            $time = strtotime($newDate);

        }

        // Free result set
        mysqli_free_result($resultLicense);

    } else {

        echo "<p class='lead'><em>No records were found.</em></p>";

    }

} else {

    echo "ERROR: Could not able to execute $sqlLicense. " . mysqli_error($link);

}

date_default_timezone_set("Africa/Lagos");
$today = date("F j, Y, g:i a")." local time"; // March 10, 2001, 5:16 pm
$username = $_SESSION['username'];
$email = $_SESSION["useremail"];

// Multiple recipients
$to = "$email"; // note the comma

// Subject
$subject = 'CKC Login Notification';

// Message
$message = '
<html>
<head>
<title>Login Alert</title>
</head>
<body>
    <div id = "container">
        <div>
            <img src="https://accountant.eliamtechnologies.com/ogatim/img/banner.png"/>
        </div>
        <br/>
        <table>
            <tr>
                Dear '.$username.',
                <br/>
                <br/>
                CKC LOGIN CONFIRMATION
                <br/>
                <br/>
                Please be informed your CKC account was just authenticated moments ago at '.$today.'.
                <br/>
                User email: '.$email.'
                <br/>
                <br/>
                If this was not done by you please contact our support team immediately at support@eliamtechnologies.com.
                <br/>
                <br/>
                Regards
                <br/>
                SWAV Team.
            </tr>
        </table>
        <br/>
        <div>
            <br />
            <a href="#"><img src="https://accountant.eliamtechnologies.com/ogatim/img/facebook.png"/></a>
            <a href="#"><img src="https://accountant.eliamtechnologies.com/ogatim/img/twitter.png"/></a>
            <a href="#"><img src="https://accountant.eliamtechnologies.com/ogatim/img/linkedin.png"/></a>
            <br />
            <br />
            <a href="https://eliamtechnologies.com/">www.eliamtechnologies.com</a> 
        </div>
    </div>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Chiemela <chiemela123@gmail.com>';
$headers[] = 'From: SWAV <support@eliamtechnologies.com>';


 
// Sending email
if (mail($to, $subject, $message, implode("\r\n", $headers))) {

    header("location: login.php");
    exit;

} else {

    header("location: ../auth.php");
    exit;

}
?>