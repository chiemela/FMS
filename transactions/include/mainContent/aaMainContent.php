<?php

$approved = "Approved";
$active = "Active";
$AS1700000 = 0;
$LI2141000 = 0;
$LI2142000 = 0;
$LI2121000_credit = 0;
$LI2121000_debit = 0;
$IN3201025 = 0;
$IN3201027 = 0;
$IN3201061 = 0;
$IN3207051 = 0;
$IN3207054 = 0;
$IN3201020 = 0;
$IN3202021 = 0;
$count = 1;

// Get the records from the activities

// Get "amount_given" from TABLE ckc_2021_loan_get
$sql = "SELECT amount_given FROM ckc_2021_loan_get WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $AS1700000 += $row["amount_given"];

    }

}

// Get "redeem_per_week" from TABLE ckc_2021_akawo_redeem
$sql = "SELECT redeem_per_week FROM ckc_2021_akawo_redeem WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $LI2141000 = $row["redeem_per_week"];

    }

}

// Get "redeem_per_week" from TABLE ckc_2021_thirft_redeem
$sql = "SELECT redeem_per_week FROM ckc_2021_thirft_redeem WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $LI2142000 += $row["redeem_per_week"];

    }

}

// Get "amount" from TABLE ckc_2021_savings_credit
$sql = "SELECT amount FROM ckc_2021_savings_credit WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $LI2121000_credit += $row["amount"];

    }

}

// Get "amount" from TABLE ckc_2021_savings_debit
$sql = "SELECT amount FROM ckc_2021_savings_debit WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $LI2121000_debit += $row["amount"];

    }

}

$net_balance_savings = $LI2121000_credit - $LI2121000_debit;

// Get "company_interest" from TABLE ckc_2021_akawo_create
$sql = "SELECT company_interest FROM ckc_2021_akawo_create WHERE active_status = '$active' AND tally_count >= '$count'";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $IN3201025 += $row["company_interest"];

}

// Get "company_weekly_interest" from TABLE ckc_2021_thrift_create_group
$sql = "SELECT company_weekly_interest FROM ckc_2021_thrift_create_group WHERE post_status = '$approved'";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $IN3201027 += $row["company_weekly_interest"];

}

// Get "amount" from TABLE ckc_2021_contribution_market_balance
$sql = "SELECT amount FROM ckc_2021_contribution_market_balance WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $IN3201061 += $row["amount"];

    }

}

// Get "interest, principal_interest" from TABLE ckc_2021_loan_return
$sql = "SELECT interest, principal_interest FROM ckc_2021_loan_return WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $interest = $row["interest"];
        $principal_interest = $row["principal_interest"];
        $IN3207051 += $principal_interest - $interest;

    }

}

// Get "interest, loan_count" from TABLE ckc_2021_loan_return
$sql = "SELECT interest, loan_count FROM ckc_2021_loan_return WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $interest = $row["interest"];
        $loan_count = $row["loan_count"];
    
        if ($loan_count > 0) {
    
            $IN3207054 += $interest;
    
        }

    }

}

// Get "amount" from TABLE ckc_2021_dues_credit
$sql = "SELECT amount FROM ckc_2021_dues_credit WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $IN3201020 += $row["amount"];

    }

}

// Get "amount" from TABLE ckc_2021_mcard_credit
$sql = "SELECT amount FROM ckc_2021_mcard_credit WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $IN3202021 += $row["amount"];

    }

}








// Update the balance sheet

// Attempt update query execution for TABLE 'ckc_2021_periodial_balance_sheet_assets'
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$AS1700000', net_balance = '$AS1700000' WHERE acc_number = 'AS1700000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Attempt update query execution for TABLE 'ckc_2021_periodial_balance_sheet_liability'
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET credit_balance = '$LI2141000', net_balance = '$LI2141000' WHERE acc_number = 'LI2141000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Attempt update query execution for TABLE 'ckc_2021_periodial_balance_sheet_liability'
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET credit_balance = '$LI2142000', net_balance = '$LI2142000' WHERE acc_number = 'LI2142000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Attempt update query execution for TABLE 'ckc_2021_periodial_balance_sheet_liability'
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET credit_balance = '$LI2121000_credit', debit_balance = '$LI2121000_debit', net_balance = '$net_balance_savings' WHERE acc_number = 'LI2121000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Attempt update query execution for TABLE 'ckc_2021_periodial_balance_sheet_income'
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET credit_balance = '$IN3201025', net_balance = '$IN3201025' WHERE acc_number = 'IN3201025' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Attempt update query execution for TABLE 'ckc_2021_periodial_balance_sheet_income'
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET credit_balance = '$IN3201027', net_balance = '$IN3201027' WHERE acc_number = 'IN3201027' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Attempt update query execution for TABLE 'ckc_2021_periodial_balance_sheet_income'
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET credit_balance = '$IN3201061', net_balance = '$IN3201061' WHERE acc_number = 'IN3201061' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Attempt update query execution for TABLE 'ckc_2021_periodial_balance_sheet_income'
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET credit_balance = '$IN3207051', net_balance = '$IN3207051' WHERE acc_number = 'IN3207051' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Attempt update query execution for TABLE 'ckc_2021_periodial_balance_sheet_income'
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET credit_balance = '$IN3207054', net_balance = '$IN3207054' WHERE acc_number = 'IN3207054' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Attempt update query execution for TABLE 'ckc_2021_periodial_balance_sheet_income'
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET credit_balance = '$IN3201020', net_balance = '$IN3201020' WHERE acc_number = 'IN3201020' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Attempt update query execution for TABLE 'ckc_2021_balance_sheet_income'
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET credit_balance = '$IN3202021', net_balance = '$IN3202021' WHERE acc_number = 'IN3202021' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}










// Add up all cells that make up a node


// Select cell all debit and credit from the balance sheet

// Get the credit and debit from TABLE ckc_2021_balance_sheet_assets
$assets_debit = array();
$assets_credit = array();
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets WHERE active_status = '$active'";

$result = mysqli_query($link, $sql);

// Assign the cell number
$i_debit = 6;
$i_credit = 6;

while ($row = mysqli_fetch_array($result)) {

    $assets_debit[$i_debit] = $row["debit_balance"];
    $assets_credit[$i_credit] = $row["credit_balance"];
    // Increment the cell number
    $i_debit++;
    $i_credit++;

}

// Get the credit and debit from TABLE ckc_2021_balance_sheet_liability
$liability_debit = array();
$liability_credit = array();
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_liability WHERE active_status = '$active'";

$result = mysqli_query($link, $sql);

// Assign the cell number
$i_debit = 64;
$i_credit = 64;

while ($row = mysqli_fetch_array($result)) {

    $liability_debit[$i_debit] = $row["debit_balance"];
    $liability_credit[$i_credit] = $row["credit_balance"];
    // Increment the cell number
    $i_debit++;
    $i_credit++;

}

// Get the credit and debit from TABLE ckc_2021_balance_sheet_income
$income_debit = array();
$income_credit = array();
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_income WHERE active_status = '$active'";

$result = mysqli_query($link, $sql);

// Assign the cell number
$i_debit = 201;
$i_credit = 201;

while ($row = mysqli_fetch_array($result)) {

    $income_debit[$i_debit] = $row["debit_balance"];
    $income_credit[$i_credit] = $row["credit_balance"];
    // Increment the cell number
    $i_debit++;
    $i_credit++;

}

// Get the credit and debit from TABLE ckc_2021_balance_sheet_expense
$expense_debit = array();
$expense_credit = array();
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_expense WHERE active_status = '$active'";

$result = mysqli_query($link, $sql);

// Assign the cell number
$i_debit = 242;
$i_credit = 242;

while ($row = mysqli_fetch_array($result)) {

    $expense_debit[$i_debit] = $row["debit_balance"];
    $expense_credit[$i_credit] = $row["credit_balance"];
    // Increment the cell number
    $i_debit++;
    $i_credit++;

}

// Get the credit and debit from TABLE ckc_2021_balance_sheet_contigent_assets
$contigent_assets_debit = array();
$contigent_assets_credit = array();
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_contigent_assets WHERE active_status = '$active'";

$result = mysqli_query($link, $sql);

// Assign the cell number
$i_debit = 384;
$i_credit = 384;

