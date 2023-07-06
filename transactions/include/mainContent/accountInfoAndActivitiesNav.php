<?php
$nav_id_savings = "&nav_id=SAVINGS";
$nav_id_loan = "&nav_id=LOAN";
$nav_id_contribution = "&nav_id=CONTRIBUTION";
$nav_id_akawo = "&nav_id=AKAWO";
$nav_id_thrift = "&nav_id=THRIFT";
$nav_id_dues = "&nav_id=DUES";
$nav_id_mcard = "&nav_id=MCARD";
?>
<ul class="list-group list-group-flush">
    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
        <h6 class="mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2">
                <line x1="18" y1="20" x2="18" y2="10"></line>
                <line x1="12" y1="20" x2="12" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="14"></line>
            </svg>
            &nbsp;Summary
        </h6>
        <span class="text-secondary">
            <a href='viewMemberRecord.php<?php echo $user_url;?>' title='View Account Summary' class='justify-content-center btn btn-outline-primary'>
                <i class='fas fa-eye fa-sm'></i>
                &nbsp;View
            </a>
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
        <h6 class="mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0275d8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                <line x1="1" y1="10" x2="23" y2="10"></line>
            </svg>
            &nbsp;Savings
        </h6>
        <span class="text-secondary">
            <a href='viewMemberRecord.php<?php echo $user_url.$nav_id_savings;?>' title='View Member Savings' class='justify-content-center btn btn-outline-primary'>
                <i class='fas fa-eye fa-sm'></i>
                &nbsp;View
            </a>
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
        <h6 class="mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f0ad4e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
            </svg>
            &nbsp;Loan
        </h6>
        <span class="text-secondary">
            <a href='viewMemberRecord.php<?php echo $user_url.$nav_id_loan;?>' title='View Member Loan' class='justify-content-center btn btn-outline-primary'>
                <i class='fas fa-eye fa-sm'></i>
                &nbsp;View
            </a>
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
        <h6 class="mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d9534f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift">
                <polyline points="20 12 20 22 4 22 4 12"></polyline>
                <rect x="2" y="7" width="20" height="5"></rect>
                <line x1="12" y1="22" x2="12" y2="7"></line>
                <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
            </svg>
            &nbsp;Contribution
        </h6>
        <span class="text-secondary">
            <a href='viewMemberRecord.php<?php echo $user_url.$nav_id_contribution;?>' title='View Member Contribution' class='justify-content-center btn btn-outline-primary'>
                <i class='fas fa-eye fa-sm'></i>
                &nbsp;View
            </a>
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
        <h6 class="mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#5bc0de" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            &nbsp;Akawo
        </h6>
        <span class="text-secondary">
            <a href='viewMemberRecord.php<?php echo $user_url.$nav_id_akawo;?>' title='View Member Akawo' class='justify-content-center btn btn-outline-primary'>
                <i class='fas fa-eye fa-sm'></i>
                &nbsp;View
            </a>
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
        <h6 class="mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#5cb85c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
            </svg>
            &nbsp;Thrift
        </h6>
        <span class="text-secondary">
            <a href='viewMemberRecord.php<?php echo $user_url.$nav_id_thrift;?>' title='View Member Thrift' class='justify-content-center btn btn-outline-primary'>
                <i class='fas fa-eye fa-sm'></i>
                &nbsp;View
            </a>
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
        <h6 class="mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d16ed1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
            </svg>
            &nbsp;Dues
        </h6>
        <span class="text-secondary">
            <a href='viewMemberRecord.php<?php echo $user_url.$nav_id_dues;?>' title='View Member Dues' class='justify-content-center btn btn-outline-primary'>
                <i class='fas fa-eye fa-sm'></i>
                &nbsp;View
            </a>
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
        <h6 class="mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fe539e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open">
                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
            </svg>
            &nbsp;M|Card
        </h6>
        <span class="text-secondary">
            <a href='viewMemberRecord.php<?php echo $user_url.$nav_id_mcard;?>' title='View Member M|Card' class='justify-content-center btn btn-outline-primary'>
                <i class='fas fa-eye fa-sm'></i>
                &nbsp;View
            </a>
        </span>
    </li>
</ul>