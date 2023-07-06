<?php

$approved = "Approved";
$active = "Active";
$AS1700000 = 0.00;

/* All these have already been done starting from line 64
// Savings
$D77 = 0;  // SAVINGS CUSTOMERS    line 77
$C77 = 0;  // SAVINGS CUSTOMERS    line 77

// Akawo
$LI2141000 = 0; // Akawo
$D89 = 0;  // Akawo    line 89
$C89 = 0;   // Akawo    line 89
$D217 = 0; // COMMISSION RECEIVED- AKAWO    line 217
$C217 = 0; // COMMISSION RECEIVED- AKAWO    line 217

// Thrift
$LI2142000 = 0; // Thrift
$D90 = 0; // Thrift    line 90
$C90 = 0; // Thrift    line 90
$IN3201027_credit = 0; // COMMISSION RECEIVED - THRIFT    line 218
$IN3201027_debit = 0; // COMMISSION RECEIVED - THRIFT    line 218

// Loans
$D22 = 0;  // CUSTOMERS    line 24
$C22 = 0;  // CUSTOMERS    line 24
$D207 = 0;  // INT. RECD CUSTOMERS    line 207
$C207 = 0;  // INT. RECD CUSTOMERS    line 207
$IN3207051_credit = 0; // CASH RECOVERIES - LOANS
$IN3207051_debit = 0; // CASH RECOVERIES - LOANS
$IN3207054_credit = 0; // INTEREST RECOVERIES - LOANS
$IN3207054_debit = 0; // INTEREST RECOVERIES - LOANS

// Dues
$D216 = 0; // COMMISSION RECEIVED DUES/PROCESSING AND MANAGEMENT FEES    line 216
$C216 = 0; // COMMISSION RECEIVED DUES/PROCESSING AND MANAGEMENT FEES    line 216

// M|Cards
$D225 = 0; // COMM RECD CARDS    line 225
$C225 = 0; // COMM RECD CARDS    line 225

// Contribution
$C82 = 0; // PRIVATE INDIVIDUALS    line 82
$D82 = 0; // PRIVATE INDIVIDUALS    line 82
$C82 = 0; // COMM RECD LEDGER FEE - CONTRIBUTION    line 220
$D82 = 0; // COMM RECD LEDGER FEE - CONTRIBUTION    line 220

$count = 1;

*/



// Create variable names from $C6 to $C398
// Create variable names from $D6 to $D398
// Assign all the variables you have created with the value o (zero) example1 $C6 = 0; example2 $D6 = 0;
// Create and assign the variables into the $array_C and $array_D
// Create and assign account number to the $array_account_number


// Create variable names from $C6 to $C398
$C6 = $C7 = $C8 = $C9 = $C10 = $C11 = $C12 = $C13 = $C14 = $C15 = $C16 = $C17 = $C18 = $C19 = $C20 = $C21 = $C22 = $C23 = $C24 = $C25 = $C26 = $C27 = $C28 = $C29 = $C30 = $C31 = $C32 = $C33 = $C34 = $C35 = $C36 = $C37 = $C38 = $C39 = $C40 = $C41 = $C42 = $C43 = $C44 = $C45 = $C46 = $C47 = $C48 = $C49 = $C50 = $C51 = $C52 = $C53 = $C54 = $C55 = $C56 = $C57 = $C58 = $C59 = $C60 = $C61 = $C62 = $C63 = $C64 = $C65 = $C66 = $C67 = $C68 = $C69 = $C70 = $C71 = $C72 = $C73 = $C74 = $C75 = $C76 = $C77 = $C78 = $C79 = $C80 = $C81 = $C82 = $C83 = $C84 = $C85 = $C86 = $C87 = $C88 = $C89 = $C90 = $C91 = $C92 = $C93 = $C94 = $C95 = $C96 = $C97 = $C98 = $C99 = $C100 = $C101 = $C102 = $C103 = $C104 = $C105 = $C106 = $C107 = $C108 = $C109 = $C110 = $C111 = $C112 = $C113 = $C114 = $C115 = $C116 = $C117 = $C118 = $C119 = $C120 = $C121 = $C122 = $C123 = $C124 = $C125 = $C126 = $C127 = $C128 = $C129 = $C130 = $C131 = $C132 = $C133 = $C134 = $C135 = $C136 = $C137 = $C138 = $C139 = $C140 = $C141 = $C142 = $C143 = $C144 = $C145 = $C146 = $C147 = $C148 = $C149 = $C150 = $C151 = $C152 = $C153 = $C154 = $C155 = $C156 = $C157 = $C158 = $C159 = $C160 = $C161 = $C162 = $C163 = $C164 = $C165 = $C166 = $C167 = $C168 = $C169 = $C170 = $C171 = $C172 = $C173 = $C174 = $C175 = $C176 = $C177 = $C178 = $C179 = $C180 = $C181 = $C182 = $C183 = $C184 = $C185 = $C186 = $C187 = $C188 = $C189 = $C190 = $C191 = $C192 = $C193 = $C194 = $C195 = $C196 = $C197 = $C198 = $C199 = $C200 = $C201 = $C202 = $C203 = $C204 = $C205 = $C206 = $C207 = $C208 = $C209 = $C210 = $C211 = $C212 = $C213 = $C214 = $C215 = $C216 = $C217 = $C218 = $C219 = $C220 = $C221 = $C222 = $C223 = $C224 = $C225 = $C226 = $C227 = $C228 = $C229 = $C230 = $C231 = $C232 = $C233 = $C234 = $C235 = $C236 = $C237 = $C238 = $C239 = $C240 = $C241 = $C242 = $C243 = $C244 = $C245 = $C246 = $C247 = $C248 = $C249 = $C250 = $C251 = $C252 = $C253 = $C254 = $C255 = $C256 = $C257 = $C258 = $C259 = $C260 = $C261 = $C262 = $C263 = $C264 = $C265 = $C266 = $C267 = $C268 = $C269 = $C270 = $C271 = $C272 = $C273 = $C274 = $C275 = $C276 = $C277 = $C278 = $C279 = $C280 = $C281 = $C282 = $C283 = $C284 = $C285 = $C286 = $C287 = $C288 = $C289 = $C290 = $C291 = $C292 = $C293 = $C294 = $C295 = $C296 = $C297 = $C298 = $C299 = $C300 = $C301 = $C302 = $C303 = $C304 = $C305 = $C306 = $C307 = $C308 = $C309 = $C310 = $C311 = $C312 = $C313 = $C314 = $C315 = $C316 = $C317 = $C318 = $C319 = $C320 = $C321 = $C322 = $C323 = $C324 = $C325 = $C326 = $C327 = $C328 = $C329 = $C330 = $C331 = $C332 = $C333 = $C334 = $C335 = $C336 = $C337 = $C338 = $C339 = $C340 = $C341 = $C342 = $C343 = $C344 = $C345 = $C346 = $C347 = $C348 = $C349 = $C350 = $C351 = $C352 = $C353 = $C354 = $C355 = $C356 = $C357 = $C358 = $C359 = $C360 = $C361 = $C362 = $C363 = $C364 = $C365 = $C366 = $C367 = $C368 = $C369 = $C370 = $C371 = $C372 = $C373 = $C374 = $C375 = $C376 = $C377 = $C378 = $C379 = $C380 = $C381 = $C382 = $C383 = $C384 = $C385 = $C386 = $C387 = $C388 = $C389 = $C390 = $C391 = $C392 = $C393 = $C394 = $C395 = $C396 = $C397 = $C398 = 0.00;


// Create variable names from $D6 to $D398
$D6 = $D7 = $D8 = $D9 = $D10 = $D11 = $D12 = $D13 = $D14 = $D15 = $D16 = $D17 = $D18 = $D19 = $D20 = $D21 = $D22 = $D23 = $D24 = $D25 = $D26 = $D27 = $D28 = $D29 = $D30 = $D31 = $D32 = $D33 = $D34 = $D35 = $D36 = $D37 = $D38 = $D39 = $D40 = $D41 = $D42 = $D43 = $D44 = $D45 = $D46 = $D47 = $D48 = $D49 = $D50 = $D51 = $D52 = $D53 = $D54 = $D55 = $D56 = $D57 = $D58 = $D59 = $D60 = $D61 = $D62 = $D63 = $D64 = $D65 = $D66 = $D67 = $D68 = $D69 = $D70 = $D71 = $D72 = $D73 = $D74 = $D75 = $D76 = $D77 = $D78 = $D79 = $D80 = $D81 = $D82 = $D83 = $D84 = $D85 = $D86 = $D87 = $D88 = $D89 = $D90 = $D91 = $D92 = $D93 = $D94 = $D95 = $D96 = $D97 = $D98 = $D99 = $D100 = $D101 = $D102 = $D103 = $D104 = $D105 = $D106 = $D107 = $D108 = $D109 = $D110 = $D111 = $D112 = $D113 = $D114 = $D115 = $D116 = $D117 = $D118 = $D119 = $D120 = $D121 = $D122 = $D123 = $D124 = $D125 = $D126 = $D127 = $D128 = $D129 = $D130 = $D131 = $D132 = $D133 = $D134 = $D135 = $D136 = $D137 = $D138 = $D139 = $D140 = $D141 = $D142 = $D143 = $D144 = $D145 = $D146 = $D147 = $D148 = $D149 = $D150 = $D151 = $D152 = $D153 = $D154 = $D155 = $D156 = $D157 = $D158 = $D159 = $D160 = $D161 = $D162 = $D163 = $D164 = $D165 = $D166 = $D167 = $D168 = $D169 = $D170 = $D171 = $D172 = $D173 = $D174 = $D175 = $D176 = $D177 = $D178 = $D179 = $D180 = $D181 = $D182 = $D183 = $D184 = $D185 = $D186 = $D187 = $D188 = $D189 = $D190 = $D191 = $D192 = $D193 = $D194 = $D195 = $D196 = $D197 = $D198 = $D199 = $D200 = $D201 = $D202 = $D203 = $D204 = $D205 = $D206 = $D207 = $D208 = $D209 = $D210 = $D211 = $D212 = $D213 = $D214 = $D215 = $D216 = $D217 = $D218 = $D219 = $D220 = $D221 = $D222 = $D223 = $D224 = $D225 = $D226 = $D227 = $D228 = $D229 = $D230 = $D231 = $D232 = $D233 = $D234 = $D235 = $D236 = $D237 = $D238 = $D239 = $D240 = $D241 = $D242 = $D243 = $D244 = $D245 = $D246 = $D247 = $D248 = $D249 = $D250 = $D251 = $D252 = $D253 = $D254 = $D255 = $D256 = $D257 = $D258 = $D259 = $D260 = $D261 = $D262 = $D263 = $D264 = $D265 = $D266 = $D267 = $D268 = $D269 = $D270 = $D271 = $D272 = $D273 = $D274 = $D275 = $D276 = $D277 = $D278 = $D279 = $D280 = $D281 = $D282 = $D283 = $D284 = $D285 = $D286 = $D287 = $D288 = $D289 = $D290 = $D291 = $D292 = $D293 = $D294 = $D295 = $D296 = $D297 = $D298 = $D299 = $D300 = $D301 = $D302 = $D303 = $D304 = $D305 = $D306 = $D307 = $D308 = $D309 = $D310 = $D311 = $D312 = $D313 = $D314 = $D315 = $D316 = $D317 = $D318 = $D319 = $D320 = $D321 = $D322 = $D323 = $D324 = $D325 = $D326 = $D327 = $D328 = $D329 = $D330 = $D331 = $D332 = $D333 = $D334 = $D335 = $D336 = $D337 = $D338 = $D339 = $D340 = $D341 = $D342 = $D343 = $D344 = $D345 = $D346 = $D347 = $D348 = $D349 = $D350 = $D351 = $D352 = $D353 = $D354 = $D355 = $D356 = $D357 = $D358 = $D359 = $D360 = $D361 = $D362 = $D363 = $D364 = $D365 = $D366 = $D367 = $D368 = $D369 = $D370 = $D371 = $D372 = $D373 = $D374 = $D375 = $D376 = $D377 = $D378 = $D379 = $D380 = $D381 = $D382 = $D383 = $D384 = $D385 = $D386 = $D387 = $D388 = $D389 = $D390 = $D391 = $D392 = $D393 = $D394 = $D395 = $D396 = $D397 = $D398 = 0.00;







// Get the records from the activities only

// Savings credit
// Get "amount" from TABLE ckc_2021_savings_credit
$sql = "SELECT amount FROM ckc_2021_savings_credit WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D77 += $row["amount"];

    }

}

// Savings debit
// Get "amount" from TABLE ckc_2021_savings_debit
$sql = "SELECT amount FROM ckc_2021_savings_debit WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $C77 += $row["amount"];

    }

}