while ($row = mysqli_fetch_array($result)) {

    $contigent_assets_debit[$i_debit] = $row["debit_balance"];
    $contigent_assets_credit[$i_credit] = $row["credit_balance"];
    // Increment the cell number
    $i_debit++;
    $i_credit++;

}

// Get the credit and debit from TABLE ckc_2021_balance_sheet_contigent_liability
$contigent_liability_debit = array();
$contigent_liability_credit = array();
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_contigent_liability WHERE active_status = '$active'";

$result = mysqli_query($link, $sql);

// Assign the cell number
$i_debit = 391;
$i_credit = 391;

while ($row = mysqli_fetch_array($result)) {

    $contigent_liability_debit[$i_debit] = $row["debit_balance"];
    $contigent_liability_credit[$i_credit] = $row["credit_balance"];
    // Increment the cell number
    $i_debit++;
    $i_credit++;

}













// assets


// Cell mapping on excel

// Begining of Assets

// Debit
$C62 = $assets_debit[63];
$C59 = $assets_debit[60];
$C57 = $assets_debit[58];
$C55 = $assets_debit[56];
$C52 = $assets_debit[53];
$C51 = $C52 + $assets_debit[54];
$C50 = $C52 + $C55 + $C57 + $C59 + $C62 + $assets_debit[61];
$C43 = $assets_debit[44] + $assets_debit[45] + $assets_debit[46] + $assets_debit[47] + $assets_debit[48] + $assets_debit[49];
$C38 = $assets_debit[39] + $assets_debit[40] + $assets_debit[41] + $assets_debit[42];
$C37 = $C38 + $C43;
$C31 = $assets_debit[31];
$C30 = $assets_debit[30];
$C32 = $assets_debit[33] + $assets_debit[34] + $assets_debit[35] + $assets_debit[36];
$C29 = $assets_debit[30] + $assets_debit[31];
$C27 = $assets_debit[28];
$C26 = $assets_debit[26];
$C25 = $assets_debit[26] + $C27 + $C29 + $C32 + $C37;
$C23 = $assets_debit[23];
$C22 = $assets_debit[22];
$C21 = $assets_debit[22];
$C20 = $C21 + $assets_debit[23] + $assets_debit[24];
$C18 = $assets_debit[19];
$C17 = $assets_debit[17];
$C16 = $assets_debit[16];
$C14 = $assets_debit[14];
$C7 = $assets_debit[9];
$C9 = $assets_debit[9];

// Credit
$D62 = $assets_credit[63];
$D59 = $assets_credit[60] + $assets_credit[61];
$D57 = $assets_credit[58];
$D55 = $assets_credit[56];
$D52 = $assets_credit[53];
$D51 = $D52 + $assets_credit[54];
$D50 = $D51 + $D52 + $D55 + $D57 + $D59 + $D62;
$D43 = $assets_credit[44] + $assets_credit[45] + $assets_credit[46] + $assets_credit[47] + $assets_credit[48] + $assets_credit[49];
$D41 = $assets_credit[41];
$D38 = $assets_credit[39] + $assets_credit[40] + $D41 + $assets_credit[42];
$D37 = $D38 + $D43;
$D32 = $assets_credit[32];
$D31 = $assets_credit[31];
$D30 = $assets_credit[30];
$D29 = $assets_credit[29];
$D27 = $assets_credit[28];
$D26 = $assets_credit[26];
$D25 = $assets_credit[26] + $assets_credit[27] + $assets_credit[29] + $assets_credit[32] + $assets_credit[37];
$D23 = $assets_credit[23];
$D22 = $assets_credit[22];
$D21 = $assets_credit[22];
$D20 = $D21 + $assets_credit[23] + $assets_credit[26] + $assets_credit[27];
$D18 = $assets_credit[19];
$D17 = $assets_credit[17];
$D16 = $assets_credit[16];
$D14 = $assets_credit[14];
// End of Assets










// income
// Begining of Income

// Debit
$C229 = $income_debit[230] + $income_debit[231] + $income_debit[232];
$C224 = $income_debit[225] + $income_debit[226] + $income_debit[227] + $income_debit[228];
$C217 = $income_debit[218] + $income_debit[219] + $income_debit[220] + $income_debit[221] + $income_debit[222] + $income_debit[223];
$C212 = $income_debit[213] + $income_debit[214] + $income_debit[215] + $income_debit[216] + $income_debit[217];
$C201 = $C202 = $C203 = $C211 = $C231 = $C233 = $C238 = 0;


// Credit
$D238 = $income_credit[239] + $income_credit[240] + $income_credit[241];
$D233 = $income_credit[234] + $income_credit[235] + $income_credit[236] + $income_credit[237] + $D238;
$D231 = $income_credit[232];
$D229 = $income_credit[230] + $D231 + $income_credit[232];
$D224 = $income_credit[225] + $income_credit[226] + $income_credit[227] + $income_credit[228];
$D217 = $income_credit[218] + $income_credit[219] + $income_credit[220] + $income_credit[221] + $income_credit[222] + $income_credit[223];
$D212 = $income_credit[213] + $income_credit[214] + $income_credit[215] + $income_credit[216] + $D217;
$D211 = $D212 + $D224 + $D229 + $D233;
$D203 = $income_credit[204] + $income_credit[205] + $income_credit[206] + $income_credit[207] + $income_credit[208] + $income_credit[209];
$D202 = $D203;
// End of Income








// expense
// Begining of Expense

// Debit
$C382 = $expense_debit[383];
$C376 = $expense_debit[377] + $expense_debit[378] + $expense_debit[379] + $expense_debit[380] + $expense_debit[381];
$C368 = $expense_debit[369] + $expense_debit[370] + $expense_debit[371] + $expense_debit[372] + $expense_debit[373] + $expense_debit[374] + $expense_debit[375];
$C366 = $expense_debit[367];
$C364 = $expense_debit[365];
$C362 = $expense_debit[363];
$C352 = $expense_debit[353] + $expense_debit[354] + $expense_debit[355] + $expense_debit[356] + $expense_debit[357] + $expense_debit[358] + $expense_debit[359] + $expense_debit[360] + $expense_debit[361];
$C351 = $C352 + $C362;
$C344 = $expense_debit[345] + $expense_debit[346] + $expense_debit[347] + $expense_debit[348] + $expense_debit[349] + $expense_debit[350];
$C341 = $expense_debit[342] + $expense_debit[343];
$C335 = $expense_debit[336] + $expense_debit[337] + $expense_debit[338] + $expense_debit[339] + $expense_debit[340];
$C329 = $expense_debit[330] + $expense_debit[331] + $expense_debit[332] + $expense_debit[333] + $expense_debit[334];
$C326 = $expense_debit[327] + $expense_debit[328];
$C321 = $expense_debit[322] + $expense_debit[323] + $expense_debit[324] + $expense_debit[325];
$C319 = $expense_debit[320];
$C315 = $expense_debit[316] + $expense_debit[317] + $expense_debit[318];
$C313 = $expense_debit[314];
$C310 = $expense_debit[311] + $expense_debit[312];
$C307 = $expense_debit[308] + $expense_debit[309];
$C298 = $expense_debit[299] + $expense_debit[300] + $expense_debit[301] + $expense_debit[302] + $expense_debit[303] + $expense_debit[304] + $expense_debit[305] + $expense_debit[306];
$C298 = $expense_debit[299] + $expense_debit[300] + $expense_debit[301] + $expense_debit[302] + $expense_debit[303] + $expense_debit[304] + $expense_debit[305] + $expense_debit[306];
$C297 = $expense_debit[298] + $expense_debit[307];
$C294 = $expense_debit[295] + $expense_debit[296];
$C278 = $expense_debit[279] + $expense_debit[280] + $expense_debit[281] + $expense_debit[282] + $expense_debit[283] + $expense_debit[284] + $expense_debit[285] + $expense_debit[286] +  $expense_debit[287] + $expense_debit[288] + $expense_debit[289] + $expense_debit[290] + $expense_debit[291] + $expense_debit[292] + $expense_debit[293];
$C270 = $expense_debit[271] + $expense_debit[272] + $expense_debit[273] + $expense_debit[274] + $expense_debit[275] + $expense_debit[276] + $expense_debit[277] + $expense_debit[278];
$C269 = $C270 + $C294 + $C297 + $C310 + $C313 + $C315 + $C319 + $C321 + $C326 + $C329 + $C335 + $C341 + $C344 + $C351 + $C364 + $C366 + $C368 + $C376 + $C382;
$C267 = $expense_debit[268];
$C265 = $expense_debit[266];
$C262 = $expense_debit[263] + $expense_debit[264];
$C257 = $expense_debit[258] + $expense_debit[259] + $expense_debit[260] + $expense_debit[261];
$C252 = $expense_debit[253] + $expense_debit[254] + $expense_debit[255] + $expense_debit[256];
$C251 = $C252 + $C257 + $C262 +$C265 + $C267;
$C243 = $expense_debit[244] + $expense_debit[245] + $expense_debit[246] +  $expense_debit[247] + $expense_debit[248] + $expense_debit[249] + $expense_debit[250];



