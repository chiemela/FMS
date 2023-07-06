<?php

$i = 6; // assign starting value to array index

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1100000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1100000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1110010
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1110010 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1112000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1112000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1112010
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1112010 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1400000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1400000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1410000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1410000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1410040
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1410040 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1410100
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1410100 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1410110
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1410110 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1550030
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1550030 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1600000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1600000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1610000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1610000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1620000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1620000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1620100
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1620100 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1700000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1700000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1710000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1710000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1710010
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1710010 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1720500
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1720500 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1723020
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1723020 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1800000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1800000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1820010
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1820010 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1830000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1830000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1830050
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1830050 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1841000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1841000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1841010
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1841010 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1841015
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1841015 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1850000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1850000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1851000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1851000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1851100
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1851100 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1852000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1852000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1852100
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1852100 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1870000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1870000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1871000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1871000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1872000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1872000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1873000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1873000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1874000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1874000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1874500
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1874500 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1875000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1875000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1875005
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1875005 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1875010
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1875010 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1875020
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1875020 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1875030
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1875030 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1875040
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1875040 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1875050
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1875050 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1900000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1900000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1910000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1910000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1911000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1911000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1911100
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1911100 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1912000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1912000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1920000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1920000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1921000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1921000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1930000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1930000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1931000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1931000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1940000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1940000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1941000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1941000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1943000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1943000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1950000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1950000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1951000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1951000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

// Get "credit" and "debit" from TABLE ckc_2021_balance_sheet_assets_AS1000000
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_AS1000000 WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];

    }

}

$i++; // increment the array index value

?>