// Akawo credit
// Get "redeem_per_week" from TABLE ckc_2021_akawo_redeem
$sql = "SELECT redeem_per_week FROM ckc_2021_akawo_redeem WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D89 += $row["redeem_per_week"];

    }

}

// Akawo debit
// Get "amount" from TABLE ckc_2021_akawo_debit
$sql = "SELECT amount FROM ckc_2021_akawo_debit WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $C89 += $row["amount"];

    }

}

// Akawo company interest
// Get "amount" from TABLE ckc_2021_akawo_create
$sql = "SELECT company_interest FROM ckc_2021_akawo_create WHERE active_status = '$active' AND tally_count >= '$count' AND creation_date >= '$periodFrom' ORDER BY creation_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['creation_date'];

    if ($check_date <= $periodTo) {

        $D217 += $row['company_interest'];

    }

}





// Thrift credit
// Get "redeem_per_week" from TABLE ckc_2021_thirft_redeem
$sql = "SELECT redeem_per_week FROM ckc_2021_thirft_redeem WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D90 += $row["redeem_per_week"];

    }

}

/*
// This section is for Thrift debit
// Thrift debit
// Get "amount" from TABLE ckc_2021_thirft_redeem
$sql = "SELECT amount FROM ckc_2021_thirft_redeem WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $C90 += $row["redeem_per_week"];

    }

}
*/

/*
// This section is for Thrift company_interest
// Thrift company interest
// Get "weekly_interest" from TABLE ckc_2021_thrift_create_group
$sql = "SELECT weekly_interest FROM ckc_2021_thrift_create_group WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $IN3201027_credit += $row["weekly_interest"];

    }

}
*/





// Loan booking
// Get "amount_given" from TABLE ckc_2021_loan_get
$sql = "SELECT amount_given FROM ckc_2021_loan_get WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $C22 += $row["amount_given"];

    }

}

// Loan repayment
// Get "amount_return" from TABLE ckc_2021_loan_return_pending
$sql = "SELECT amount_return FROM ckc_2021_loan_return_pending WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D22 += $row["amount_return"];

    }

}

// Loan company interest
// Get "amount_given, principal_interest" from TABLE ckc_2021_loan_return
$sql = "SELECT amount_given principal_interest FROM ckc_2021_loan_return_pending WHERE post_status = '$approved' AND creation_date >= '$periodFrom' ORDER BY creation_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['creation_date'];

    if ($check_date <= $periodTo) {

        $amount_given += $row["amount_given"];
        $principal_interest += $row["principal_interest"];

    }

}

// Check if interest is zero or greater and add it as interest instead of having a negative value
if (($amount_given - $principal_interest) >= 0) {
    
    $D207 = $amount_given - $principal_interest;

}





// Dues Credit
// Get "amount" from TABLE ckc_2021_dues_credit
$sql = "SELECT amount FROM ckc_2021_dues_credit WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D216 += $row["amount"];

    }

}




// M|Card credit
// Get "amount" from TABLE ckc_2021_mcard_credit
$sql = "SELECT amount FROM ckc_2021_mcard_credit WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D225 += $row["amount"];

    }

}





// Contribution credit
// Get "amount_due" from TABLE ckc_2021_contribution_deposit
$sql = "SELECT amount_due FROM ckc_2021_contribution_deposit WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $D82 += $row["amount_due"];

    }

}

// Contribution debit
// Get "amount" from TABLE ckc_2021_contribution_debit
$sql = "SELECT amount FROM ckc_2021_contribution_debit WHERE post_status = '$approved' AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {

    $check_date = $row['voucher_date'];

    if ($check_date <= $periodTo) {

        $C82 += $row["amount"];

    }

}








// Update the balance sheet

// Savings credit and debit
// Update "Savings credit and debit" from TABLE ckc_2021_balance_sheet_liability
$net_balance = $D77 - $C77;
$sql = "UPDATE ckc_2021_balance_sheet_liability SET debit_balance = '$C77', credit_balance = '$D77', net_balance = '$net_balance' WHERE acc_number = 'LI2121000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR 379: Could not able to execute $sql. " . mysqli_error($link);

}

// Akawo credit and debit
// Update "Akawo credit and debit" from TABLE ckc_2021_balance_sheet_liability
$net_balance = $D89 - $C89;
$sql = "UPDATE ckc_2021_balance_sheet_liability SET debit_balance = '$C89', credit_balance = '$D89', net_balance = '$net_balance' WHERE acc_number = 'LI2141000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR 394: Could not able to execute $sql. " . mysqli_error($link);

}

// Akawo company interest
// Update "Akawo company interest" from TABLE ckc_2021_balance_sheet_income
$net_balance = $D217 - $C217;
$sql = "UPDATE ckc_2021_balance_sheet_income SET debit_balance = '$C217', credit_balance = '$D217', net_balance = '$net_balance' WHERE acc_number = 'IN3201025' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR 409: Could not able to execute $sql. " . mysqli_error($link);

}

// Thrift credit and debit
// Update "Thrift credit and debit" from TABLE ckc_2021_balance_sheet_liability
$net_balance = $D90 - $C90;
$sql = "UPDATE ckc_2021_balance_sheet_liability SET debit_balance = '$C90', credit_balance = '$D90', net_balance = '$net_balance' WHERE acc_number = 'LI2142000' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR 424: Could not able to execute $sql. " . mysqli_error($link);

}

// Loan booking and repayment
// Update "Loan booking and repayment" from TABLE ckc_2021_balance_sheet_assets
$net_balance = $C22 - $D22;
$sql = "UPDATE ckc_2021_balance_sheet_assets SET debit_balance = '$C22', credit_balance = '$D22', net_balance = '$net_balance' WHERE acc_number = 'AS1710010' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR 439: Could not able to execute $sql. " . mysqli_error($link);

}

// Loan company interest
// Update "Loan company interest" from TABLE ckc_2021_balance_sheet_income
$net_balance = $D207 - $C207;
$sql = "UPDATE ckc_2021_balance_sheet_income SET debit_balance = '$C207', credit_balance = '$D207', net_balance = '$net_balance' WHERE acc_number = 'IN3101020' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR 454: Could not able to execute $sql. " . mysqli_error($link);

}

// Dues credit
// Update "Dues credit" from TABLE ckc_2021_balance_sheet_income
$net_balance = $D216 - $C216;
$sql = "UPDATE ckc_2021_balance_sheet_income SET debit_balance = '$C216', credit_balance = '$D216', net_balance = '$net_balance' WHERE acc_number = 'IN3201020' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR 469: Could not able to execute $sql. " . mysqli_error($link);

}

// M|Card credit
// Update "M|Card credit" from TABLE ckc_2021_balance_sheet_income
$net_balance = $D225 - $C225;
$sql = "UPDATE ckc_2021_balance_sheet_income SET debit_balance = '$C225', credit_balance = '$D225', net_balance = '$net_balance' WHERE acc_number = 'IN3202021' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR 484: Could not able to execute $sql. " . mysqli_error($link);

}

// Contribution credit and debit
// Update "Contribution credit and debit" from TABLE ckc_2021_balance_sheet_income
$net_balance = $C82 - $D82;
$sql = "UPDATE ckc_2021_balance_sheet_income SET debit_balance = '$D82', credit_balance = '$C82', net_balance = '$net_balance' WHERE acc_number = 'IN3201061' AND active_status = '$active'";

if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
} else {

    echo "ERROR 499: Could not able to execute $sql. " . mysqli_error($link);

}







// Add up all cells that make up a node


// Select cell all debit and credit from the balance sheet

// Get the credit and debit from TABLE ckc_2021_balance_sheet_assets

/*
// Get assts debit and credit where voucher date is as user specified from ckc_2021_balance_sheet_assets and ckc_2021_balance_sheet_assets_pending
$C_debit = array();
$D_credit = array();

$sql = "SELECT acc_number FROM ckc_2021_balance_sheet_assets WHERE active_status = '$active'";

if ($result = mysqli_query($link, $sql)) {

    // Assign the cell number
    $i_debit = 6;
    $i_credit = 6;

    while ($row = mysqli_fetch_array($result)) {
        
        $acc_number = $row_by_voucher['acc_number'];
        
        $sql_by_voucher = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_pending WHERE acc_number = '$acc_number' AND (debit_balance_status = '$approved' OR credit_balance_status = '$approved') AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

        if ($result_by_voucher = mysqli_query($link, $sql_by_voucher)) {

            while ($row_by_voucher = mysqli_fetch_array($result_by_voucher)) {
            
                $check_date = $row_by_voucher['voucher_date'];
            
                if ($check_date <= $periodTo) {
            
                    $C_debit[$i_debit] += $row_by_voucher["debit_balance"];
                    $D_credit[$i_credit] += $row_by_voucher["credit_balance"];
            
                }
            
            }
                    
            echo "Debit column = ".$C_debit[$i_debit].", Credit column = ".$D_credit[$i_credit]."<br/><br/><br/>";

        } else {

            echo "ERROR 547: Could not able to execute $sql_by_voucher. " . mysqli_error($link);
        
        }
    
        // Increment the cell number
        $i_debit++;
        $i_credit++; 

    }
    
} else {

    echo "ERROR 535: Could not able to execute $sql. " . mysqli_error($link);

}

// Get assts debit and credit where voucher date is as user specified from ckc_2021_balance_sheet_liability and ckc_2021_balance_sheet_liability_pending

$sql = "SELECT acc_number FROM ckc_2021_balance_sheet_liability WHERE active_status = '$active'";

if ($result = mysqli_query($link, $sql)) {

    // Assign the cell number
    $i_debit = 66;
    $i_credit = 66;

    while ($row = mysqli_fetch_array($result)) {
        
        $acc_number = $row_by_voucher['acc_number'];
        
        $sql_by_voucher = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_liability_pending WHERE acc_number = '$acc_number' AND (debit_balance_status = '$approved' OR credit_balance_status = '$approved') AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

        if ($result_by_voucher = mysqli_query($link, $sql_by_voucher)) {

            while ($row_by_voucher = mysqli_fetch_array($result_by_voucher)) {
            
                $check_date = $row_by_voucher['voucher_date'];
            
                if ($check_date <= $periodTo) {
            
                    $C_debit[$i_debit] += $row_by_voucher["debit_balance"];
                    $D_credit[$i_credit] += $row_by_voucher["credit_balance"];
            
                }
            
            }   

        } else {

            echo "ERROR 598: Could not able to execute $sql_by_voucher. " . mysqli_error($link);
        
        }
    
        // Increment the cell number
        $i_debit++;
        $i_credit++; 

    }
    
} else {

    echo "ERROR 586: Could not able to execute $sql. " . mysqli_error($link);

}

// Get assts debit and credit where voucher date is as user specified from ckc_2021_balance_sheet_income and ckc_2021_balance_sheet_income_pending

$sql = "SELECT acc_number FROM ckc_2021_balance_sheet_income WHERE active_status = '$active'";

if ($result = mysqli_query($link, $sql)) {

    // Assign the cell number
    $i_debit = 203;
    $i_credit = 203;

    while ($row = mysqli_fetch_array($result)) {
        
        $acc_number = $row_by_voucher['acc_number'];
        
        $sql_by_voucher = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_income_pending WHERE acc_number = '$acc_number' AND (debit_balance_status = '$approved' OR credit_balance_status = '$approved') AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

        if ($result_by_voucher = mysqli_query($link, $sql_by_voucher)) {

            while ($row_by_voucher = mysqli_fetch_array($result_by_voucher)) {
            
                $check_date = $row_by_voucher['voucher_date'];
            
                if ($check_date <= $periodTo) {
            
                    $C_debit[$i_debit] += $row_by_voucher["debit_balance"];
                    $D_credit[$i_credit] += $row_by_voucher["credit_balance"];
            
                }
            
            }   

        } else {

            echo "ERROR 649: Could not able to execute $sql_by_voucher. " . mysqli_error($link);
        
        }
    
        // Increment the cell number
        $i_debit++;
        $i_credit++; 

    }
    
} else {

    echo "ERROR 637: Could not able to execute $sql. " . mysqli_error($link);

}

// Get assts debit and credit where voucher date is as user specified from ckc_2021_balance_sheet_expense and ckc_2021_balance_sheet_expense_pending

$sql = "SELECT acc_number FROM ckc_2021_balance_sheet_expense WHERE active_status = '$active'";

if ($result = mysqli_query($link, $sql)) {

    // Assign the cell number
    $i_debit = 244;
    $i_credit = 244;

    while ($row = mysqli_fetch_array($result)) {
        
        $acc_number = $row_by_voucher['acc_number'];
        
        $sql_by_voucher = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_expense_pending WHERE acc_number = '$acc_number' AND (debit_balance_status = '$approved' OR credit_balance_status = '$approved') AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

        if ($result_by_voucher = mysqli_query($link, $sql_by_voucher)) {

            while ($row_by_voucher = mysqli_fetch_array($result_by_voucher)) {
            
                $check_date = $row_by_voucher['voucher_date'];
            
                if ($check_date <= $periodTo) {
            
                    $C_debit[$i_debit] += $row_by_voucher["debit_balance"];
                    $D_credit[$i_credit] += $row_by_voucher["credit_balance"];
            
                }
            
            }   

        } else {

            echo "ERROR 700: Could not able to execute $sql_by_voucher. " . mysqli_error($link);
        
        }
    
        // Increment the cell number
        $i_debit++;
        $i_credit++; 

    }
    
} else {

    echo "ERROR 688: Could not able to execute $sql. " . mysqli_error($link);

}

// Get assts debit and credit where voucher date is as user specified from ckc_2021_balance_sheet_contigent_assets and ckc_2021_balance_sheet_contigent_assets_pending

$sql = "SELECT acc_number FROM ckc_2021_balance_sheet_contigent_assets WHERE active_status = '$active'";

if ($result = mysqli_query($link, $sql)) {

    // Assign the cell number
    $i_debit = 386;
    $i_credit = 386;

    while ($row = mysqli_fetch_array($result)) {
        
        $acc_number = $row_by_voucher['acc_number'];
        
        $sql_by_voucher = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_contigent_assets_pending WHERE acc_number = '$acc_number' AND (debit_balance_status = '$approved' OR credit_balance_status = '$approved') AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

        if ($result_by_voucher = mysqli_query($link, $sql_by_voucher)) {

            while ($row_by_voucher = mysqli_fetch_array($result_by_voucher)) {
            
                $check_date = $row_by_voucher['voucher_date'];
            
                if ($check_date <= $periodTo) {
            
                    $C_debit[$i_debit] += $row_by_voucher["debit_balance"];
                    $D_credit[$i_credit] += $row_by_voucher["credit_balance"];
            
                }
            
            }   

        } else {

            echo "ERROR 751: Could not able to execute $sql_by_voucher. " . mysqli_error($link);
        
        }
    
        // Increment the cell number
        $i_debit++;
        $i_credit++; 

    }
    
} else {

    echo "ERROR 739: Could not able to execute $sql. " . mysqli_error($link);

}

// Get assts debit and credit where voucher date is as user specified from ckc_2021_balance_sheet_contigent_liability and ckc_2021_balance_sheet_contigent_liability_pending

$sql = "SELECT acc_number FROM ckc_2021_balance_sheet_contigent_liability WHERE active_status = '$active'";

if ($result = mysqli_query($link, $sql)) {

    // Assign the cell number
    $i_debit = 393;
    $i_credit = 393;

    while ($row = mysqli_fetch_array($result)) {
        
        $acc_number = $row_by_voucher['acc_number'];
        
        $sql_by_voucher = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_contigent_liability_pending WHERE acc_number = '$acc_number' AND (debit_balance_status = '$approved' OR credit_balance_status = '$approved') AND voucher_date >= '$periodFrom' ORDER BY voucher_date ASC";

        if ($result_by_voucher = mysqli_query($link, $sql_by_voucher)) {

            while ($row_by_voucher = mysqli_fetch_array($result_by_voucher)) {
            
                $check_date = $row_by_voucher['voucher_date'];
            
                if ($check_date <= $periodTo) {
            
                    $C_debit[$i_debit] += $row_by_voucher["debit_balance"];
                    $D_credit[$i_credit] += $row_by_voucher["credit_balance"];
            
                }
            
            }   

        } else {

            echo "ERROR 802: Could not able to execute $sql_by_voucher. " . mysqli_error($link);
        
        }
    
        // Increment the cell number
        $i_debit++;
        $i_credit++; 

    }
    
} else {

    echo "ERROR 790: Could not able to execute $sql. " . mysqli_error($link);

}
*/