// Credit
$D382 = $expense_credit[383];
$D376 = $expense_credit[377] + $expense_credit[378] + $expense_credit[379] + $expense_credit[380] + $expense_credit[381];
$D368 = $expense_credit[369] + $expense_credit[370] + $expense_credit[371] + $expense_credit[372] + $expense_credit[373] + $expense_credit[374] + $expense_credit[375];
$D366 = $expense_credit[367];
$D364 = $expense_credit[365];
$D362 = $expense_credit[363];
$D352 = $expense_credit[353] + $expense_credit[354] + $expense_credit[355] + $expense_credit[356] + $expense_credit[357] + $expense_credit[358] + $expense_credit[359] + $expense_credit[360] + $expense_credit[361];
$D351 = $expense_credit[352] + $D362;
$D344 = $expense_credit[345] + $expense_credit[346] + $expense_credit[347] + $expense_credit[348] + $expense_credit[349] + $expense_credit[350];
$D341 = $expense_credit[342] + $expense_credit[343];
$D335 = $expense_credit[336] + $expense_credit[337] + $expense_credit[338] + $expense_credit[339] + $expense_credit[340];
$D329 = $expense_credit[330] + $expense_credit[331] + $expense_credit[332] + $expense_credit[333] + $expense_credit[334];
$D326 = $expense_credit[327] + $expense_credit[328];
$D321 = $expense_credit[322] + $expense_credit[323] + $expense_credit[324] + $expense_credit[325];
$D319 = $expense_credit[320];
$D315 = $expense_credit[316] + $expense_credit[317] + $expense_credit[318];
$D313 = $expense_credit[314];
$D310 = $expense_credit[311] + $expense_credit[312];
$D307 = $expense_credit[308] + $expense_credit[309];
$D298 = $expense_credit[299] + $expense_credit[300] + $expense_credit[301] + $expense_credit[308] + $expense_credit[303] + $expense_credit[304] + $expense_credit[305] + $expense_credit[306];
$D297 = $D298 + $D307;
$D294 = $expense_credit[295] + $expense_credit[296];
$D278 = $expense_credit[279] + $expense_credit[280] + $expense_credit[281] + $expense_credit[282] + $expense_credit[283] + $expense_credit[284] + $expense_credit[285] + $expense_credit[286] + $expense_credit[287] + $expense_credit[288] + $expense_credit[289] + $expense_credit[290] + $expense_credit[291] + $expense_credit[292] + $expense_credit[293];
$D270 = $expense_credit[271] + $expense_credit[272] + $expense_credit[273] + $expense_credit[274] + $expense_credit[275] + $expense_credit[276] + $expense_credit[277] + $D278;
$D269 = $D270 + $D294 + $D297 + $D310 + $D313 + $D319 + $D326 + $D329 + $D335 + $D341 + $D344 + $D351 + $D364 + $D366 + $D368 + $D376 + $D382;
$D267 = $expense_credit[268];
$D265 = $expense_credit[266];
$D262 = $expense_credit[263] + $expense_credit[264];
$D257 = $expense_credit[258] + $expense_credit[259] + $expense_credit[260] + $expense_credit[261];
$D252 = $expense_credit[253] + $expense_credit[254] + $expense_credit[255];
$D251 = $D252 + $D257 + $D262 + $D265 + $D267;
$D243 = $expense_credit[244] + $expense_credit[245] + $expense_credit[246] + $expense_credit[247] + $expense_credit[248] + $expense_credit[249] + $expense_credit[250];
// End of Expense







// contingent_assets
// Begining of Contingent Assets
// Debit
$C385 = $contigent_assets_debit[386] + $contigent_assets_debit[387] + $contigent_assets_debit[388] + $contigent_assets_debit[389] + $contigent_assets_debit[390];
$C384 = $C385;

// Credit
$D385 = $contigent_assets_credit[386] + $contigent_assets_credit[387] + $contigent_assets_credit[388] + $contigent_assets_credit[389] + $contigent_assets_credit[390];
$D384 = $D385;
// End of Contingent Assets









// contigent_liability

// Begining of Contingent Liability
// Debit
$C392 = $contigent_liability_debit[393] + $contigent_liability_debit[394] + $contigent_liability_debit[395] + $contigent_liability_debit[396];
$C391 = $C392;

// Debit
$D392 = $contigent_liability_credit[393] + $contigent_liability_credit[394] + $contigent_liability_credit[395] + $contigent_liability_credit[396];
$D391 = $D392;
// End of Contingent Liability









// This is the main INCOME CREDIT node which should be at the bottom of all summation
$D201 = $D202 + $D211 + $D231;

// This is the main EXPENSE CREDIT node which should be at the bottom of all summation
$D242 = $D243 + $D251 + $D269;

// This is the main EXPENSE DEBIT node which should be at the bottom of all summation
$C242 = $C243 + $C251 + $C269;



// liability
// Begining of Liabilities
$C99 = $liability_debit[100] + $liability_debit[101];
// $C199 = ($B407 = ($C401 = ($E201 = $D201 - $C201)) - ($B402 = ($E242 = $C242 - $D242))) - $C99;
$C199 = ($B407 = 0) - $C99;
$C193 = $liability_debit[194] + $liability_debit[195] + $liability_debit[196] + $liability_debit[197] + $liability_debit[198] + $C199 + $liability_debit[200];
$C178 = $liability_debit[179] + $liability_debit[180] + $liability_debit[181] + $liability_debit[182] + $liability_debit[183] + $liability_debit[184] + $liability_debit[185] + $liability_debit[186] + $liability_debit[187] + $liability_debit[188] + $liability_debit[189] + $liability_debit[190] + $liability_debit[191] + $liability_debit[192];
$C162 = $liability_debit[163] + $liability_debit[164] + $liability_debit[165] + $liability_debit[166] + $liability_debit[167] + $liability_debit[168] + $liability_debit[169] + $liability_debit[170] + $liability_debit[171] + $liability_debit[172] + $liability_debit[173] + $liability_debit[174] + $liability_debit[175] + $liability_debit[176] + $liability_debit[177] + $C178;
$C159 = $liability_debit[160] + ($C161 = $liability_debit[161]);
$C156 = $liability_debit[157] + ($C158 = $liability_debit[158]);
$C154 = $liability_debit[155];
$C138 = $liability_debit[139] + $liability_debit[140] + $liability_debit[141] + $liability_debit[142] + $liability_debit[143] + $liability_debit[144] + $liability_debit[145] + $liability_debit[146] + $liability_debit[147] + $liability_debit[148] + $liability_debit[149] + $liability_debit[150] + $liability_debit[151] + $liability_debit[152] + $liability_debit[153];
$C134 = $liability_debit[135] + $liability_debit[136];
$C133 = $C134 + $liability_debit[135];
$C132 = $C133 + $C134;
$C131 = $C132 + $C133;
$C130 = $C131 + $C132;
$C129 = $C130 + $C131;
$C128 = $C129 + $C130;
$C127 = $C128 + $C129;
$C126 = $C127 + $C128;
$C125 = $C126 + $C127;
$C124 = $C125 + $C126;
$C123 = $C124 + $C125;
$C122 = $C123 + $C124;
$C121 = $C122 + $C123;
$C120 = $C121 + $C122;
$C119 = $C120 + $C121;
$C118 = $C119 + $C120;
$C117 = $C118 + $C119;
$C116 = $C117 + $C118;
$C115 = $C116 + $C117;
$C114 = $C115 + $C116;
$C113 = $C114 + $C115;
$C112 = $C113 + $C114;
$C111 = $C112 + $C113;
$C110 = $C111 + $C112;
$C109 = $C110 + $C111;
$C108 = $C109 + $C110;
$C107 = $C108 + $C109;
$C106 = $C107 + $C108;
$C105 = $C106 + $C107;
$C104 = $C105 + $C106;
$C103 = $C104 + $C105;
$C102 = $C103 + $C104;
$C97 = $liability_debit[98];
$C95 = $liability_debit[96];
$C93 = $liability_debit[94];
$C92 = $C93 + $C95 + $C97 + $C99 +$C102 + $C105 + $C110 + $C116 + $C134 + $C138 + $C154 + $C156 + $C162 + $C159;
$C90 = $liability_debit[91];
$C86 = $liability_debit[87] + $liability_debit[88] + $liability_debit[89] + $C90;
$C82 = $liability_debit[83] + $liability_debit[84] + $liability_debit[85];
$C78 = $liability_debit[79] + $liability_debit[80] + $liability_debit[81]+ $C82;
$C74 = $liability_debit[75] + $liability_debit[76] + $liability_debit[77];
$C70 = $liability_debit[71] + $liability_debit[72] + $liability_debit[73];
$C66 = $liability_debit[67] + $liability_debit[68] + $liability_debit[69] + $C70;
$C65 = $C66 + $C74 + $C78 + $C86;



