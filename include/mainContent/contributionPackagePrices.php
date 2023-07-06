<?php

$global_amount = array();
$global_duration = array();
$global_duration_unit = array();
$global_subscription_session = array();
$global_session_package = array();
$yearPackageOneItems = "Rice, Tomatoes, Groundnut oil, Stockfish head.";
$yearPackageTwoItems = "Stockfish head, Crayfish, Dryfish.";
$yearPackageThreeItems = "Milo, Milk, Sugar, Indomie, Custered, Corn flakes, Egg crate, Cabin biscuit.";
$yearPackageFourItems = "Goat.";
$quarterPackageOneItems = "Stockfish head.";
$quarterPackageTwoItems = "Dryfish.";
$quarterPackageThreeItems = "Milk, Milo, Sugar, Indomie, Egg crate.";


// start: get amount and duration for each subscription_session and session_package

$sql = "SELECT * FROM ckc_2021_contribution_prices";

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_array($result)) {

            $global_amount[] = $row["amount"];
            $global_duration[] = $row["duration"];
            $global_duration_unit[] = $row["duration_unit"];
            $global_subscription_session[] = $row["subscription_session"];
            $global_session_package[] = $row["session_package"];

        }

    }

} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// end: get amount and duration for each subscription_session and session_package

?>