// Get all the values from balance sheet
$C_debit = array();
$D_credit = array();

$sql = "SELECT acc_number FROM ckc_2021_balance_sheet_assets WHERE active_status = '$active'";

if ($result = mysqli_query($link, $sql)) {

    // Assign the cell number
    $i_debit = 6;
    $i_credit = 6;

    while ($row = mysqli_fetch_array($result)) {
        
        $C_debit[$i_debit] += $row["debit_balance"];
        $D_credit[$i_credit] += $row["credit_balance"];
        
        // Increment the cell number
        $i_debit++;
        $i_credit++;

    }
    
} else {

    echo "ERROR 535: Could not able to execute $sql. " . mysqli_error($link);

}

// Get assts debit and credit where voucher date is as user specified from ckc_2021_balance_sheet_liability and ckc_2021_balance_sheet_liability_pending

$sql = "SELECT acc_number FROM ckc_2021_balance_sheet_liability WHERE active_status = '$active'";

if ($result = mysqli_query($link, $sql)) {

    // Assign the cell number
    $i_debit = 66;
    $i_credit = 66;

    while ($row = mysqli_fetch_array($result)) {
        
        $C_debit[$i_debit] += $row["debit_balance"];
        $D_credit[$i_credit] += $row["credit_balance"];
    
        // Increment the cell number
        $i_debit++;
        $i_credit++;

    }
    
} else {

    echo "ERROR 586: Could not able to execute $sql. " . mysqli_error($link);

}

// Get assts debit and credit where voucher date is as user specified from ckc_2021_balance_sheet_income and ckc_2021_balance_sheet_income_pending

$sql = "SELECT acc_number FROM ckc_2021_balance_sheet_income WHERE active_status = '$active'";

if ($result = mysqli_query($link, $sql)) {

    // Assign the cell number
    $i_debit = 203;
    $i_credit = 203;

    while ($row = mysqli_fetch_array($result)) {
        
        $C_debit[$i_debit] += $row["debit_balance"];
        $D_credit[$i_credit] += $row["credit_balance"];
    
        // Increment the cell number
        $i_debit++;
        $i_credit++; 

    }
    
} else {

    echo "ERROR 637: Could not able to execute $sql. " . mysqli_error($link);

}

// Get assts debit and credit where voucher date is as user specified from ckc_2021_balance_sheet_expense and ckc_2021_balance_sheet_expense_pending

$sql = "SELECT acc_number FROM ckc_2021_balance_sheet_expense WHERE active_status = '$active'";

if ($result = mysqli_query($link, $sql)) {

    // Assign the cell number
    $i_debit = 244;
    $i_credit = 244;

    while ($row = mysqli_fetch_array($result)) {
        
        $C_debit[$i_debit] += $row["debit_balance"];
        $D_credit[$i_credit] += $row["credit_balance"];
    
        // Increment the cell number
        $i_debit++;
        $i_credit++;

    }
    
} else {

    echo "ERROR 688: Could not able to execute $sql. " . mysqli_error($link);

}

// Get assts debit and credit where voucher date is as user specified from ckc_2021_balance_sheet_contigent_assets and ckc_2021_balance_sheet_contigent_assets_pending

$sql = "SELECT acc_number FROM ckc_2021_balance_sheet_contigent_assets WHERE active_status = '$active'";

if ($result = mysqli_query($link, $sql)) {

    // Assign the cell number
    $i_debit = 386;
    $i_credit = 386;

    while ($row = mysqli_fetch_array($result)) {
        
        $C_debit[$i_debit] += $row["debit_balance"];
        $D_credit[$i_credit] += $row["credit_balance"];
    
        // Increment the cell number
        $i_debit++;
        $i_credit++;

    }
    
} else {

    echo "ERROR 739: Could not able to execute $sql. " . mysqli_error($link);

}

// Get assts debit and credit where voucher date is as user specified from ckc_2021_balance_sheet_contigent_liability and ckc_2021_balance_sheet_contigent_liability_pending

$sql = "SELECT acc_number FROM ckc_2021_balance_sheet_contigent_liability WHERE active_status = '$active'";

if ($result = mysqli_query($link, $sql)) {

    // Assign the cell number
    $i_debit = 393;
    $i_credit = 393;

    while ($row = mysqli_fetch_array($result)) {
        
        $C_debit[$i_debit] += $row["debit_balance"];
        $D_credit[$i_credit] += $row["credit_balance"];
    
        // Increment the cell number
        $i_debit++;
        $i_credit++;

    }
    
} else {

    echo "ERROR 790: Could not able to execute $sql. " . mysqli_error($link);

}



echo "Debit= ".$C_debit[77].", Credit= ".$D_credit[77]."<br/>";
echo "Debit= ".$C_debit[89].", Credit= ".$D_credit[89]."<br/><br/><br/><br/>";