// CREDIT
$C407 = ($C401 = ($E201 = $D201 - $C201)) - ($B402 = ($E242 = $C242 - $D242));
$D199 = $C407;
$D193 = $liability_credit[194] + $liability_credit[195] + $liability_credit[196] + $liability_credit[197] + $liability_credit[198] + $D199 + $liability_credit[200];
$D178 = $liability_credit[179] + $liability_credit[180] + $liability_credit[181] + $liability_credit[182] + $liability_credit[183] + $liability_credit[184] + $liability_credit[185] + $liability_credit[186] + $liability_credit[187] + $liability_credit[188] + $liability_credit[189] + $liability_credit[190] + $liability_credit[191] + $liability_credit[192];
$D162 = $liability_credit[164] + $liability_credit[165] + $liability_credit[166] + $liability_credit[167] + $liability_credit[168] + $liability_credit[169] + $liability_credit[170] + $liability_credit[171] + $liability_credit[172] + $liability_credit[173] + $liability_credit[174] + $liability_credit[175] + $liability_credit[177] + $D178;
$D161 = $C407;
$D159 = $liability_credit[160] + $D161;
$D158 = $D41;
$D156 = $liability_credit[157] + $D158;
$D154 = $liability_credit[155];
$D138 = $liability_credit[139] + $liability_credit[140] + $liability_credit[141] + $liability_credit[142] + $liability_credit[143] + $liability_credit[144] + $liability_credit[145] + $liability_credit[146] + $liability_credit[147] + $liability_credit[148] + $liability_credit[149] + $liability_credit[150] + $liability_credit[151] + $liability_credit[152] + $liability_credit[153];
$D134 = $liability_credit[137];
$D133 = $liability_credit[133];
$D132 = $liability_credit[132];
$D131 = $liability_credit[131];
$D130 = $D131 + $D132 + $D133;
$D129 = $liability_credit[129];
$D128 = $liability_credit[128];
$D127 = $liability_credit[127];
$D126 = $D127 + $D128 + $D129;
$D125 = $liability_credit[125];
$D124 = $liability_credit[124];
$D123 = $liability_credit[123];
$D122 = $D123 + $D124 + $D125;
$D121 = $liability_credit[121];
$D120 = $liability_credit[120];
$D119 = $liability_credit[119];
$D117 = ($D118 = $liability_credit[118]) + $D119;
$D116 = $D118 + $D120 + $D121 + $D122 + $D126 + $D130;
$D115 = $liability_credit[115];
$D114 = $liability_credit[114];
$D113 = $liability_credit[113];
$D112 = $liability_credit[112];
$D111 = $liability_credit[111];
$D110 = $liability_credit[111] + $liability_credit[112] + $liability_credit[113] + $liability_credit[114] + $liability_credit[115];
$D109 = $liability_credit[109];
$D108 = $liability_credit[108];
$D107 = $liability_credit[107];
$D106 = $liability_credit[106];
$D105 = $D106 + $D107 + $D108 + $D109;
$D102 = $liability_credit[103] + $liability_credit[104];
$D99 = $liability_credit[100] + $liability_credit[101];
$D97 = $liability_credit[98];
$D95 = $liability_credit[96];
$D93 = $liability_credit[94];
$D92 = $D93 + $D95 + $D97 + $D99 + $D102 + $D105 + $D110 + $D116 + $D134 + $D138 + $D154 + $D156 + $D162 + $D159;
$D90 = $liability_credit[91];
$D86 = $liability_credit[87] + $liability_credit[88] + $liability_credit[89] + $D90;
$D82 = $liability_credit[83] + $liability_credit[84] + $liability_credit[85];
$D78 = $liability_credit[79] + $liability_credit[80] + $liability_credit[81] + $D82;
$D74 = $liability_credit[75] + $liability_credit[76] + $liability_credit[77];
$D70 = $liability_credit[71] + $liability_credit[72] + $liability_credit[73];
$D66 = $liability_credit[67] + $liability_credit[68] + $liability_credit[69] + $D70;
$D65 = $D66 + $D74 + $D78 + $D86;
// End of Liabilities









// This is the main ASSETS DEBIT node which should be at the bottom of all summation
$C6 = $C7 + $C12 + $C15 + $C18 + $C20 + $C27 + $C29 + $C32 + $C37 + $C50 - $C242;

// This is the main ASSETS CREDIT node which should be at the bottom of all summation
$D6 = $D7 + $D12 + $D15 + $D18 + $D20 + $D27 + $D29 + $D32 + $D37 + $D50;

// This is the main LIABILITY DEBIT node which should be at the bottom of all summation
$C64 = $C65 + $C92 + $C193;

// This is the main LIABILITY CREDIT node which should be at the bottom of all summation
$D64 = $D65 + $D92 + $D193 - $E201;








// Balance sheet summary
$E6 = $C6 - $D6;
$B399 = $assets_debit_summary = $E6;

$E201 = $D201 - $C201;
$E242 = $C242 - $D242;
$C400 = $liability_credit_summary = ($E64 = $D64 - $C64) - ($C407 = ($C401 = $E201) - ($B402 = $E242));

$C401 = $income_credit_summary = $E201;

$B402 = $expense_debit_summary = $E242;

$B403 = $total_real_balance_debit = $assets_debit_summary + $expense_debit_summary;

$C403 = $total_real_balance_credit = $liability_credit_summary + $income_credit_summary;

$E384 = $C384 - $D384;
$B404 = $contingent_assets_debit_summary = $E384;

$E391 = $D391 - $C391;
$C405 = $contingent_liability_credit_summary = $E391;

$B406 = $total_contingent_balance_debit = $contingent_assets_debit_summary;

$C406 = $total_contingent_balance_credit = $contingent_liability_credit_summary;

$C407 = $net_profit_and_loss = $income_credit_summary - $expense_debit_summary;

$total_debit = $B403 + $B404 + $B406;

$total_credit = $C403 + $C405 + $C406;
















// Update the nodes in the balance sheet

