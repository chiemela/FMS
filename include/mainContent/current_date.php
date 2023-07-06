<?php

date_default_timezone_set('Europe/London'); // Get the current datetime for London
$date = date('Y-m-d'); // Get the current date
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

// Get current time
$currentTime = strtotime($date);
$currentMonth = date("m",$currentTime);
$currentYear = date("Y",$currentTime);
$currentDay = date("j",$currentTime);

?>