// Assign variables with values from database from $D6 to $D398
$D6 = $D_credit[6];
$D7 = $D_credit[7];
$D8 = $D_credit[8];
$D9 = $D_credit[9];
$D10 = $D_credit[10];
$D11 = $D_credit[11];
$D12 = $D_credit[12];
$D13 = $D_credit[13];
$D14 = $D_credit[14];
$D15 = $D_credit[15];
$D16 = $D_credit[16];
$D17 = $D_credit[17];
$D18 = $D_credit[18];
$D19 = $D_credit[19];
$D20 = $D_credit[20];
$D21 = $D_credit[21];
$D22 = $D_credit[22];
$D23 = $D_credit[23];
$D24 = $D_credit[24];
$D25 = $D_credit[25];
$D26 = $D_credit[26];
$D27 = $D_credit[27];
$D28 = $D_credit[28];
$D29 = $D_credit[29];
$D30 = $D_credit[30];
$D31 = $D_credit[31];
$D32 = $D_credit[32];
$D33 = $D_credit[33];
$D34 = $D_credit[34];
$D35 = $D_credit[35];
$D36 = $D_credit[36];
$D37 = $D_credit[37];
$D38 = $D_credit[38];
$D39 = $D_credit[39];
$D40 = $D_credit[40];
$D41 = $D_credit[41];
$D42 = $D_credit[42];
$D43 = $D_credit[43];
$D44 = $D_credit[44];
$D45 = $D_credit[45];
$D46 = $D_credit[46];
$D47 = $D_credit[47];
$D48 = $D_credit[48];
$D49 = $D_credit[49];
$D50 = $D_credit[50];
$D51 = $D_credit[51];
$D52 = $D_credit[52];
$D53 = $D_credit[53];
$D54 = $D_credit[54];
$D55 = $D_credit[55];
$D56 = $D_credit[56];
$D57 = $D_credit[57];
$D58 = $D_credit[58];
$D59 = $D_credit[59];
$D60 = $D_credit[60];
$D61 = $D_credit[61];
$D62 = $D_credit[62];
$D63 = $D_credit[63];
$D64 = $D_credit[64];
$D65 = $D_credit[65];
$D66 = $D_credit[66];
$D67 = $D_credit[67];
$D68 = $D_credit[68];
$D69 = $D_credit[69];
$D70 = $D_credit[70];
$D71 = $D_credit[71];
$D72 = $D_credit[72];
$D73 = $D_credit[73];
$D74 = $D_credit[74];
$D75 = $D_credit[75];
$D76 = $D_credit[76];
$D77 = $D_credit[77];
$D78 = $D_credit[78]; 
$D79 = $D_credit[79];
$D80 = $D_credit[80];
$D81 = $D_credit[81];
$D82 = $D_credit[82];
$D83 = $D_credit[83];
$D84 = $D_credit[84];
$D85 = $D_credit[85];
$D86 = $D_credit[86];
$D87 = $D_credit[87];
$D88 = $D_credit[88];
$D89 = $D_credit[89];
$D90 = $D_credit[90];
$D91 = $D_credit[91];
$D92 = $D_credit[92];
$D93 = $D_credit[93];
$D94 = $D_credit[94];
$D95 = $D_credit[95];
$D96 = $D_credit[96];
$D97 = $D_credit[97];
$D98 = $D_credit[98];
$D99 = $D_credit[99];
$D100 = $D_credit[100];
$D101 = $D_credit[101];
$D102 = $D_credit[102];
$D103 = $D_credit[103];
$D104 = $D_credit[104];
$D105 = $D_credit[105];
$D106 = $D_credit[106];
$D107 = $D_credit[107];
$D108 = $D_credit[108];
$D109 = $D_credit[109];
$D110 = $D_credit[110];
$D111 = $D_credit[111];
$D112 = $D_credit[112];
$D113 = $D_credit[113];
$D114 = $D_credit[114];
$D115 = $D_credit[115];
$D116 = $D_credit[116];
$D117 = $D_credit[117];
$D118 = $D_credit[118];
$D119 = $D_credit[119];
$D120 = $D_credit[120];
$D121 = $D_credit[121];
$D122 = $D_credit[122];
$D123 = $D_credit[123];
$D124 = $D_credit[124];
$D125 = $D_credit[125];
$D126 = $D_credit[126];
$D127 = $D_credit[127];
$D128 = $D_credit[128];
$D129 = $D_credit[129];
$D130 = $D_credit[130];
$D131 = $D_credit[131];
$D132 = $D_credit[132];
$D133 = $D_credit[133];
$D134 = $D_credit[134];
$D135 = $D_credit[135];
$D136 = $D_credit[136];
$D137 = $D_credit[137];
$D138 = $D_credit[138];
$D139 = $D_credit[139];
$D140 = $D_credit[140];
$D141 = $D_credit[141];
$D142 = $D_credit[142];
$D143 = $D_credit[143];
$D144 = $D_credit[144];
$D145 = $D_credit[145];
$D146 = $D_credit[146];
$D147 = $D_credit[147];
$D148 = $D_credit[148];
$D149 = $D_credit[149];
$D150 = $D_credit[150];
$D151 = $D_credit[151];
$D152 = $D_credit[152];
$D153 = $D_credit[153];
$D154 = $D_credit[154];
$D155 = $D_credit[155];
$D156 = $D_credit[156];
$D157 = $D_credit[157];
$D158 = $D_credit[158];
$D159 = $D_credit[159];
$D160 = $D_credit[160];
$D161 = $D_credit[161];
$D162 = $D_credit[162];
$D163 = $D_credit[163];
$D164 = $D_credit[164];
$D165 = $D_credit[165];
$D166 = $D_credit[166];
$D167 = $D_credit[167];
$D168 = $D_credit[168];
$D169 = $D_credit[169];
$D170 = $D_credit[170];
$D171 = $D_credit[171];
$D172 = $D_credit[172];
$D173 = $D_credit[173];
$D174 = $D_credit[174];
$D175 = $D_credit[175];
$D176 = $D_credit[176];
$D177 = $D_credit[177];
$D178 = $D_credit[178];
$D179 = $D_credit[179];
$D180 = $D_credit[180];
$D181 = $D_credit[181];
$D182 = $D_credit[182];
$D183 = $D_credit[183];
$D184 = $D_credit[184];
$D185 = $D_credit[185];
$D186 = $D_credit[186];
$D187 = $D_credit[187];
$D188 = $D_credit[188];
$D189 = $D_credit[189];
$D190 = $D_credit[190];
$D191 = $D_credit[191];
$D192 = $D_credit[192];
$D193 = $D_credit[193];
$D194 = $D_credit[194];
$D195 = $D_credit[195];
$D196 = $D_credit[196];
$D197 = $D_credit[197];
$D198 = $D_credit[198];
$D199 = $D_credit[199];
$D200 = $D_credit[200];
$D201 = $D_credit[201];
$D202 = $D_credit[202];
$D203 = $D_credit[203];
$D204 = $D_credit[204];
$D205 = $D_credit[205];
$D206 = $D_credit[206];
$D207 = $D_credit[207];
$D208 = $D_credit[208];
$D209 = $D_credit[209];
$D210 = $D_credit[210];
$D211 = $D_credit[211];
$D212 = $D_credit[212];
$D213 = $D_credit[213];
$D214 = $D_credit[214];
$D215 = $D_credit[215];
$D216 = $D_credit[216];
$D217 = $D_credit[217];
$D218 = $D_credit[218];
$D219 = $D_credit[219];
$D220 = $D_credit[220];
$D221 = $D_credit[221];
$D222 = $D_credit[222];
$D223 = $D_credit[223];
$D224 = $D_credit[224];
$D225 = $D_credit[225];
$D226 = $D_credit[226];
$D227 = $D_credit[227];
$D228 = $D_credit[228];
$D229 = $D_credit[229];
$D230 = $D_credit[230];
$D231 = $D_credit[231];
$D232 = $D_credit[232];
$D233 = $D_credit[233];
$D234 = $D_credit[234];
$D235 = $D_credit[235];
$D236 = $D_credit[236];
$D237 = $D_credit[237];
$D238 = $D_credit[238];
$D239 = $D_credit[239];
$D240 = $D_credit[240];
$D241 = $D_credit[241];
$D242 = $D_credit[242];
$D243 = $D_credit[243];
$D244 = $D_credit[244];
$D245 = $D_credit[245];
$D246 = $D_credit[246];
$D247 = $D_credit[247];
$D248 = $D_credit[248];
$D249 = $D_credit[249];
$D250 = $D_credit[250];
$D251 = $D_credit[251];
$D252 = $D_credit[252];
$D253 = $D_credit[253];
$D254 = $D_credit[254];
$D255 = $D_credit[255];
$D256 = $D_credit[256];
$D257 = $D_credit[257];
$D258 = $D_credit[258];
$D259 = $D_credit[259];
$D260 = $D_credit[260];
$D261 = $D_credit[261];
$D262 = $D_credit[262];
$D263 = $D_credit[263];
$D264 = $D_credit[264];
$D265 = $D_credit[265];
$D266 = $D_credit[266];
$D267 = $D_credit[267];
$D268 = $D_credit[268];
$D269 = $D_credit[269];
$D270 = $D_credit[270];
$D271 = $D_credit[271];
$D272 = $D_credit[272];
$D273 = $D_credit[273];
$D274 = $D_credit[274];
$D275 = $D_credit[275];
$D276 = $D_credit[276];
$D277 = $D_credit[277];
$D278 = $D_credit[278];
$D279 = $D_credit[279];
$D280 = $D_credit[280];
$D281 = $D_credit[281];
$D282 = $D_credit[282];
$D283 = $D_credit[283];
$D284 = $D_credit[284];
$D285 = $D_credit[285];
$D286 = $D_credit[286];
$D287 = $D_credit[287];
$D288 = $D_credit[288];
$D289 = $D_credit[289];
$D290 = $D_credit[290];
$D291 = $D_credit[291];
$D292 = $D_credit[292];
$D293 = $D_credit[293];
$D294 = $D_credit[294];
$D295 = $D_credit[295];
$D296 = $D_credit[296];
$D297 = $D_credit[297];
$D298 = $D_credit[298];
$D299 = $D_credit[299];
$D300 = $D_credit[300];
$D301 = $D_credit[301];
$D302 = $D_credit[302];
$D303 = $D_credit[303];
$D304 = $D_credit[304];
$D305 = $D_credit[305];
$D306 = $D_credit[306];
$D307 = $D_credit[307];
$D308 = $D_credit[308];
$D309 = $D_credit[309];
$D310 = $D_credit[310];
$D311 = $D_credit[311];
$D312 = $D_credit[312];
$D313 = $D_credit[313];
$D314 = $D_credit[314];
$D315 = $D_credit[315];
$D316 = $D_credit[316];
$D317 = $D_credit[317];
$D318 = $D_credit[318];
$D319 = $D_credit[319];
$D320 = $D_credit[320];
$D321 = $D_credit[321];
$D322 = $D_credit[322];
$D323 = $D_credit[323];
$D324 = $D_credit[324];
$D325 = $D_credit[325];
$D326 = $D_credit[326];
$D327 = $D_credit[327];
$D328 = $D_credit[328];
$D329 = $D_credit[329];
$D330 = $D_credit[330];
$D331 = $D_credit[331];
$D332 = $D_credit[332];
$D333 = $D_credit[333];
$D334 = $D_credit[334];
$D335 = $D_credit[335];
$D336 = $D_credit[336];
$D337 = $D_credit[337];
$D338 = $D_credit[338];
$D339 = $D_credit[339];
$D340 = $D_credit[340];
$D341 = $D_credit[341];
$D342 = $D_credit[342];
$D343 = $D_credit[343];
$D344 = $D_credit[344];
$D345 = $D_credit[345];
$D346 = $D_credit[346];
$D347 = $D_credit[347];
$D348 = $D_credit[348];
$D349 = $D_credit[349];
$D350 = $D_credit[350];
$D351 = $D_credit[351];
$D352 = $D_credit[352];
$D353 = $D_credit[353];
$D354 = $D_credit[354];
$D355 = $D_credit[355];
$D356 = $D_credit[356];
$D357 = $D_credit[357];
$D358 = $D_credit[358];
$D359 = $D_credit[359];
$D360 = $D_credit[360];
$D361 = $D_credit[361];
$D362 = $D_credit[362];
$D363 = $D_credit[363];
$D364 = $D_credit[364];
$D365 = $D_credit[365];
$D366 = $D_credit[366];
$D367 = $D_credit[367];
$D368 = $D_credit[368];
$D369 = $D_credit[369];
$D370 = $D_credit[370];
$D371 = $D_credit[371];
$D372 = $D_credit[372];
$D373 = $D_credit[373];
$D374 = $D_credit[374];
$D375 = $D_credit[375];
$D376 = $D_credit[376];
$D377 = $D_credit[377];
$D378 = $D_credit[378];
$D379 = $D_credit[379];
$D380 = $D_credit[380];
$D381 = $D_credit[381];
$D382 = $D_credit[382];
$D383 = $D_credit[383];
$D384 = $D_credit[384];
$D385 = $D_credit[385];
$D386 = $D_credit[386];
$D387 = $D_credit[387];
$D388 = $D_credit[388];
$D389 = $D_credit[389];
$D390 = $D_credit[390];
$D391 = $D_credit[391];
$D392 = $D_credit[392];
$D393 = $D_credit[393];
$D394 = $D_credit[394];
$D395 = $D_credit[395];
$D396 = $D_credit[396];
$D397 = $D_credit[397];
$D398 = $D_credit[398];