// assets
$E6 = $C6 - $D6;
// Attempt update query execution for TABLE 'ckc_2021_balance_sheet_assets'
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C6', credit_balance = '$D6', net_balance = '$E6' WHERE acc_number = 'AS1000000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E7 = (($E8 = ($E9 = $C9 - $D9)) + ($E10 = $C10 - $D10));
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C9', net_balance = '$E7' WHERE acc_number = 'AS1100000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E8 = ($E9 = $C9 - $D9);
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E8' WHERE acc_number = 'AS1110000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E12 = (($E13 = $C13 - $D13) + ($E14 = $C14 - $D14));
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E12' WHERE acc_number = 'AS1400000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E15 = (($E16 = $C16 - $D16) + ($E17 = $C17 - $D17));
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E15' WHERE acc_number = 'AS1550030' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E18 = $C18 - $D18;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C18', credit_balance = '$D18', net_balance = '$E18' WHERE acc_number = 'AS1620000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E20 = $C20 - $D20;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C20', credit_balance = '$D20', net_balance = '$E20' WHERE acc_number = 'AS1700000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E21 = (($E22 = $C22 - $D22) + ($E23 = $C23 - $D23) + ($E26 = $C26 - $D26));
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C22', credit_balance = '$D22', net_balance = '$E21' WHERE acc_number = 'AS1710000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E25 = $C25 - $D25;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C25', credit_balance = '$D25', net_balance = '$E25' WHERE acc_number = 'AS1800000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E27 = $C27 - $D27;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C27', credit_balance = '$D27', net_balance = '$E27' WHERE acc_number = 'AS1830000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C29 = $C30 + $C31;
$D29 = $D30 + $D31;
$E29 = ($E30 = $C30 - $D30) + ($E31 = $C31 - $D31);
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C29', credit_balance = '$D29', net_balance = '$E29' WHERE acc_number = 'AS1841000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E32 = $C32 - $D32;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C32', credit_balance = '$D32', net_balance = '$E32' WHERE acc_number = 'AS1850000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E37 = $C37 - $D37;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C37', credit_balance = '$D37', net_balance = '$E37' WHERE acc_number = 'AS1870000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E38 = $C38 - $D38;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C38', credit_balance = '$D38', net_balance = '$E38' WHERE acc_number = 'AS1871000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E43 = $C43 - $D43;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C43', credit_balance = '$D43', net_balance = '$E43' WHERE acc_number = 'AS1875000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E50 = $C50 - $D50;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C50', credit_balance = '$D50', net_balance = '$E50' WHERE acc_number = 'AS1900000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E51 = $C51 - $D51;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C51', credit_balance = '$D51', net_balance = '$E51' WHERE acc_number = 'AS1910000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E52 = $C52 - $D52;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C52', credit_balance = '$D52', net_balance = '$E52' WHERE acc_number = 'AS1911000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E55 = $C55 - $D55;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C55', credit_balance = '$D55', net_balance = '$E55' WHERE acc_number = 'AS1920000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E57 = $C57 - $D57;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C57', credit_balance = '$D57', net_balance = '$E57' WHERE acc_number = 'AS1930000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E59 = $C59 - $D59;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C59', credit_balance = '$D59', net_balance = '$E59' WHERE acc_number = 'AS1940000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E62 = $C62 - $D62;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET debit_balance = '$C62', credit_balance = '$D62', net_balance = '$E62' WHERE acc_number = 'AS1950000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

















// liability


$E64 = $D64 - $C64;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C64', credit_balance = '$D64', net_balance = '$E64' WHERE acc_number = 'LI2000000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E65 = $D65 - $C65;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C65', credit_balance = '$D65', net_balance = '$E65' WHERE acc_number = 'LI2100000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E66 = $D66 - $C66;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C66', credit_balance = '$D66', net_balance = '$E66' WHERE acc_number = 'LI2110000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E70 = $D70 - $C70;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C70', credit_balance = '$D70', net_balance = '$E70' WHERE acc_number = 'LI2114000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E74 = $D74 - $C74;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C74', credit_balance = '$D74', net_balance = '$E74' WHERE acc_number = 'LI2120000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E78 = $D78 - $C78;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C78', credit_balance = '$D78', net_balance = '$E78' WHERE acc_number = 'LI2130000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E82 = $D82 - $C82;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C82', credit_balance = '$D82', net_balance = '$E82' WHERE acc_number = 'LI2134000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E86 = $D86 - $C86;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C86', credit_balance = '$D86', net_balance = '$E86' WHERE acc_number = 'LI2140000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E90 = $D90 - $C90;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C90', credit_balance = '$D90', net_balance = '$E90' WHERE acc_number = 'LI2144000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E92 = $D92 - $C92;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C92', credit_balance = '$D92', net_balance = '$E92' WHERE acc_number = 'LI2300000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E93 = $D93 - $C93;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C93', credit_balance = '$D93', net_balance = '$E93' WHERE acc_number = 'LI2315000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E95 = $D95 - $C95;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C95', credit_balance = '$D95', net_balance = '$E95' WHERE acc_number = 'LI2315012' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E97 = $D97 - $C97;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C97', credit_balance = '$D97', net_balance = '$E97' WHERE acc_number = 'LI2320000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E99 = $D99 - $C99;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C99', credit_balance = '$D99', net_balance = '$E99' WHERE acc_number = 'LI2330000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E102 = $D102 - $C102;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C102', credit_balance = '$D102', net_balance = '$E102' WHERE acc_number = 'LI2340000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E105 = $D105 - $C105;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C105', credit_balance = '$D105', net_balance = '$E105' WHERE acc_number = 'LI2375000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E106 = $D106 - $C106;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C106', credit_balance = '$D106', net_balance = '$E106' WHERE acc_number = 'LI2375100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E107 = $D107 - $C107;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C107', credit_balance = '$D107', net_balance = '$E107' WHERE acc_number = 'LI2376100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E108 = $D108 - $C108;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C108', credit_balance = '$D108', net_balance = '$E108' WHERE acc_number = 'LI2376850' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E109 = $D109 - $C109;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C109', credit_balance = '$D109', net_balance = '$E109' WHERE acc_number = 'LI2376900' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E110 = $D110 - $C110;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C110', credit_balance = '$D110', net_balance = '$E110' WHERE acc_number = 'LI2380000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E111 = $D111 - $C111;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C111', credit_balance = '$D111', net_balance = '$E111' WHERE acc_number = 'LI2381000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E112 = $D112 - $C112;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C112', credit_balance = '$D112', net_balance = '$E112' WHERE acc_number = 'LI2381100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E113 = $D113 - $C113;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C113', credit_balance = '$D113', net_balance = '$E113' WHERE acc_number = 'LI2381200' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E114 = $D114 - $C114;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C114', credit_balance = '$D114', net_balance = '$E114' WHERE acc_number = 'LI2381250' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E115 = $D115 - $C115;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C115', credit_balance = '$D115', net_balance = '$E115' WHERE acc_number = 'LI2390000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E116 = $D116 - $C116;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C116', credit_balance = '$D116', net_balance = '$E116' WHERE acc_number = 'LI2400000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E117 = $D117 - $C117;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C117', credit_balance = '$D117', net_balance = '$E117' WHERE acc_number = 'LI2405000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E118 = $D118 - $C118;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C118', credit_balance = '$D118', net_balance = '$E118' WHERE acc_number = 'LI2405001' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E119 = $D119 - $C119;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C119', credit_balance = '$D119', net_balance = '$E119' WHERE acc_number = 'LI2405010' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E120 = $D120 - $C120;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C120', credit_balance = '$D120', net_balance = '$E120' WHERE acc_number = 'LI2405012' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E121 = $D121 - $C121;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C121', credit_balance = '$D121', net_balance = '$E121' WHERE acc_number = 'LI2407000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E122 = $D122 - $C122;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C122', credit_balance = '$D122', net_balance = '$E122' WHERE acc_number = 'LI2409100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E123 = $D123 - $C123;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C123', credit_balance = '$D123', net_balance = '$E123' WHERE acc_number = 'LI2409101' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E124 = $D124 - $C124;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C124', credit_balance = '$D124', net_balance = '$E124' WHERE acc_number = 'LI2409102' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E125 = $D125 - $C125;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C125', credit_balance = '$D125', net_balance = '$E125' WHERE acc_number = 'LI2409104' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E126 = $D126 - $C126;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C126', credit_balance = '$D126', net_balance = '$E126' WHERE acc_number = 'LI2409500' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E127 = $D127 - $C127;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C127', credit_balance = '$D127', net_balance = '$E127' WHERE acc_number = 'LI2409510' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E128 = $D128 - $C128;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C128', credit_balance = '$D128', net_balance = '$E128' WHERE acc_number = 'LI2409515' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E129 = $D129 - $C129;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C129', credit_balance = '$D129', net_balance = '$E129' WHERE acc_number = 'LI2409520' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E130 = $D130 - $C130;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C130', credit_balance = '$D130', net_balance = '$E130' WHERE acc_number = 'LI2409600' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E131 = $D131 - $C131;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C131', credit_balance = '$D131', net_balance = '$E131' WHERE acc_number = 'LI2409615' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E132 = $D132 - $C132;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C132', credit_balance = '$D132', net_balance = '$E132' WHERE acc_number = 'LI2409625' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E133 = $D133 - $C133;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C133', credit_balance = '$D133', net_balance = '$E133' WHERE acc_number = 'LI2409630' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E134 = $D134 - $C134;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C134', credit_balance = '$D134', net_balance = '$E134' WHERE acc_number = 'LI2410000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E138 = $D138 - $C138;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C138', credit_balance = '$D138', net_balance = '$E138' WHERE acc_number = 'LI2420000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E154 = $D154 - $C154;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C154', credit_balance = '$D154', net_balance = '$E154' WHERE acc_number = 'LI2460000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E156 = $D156 - $C156;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C156', credit_balance = '$D156', net_balance = '$E156' WHERE acc_number = 'LI2480000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E158 = $D158 - $C158;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C158', credit_balance = '$D158', net_balance = '$E158' WHERE acc_number = 'LI2487100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E159 = $D159 - $C159;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C159', credit_balance = '$D159', net_balance = '$E159' WHERE acc_number = 'LI2490000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E161 = $D161 - $C161;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C161', credit_balance = '$D161', net_balance = '$E161' WHERE acc_number = 'LI2491050' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E162 = $D162 - $C162;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C162', credit_balance = '$D162', net_balance = '$E162' WHERE acc_number = 'LI2600000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E178 = $D178 - $C178;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C178', credit_balance = '$D178', net_balance = '$E178' WHERE acc_number = 'LI2670000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E193 = $D193 - $C193;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C193', credit_balance = '$D193', net_balance = '$E193' WHERE acc_number = 'LI2800000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E199 = $D199 - $C199;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET debit_balance = '$C199', credit_balance = '$D199', net_balance = '$E199' WHERE acc_number = 'LI2824000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

















// income


$E201 = $D201 - $C201;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET debit_balance = '$C201', credit_balance = '$D201', net_balance = '$E201' WHERE acc_number = 'IN3000000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E202 = $D202 - $C202;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET debit_balance = '$C202', credit_balance = '$D202', net_balance = '$E202' WHERE acc_number = 'IN3100000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E203 = $D203 - $C203;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET debit_balance = '$C203', credit_balance = '$D203', net_balance = '$E203' WHERE acc_number = 'IN3101000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E211 = $D211 - $C211;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET debit_balance = '$C211', credit_balance = '$D211', net_balance = '$E211' WHERE acc_number = 'IN3200000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E212 = $D212 - $C212;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET debit_balance = '$C212', credit_balance = '$D212', net_balance = '$E212' WHERE acc_number = 'IN3201000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E217 = $D217 - $C217;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET debit_balance = '$C217', credit_balance = '$D217', net_balance = '$E217' WHERE acc_number = 'IN3201060' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E224 = $D224 - $C224;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET debit_balance = '$C224', credit_balance = '$D224', net_balance = '$E224' WHERE acc_number = 'IN3205100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E229 = $D229 - $C229;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET debit_balance = '$C229', credit_balance = '$D229', net_balance = '$E229' WHERE acc_number = 'IN3205200' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E231 = $D231 - $C231;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET debit_balance = '$C231', credit_balance = '$D231', net_balance = '$E231' WHERE acc_number = 'IN3206000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E233 = $D233 - $C233;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET debit_balance = '$C233', credit_balance = '$D233', net_balance = '$E233' WHERE acc_number = 'IN3207000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E238 = $D238 - $C238;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET debit_balance = '$C238', credit_balance = '$D238', net_balance = '$E238' WHERE acc_number = 'IN3207050' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

















// expense


$E242 = $C242 - $D242;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C242', credit_balance = '$D242', net_balance = '$E242' WHERE acc_number = 'EX4000000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E243 = $C243 - $D243;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C243', credit_balance = '$D243', net_balance = '$E243' WHERE acc_number = 'EX4100000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E251 = $C251 - $D251;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C251', credit_balance = '$D251', net_balance = '$E251' WHERE acc_number = 'EX4200000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E252 = $C252 - $D252;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C252', credit_balance = '$D252', net_balance = '$E252' WHERE acc_number = 'EX4210000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E257 = $C257 - $D257;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C257', credit_balance = '$D257', net_balance = '$E257' WHERE acc_number = 'EX4220000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E262 = $C262 - $D262;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C262', credit_balance = '$D262', net_balance = '$E262' WHERE acc_number = 'EX4230000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E265 = $C265 - $D265;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C265', credit_balance = '$D265', net_balance = '$E265' WHERE acc_number = 'EX4240000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E267 = $C267 - $D267;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C267', credit_balance = '$D267', net_balance = '$E267' WHERE acc_number = 'EX4290000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E269 = $C269 - $D269;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C269', credit_balance = '$D269', net_balance = '$E269' WHERE acc_number = 'EX4300000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E270 = $C270 - $D270;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C270', credit_balance = '$D270', net_balance = '$E270' WHERE acc_number = 'EX4310000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E278 = $C278 - $D278;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C278', credit_balance = '$D278', net_balance = '$E278' WHERE acc_number = 'EX4310100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E294 = $C294 - $D294;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C294', credit_balance = '$D294', net_balance = '$E294' WHERE acc_number = 'EX4320000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E297 = $C297 - $D297;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C297', credit_balance = '$D297', net_balance = '$E297' WHERE acc_number = 'EX4330000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E298 = $C298 - $D298;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C298', credit_balance = '$D298', net_balance = '$E298' WHERE acc_number = 'EX4331000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E307 = $C307 - $D307;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C307', credit_balance = '$D307', net_balance = '$E307' WHERE acc_number = 'EX4332000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E310 = $C310 - $D310;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C310', credit_balance = '$D310', net_balance = '$E310' WHERE acc_number = 'EX4340000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E313 = $C313 - $D313;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C313', credit_balance = '$D313', net_balance = '$E313' WHERE acc_number = 'EX4350000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E315 = $C315 - $D315;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C315', credit_balance = '$D315', net_balance = '$E315' WHERE acc_number = 'EX4370000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E319 = $C319 - $D319;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C319', credit_balance = '$D319', net_balance = '$E319' WHERE acc_number = 'EX4380000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E321 = $C321 - $D321;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C321', credit_balance = '$D321', net_balance = '$E321' WHERE acc_number = 'EX4390000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E326 = $C326 - $D326;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C326', credit_balance = '$D326', net_balance = '$E326' WHERE acc_number = 'EX4400000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E329 = $C329 - $D329;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C329', credit_balance = '$D329', net_balance = '$E329' WHERE acc_number = 'EX4410000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E335 = $C335 - $D335;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C335', credit_balance = '$D335', net_balance = '$E335' WHERE acc_number = 'EX4420000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E341 = $C341 - $D341;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C341', credit_balance = '$D341', net_balance = '$E341' WHERE acc_number = 'EX4430000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E344 = $C344 - $D344;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C344', credit_balance = '$D344', net_balance = '$E344' WHERE acc_number = 'EX4440000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E351 = $C351 - $D351;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C351', credit_balance = '$D351', net_balance = '$E351' WHERE acc_number = 'EX4460000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E352 = $C352 - $D352;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C352', credit_balance = '$D352', net_balance = '$E352' WHERE acc_number = 'EX4460100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E362 = $C362 - $D362;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C362', credit_balance = '$D362', net_balance = '$E362' WHERE acc_number = 'EX4470000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E364 = $C364 - $D364;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C364', credit_balance = '$D364', net_balance = '$E364' WHERE acc_number = 'EX4475000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E366 = $C366 - $D366;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C366', credit_balance = '$D366', net_balance = '$E366' WHERE acc_number = 'EX4480000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E368 = $C368 - $D368;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C368', credit_balance = '$D368', net_balance = '$E368' WHERE acc_number = 'EX4490000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E376 = $C376 - $D376;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C376', credit_balance = '$D376', net_balance = '$E376' WHERE acc_number = 'EX4500000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E382 = $C382 - $D382;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET debit_balance = '$C382', credit_balance = '$D382', net_balance = '$E382' WHERE acc_number = 'EX4700000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

















// contingent assets


$E384 = $C384 - $D384;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_contigent_assets SET debit_balance = '$C384', credit_balance = '$D384', net_balance = '$E384' WHERE acc_number = 'CA5000000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E385 = $C385 - $D385;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_contigent_assets SET debit_balance = '$C385', credit_balance = '$D385', net_balance = '$E385' WHERE acc_number = 'CA5001000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

















// contingent liability


$E391 = $D391 - $C391;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_contigent_liability SET debit_balance = '$C391', credit_balance = '$D391', net_balance = '$E391' WHERE acc_number = 'CL6000000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E392 = $D392 - $C392;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_contigent_liability SET debit_balance = '$C392', credit_balance = '$D392', net_balance = '$E392' WHERE acc_number = 'CL6001000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}












// Update all NET BALANCE