// Assign variables with values from database from $C6 to $C398
$C6 = $C_debit[6];
$C7 = $C_debit[7];
$C8 = $C_debit[8];
$C9 = $C_debit[9];
$C10 = $C_debit[10];
$C11 = $C_debit[11];
$C12 = $C_debit[12];
$C13 = $C_debit[13];
$C14 = $C_debit[14];
$C15 = $C_debit[15];
$C16 = $C_debit[16];
$C17 = $C_debit[17];
$C18 = $C_debit[18];
$C19 = $C_debit[19];
$C20 = $C_debit[20];
$C21 = $C_debit[21];
$C22 = $C_debit[22];
$C23 = $C_debit[23];
$C24 = $C_debit[24];
$C25 = $C_debit[25];
$C26 = $C_debit[26];
$C27 = $C_debit[27];
$C28 = $C_debit[28];
$C29 = $C_debit[29];
$C30 = $C_debit[30];
$C31 = $C_debit[31];
$C32 = $C_debit[32];
$C33 = $C_debit[33];
$C34 = $C_debit[34];
$C35 = $C_debit[35];
$C36 = $C_debit[36];
$C37 = $C_debit[37];
$C38 = $C_debit[38];
$C39 = $C_debit[39];
$C40 = $C_debit[40];
$C41 = $C_debit[41];
$C42 = $C_debit[42];
$C43 = $C_debit[43];
$C44 = $C_debit[44];
$C45 = $C_debit[45];
$C46 = $C_debit[46];
$C47 = $C_debit[47];
$C48 = $C_debit[48];
$C49 = $C_debit[49];
$C50 = $C_debit[50];
$C51 = $C_debit[51];
$C52 = $C_debit[52];
$C53 = $C_debit[53];
$C54 = $C_debit[54];
$C55 = $C_debit[55];
$C56 = $C_debit[56];
$C57 = $C_debit[57];
$C58 = $C_debit[58];
$C59 = $C_debit[59];
$C60 = $C_debit[60];
$C61 = $C_debit[61];
$C62 = $C_debit[62];
$C63 = $C_debit[63];
$C64 = $C_debit[64];
$C65 = $C_debit[65];
$C66 = $C_debit[66];
$C67 = $C_debit[67];
$C68 = $C_debit[68];
$C69 = $C_debit[69];
$C70 = $C_debit[70];
$C71 = $C_debit[71];
$C72 = $C_debit[72];
$C73 = $C_debit[73];
$C74 = $C_debit[74];
$C75 = $C_debit[75];
$C76 = $C_debit[76];
$C77 = $C_debit[77];
$C78 = $C_debit[78]; 
$C79 = $C_debit[79];
$C80 = $C_debit[80];
$C81 = $C_debit[81];
$C82 = $C_debit[82];
$C83 = $C_debit[83];
$C84 = $C_debit[84];
$C85 = $C_debit[85];
$C86 = $C_debit[86];
$C87 = $C_debit[87];
$C88 = $C_debit[88];
$C89 = $C_debit[89];
$C90 = $C_debit[90];
$C91 = $C_debit[91];
$C92 = $C_debit[92];
$C93 = $C_debit[93];
$C94 = $C_debit[94];
$C95 = $C_debit[95];
$C96 = $C_debit[96];
$C97 = $C_debit[97];
$C98 = $C_debit[98];
$C99 = $C_debit[99];
$C100 = $C_debit[100];
$C101 = $C_debit[101];
$C102 = $C_debit[102];
$C103 = $C_debit[103];
$C104 = $C_debit[104];
$C105 = $C_debit[105];
$C106 = $C_debit[106];
$C107 = $C_debit[107];
$C108 = $C_debit[108];
$C109 = $C_debit[109];
$C110 = $C_debit[110];
$C111 = $C_debit[111];
$C112 = $C_debit[112];
$C113 = $C_debit[113];
$C114 = $C_debit[114];
$C115 = $C_debit[115];
$C116 = $C_debit[116];
$C117 = $C_debit[117];
$C118 = $C_debit[118];
$C119 = $C_debit[119];
$C120 = $C_debit[120];
$C121 = $C_debit[121];
$C122 = $C_debit[122];
$C123 = $C_debit[123];
$C124 = $C_debit[124];
$C125 = $C_debit[125];
$C126 = $C_debit[126];
$C127 = $C_debit[127];
$C128 = $C_debit[128];
$C129 = $C_debit[129];
$C130 = $C_debit[130];
$C131 = $C_debit[131];
$C132 = $C_debit[132];
$C133 = $C_debit[133];
$C134 = $C_debit[134];
$C135 = $C_debit[135];
$C136 = $C_debit[136];
$C137 = $C_debit[137];
$C138 = $C_debit[138];
$C139 = $C_debit[139];
$C140 = $C_debit[140];
$C141 = $C_debit[141];
$C142 = $C_debit[142];
$C143 = $C_debit[143];
$C144 = $C_debit[144];
$C145 = $C_debit[145];
$C146 = $C_debit[146];
$C147 = $C_debit[147];
$C148 = $C_debit[148];
$C149 = $C_debit[149];
$C150 = $C_debit[150];
$C151 = $C_debit[151];
$C152 = $C_debit[152];
$C153 = $C_debit[153];
$C154 = $C_debit[154];
$C155 = $C_debit[155];
$C156 = $C_debit[156];
$C157 = $C_debit[157];
$C158 = $C_debit[158];
$C159 = $C_debit[159];
$C160 = $C_debit[160];
$C161 = $C_debit[161];
$C162 = $C_debit[162];
$C163 = $C_debit[163];
$C164 = $C_debit[164];
$C165 = $C_debit[165];
$C166 = $C_debit[166];
$C167 = $C_debit[167];
$C168 = $C_debit[168];
$C169 = $C_debit[169];
$C170 = $C_debit[170];
$C171 = $C_debit[171];
$C172 = $C_debit[172];
$C173 = $C_debit[173];
$C174 = $C_debit[174];
$C175 = $C_debit[175];
$C176 = $C_debit[176];
$C177 = $C_debit[177];
$C178 = $C_debit[178];
$C179 = $C_debit[179];
$C180 = $C_debit[180];
$C181 = $C_debit[181];
$C182 = $C_debit[182];
$C183 = $C_debit[183];
$C184 = $C_debit[184];
$C185 = $C_debit[185];
$C186 = $C_debit[186];
$C187 = $C_debit[187];
$C188 = $C_debit[188];
$C189 = $C_debit[189];
$C190 = $C_debit[190];
$C191 = $C_debit[191];
$C192 = $C_debit[192];
$C193 = $C_debit[193];
$C194 = $C_debit[194];
$C195 = $C_debit[195];
$C196 = $C_debit[196];
$C197 = $C_debit[197];
$C198 = $C_debit[198];
$C199 = $C_debit[199];
$C200 = $C_debit[200];
$C201 = $C_debit[201];
$C202 = $C_debit[202];
$C203 = $C_debit[203];
$C204 = $C_debit[204];
$C205 = $C_debit[205];
$C206 = $C_debit[206];
$C207 = $C_debit[207];
$C208 = $C_debit[208];
$C209 = $C_debit[209];
$C210 = $C_debit[210];
$C211 = $C_debit[211];
$C212 = $C_debit[212];
$C213 = $C_debit[213];
$C214 = $C_debit[214];
$C215 = $C_debit[215];
$C216 = $C_debit[216];
$C217 = $C_debit[217];
$C218 = $C_debit[218];
$C219 = $C_debit[219];
$C220 = $C_debit[220];
$C221 = $C_debit[221];
$C222 = $C_debit[222];
$C223 = $C_debit[223];
$C224 = $C_debit[224];
$C225 = $C_debit[225];
$C226 = $C_debit[226];
$C227 = $C_debit[227];
$C228 = $C_debit[228];
$C229 = $C_debit[229];
$C230 = $C_debit[230];
$C231 = $C_debit[231];
$C232 = $C_debit[232];
$C233 = $C_debit[233];
$C234 = $C_debit[234];
$C235 = $C_debit[235];
$C236 = $C_debit[236];
$C237 = $C_debit[237];
$C238 = $C_debit[238];
$C239 = $C_debit[239];
$C240 = $C_debit[240];
$C241 = $C_debit[241];
$C242 = $C_debit[242];
$C243 = $C_debit[243];
$C244 = $C_debit[244];
$C245 = $C_debit[245];
$C246 = $C_debit[246];
$C247 = $C_debit[247];
$C248 = $C_debit[248];
$C249 = $C_debit[249];
$C250 = $C_debit[250];
$C251 = $C_debit[251];
$C252 = $C_debit[252];
$C253 = $C_debit[253];
$C254 = $C_debit[254];
$C255 = $C_debit[255];
$C256 = $C_debit[256];
$C257 = $C_debit[257];
$C258 = $C_debit[258];
$C259 = $C_debit[259];
$C260 = $C_debit[260];
$C261 = $C_debit[261];
$C262 = $C_debit[262];
$C263 = $C_debit[263];
$C264 = $C_debit[264];
$C265 = $C_debit[265];
$C266 = $C_debit[266];
$C267 = $C_debit[267];
$C268 = $C_debit[268];
$C269 = $C_debit[269];
$C270 = $C_debit[270];
$C271 = $C_debit[271];
$C272 = $C_debit[272];
$C273 = $C_debit[273];
$C274 = $C_debit[274];
$C275 = $C_debit[275];
$C276 = $C_debit[276];
$C277 = $C_debit[277];
$C278 = $C_debit[278];
$C279 = $C_debit[279];
$C280 = $C_debit[280];
$C281 = $C_debit[281];
$C282 = $C_debit[282];
$C283 = $C_debit[283];
$C284 = $C_debit[284];
$C285 = $C_debit[285];
$C286 = $C_debit[286];
$C287 = $C_debit[287];
$C288 = $C_debit[288];
$C289 = $C_debit[289];
$C290 = $C_debit[290];
$C291 = $C_debit[291];
$C292 = $C_debit[292];
$C293 = $C_debit[293];
$C294 = $C_debit[294];
$C295 = $C_debit[295];
$C296 = $C_debit[296];
$C297 = $C_debit[297];
$C298 = $C_debit[298];
$C299 = $C_debit[299];
$C300 = $C_debit[300];
$C301 = $C_debit[301];
$C302 = $C_debit[302];
$C303 = $C_debit[303];
$C304 = $C_debit[304];
$C305 = $C_debit[305];
$C306 = $C_debit[306];
$C307 = $C_debit[307];
$C308 = $C_debit[308];
$C309 = $C_debit[309];
$C310 = $C_debit[310];
$C311 = $C_debit[311];
$C312 = $C_debit[312];
$C313 = $C_debit[313];
$C314 = $C_debit[314];
$C315 = $C_debit[315];
$C316 = $C_debit[316];
$C317 = $C_debit[317];
$C318 = $C_debit[318];
$C319 = $C_debit[319];
$C320 = $C_debit[320];
$C321 = $C_debit[321];
$C322 = $C_debit[322];
$C323 = $C_debit[323];
$C324 = $C_debit[324];
$C325 = $C_debit[325];
$C326 = $C_debit[326];
$C327 = $C_debit[327];
$C328 = $C_debit[328];
$C329 = $C_debit[329];
$C330 = $C_debit[330];
$C331 = $C_debit[331];
$C332 = $C_debit[332];
$C333 = $C_debit[333];
$C334 = $C_debit[334];
$C335 = $C_debit[335];
$C336 = $C_debit[336];
$C337 = $C_debit[337];
$C338 = $C_debit[338];
$C339 = $C_debit[339];
$C340 = $C_debit[340];
$C341 = $C_debit[341];
$C342 = $C_debit[342];
$C343 = $C_debit[343];
$C344 = $C_debit[344];
$C345 = $C_debit[345];
$C346 = $C_debit[346];
$C347 = $C_debit[347];
$C348 = $C_debit[348];
$C349 = $C_debit[349];
$C350 = $C_debit[350];
$C351 = $C_debit[351];
$C352 = $C_debit[352];
$C353 = $C_debit[353];
$C354 = $C_debit[354];
$C355 = $C_debit[355];
$C356 = $C_debit[356];
$C357 = $C_debit[357];
$C358 = $C_debit[358];
$C359 = $C_debit[359];
$C360 = $C_debit[360];
$C361 = $C_debit[361];
$C362 = $C_debit[362];
$C363 = $C_debit[363];
$C364 = $C_debit[364];
$C365 = $C_debit[365];
$C366 = $C_debit[366];
$C367 = $C_debit[367];
$C368 = $C_debit[368];
$C369 = $C_debit[369];
$C370 = $C_debit[370];
$C371 = $C_debit[371];
$C372 = $C_debit[372];
$C373 = $C_debit[373];
$C374 = $C_debit[374];
$C375 = $C_debit[375];
$C376 = $C_debit[376];
$C377 = $C_debit[377];
$C378 = $C_debit[378];
$C379 = $C_debit[379];
$C380 = $C_debit[380];
$C381 = $C_debit[381];
$C382 = $C_debit[382];
$C383 = $C_debit[383];
$C384 = $C_debit[384];
$C385 = $C_debit[385];
$C386 = $C_debit[386];
$C387 = $C_debit[387];
$C388 = $C_debit[388];
$C389 = $C_debit[389];
$C390 = $C_debit[390];
$C391 = $C_debit[391];
$C392 = $C_debit[392];
$C393 = $C_debit[393];
$C394 = $C_debit[394];
$C395 = $C_debit[395];
$C396 = $C_debit[396];
$C397 = $C_debit[397];
$C398 = $C_debit[398];