// Contingent Liability
$C396 = $contigent_liability_debit[396];
$D396 = $contigent_liability_credit[396];
$E396 = $D396 - $C396;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_contigent_liability SET net_balance = '$E396' WHERE acc_number = 'CL6001040' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C395 = $contigent_liability_debit[395];
$D395 = $contigent_liability_credit[395];
$E395 = $D395 - $C395;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_contigent_liability SET net_balance = '$E395' WHERE acc_number = 'CL6001030' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C394 = $contigent_liability_debit[394];
$D394 = $contigent_liability_credit[394];
$E394 = $D394 - $C394;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_contigent_liability SET net_balance = '$E394' WHERE acc_number = 'CL6001020' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C393 = $contigent_liability_debit[393];
$D393 = $contigent_liability_credit[393];
$E393 = $D393 - $C393;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_contigent_liability SET net_balance = '$E393' WHERE acc_number = 'CL6001010' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}







// Contingent Assets
$C390 = $contigent_assets_debit[390];
$D390 = $contigent_assets_credit[390];
$E390 = $C390 - $D390;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_contigent_assets SET net_balance = '$E390' WHERE acc_number = 'CA5002020' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C389 = $contigent_assets_debit[389];
$D389 = $contigent_assets_credit[389];
$E389 = $C389 - $D389;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_contigent_assets SET net_balance = '$E389' WHERE acc_number = 'CA5002010' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C388 = $contigent_assets_debit[388];
$D388 = $contigent_assets_credit[388];
$E388 = $C388 - $D388;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_contigent_assets SET net_balance = '$E388' WHERE acc_number = 'CA5002000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C387 = $contigent_assets_debit[387];
$D387 = $contigent_assets_credit[387];
$E387 = $C387 - $D387;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_contigent_assets SET net_balance = '$E387' WHERE acc_number = 'CA5001060' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C386 = $contigent_assets_debit[386];
$D386 = $contigent_assets_credit[386];
$E386 = $C386 - $D386;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_contigent_assets SET net_balance = '$E386' WHERE acc_number = 'CA5001050' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}







// Expense
$C383 = $expense_debit[383];
$D383 = $expense_credit[383];
$E383 = $C383 - $D383;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E383' WHERE acc_number = 'EX4710000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C381 = $expense_debit[381];
$D381 = $expense_credit[381];
$E381 = $C381 - $D381;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E381' WHERE acc_number = 'EX4610000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C380 = $expense_debit[380];
$D380 = $expense_credit[380];
$E380 = $C380 - $D380;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E380' WHERE acc_number = 'EX4600000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C379 = $expense_debit[379];
$D379 = $expense_credit[379];
$E379 = $C379 - $D379;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E379' WHERE acc_number = 'EX4500300' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C378 = $expense_debit[378];
$D378 = $expense_credit[378];
$E378 = $C378 - $D378;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E378' WHERE acc_number = 'EX4500200' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C377 = $expense_debit[377];
$D377 = $expense_credit[377];
$E377 = $C377 - $D377;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E377' WHERE acc_number = 'EX4500100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$array_count = 0;