// map all the formular for cell C
$D_credit[394] = $C394 = $C395 + $C396 + $C397 + $C398;
$D_credit[393] = $C393 = $C394;
$D_credit[387] = $C387 = $C388 + $C389 + $C390 + $C391 + $C392;
$D_credit[386] = $C386 = $C387;
$D_credit[384] = $C384 = $C385;
$D_credit[378] = $C378 = $C379 + $C380 + $C381 + $C382 + $C383;
$D_credit[370] = $C370 = $C371 + $C372 + $C373 + $C374 + $C375 + $C376 + $C377;
$D_credit[368] = $C368 = $C369;
$D_credit[366] = $C366 = $C367;
$D_credit[364] = $C364 = $C365;
$D_credit[354] = $C354 = $C355 + $C356 + $C357 + $C358 + $C359 + $C360 + $C361 + $C362 + $C363;
$D_credit[353] = $C353 = $C354 + $C364;
$D_credit[346] = $C346 = $C347 + $C348 + $C349 + $C350 + $C351 + $C352;
$D_credit[343] = $C343 = $C344 + $C345;
$D_credit[337] = $C337 = $C338 + $C338 + $C339 + $C340 + $C342;
$D_credit[331] = $C331 = $C332 + $C333 + $C334 + $C335 + $C336;
$D_credit[328] = $C328 = $C329 + $C330;
$D_credit[323] = $C323 = $C324 + $C325 + $C326 + $C327;
$D_credit[321] = $C321 = $C322;
$D_credit[317] = $C317 = $C318 + $C319 + $C320;
$D_credit[315] = $C315 = $C316;
$D_credit[312] = $C312 = $C313 + $C314;
$D_credit[309] = $C309 = $C310 + $C311;
$D_credit[300] = $C300 = $C301 + $C302 + $C303 + $C304 + $C305 + $C306 + $C307 + $C308;
$D_credit[299] = $C299 = $C300 + $C309;
$D_credit[296] = $C296 = $C297 + $C298;
$D_credit[280] = $C280 = $C281 + $C282 + $C283 + $C284 + $C285 + $C286 + $C287 + $C288 + $C289 + $C290 + $C291 + $C292 + $C293 + $C294 + $C295;
$D_credit[272] = $C272 = $C273 + $C274 + $C275 + $C276 + $C277 + $C278 + $C279 + $C280;
$D_credit[271] = $C271 = $C272 + $C296 + $C299 + $C312 + $C315 + $C317 + $C321 + $C323 + $C328 + $C331 + $C337 + $C343 + $C346 + $C353 + $C366 + $C368 + $C370 + $C378 + $C384;
$D_credit[269] = $C269 = $C270;
$D_credit[267] = $C267 = $C268;
$D_credit[264] = $C264 = $C265 + $C266;
$D_credit[259] = $C259 = $C260 + $C261 + $C262 + $C263;
$D_credit[254] = $C254 = $C255 + $C256 + $C257 + $C258;
$D_credit[253] = $C253 = $C254 + $C259 + $C264 + $C267 + $C269;
$D_credit[245] = $C245 = $C246 + $C247 + $C248 + $C249 + $C250 + $C251 + $C252;
$D_credit[244] = $C244 = $C245 + $C253 + $C271;
$D_credit[240] = $C240 = $C241 + $C242 + $C243;
$D_credit[235] = $C235 = $C236 + $C237 + $C238 + $C239 + $C240;
$D_credit[233] = $C233 = $C234;
$D_credit[231] = $C231 = $C232 + $C233 + $C234;
$D_credit[226] = $C226 = $C227 + $C228 + $C229 + $C230;
$D_credit[219] = $C219 = $C220 + $C221 + $C222 + $C223 + $C224 + $C225;
$D_credit[214] = $C214 = $C215 + $C216 + $C217 + $C218 + $C219;
$D_credit[213] = $C213 = $C214 + $C226 + $C231 + $C235;
$D_credit[205] = $C205 = $C206 + $C207 + $C208 + $C209 + $C210 + $C211 + $C212;
$D_credit[204] = $C204 = $C205;
$D_credit[203] = $C203 = $C204 + $C213 + $C233;
$D_credit[201] = $C201 = $C409;
$D_credit[195] = $C195 = $C196 + $C197 + $C198 + $C199 + $C200 + $C201 + $C202;
$D_credit[180] = $C180 = $C181 + $C182 + $C183 + $C184 + $C185 + $C186 + $C187 + $C188 + $C189 + $C190 + $C191 + $C192 + $C193 + $C194;
$D_credit[177] = $C177 = $C22 * 0.01;
$D_credit[164] = $C164 = $C166 + $C167 + $C168 + $C169 + $C170 + $C171 + $C172 + $C173 + $C174 + $C175 + $C176 + $C177 + $C178 + $C179 + $C180;
$D_credit[163] = $C163 = $C409;
$D_credit[161] = $C161 = $C162 + $C163;
$D_credit[160] = $C160 = $C43;
$D_credit[158] = $C158 = $C159 + $C160;
$D_credit[156] = $C156 = $C157;
$D_credit[140] = $C140 = $C141 + $C142 + $C143 + $C144 + $C145 + $C146 + $C147 + $C148 + $C149 + $C150 + $C151 + $C152 + $C153 + $C154 + $C155;
$D_credit[138] = $C138 = $C139;
$D_credit[132] = $C132 = $C133 + $C134 + $C135;
$D_credit[128] = $C128 = $C129 + $C130 + $C131;
$D_credit[124] = $C124 = $C125 + $C126 + $C127;
$D_credit[119] = $C119 = $C120 + $C121;
$D_credit[118] = $C118 = $C120 + $C122 + $C123 + $C124 + $C128 + $C132;
$D_credit[112] = $C112 = $C113 + $C114 + $C115 + $C116 + $C117;
$D_credit[107] = $C107 = $C108 + $C109 + $C110 + $C111;
$D_credit[104] = $C104 = $C105 + $C106;
$D_credit[101] = $C101 = $C102 + $C103;
$D_credit[99] = $C99 = $C100;
$D_credit[97] = $C97 = $C98;
$D_credit[95] = $C95 = $C96;
$D_credit[94] = $C94 = $C95 + $C97 + $C99 + $C101 + $C104 + $C107 + $C112 + $C118 + $C136 + $C140 + $C156 + $C158 + $C164 + $C161;
$D_credit[92] = $C92 = $C93;
$D_credit[88] = $C88 = $C89 + $C90 + $C91 + $C92;
$D_credit[84] = $C84 = $C85 + $C86 + $C87;
$D_credit[80] = $C80 = $C81 + $C82 + $C83 + $C84;
$D_credit[76] = $C76 = $C77 + $C78 + $C79;
$D_credit[72] = $C72 = $C73 + $C74 + $C75;
$D_credit[68] = $C68 = $C69 + $C70 + $C71 + $C72;
$D_credit[67] = $C67 = $C68 + $C76 + $C80 + $C88;
$D_credit[66] = $C66 = $C67 + $C94 + $C195 - $E203;
$D_credit[64] = $C64 = $C65;
$D_credit[61] = $C61 = $C62;
$D_credit[59] = $C59 = $C60;
$D_credit[57] = $C57 = $C58;
$D_credit[54] = $C54 = $C55;
$D_credit[53] = $C53 = $C54 + $C56;
$D_credit[52] = $C52 = $C53 + $C57 + $C59 + $C61 + $C64 + $C63;
$D_credit[45] = $C45 = $C46 + $C47 + $C48 + $C49 + $C50 + $C51;
$D_credit[40] = $C40 = $C41 + $C42 + $C43 + $C44;
$D_credit[39] = $C39 = $C40 + $C45;
$D_credit[34] = $C34 = $C35 + $C36 + $C37 + $C38;
$D_credit[31] = $C31 = $C32 + $C33;
$D_credit[29] = $C29 = $C30;
$D_credit[27] = $C27 = $C28 + $C29 + $C31 + $C34 + $C39;
$D_credit[23] = $C23 = $C24;
$D_credit[22] = $C22 = $C23 + $C25 + $C26;
$D_credit[20] = $C20 = $C21;
$D_credit[15] = $C15 = $C16;
$D_credit[13] = $C13 = $C14;
$D_credit[9] = $C9 = $C13 + $C14 + $C15;
$D_credit[7] = $C7 = $C9;
$D_credit[6] = $C6 = $C7 + $C12 + $C17 + $C20 + $C22 + $C29 + $C31 + $C34 + $C39 + $C52;


// map all the formular for cell D
$D_credit[394] = $D394 = $D395 + $D396 + $D397 + $D398;
$D_credit[393] = $D393 = $D394;
$D_credit[387] = $D387 = $D388 + $D389 + $D390 + $D391 + $D392;
$D_credit[386] = $D386 = $D387;
$D_credit[384] = $D384 = $D385;
$D_credit[378] = $D378 = $D379 + $D380 + $D381 + $D382 + $D383;
$D_credit[370] = $D370 = $D371 + $D372 + $D373 + $D374 + $D375 + $D376 + $D377;
$D_credit[368] = $D368 = $D369;
$D_credit[366] = $D366 = $D367;
$D_credit[364] = $D364 = $D365;
$D_credit[354] = $D354 = $D355 + $D356 + $D357 + $D358 + $D359 + $D360 + $D361 + $D362 + $D363;
$D_credit[353] = $D353 = $D354 + $D364;
$D_credit[346] = $D346 = $D347 + $D348 + $D349 + $D350 + $D351 + $D352;
$D_credit[343] = $D343 = $D344 + $D345;
$D_credit[337] = $D337 = $D338 + $D338 + $D339 + $D340 + $D342;
$D_credit[331] = $D331 = $D332 + $D333 + $D334 + $D335 + $D336;
$D_credit[328] = $D328 = $D329 + $D330;
$D_credit[323] = $D323 = $D324 + $D325 + $D326 + $D327;
$D_credit[321] = $D321 = $D322;
$D_credit[317] = $D317 = $D318 + $D319 + $D320;
$D_credit[315] = $D315 = $D316;
$D_credit[312] = $D312 = $D313 + $D314;
$D_credit[309] = $D309 = $D310 + $D311;
$D_credit[300] = $D300 = $D301 + $D302 + $D303 + $D304 + $D305 + $D306 + $D307 + $D308;
$D_credit[299] = $D299 = $D300 + $D309;
$D_credit[296] = $D296 = $D297 + $D298;
$D_credit[280] = $D280 = $D281 + $D282 + $D283 + $D284 + $D285 + $D286 + $D287 + $D288 + $D289 + $D290 + $D291 + $D292 + $D293 + $D294 + $D295;
$D_credit[272] = $D272 = $D273 + $D274 + $D275 + $D276 + $D277 + $D278 + $D279 + $D280;
$D_credit[271] = $D271 = $D272 + $D296 + $D299 + $D312 + $D315 + $D317 + $D321 + $D323 + $D328 + $D331 + $D337 + $D343 + $D346 + $D353 + $D366 + $D368 + $D370 + $D378 + $D384;
$D_credit[269] = $D269 = $D270;
$D_credit[267] = $D267 = $D268;
$D_credit[264] = $D264 = $D265 + $D266;
$D_credit[259] = $D259 = $D260 + $D261 + $D262 + $D263;
$D_credit[254] = $D254 = $D255 + $D256 + $D257 + $D258;
$D_credit[253] = $D253 = $D254 + $D259 + $D264 + $D267 + $D269;
$D_credit[245] = $D245 = $D246 + $D247 + $D248 + $D249 + $D250 + $D251 + $D252;
$D_credit[244] = $D244 = $D245 + $D253 + $D271;
$D_credit[240] = $D240 = $D241 + $D242 + $D243;
$D_credit[235] = $D235 = $D236 + $D237 + $D238 + $D239 + $D240;
$D_credit[233] = $D233 = $D234;
$D_credit[231] = $D231 = $D232 + $D233 + $D234;
$D_credit[226] = $D226 = $D227 + $D228 + $D229 + $D230;
$D_credit[219] = $D219 = $D220 + $D221 + $D222 + $D223 + $D224 + $D225;
$D_credit[214] = $D214 = $D215 + $D216 + $D217 + $D218 + $D219;
$D_credit[213] = $D213 = $D214 + $D226 + $D231 + $D235;
$D_credit[205] = $D205 = $D206 + $D207 + $D208 + $D209 + $D210 + $D211 + $D212;
$D_credit[204] = $D204 = $D205;
$D_credit[203] = $D203 = $D204 + $D213 + $D233;
$D_credit[201] = $D201 = $D409;
$D_credit[195] = $D195 = $D196 + $D197 + $D198 + $D199 + $D200 + $D201 + $D202;
$D_credit[180] = $D180 = $D181 + $D182 + $D183 + $D184 + $D185 + $D186 + $D187 + $D188 + $D189 + $D190 + $D191 + $D192 + $D193 + $D194;
$D_credit[177] = $D177 = $D22 * 0.01;
$D_credit[164] = $D164 = $D166 + $D167 + $D168 + $D169 + $D170 + $D171 + $D172 + $D173 + $D174 + $D175 + $D176 + $D177 + $D178 + $D179 + $D180;
$D_credit[163] = $D163 = $D409;
$D_credit[161] = $D161 = $D162 + $D163;
$D_credit[160] = $D160 = $D43;
$D_credit[158] = $D158 = $D159 + $D160;
$D_credit[156] = $D156 = $D157;
$D_credit[140] = $D140 = $D141 + $D142 + $D143 + $D144 + $D145 + $D146 + $D147 + $D148 + $D149 + $D150 + $D151 + $D152 + $D153 + $D154 + $D155;
$D_credit[138] = $D138 = $D139;
$D_credit[132] = $D132 = $D133 + $D134 + $D135;
$D_credit[128] = $D128 = $D129 + $D130 + $D131;
$D_credit[124] = $D124 = $D125 + $D126 + $D127;
$D_credit[119] = $D119 = $D120 + $D121;
$D_credit[118] = $D118 = $D120 + $D122 + $D123 + $D124 + $D128 + $D132;
$D_credit[112] = $D112 = $D113 + $D114 + $D115 + $D116 + $D117;
$D_credit[107] = $D107 = $D108 + $D109 + $D110 + $D111;
$D_credit[104] = $D104 = $D105 + $D106;
$D_credit[101] = $D101 = $D102 + $D103;
$D_credit[99] = $D99 = $D100;
$D_credit[97] = $D97 = $D98;
$D_credit[95] = $D95 = $D96;
$D_credit[94] = $D94 = $D95 + $D97 + $D99 + $D101 + $D104 + $D107 + $D112 + $D118 + $D136 + $D140 + $D156 + $D158 + $D164 + $D161;
$D_credit[92] = $D92 = $D93;
$D_credit[88] = $D88 = $D89 + $D90 + $D91 + $D92;
$D_credit[84] = $D84 = $D85 + $D86 + $D87;
$D_credit[80] = $D80 = $D81 + $D82 + $D83 + $D84;
$D_credit[76] = $D76 = $D77 + $D78 + $D79;
$D_credit[72] = $D72 = $D73 + $D74 + $D75;
$D_credit[68] = $D68 = $D69 + $D70 + $D71 + $D72;
$D_credit[67] = $D67 = $D68 + $D76 + $D80 + $D88;
$D_credit[66] = $D66 = $D67 + $D94 + $D195 - $E203;
$D_credit[64] = $D64 = $D65;
$D_credit[61] = $D61 = $D62;
$D_credit[59] = $D59 = $D60;
$D_credit[57] = $D57 = $D58;
$D_credit[54] = $D54 = $D55;
$D_credit[53] = $D53 = $D54 + $D56;
$D_credit[52] = $D52 = $D53 + $D57 + $D59 + $D61 + $D64 + $D63;
$D_credit[45] = $D45 = $D46 + $D47 + $D48 + $D49 + $D50 + $D51;
$D_credit[40] = $D40 = $D41 + $D42 + $D43 + $D44;
$D_credit[39] = $D39 = $D40 + $D45;
$D_credit[34] = $D34 = $D35 + $D36 + $D37 + $D38;
$D_credit[31] = $D31 = $D32 + $D33;
$D_credit[29] = $D29 = $D30;
$D_credit[27] = $D27 = $D28 + $D29 + $D31 + $D34 + $D39;
$D_credit[23] = $D23 = $D24;
$D_credit[22] = $D22 = $D23 + $D25 + $D26;
$D_credit[20] = $D20 = $D21;
$D_credit[15] = $D15 = $D16;
$D_credit[13] = $D13 = $D14;
$D_credit[9] = $D9 = $D13 + $D14 + $D15;
$D_credit[7] = $D7 = $D9;
$D_credit[6] = $D6 = $D7 + $D12 + $D17 + $D20 + $D22 + $D29 + $D31 + $D34 + $D39 + $D52;




// Balance sheet summary
$B401 = ($E6 = $C6 - $D6);  // Assets
$C402 = (($E66 = $D66 - $C66) - $C409); // Liability
$C403 = ($E203 = $D203 - $C203);    // Income
$B404 = ($E244 = $C244 - $D244);    // Expense
$B405 = $B401 + $B404;  // Total real balance Debit
$C405 = $C402 + $C403;  // Total real balance Credit
$B406 = ($E386 = $C387 - $D386);    // Contingent assets
$C407 = ($E393 = $D393 - $C393);    // Contingent liability
$B408 = $B406;  // Total real balance Debit
$C408 = $C407;  // Total real balance Credit
$C409 = ($C403 = ($E203 = $D203 - $C203)) - ($B404 = ($E244 = $C244 - $D244));  // Net Profit/Loss
$B410 = $B405 + $B408;  // Total Debit
$C410 = $C405 + $C408 + $C409;  // Total Credit










// Update the nodes in the balance sheet


$array_C = array($C6, $C7, $C8, $C9, $C10, $C11, $C12, $C13, $C14, $C15, $C16, $C17, $C18, $C19, $C20, $C21, $C22, $C23, $C24, $C25, $C26, $C27, $C28, $C29, $C30, $C31, $C32, $C33, $C34, $C35, $C36, $C37, $C38, $C39, $C40, $C41, $C42, $C43, $C44, $C45, $C46, $C47, $C48, $C49, $C50, $C51, $C52, $C53, $C54, $C55, $C56, $C57, $C58, $C59, $C60, $C61, $C62, $C63, $C64, $C65, $C66, $C67, $C68, $C69, $C70, $C71, $C72, $C73, $C74, $C75, $C76, $C77, $C78, $C79, $C80, $C81, $C82, $C83, $C84, $C85, $C86, $C87, $C88, $C89, $C90, $C91, $C92, $C93, $C94, $C95, $C96, $C97, $C98, $C99, $C100, $C101, $C102, $C103, $C104, $C105, $C106, $C107, $C108, $C109, $C110, $C111, $C112, $C113, $C114, $C115, $C116, $C117, $C118, $C119, $C120, $C121, $C122, $C123, $C124, $C125, $C126, $C127, $C128, $C129, $C130, $C131, $C132, $C133, $C134, $C135, $C136, $C137, $C138, $C139, $C140, $C141, $C142, $C143, $C144, $C145, $C146, $C147, $C148, $C149, $C150, $C151, $C152, $C153, $C154, $C155, $C156, $C157, $C158, $C159, $C160, $C161, $C162, $C163, $C164, $C165, $C166, $C167, $C168, $C169, $C170, $C171, $C172, $C173, $C174, $C175, $C176, $C177, $C178, $C179, $C180, $C181, $C182, $C183, $C184, $C185, $C186, $C187, $C188, $C189, $C190, $C191, $C192, $C193, $C194, $C195, $C196, $C197, $C198, $C199, $C200, $C201, $C202, $C203, $C204, $C205, $C206, $C207, $C208, $C209, $C210, $C211, $C212, $C213, $C214, $C215, $C216, $C217, $C218, $C219, $C220, $C221, $C222, $C223, $C224, $C225, $C226, $C227, $C228, $C229, $C230, $C231, $C232, $C233, $C234, $C235, $C236, $C237, $C238, $C239, $C240, $C241, $C242, $C243, $C244, $C245, $C246, $C247, $C248, $C249, $C250, $C251, $C252, $C253, $C254, $C255, $C256, $C257, $C258, $C259, $C260, $C261, $C262, $C263, $C264, $C265, $C266, $C267, $C268, $C269, $C270, $C271, $C272, $C273, $C274, $C275, $C276, $C277, $C278, $C279, $C280, $C281, $C282, $C283, $C284, $C285, $C286, $C287, $C288, $C289, $C290, $C291, $C292, $C293, $C294, $C295, $C296, $C297, $C298, $C299, $C300, $C301, $C302, $C303, $C304, $C305, $C306, $C307, $C308, $C309, $C310, $C311, $C312, $C313, $C314, $C315, $C316, $C317, $C318, $C319, $C320, $C321, $C322, $C323, $C324, $C325, $C326, $C327, $C328, $C329, $C330, $C331, $C332, $C333, $C334, $C335, $C336, $C337, $C338, $C339, $C340, $C341, $C342, $C343, $C344, $C345, $C346, $C347, $C348, $C349, $C350, $C351, $C352, $C353, $C354, $C355, $C356, $C357, $C358, $C359, $C360, $C361, $C362, $C363, $C364, $C365, $C366, $C367, $C368, $C369, $C370, $C371, $C372, $C373, $C374, $C375, $C376, $C377, $C378, $C379, $C380, $C381, $C382, $C383, $C384, $C385, $C386, $C387, $C388, $C389, $C390, $C391, $C392, $C393, $C394, $C395, $C396, $C397, $C398);

$array_D = array($D6, $D7, $D8, $D9, $D10, $D11, $D12, $D13, $D14, $D15, $D16, $D17, $D18, $D19, $D20, $D21, $D22, $D23, $D24, $D25, $D26, $D27, $D28, $D29, $D30, $D31, $D32, $D33, $D34, $D35, $D36, $D37, $D38, $D39, $D40, $D41, $D42, $D43, $D44, $D45, $D46, $D47, $D48, $D49, $D50, $D51, $D52, $D53, $D54, $D55, $D56, $D57, $D58, $D59, $D60, $D61, $D62, $D63, $D64, $D65, $D66, $D67, $D68, $D69, $D70, $D71, $D72, $D73, $D74, $D75, $D76, $D77, $D78, $D79, $D80, $D81, $D82, $D83, $D84, $D85, $D86, $D87, $D88, $D89, $D90, $D91, $D92, $D93, $D94, $D95, $D96, $D97, $D98, $D99, $D100, $D101, $D102, $D103, $D104, $D105, $D106, $D107, $D108, $D109, $D110, $D111, $D112, $D113, $D114, $D115, $D116, $D117, $D118, $D119, $D120, $D121, $D122, $D123, $D124, $D125, $D126, $D127, $D128, $D129, $D130, $D131, $D132, $D133, $D134, $D135, $D136, $D137, $D138, $D139, $D140, $D141, $D142, $D143, $D144, $D145, $D146, $D147, $D148, $D149, $D150, $D151, $D152, $D153, $D154, $D155, $D156, $D157, $D158, $D159, $D160, $D161, $D162, $D163, $D164, $D165, $D166, $D167, $D168, $D169, $D170, $D171, $D172, $D173, $D174, $D175, $D176, $D177, $D178, $D179, $D180, $D181, $D182, $D183, $D184, $D185, $D186, $D187, $D188, $D189, $D190, $D191, $D192, $D193, $D194, $D195, $D196, $D197, $D198, $D199, $D200, $D201, $D202, $D203, $D204, $D205, $D206, $D207, $D208, $D209, $D210, $D211, $D212, $D213, $D214, $D215, $D216, $D217, $D218, $D219, $D220, $D221, $D222, $D223, $D224, $D225, $D226, $D227, $D228, $D229, $D230, $D231, $D232, $D233, $D234, $D235, $D236, $D237, $D238, $D239, $D240, $D241, $D242, $D243, $D244, $D245, $D246, $D247, $D248, $D249, $D250, $D251, $D252, $D253, $D254, $D255, $D256, $D257, $D258, $D259, $D260, $D261, $D262, $D263, $D264, $D265, $D266, $D267, $D268, $D269, $D270, $D271, $D272, $D273, $D274, $D275, $D276, $D277, $D278, $D279, $D280, $D281, $D282, $D283, $D284, $D285, $D286, $D287, $D288, $D289, $D290, $D291, $D292, $D293, $D294, $D295, $D296, $D297, $D298, $D299, $D300, $D301, $D302, $D303, $D304, $D305, $D306, $D307, $D308, $D309, $D310, $D311, $D312, $D313, $D314, $D315, $D316, $D317, $D318, $D319, $D320, $D321, $D322, $D323, $D324, $D325, $D326, $D327, $D328, $D329, $D330, $D331, $D332, $D333, $D334, $D335, $D336, $D337, $D338, $D339, $D340, $D341, $D342, $D343, $D344, $D345, $D346, $D347, $D348, $D349, $D350, $D351, $D352, $D353, $D354, $D355, $D356, $D357, $D358, $D359, $D360, $D361, $D362, $D363, $D364, $D365, $D366, $D367, $D368, $D369, $D370, $D371, $D372, $D373, $D374, $D375, $D376, $D377, $D378, $D379, $D380, $D381, $D382, $D383, $D384, $D385, $D386, $D387, $D388, $D389, $D390, $D391, $D392, $D393, $D394, $D395, $D396, $D397, $D398);