for ($i = 369; $i <= 375; $i++) {
    
    $array_value = array("EX4490100", "EX4490200", "EX4490300", "EX4490400", "EX4490450", "EX4490500",  "EX4490600");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

$C367 = $expense_debit[367];
$D367 = $expense_credit[367];
$E367 = $C367 - $D367;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E367' WHERE acc_number = 'EX4480400' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C365 = $expense_debit[365];
$D365 = $expense_credit[365];
$E365 = $C365 - $D365;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E365' WHERE acc_number = 'EX4475100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C363 = $expense_debit[363];
$D363 = $expense_credit[363];
$E363 = $C363 - $D363;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E363' WHERE acc_number = 'EX4470600' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$array_count = 0;

for ($i = 352; $i <= 361; $i++) {

    $array_value = array("EX4460100", "EX4460200", "EX4460300", "EX4460400", "EX4460500", "EX4460600",  "EX4460610", "EX4460620", "EX4460630", "EX4460640");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 345; $i <= 350; $i++) {
    
    $array_value = array("EX4440100", "EX4440500", "EX4450000", "EX4450100", "EX4450200", "EX4450300");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 342; $i <= 343; $i++) {
    
    $array_value = array("EX4430100", "EX4430200");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 336; $i <= 340; $i++) {
    
    $array_value = array("EX4420100", "EX4420200", "EX4420300", "EX4420400", "EX4420600");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 330; $i <= 334; $i++) {
    
    $array_value = array("EX4410400", "EX4410500", "EX4410600", "EX4410700", "EX4410900");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 327; $i <= 328; $i++) {
    
    $array_value = array("EX4401000", "EX4402000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 322; $i <= 325; $i++) {
    
    $array_value = array("EX4391000", "EX4392000", "EX4393000", "EX4395000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 316; $i <= 318; $i++) {
    
    $array_value = array("EX4371000", "EX4372000", "EX4374000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

$C314 = $expense_debit[314];
$D314 = $expense_credit[314];
$E314 = $C314 - $D314;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E314' WHERE acc_number = 'EX4351000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

for ($i = 311; $i <= 312; $i++) {
    
    $array_value = array("EX4341000", "EX4347000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 308; $i <= 309; $i++) {
    
    $array_value = array("EX4332090", "EX4332100");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 299; $i <= 306; $i++) {
    
    $array_value = array("EX4331010", "EX4331070", "EX4331090", "EX4331100", "EX4331140", "EX4331150", "EX4331160", "EX4331161");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 295; $i <= 296; $i++) {
    
    $array_value = array("EX4321000", "EX4322000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 279; $i <= 293; $i++) {
    
    $array_value = array("EX4310110", "EX4310120", "EX4310130", "EX4310140", "EX4310150", "EX4310160", "EX4310170", "EX4310180", "EX4310190", "EX4310200", "EX4310210", "EX4310220", "EX4310230", "EX4310240", "EX4310250");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 271; $i <= 277; $i++) {
    
    $array_value = array("EX4310010", "EX4310020", "EX4310040", "EX4310050", "EX4310060", "EX4310070", "EX4310080");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

$C268 = $expense_debit[268];
$D268 = $expense_credit[268];
$E268 = $C268 - $D268;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E268' WHERE acc_number = 'EX4291000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C266 = $expense_debit[266];
$D266 = $expense_credit[266];
$E266 = $C266 - $D266;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E266' WHERE acc_number = 'EX4241000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

for ($i = 263; $i <= 264; $i++) {
    
    $array_value = array("EX4230070", "EX4230080");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 258; $i <= 261; $i++) {
    
    $array_value = array("EX4222300", "EX4222400", "EX4222500", "EX4222600");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 253; $i <= 256; $i++) {
    
    $array_value = array("EX4214000", "EX4215000", "EX4215100", "EX4216000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 244; $i <= 250; $i++) {
    
    $array_value = array("EX4101870", "EX4110000", "EX4110010", "EX4110020", "EX4110030", "EX4110040", "EX4110050");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $expense_debit[$i];
    $D_of_i = $expense_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_expense SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;










// INCOME

for ($i = 239; $i <= 242; $i++) {
    
    $array_value = array("IN3207051", "IN3207052", "IN3207054");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $income_debit[$i];
    $D_of_i = $income_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 234; $i <= 237; $i++) {
    
    $array_value = array("IN3207010", "IN3207020", "IN3207030", "IN3207040");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $income_debit[$i];
    $D_of_i = $income_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

$C_of_i = $income_debit[232];
$D_of_i = $income_credit[232];
$E_of_i = $D_of_i - $C_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET net_balance = '$E_of_i' WHERE acc_number = 'IN3206010' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C_of_i = $income_debit[230];
$D_of_i = $income_credit[230];
$E_of_i = $D_of_i - $C_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET net_balance = '$E_of_i' WHERE acc_number = 'IN3205300' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

for ($i = 225; $i <= 228; $i++) {
    
    $array_value = array("IN3205110", "IN3205120", "IN3205130", "IN3205140");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $income_debit[$i];
    $D_of_i = $income_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 218; $i <= 223; $i++) {
    
    $array_value = array("IN3201061", "IN3201062", "IN3201063", "IN3201180", "IN3202020", "1N3202021");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $income_debit[$i];
    $D_of_i = $income_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 213; $i <= 216; $i++) {
    
    $array_value = array("IN3201010", "IN3201020", "IN3201025", "IN3201027", "IN3202020", "1N3202021");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $income_debit[$i];
    $D_of_i = $income_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 204; $i <= 210; $i++) {
    
    $array_value = array("IN3101010", "IN3101020", "IN3101170", "IN3101175", "IN3101185", "IN3101190", "IN3105070");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $income_debit[$i];
    $D_of_i = $income_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_income SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;










// LIABILITY

for ($i = 194; $i <= 198; $i++) {
    
    $array_value = array("LI2810000", "LI2820000", "LI2821000", "LI2822000", "LI2823000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $liability_debit[$i];
    $D_of_i = $liability_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 179; $i <= 192; $i++) {
    
    $array_value = array("LI2671000", "LI2672000", "LI2673000", "LI2674000", "LI2674050", "LI2675000", "LI2676000", "LI2680000", "LI2681000", "LI2682000", "LI2682100", "LI2683000", "LI2684000", "LI2685000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $liability_debit[$i];
    $D_of_i = $liability_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 163; $i <= 177; $i++) {
    
    $array_value = array("LI2610000", "LI2620000", "LI2621000", "LI2622000", "LI2624000", "LI2625000", "LI2630000", "LI2631000", "LI2631100", "LI2631200", "LI2631300", "LI2640000", "LI2650000", "LI2651000", "LI2665000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $liability_debit[$i];
    $D_of_i = $liability_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

$C_of_i = $liability_debit[160];
$D_of_i = $liability_credit[160];
$E_of_i = $D_of_i - $C_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2491000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E158 = $D158 - $C158;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E158' WHERE acc_number = 'LI2487100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C_of_i = $liability_debit[157];
$D_of_i = $liability_credit[157];
$E_of_i = $D_of_i - $C_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2481000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C_of_i = $liability_debit[155];
$D_of_i = $liability_credit[155];
$E_of_i = $D_of_i - $C_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2461000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

for ($i = 139; $i <= 153; $i++) {
    
    $array_value = array("LI2421000", "LI2422000", "LI2423000", "LI2423200", "LI2423205", "LI2423220", "LI2424000", "LI2425000", "LI2426000", "LI2430000", "LI2430510", "LI2440000", "LI2450000", "LI2455370", "LI2455380");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $liability_debit[$i];
    $D_of_i = $liability_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 135; $i <= 137; $i++) {
    
    $array_value = array("LI2411000", "LI2412000", "LI2412100");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $liability_debit[$i];
    $D_of_i = $liability_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

$E_of_i = $D133 - $C133;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2409630' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D132 - $C132;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2409625' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D131 - $C131;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2409615' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D129 - $C129;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2409520' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D128 - $C128;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2409515' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D127 - $C127;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2409510' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D125 - $C125;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2409104' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D124 - $C124;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2409102' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D123 - $C123;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2409101' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D121 - $C121;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2407000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D120 - $C120;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2405012' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D119 - $C119;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2405010' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D118 - $C118;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2405001' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D115 - $C115;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2390000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D114 - $C114;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2381250' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D113 - $C113;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2381200' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D112 - $C112;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2381100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D111 - $C111;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2381000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D109 - $C109;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2376900' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D108 - $C108;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2376850' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D107 - $C107;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2376100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D106 - $C106;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2375100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D104 - $C104;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2350000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$E_of_i = $D103 - $C103;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2345000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

for ($i = 100; $i <= 101; $i++) {
    
    $array_value = array("LI2331000", "LI2332000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $liability_debit[$i];
    $D_of_i = $liability_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

$C_of_i = $liability_debit[98];
$D_of_i = $liability_credit[98];
$E_of_i = $D_of_i - $C_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2321000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C_of_i = $liability_debit[96];
$D_of_i = $liability_credit[96];
$E_of_i = $D_of_i - $C_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2315020' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C_of_i = $liability_debit[94];
$D_of_i = $liability_credit[94];
$E_of_i = $D_of_i - $C_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2315001' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C_of_i = $liability_debit[91];
$D_of_i = $liability_credit[91];
$E_of_i = $D_of_i - $C_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = 'LI2144100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

for ($i = 87; $i <= 89; $i++) {
    
    $array_value = array("LI2141000", "LI2142000", "LI2143000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $liability_debit[$i];
    $D_of_i = $liability_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 83; $i <= 85; $i++) {
    
    $array_value = array("LI2134100", "LI2134200", "LI2134300");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $liability_debit[$i];
    $D_of_i = $liability_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 79; $i <= 81; $i++) {
    
    $array_value = array("LI2131000", "LI2132000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $liability_debit[$i];
    $D_of_i = $liability_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 75; $i <= 77; $i++) {
    
    $array_value = array("LI2121000", "LI2121132", "LI2129210");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $liability_debit[$i];
    $D_of_i = $liability_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 71; $i <= 73; $i++) {
    
    $array_value = array("LI2114100", "LI2114200", "LI2114300");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $liability_debit[$i];
    $D_of_i = $liability_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 67; $i <= 69; $i++) {
    
    $array_value = array("LI2111000", "LI2112000", "LI2113000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $liability_debit[$i];
    $D_of_i = $liability_credit[$i];
    $E_of_i = $D_of_i - $C_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_liability SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;












// ASSETS

$C_of_i = $assets_debit[63];
$D_of_i = $assets_credit[63];
$E_of_i = $C_of_i - $D_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = 'AS1951000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

for ($i = 60; $i <= 61; $i++) {
    
    $array_value = array("AS1941000", "AS1943000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $assets_debit[$i];
    $D_of_i = $assets_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

$C_of_i = $assets_debit[58];
$D_of_i = $assets_credit[58];
$E_of_i = $C_of_i - $D_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = 'AS1931000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C_of_i = $assets_debit[56];
$D_of_i = $assets_credit[56];
$E_of_i = $C_of_i - $D_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = 'AS1921000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

for ($i = 53; $i <= 54; $i++) {
    
    $array_value = array("AS1911100", "AS1912000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $assets_debit[$i];
    $D_of_i = $assets_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 44; $i <= 49; $i++) {
    
    $array_value = array("AS1875005", "AS1875010", "AS1875020", "AS1875030", "AS1875040", "AS1875050");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $assets_debit[$i];
    $D_of_i = $assets_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 39; $i <= 42; $i++) {
    
    $array_value = array("AS1872000", "AS1873000", "AS1874000", "AS1874500");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $assets_debit[$i];
    $D_of_i = $assets_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 33; $i <= 36; $i++) {
    
    $array_value = array("AS1851000", "AS1851100", "AS1852000", "AS1852100");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $assets_debit[$i];
    $D_of_i = $assets_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 30; $i <= 31; $i++) {
    
    $array_value = array("AS1841010", "AS1841015");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $assets_debit[$i];
    $D_of_i = $assets_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

$C_of_i = $assets_debit[28];
$D_of_i = $assets_credit[28];
$E_of_i = $C_of_i - $D_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = 'AS1830050' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$C_of_i = $assets_debit[26];
$D_of_i = $assets_credit[26];
$E_of_i = $C_of_i - $D_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = 'AS1820010' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

for ($i = 22; $i <= 24; $i++) {
    
    $array_value = array("AS1710010", "AS1720500", "AS1723020");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $assets_debit[$i];
    $D_of_i = $assets_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

$C_of_i = $assets_debit[19];
$D_of_i = $assets_credit[19];
$E_of_i = $C_of_i - $D_of_i;
$sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = 'AS1620100' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

for ($i = 16; $i <= 17; $i++) {
    
    $array_value = array("AS1600000", "AS1610000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $assets_debit[$i];
    $D_of_i = $assets_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 16; $i <= 17; $i++) {
    
    $array_value = array("AS1600000", "AS1610000");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $assets_debit[$i];
    $D_of_i = $assets_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 13; $i <= 14; $i++) {
    
    $array_value = array("AS1410000", "AS1410040");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $assets_debit[$i];
    $D_of_i = $assets_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;

for ($i = 9; $i <= 11; $i++) {
    
    $array_value = array("AS1110010", "AS1112000", "AS1112010");
    $acc_number_value = $array_value[$array_count];
    $C_of_i = $assets_debit[$i];
    $D_of_i = $assets_credit[$i];
    $E_of_i = $C_of_i - $D_of_i;
    $sql = "UPDATE ckc_2021_periodial_balance_sheet_assets SET net_balance = '$E_of_i' WHERE acc_number = '$acc_number_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    
    $array_count++;

}

$array_count = 0;


?>