$array_account_number = array("AS1000000", "AS1100000", "AS1110000"," AS1110010", "AS1112000", "AS1112010", "AS1400000", "AS1410000", "AS1410040", "AS1410100", "AS1410110", "AS1550030", "AS1600000", "AS1610000", "AS1620000", "AS1620100", "AS1700000", "AS1710000", "AS1710010", "AS1720500", "AS1723020", "AS1800000", "AS1820010", "AS1830000", "AS1830050", "AS1841000", "AS1841010", "AS1841015", "AS1850000", "AS1851000", "AS1851100", "AS1852000", "AS1852100", "AS1870000", "AS1871000", "AS1872000", "AS1873000", "AS1874000", "AS1874500", "AS1875000", "AS1875005", "AS1875010", "AS1875020", "AS1875030", "AS1875040", "AS1875050", "AS1900000", "AS1910000", "AS1911000", "AS1911100", "AS1912000", "AS1920000", "AS1921000", "AS1930000", "AS1931000", "AS1940000", "AS1941000", "AS1943000", "AS1950000", "AS1951000", "LI2000000", "LI2100000", "LI2110000", "LI2111000", "LI2112000", "LI2113000", "LI2114000", "LI2114100", "LI2114200", "LI2114300", "LI2120000", "LI2121000", "LI2121132", "LI2129210", "LI2130000", "LI2131000", "LI2132000", "LI2133000", "LI2134000", "LI2134100", "LI2134200", "LI2134300", "LI2140000", "LI2141000", "LI2142000", "LI2143000", "LI2144000", "LI2144100", "LI2300000", "LI2315000", "LI2315001", "LI2315012", "LI2315020", "LI2320000", "LI2321000", "LI2330000", "LI2331000", "LI2332000", "LI2340000", "LI2345000", "LI2350000", "LI2375000", "LI2375100", "LI2376100", "LI2376850", "LI2376900", "LI2380000", "LI2381000", "LI2381100", "LI2381200", "LI2381250", "LI2390000", "LI2400000", "LI2405000", "LI2405001", "LI2405010", "LI2405012", "LI2407000", "LI2409100", "LI2409101", "LI2409102", "LI2409104", "LI2409500", "LI2409510", "LI2409515", "LI2409520", "LI2409600", "LI2409615", "LI2409625", "LI2409630", "LI2410000", "LI2411000", "LI2412000", "LI2412100", "LI2420000", "LI2421000", "LI2422000", "LI2423000", "LI2423200", "LI2423205", "LI2423220", "LI2424000", "LI2425000", "LI2426000", "LI2430000", "LI2430510", "LI2440000", "LI2450000", "LI2455370", "LI2455380", "LI2460000", "LI2461000", "LI2480000", "LI2481000", "LI2487100", "LI2490000", "LI2491000", "LI2491050", "LI2600000", "LI2610000", "LI2620000", "LI2621000", "LI2622000", "LI2624000", "LI2625000", "LI2630000", "LI2631000", "LI2631100", "LI2631200", "LI2631300", "LI2640000", "LI2650000", "LI2651000", "LI2665000", "LI2670000", "LI2671000", "LI2672000", "LI2673000", "LI2674000", "LI2674050", "LI2675000", "LI2676000", "LI2680000", "LI2681000", "LI2682000", "LI2682100", "LI2683000", "LI2684000", "LI2685000", "LI2800000", "LI2810000", "LI2820000", "LI2821000", "LI2822000", "LI2823000", "LI2824000", "LI2825000", "IN3000000", "IN3100000", "IN3101000", "IN3101010", "IN3101020", "IN3101170", "IN3101175", "IN3101185", "IN3101190", "IN3105070", "IN3200000", "IN3201000", "IN3201010", "IN3201020", "IN3201025", "IN3201027", "IN3201060", "IN3201061", "IN3201062", "IN3201063", "IN3201180", "IN3202020", "IN3202021", "IN3205100", "IN3205110", "IN3205120", "IN3205130", "IN3205140", "IN3205200", "IN3205300", "IN3206000", "IN3206010", "IN3207000", "IN3207010", "IN3207020", "IN3207030", "IN3207040", "IN3207050", "IN3207051", "IN3207052", "IN3207054", "EX4000000", "EX4100000", "EX4101870", "EX4110000", "EX4110010", "EX4110020", "EX4110030", "EX4110040", "EX4110050", "EX4200000", "EX4210000", "EX4214000", "EX4215000", "EX4215100", "EX4216000", "EX4220000", "EX4222300", "EX4222400", "EX4222500", "EX4222600", "EX4230000", "EX4230070", "EX4230080", "EX4240000", "EX4241000", "EX4290000", "EX4291000", "EX4300000", "EX4310000", "EX4310010", "EX4310020", "EX4310040", "EX4310050", "EX4310060", "EX4310070", "EX4310080", "EX4310100", "EX4310110", "EX4310120", "EX4310130", "EX4310140", "EX4310150", "EX4310160", "EX4310170", "EX4310180", "EX4310190", "EX4310200", "EX4310210", "EX4310220", "EX4310230", "EX4310240", "EX4310250", "EX4320000", "EX4321000", "EX4322000", "EX4330000", "EX4331000", "EX4331010", "EX4331070", "EX4331090", "EX4331100", "EX4331140", "EX4331150", "EX4331160", "EX4331161", "EX4332000", "EX4332090", "EX4332100", "EX4340000", "EX4341000", "EX4347000", "EX4350000", "EX4351000", "EX4370000", "EX4371000", "EX4372000", "EX4374000", "EX4380000", "EX4381000", "EX4390000", "EX4391000", "EX4392000", "EX4393000", "EX4395000", "EX4400000", "EX4401000", "EX4402000", "EX4410000", "EX4410400", "EX4410500", "EX4410600", "EX4410700", "EX4410900", "EX4420000", "EX4420100", "EX4420200", "EX4420300", "EX4420400", "EX4420600", "EX4430000", "EX4430100", "EX4430200", "EX4440000", "EX4440100", "EX4440500", "EX4450000", "EX4450100", "EX4450200", "EX4450300", "EX4460000", "EX4460100", "EX4460200", "EX4460300", "EX4460400", "EX4460500", "EX4460600", "EX4460610", "EX4460620", "EX4460630", "EX4460640", "EX4470000", "EX4470600", "EX4475000", "EX4475100", "EX4480000", "EX4480400", "EX4490000", "EX4490100", "EX4490200", "EX4490300", "EX4490400", "EX4490450", "EX4490500", "EX4490600", "EX4500000", "EX4500100", "EX4500200", "EX4500300", "EX4600000", "EX4610000", "EX4700000", "EX4710000", "CA5000000", "CA5001000", "CA5001050", "CA5001060", "CA5002000", "CA5002010", "CA5002020", "CL6000000", "CL6001000", "CL6001010", "CL6001020", "CL6001030", "CL6001040");


// Put all the C variables into an array
$array_C = array($C6,$C7,$C9,$C13,$C15,$C20,$C22,$C23,$C27,$C29,$C31,$C34,$C39,$C40,$C45,$C52,$C53,$C54,$C57,$C59,$C61,$C64,$C66,$C67,$C68,$C72,$C76,$C80,$C84,$C88,$C92,$C94,$C95,$C97,$C99,$C101,$C104,$C107,$C112,$C118,$C119,$C124,$C128,$C132,$C138,$C140,$C156,$C158,$C160,$C161,$C163,$C164,$C177,$C180,$C195,$C201,$C203,$C204,$C205,$C213,$C214,$C219,$C226,$C231,$C233,$C235,$C240,$C244,$C245,$C253,$C254,$C259,$C264,$C267,$C269,$C271,$C272,$C280,$C296,$C299,$C300,$C309,$C312,$C315,$C317,$C321,$C323,$C328,$C331,$C337,$C343,$C346,$C353,$C354,$C364,$C366,$C368,$C370,$C378,$C384,$C386,$C387,$C393,$C394,);






$array_D = array($D6,$D7,$D9,$D13,$D15,$D20,$D22,$D23,$D27,$D29,$D31,$D34,$D39,$D40,$D45,$D52,$D53,$D54,$D57,$D59,$D61,$D64,$D66,$D67,$D68,$D72,$D76,$D80,$D84,$D88,$D92,$D94,$D95,$D97,$D99,$D101,$D104,$D107,$D112,$D118,$D119,$D124,$D128,$D132,$D138,$D140,$D156,$D158,$D160,$D161,$D163,$D164,$D177,$D180,$D195,$D201,$D203,$D204,$D205,$D213,$D214,$D219,$D226,$D231,$D233,$D235,$D240,$D244,$D245,$D253,$D254,$D259,$D264,$D267,$D269,$D271,$D272,$D280,$D296,$D299,$D300,$D309,$D312,$D315,$D317,$D321,$D323,$D328,$D331,$D337,$D343,$D346,$D353,$D354,$D364,$D366,$D368,$D370,$D378,$D384,$D386,$D387,$D393,$D394,);






// Put all the account numbers into an array
$array_account_number = array("AS1000000", "AS1100000", "AS1110010", "AS1410000", "AS1410100", "AS1620000", "AS1700000", "AS1710000", "AS1800000", "AS1830000", "AS1841000", "AS1850000", "AS1870000", "AS1871000", "AS1875000", "AS1900000", "AS1910000", "AS1911000", "AS1920000", "AS1930000", "AS1940000", "AS1950000", "LI2000000", "LI2100000", "LI2110000", "LI2114000", "LI2120000", "LI2130000", "LI2134000", "LI2140000", "LI2144000", "LI2300000", "LI2315000", "LI2315012", "LI2320000", "LI2330000", "LI2340000", "LI2375000", "LI2380000", "LI2400000", "LI2405000", "LI2409100", "LI2409500", "LI2409600", "LI2412000", "LI2420000", "LI2460000", "LI2480000", "LI2487100", "LI2490000", "LI2491050", "LI2600000", "LI2650000", "LI2670000", "LI2800000", "LI2824000", "IN3000000", "IN3100000", "IN3101000", "IN3200000", "IN3201000", "IN3201060", "IN3205100", "IN3205200", "IN3206000", "IN3207000", "IN3207050", "EX4000000", "EX4100000", "EX4200000", "EX4210000", "EX4220000", "EX4230000", "EX4240000", "EX4290000", "EX4300000", "EX4310000", "EX4310100", "EX4320000", "EX4330000", "EX4331000", "EX4332000", "EX4340000", "EX4350000", "EX4370000", "EX4380000", "EX4390000", "EX4400000", "EX4410000", "EX4420000", "EX4430000", "EX4440000", "EX4460000", "EX4460100", "EX4470000", "EX4475000", "EX4480000", "EX4490000", "EX4500000", "EX4700000", "CA5000000", "CA5001000", "CL6000000", "CL6001000");

// update TABLE "ckc_2021_balance_sheet_assets"
// update TABLE "ckc_2021_balance_sheet_liability"
// update TABLE "ckc_2021_balance_sheet_income"
// update TABLE "ckc_2021_balance_sheet_expense"
// update TABLE "ckc_2021_balance_sheet_contigent_assets"
// update TABLE "ckc_2021_balance_sheet_contigent_liability"


$a = 6;
for ($i = 0; $i <= 64; $i++) {

    $array_C_index_value = $D_credit[$a];
    $array_D_index_value = $D_credit[$a];
    $array_account_number_index_value = $array_account_number[$i];
    $C_of_i = $array_C_index_value;
    $D_of_i = $array_D_index_value;
    $net_balance = $D_of_i - $C_of_i;

    $sql = "UPDATE ckc_2021_balance_sheet_assets SET debit_balance = '$C_of_i', credit_balance = '$D_of_i', net_balance = '$net_balance' WHERE acc_number = '$array_account_number_index_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR 1122: Could not able to execute $sql. " . mysqli_error($link)."(end of error)<br/>";

    }

    $a++;

}

for ($i = 0; $i <= 201; $i++) {

    $array_C_index_value = $array_C[$i];
    $array_D_index_value = $array_D[$i];
    $array_account_number_index_value = $array_account_number[$i];
    $C_of_i = $array_C_index_value;
    $D_of_i = $array_D_index_value;
    $net_balance = $D_of_i - $C_of_i;

    $sql = "UPDATE ckc_2021_balance_sheet_liability SET debit_balance = '$C_of_i', credit_balance = '$D_of_i', net_balance = '$net_balance' WHERE acc_number = '$array_account_number_index_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

        // Records created successfully. Redirect to landing page
        
    } else {

        echo "ERROR 1122: Could not able to execute $sql. " . mysqli_error($link)."(end of error)<br/>";

    }

}

for ($i = 0; $i <= 242; $i++) {

    $array_C_index_value = $array_C[$i];
    $array_D_index_value = $array_D[$i];
    $array_account_number_index_value = $array_account_number[$i];
    $C_of_i = $array_C_index_value;
    $D_of_i = $array_D_index_value;
    $net_balance = $D_of_i - $C_of_i;

    $sql = "UPDATE ckc_2021_balance_sheet_income SET debit_balance = '$C_of_i', credit_balance = '$D_of_i', net_balance = '$net_balance' WHERE acc_number = '$array_account_number_index_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
    } else {

    echo "ERROR 1122: Could not able to execute $sql. " . mysqli_error($link)."(end of error)<br/>";

    }

}

for ($i = 0; $i <= 384; $i++) {

    $array_C_index_value = $array_C[$i];
    $array_D_index_value = $array_D[$i];
    $array_account_number_index_value = $array_account_number[$i];
    $C_of_i = $array_C_index_value;
    $D_of_i = $array_D_index_value;
    $net_balance = $D_of_i - $C_of_i;

    $sql = "UPDATE ckc_2021_balance_sheet_expense SET debit_balance = '$C_of_i', credit_balance = '$D_of_i', net_balance = '$net_balance' WHERE acc_number = '$array_account_number_index_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page
    
    } else {

    echo "ERROR 1122: Could not able to execute $sql. " . mysqli_error($link)."(end of error)<br/>";

    }

}

for ($i = 0; $i <= 391; $i++) {

    $array_C_index_value = $array_C[$i];
    $array_D_index_value = $array_D[$i];
    $array_account_number_index_value = $array_account_number[$i];
    $C_of_i = $array_C_index_value;
    $D_of_i = $array_D_index_value;
    $net_balance = $D_of_i - $C_of_i;

    $sql = "UPDATE ckc_2021_balance_sheet_contigent_assets SET debit_balance = '$C_of_i', credit_balance = '$D_of_i', net_balance = '$net_balance' WHERE acc_number = '$array_account_number_index_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page

    }  else {

    echo "ERROR 1122: Could not able to execute $sql. " . mysqli_error($link)."(end of error)<br/>";

    }

}

for ($i = 0; $i <= 397; $i++) {

    $array_C_index_value = $array_C[$i];
    $array_D_index_value = $array_D[$i];
    $array_account_number_index_value = $array_account_number[$i];
    $C_of_i = $array_C_index_value;
    $D_of_i = $array_D_index_value;
    $net_balance = $D_of_i - $C_of_i;

    $sql = "UPDATE ckc_2021_balance_sheet_contigent_liability SET debit_balance = '$C_of_i', credit_balance = '$D_of_i', net_balance = '$net_balance' WHERE acc_number = '$array_account_number_index_value' AND active_status = '$active'";

    if (mysqli_query($link, $sql)) {

    // Records created successfully. Redirect to landing page

    }  else {

    echo "ERROR 1122: Could not able to execute $sql. " . mysqli_error($link)."(end of error)<br/>";

    }

}


?>