<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
            <div class="sidebar-brand-icon ">
            <img src="img/logo-small.png">
            </div>
            <div class="sidebar-brand-text mx-3">CKF Cooperative<sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item ">
            <a class="nav-link" href="home.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
        <!-- Heading "Add Record" -->
        <?php

            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                echo '<div class="sidebar-heading">
                        Add Record
                    </div>';
                // Nav Item - Pages Collapse Menu
                
                echo '<li class="nav-item ">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAddNewRecord"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-user-plus"></i>';

                        if ($sidebar_staff_section_staff > 0) {

                            echo '<!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">'.$sidebar_staff_section_staff.'</span>';

                        }

                        echo' <span>Add New Record</span>
                    </a>
                    <div id="collapseAddNewRecord" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Create New:</h6>
                            <a class="collapse-item" href="addMember.php" title="Register New Member">Member</a>';
                            
                            // Assign Savings activity to staff
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="newRecordSavings.php" title="Start Savings Transaction">Savings';

                                if ($sidebar_mamgement_section_savings_credit > 0 || $sidebar_mamgement_section_savings_debit > 0) {

                                    $var = $sidebar_mamgement_section_savings_credit + $sidebar_mamgement_section_savings_debit;
                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$var.'</span></a>';
                                    $var = "";

                                }

                            }

                            // Assign Loan activity to nazzybestty@gmail.com
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {
                                
                                echo '<a class="collapse-item" href="newRecordLoans.php" title="Start Loan Transaction">Loan';

                                
                                if ($sidebar_mamgement_section_loan_booking > 0 || $sidebar_mamgement_section_loan_repayment > 0) {

                                    $var = $sidebar_mamgement_section_loan_booking + $sidebar_mamgement_section_loan_repayment;
                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$var.'</span></a>';
                                    $var = "";

                                }

                            }

                            // Assign Contribution activity to staff
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="newRecordContribution.php" title="Start Contribution Transaction">Contribution';

                                if ($sidebar_mamgement_section_contribution_credit) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_contribution_credit.'</span></a>';

                                }

                            }

                            // Assign manage Contribution activity to staff
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                                echo '
                                    <a class="collapse-item" href="contributionManage.php" title="Manage Contribution">Manage Contribution';

                                    if ($sidebar_chairman_section_contribution_market_balance > 0 || $sidebar_chairman_section_contribution_debit > 0) {

                                        $var = $sidebar_chairman_section_contribution_market_balance + $sidebar_chairman_section_contribution_debit;    
                                        echo '<!-- Counter - Messages -->
                                        <span class="badge badge-danger badge-counter">'.$var.'</span>';
                                        $var = "";
    
                                    }
                                    
                                echo '</a>';

                            }
                            
                            // Assign Dues activity to nazzybestty@gmail.com
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                                echo '
                                    <a class="collapse-item" href="authAddDues.php" title="Pay Into Dues">Dues';

                                    if ($sidebar_mamgement_section_dues > 0) {
   
                                        echo '<!-- Counter - Messages -->
                                        <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_dues.'</span>';

                                    }
                                    
                                echo '</a>';

                            }
                            
                            // Assign Dues activity to nazzybestty@gmail.com
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                                // Everyone can have access to the below menu item
                                echo '
                                    <a class="collapse-item" href="authAddMcard.php" title="Pay Into M|Card">M|Card';

                                    if ($sidebar_mamgement_section_mcard > 0) {
   
                                        echo '<!-- Counter - Messages -->
                                        <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_mcard.'</span>';

                                    }
                                    
                                echo '</a>';

                            }                            
                            
                            // Assign Akawo activity to blessingeledo
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                                echo '
                                    <a class="collapse-item" href="newRecordAkawoVersion2.php" title="Start Akawo Transaction">Akawo';

                                    if ($sidebar_mamgement_section_akawo_redeem_pending > 0 || $sidebar_mamgement_section_akawo_debit_pending > 0) {

                                        $var = $sidebar_mamgement_section_akawo_redeem_pending + $sidebar_mamgement_section_akawo_debit_pending;  
                                        echo '<!-- Counter - Messages -->
                                        <span class="badge badge-danger badge-counter">'.$var.'</span>';

                                    }
                                    
                                echo '</a>';

                            }

                            // Assign Thrift activity to blessingeledo
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="newRecordThrift.php" title="Start Thrift Transaction">Thrift';

                                if ($sidebar_mamgement_section_thirft_redeem_pending > 0 || $sidebar_mamgement_section_thirft_debit_pending > 0) {

                                    $var = $sidebar_mamgement_section_thirft_redeem_pending + $sidebar_mamgement_section_thirft_debit_pending;  
                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$var.'</span>';

                                }
                                
                            echo '</a>';

                            }

                            echo '
                        </div>
                    </div>
                </li>';
                
                echo '<li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOfficeAccount"
                        aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cash-register"></i>';

                    if ($sidebar_mamgement_section_balance_sheet_node > 0) {

                        echo '<!-- Counter - Messages -->
                        <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_balance_sheet_node.'</span>';

                    }

                    echo' <span>Office Account</span>
                    </a>
                    <div id="collapseOfficeAccount" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Choose account:</h6>';
                            
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                                echo '
                                    <a class="collapse-item" href="balanceSheetAS1000000.php" title="Start Assets Transaction">
                                        Assets';

                                        if ($assets_pending_count > 0) {
                    
                                            echo '<!-- Counter - Messages -->
                                            <span class="badge badge-danger badge-counter">'.$assets_pending_count.'</span>';
                    
                                        } echo '

                                    </a>
                                ';

                            }
                            
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                                echo '
                                    <a class="collapse-item" href="balanceSheetLI2000000.php" title="Start Liability Transaction">
                                        Liability';

                                        if ($liability_pending_count > 0) {
                    
                                            echo '<!-- Counter - Messages -->
                                            <span class="badge badge-danger badge-counter">'.$liability_pending_count.'</span>';
                    
                                        } echo '

                                    </a>
                                ';

                            }
                            
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                                echo '
                                    <a class="collapse-item" href="balanceSheetIN3000000.php" title="Start Income Transaction">
                                        Income';

                                        if ($income_pending_count > 0) {
                    
                                            echo '<!-- Counter - Messages -->
                                            <span class="badge badge-danger badge-counter">'.$income_pending_count.'</span>';
                    
                                        } echo '

                                    </a>
                                ';

                            }
                            
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                                echo '
                                    <a class="collapse-item" href="balanceSheetEX4000000.php" title="Start Expense Transaction">
                                        Expense';

                                        if ($expense_pending_count > 0) {
                    
                                            echo '<!-- Counter - Messages -->
                                            <span class="badge badge-danger badge-counter">'.$expense_pending_count.'</span>';
                    
                                        } echo '

                                    </a>
                                ';

                            }
                            
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                                echo '
                                    <a class="collapse-item" href="balanceSheetCA5000000.php" title="Start Contigent Assets Transaction">
                                        Contigent Assets';

                                        if ($contigent_assets_pending_count > 0) {
                    
                                            echo '<!-- Counter - Messages -->
                                            <span class="badge badge-danger badge-counter">'.$contigent_assets_pending_count.'</span>';
                    
                                        } echo '

                                    </a>
                                ';

                            }
                            
                            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Developer") {

                                echo '
                                    <a class="collapse-item" href="balanceSheetCL6000000.php" title="Start Contigent Liability Transaction">
                                        Contigent Liability';

                                        if ($contigent_liability_pending_count > 0) {
                    
                                            echo '<!-- Counter - Messages -->
                                            <span class="badge badge-danger badge-counter">'.$contigent_liability_pending_count.'</span>';
                    
                                        } echo '

                                    </a>
                                ';

                            }

                            echo '
                        </div>
                    </div>
                </li>';
            }

        ?>
        <!-- End of Heading "Add Record" -->

        <!-- Heading "View Record" -->
        <?php

            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Manager" || $_SESSION['role'] == "Chairman" || $_SESSION['role'] == "Developer") {

                echo '<div class="sidebar-heading">
                View Record
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item ">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseViewMembersRecord"
                        aria-expanded="true" aria-controls="collapseTwo"><i class="fa fa-eye" aria-hidden="true"></i><span>View Records</span>
                    </a>
                    <div id="collapseViewMembersRecord" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">View:</h6>
                            <a class="collapse-item" href="viewMember.php" title="View Members">Member</a>
                            <br/>
                            <h6 class="collapse-header">Transaction History:</h6>';

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="viewSavings.php" title="View Savings Credit History">Savings (+)</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="viewSavings2.php" title="View Savings Debit History">Savings (-)</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="viewAkawo.php" title="View Akawo Credit History">Akawo (+)</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="viewAkawo2.php" title="View Akawo Debit History">Akawo (-)</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="viewContribution.php?selection=All" title="View Contribution Credit History">Contribution (+)</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="viewContribution2.php" title="View Contribution Debit History">Contribution (-)</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="viewContributionCompleted.php" title="View Contribution Debit History">Contribution (Completed)</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="viewLoans.php" title="View Loan Booking History">Loan (Booking)</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="viewLoansRecord.php" title="View Loan Repayment History">Loan (Repayment)</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="viewThrift.php" title="View Thrift Credit History">Thrift (+)</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="#" title="View Thrift Debit History">Thrift (-)</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="viewDues.php" title="View Dues History">Dues</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="viewMcard.php" title="View M|Card History">M|Card</a>';

                            }

                            echo '
                            <br/>
                            <h6 class="collapse-header">Office Transactions:</h6>';

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="balanceSheetPostApprovalAssetsHistory.php" title="View Assets History">Assets</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="balanceSheetPostApprovalLiabilityHistory.php" title="View Liability History">Liability</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="balanceSheetPostApprovalIncomeHistory.php" title="View Income History">Income</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="balanceSheetPostApprovalExpenseHistory.php" title="View Expense History">Expense</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="balanceSheetPostApprovalContigentAssetsHistory.php" title="View Contigent Assets History">Contigent Assets</a>';

                            }

                            if ($_SESSION['role'] == "Staff" || $_SESSION["role"] == "Manager" || $_SESSION['role'] == "Developer") {

                                echo '<a class="collapse-item" href="balanceSheetPostApprovalContigentLiabilityHistory.php" title="View Contigent Liability History">Contigent Liability</a>';

                            }
                            echo '
                        </div>
                    </div>
                </li>';
            }

        ?>

        <!-- Heading "Manager" -->
        <?php

            if ($_SESSION['role'] == "Manager" || $_SESSION['role'] == "Developer") {

                echo '<div class="sidebar-heading">
                Manager
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item ">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManagement" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user-shield"></i>';

                        if ($sidebar_mamgement_section_management > 0) {

                            echo '<!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_management.'</span>';

                        }

                    echo'<span>Management</span>
                    </a>
                    <div id="collapseManagement" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Secured Area:</h6>';

                                if ($_SESSION['role'] == "Chairman" || $_SESSION['role'] == "Developer") {

                                    echo '<a class="collapse-item" href="manageMembers.php" title="Manage Members">Manage Members</a>';

                                }

                            echo '<a class="collapse-item" href="manageStaffs.php">Manage Staffs</a>
                            <a class="collapse-item" href="addNewStaff.php">Add New Staff</a>
                            <a class="collapse-item" href="addNewBoardMember.php">Add New Board Member</a>';

                            if ($_SESSION['role'] == "Manager" || $_SESSION['role'] == "Developer") {
                                $contributionSettingsYearlyPackageOneURL = "?subscription_session=Yearly&session_package=Package One";
                                echo '
                                    <br/>
                                    <h6 class="collapse-header">
                                        Settings:
                                    </h6>
                                    <a class="collapse-item" href="contributionSettings.php'.$contributionSettingsYearlyPackageOneURL.'">
                                        Contribution settings
                                    </a>
                                ';

                            }

                            echo '
                            <br/>
                            <h6 class="collapse-header">Post Approval:</h6>';
                            echo '<a class="collapse-item" href="balanceSheetPostApprovalAssets.php" title="Approve Office Accounts Postings">Office Accounts';

                                if ($sidebar_mamgement_section_balance_sheet_node > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_balance_sheet_node.'</span>';

                                }

                            echo '<a class="collapse-item" href="approveSavingsCredit.php" title="Approve Savings credit">Savings (+)';

                                if ($sidebar_mamgement_section_savings_credit > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_savings_credit.'</span>';

                                }

                            echo '</a>
                            
                            <a class="collapse-item" href="approveSavingsDebit.php" title=" Approve Savings debit">Savings (-)';

                                if ($sidebar_mamgement_section_savings_debit > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_savings_debit.'</span>';

                                }

                            echo '</a>

                            <a class="collapse-item" href="approveContributionCredit.php" title="Approve Contribution credit">Contribution (+)';

                                if ($sidebar_mamgement_section_contribution_credit > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_contribution_credit.'</span>';

                                }

                            echo '</a>

                            <a class="collapse-item" href="contributionManageApproval.php" title="Approve Contribution Debit Request">Contribution (-)';

                                if ($sidebar_chairman_section_contribution_debit > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_chairman_section_contribution_debit.'</span>';

                                }

                            echo '</a>

                            <a class="collapse-item" href="contributionManageMarketBalanceApproval.php" title="Approve Contribution Market Balance">Market Balance (+)';

                                if ($sidebar_chairman_section_contribution_market_balance > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_chairman_section_contribution_market_balance.'</span>';

                                }

                            echo '</a>

                            <a class="collapse-item" href="approveDues.php" title="Approve Dues">Dues';

                                if ($sidebar_mamgement_section_dues > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_dues.'</span>';

                                }

                            echo '</a>

                            <a class="collapse-item" href="approveMcard.php" title="Approve M|Card">M|Card';

                                if ($sidebar_mamgement_section_mcard > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_mcard.'</span>';

                                }

                            echo '</a>

                            <a class="collapse-item" href="approveGetLoan.php" title="Approve Loan booking">Loan (Booking)';

                                if ($sidebar_mamgement_section_loan_booking > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_loan_booking.'</span>';

                                }

                            echo '</a>

                            <a class="collapse-item" href="approveReturnLoan.php" title="Approve Loan repayment">Loan (Repayment)';

                                if ($sidebar_mamgement_section_loan_repayment > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_loan_repayment.'</span>';

                                }

                            echo '</a>

                            <a class="collapse-item" href="approveAkawoRedeem.php" title="Approve Akawo Redeem">Akawo (+)';

                                if ($sidebar_mamgement_section_akawo_redeem_pending > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_akawo_redeem_pending.'</span>';

                                }

                            echo '</a>

                            <a class="collapse-item" href="approveAkawoDebit.php" title="Approve Akawo debit">Akawo (-)';

                                if ($sidebar_mamgement_section_akawo_debit_pending > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_akawo_debit_pending.'</span>';

                                }

                            echo '</a>

                            <a class="collapse-item" href="approveThriftGroup.php" title="Approve Thrift Group">Thrift Group';

                                if ($sidebar_mamgement_section_thrift_create_group > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_thrift_create_group.'</span>';

                                }

                            echo '</a>

                            <a class="collapse-item" href="approveThriftLockedGroup.php" title="Approve Locked Thrift Group">Thrift Locked Group';

                                if ($sidebar_mamgement_section_thrift_locked_group > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_thrift_locked_group.'</span>';

                                }

                            echo '</a>

                            <a class="collapse-item" href="approveThriftRedeem.php" title="Approve Redeem Thrift">Thrift Redeem';

                                if ($sidebar_mamgement_section_thirft_redeem_pending > 0) {

                                    echo '<!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">'.$sidebar_mamgement_section_thirft_redeem_pending.'</span>';

                                }

                            echo '</a>

                        </div>
                    </div>
                </li>';
            }

        ?>

        <!-- Heading "Special"-->
        <?php

            if ($_SESSION['role'] == "Staff") {

            } else {

                echo '<div class="sidebar-heading">
                Special
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item ">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdministration" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>';

                        if ($sidebar_chairman_section_administration > 0) {

                            echo '<!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">'.$sidebar_chairman_section_administration.'</span>';

                        }

                    echo '
                    <span>Administration</span>
                    </a>
                    <div id="collapseAdministration" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Special Area:</h6>
                            <a class="collapse-item" href="generateReport.php" title="View or Generate Report">Generate Report</a>';

                            if ($_SESSION['role'] == "Developer" || $_SESSION['role'] == "Manager" || $_SESSION['role'] == "Chairman") {

                                echo '

                                    <br/>
                                    <h6 class="collapse-header">
                                        Summary of Account:
                                    </h6>
                                    <a class="collapse-item" href="aagenerateReportBalanceSheet.php" title="View or Generate Balance Sheet">
                                        Balance Sheet
                                    </a>
                                    <a class="collapse-item" href="accountAbridgedBalanceSheet.php" title="View or Generate Abridged Balance Sheet">
                                        Abridged Balance Sheet
                                    </a>
                                    <a class="collapse-item" href="accountNotesToAccount.php" title="View or Generate Notes To Account">
                                        Notes To Account
                                    </a>
                                    <a class="collapse-item" href="aagenerateReportSavings.php" title="View or Generate End Of Day Balance Sheet">
                                        EOD Balance Sheet
                                    </a>

                                ';

                            }

                            echo '
                        </div>
                    </div>
                </li>';
            }

        ?>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <div class="sidebar-card">
            <i class="fas fa-unlock fa-3x" aria-hidden="true"></i>
            <br/>
            <!-- <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt=""> -->
            <p class="text-center mb-2">
                <strong>
                    License Key: CTKFCOOP
                </strong>
                </br>
                <strong>
                    Valid Until
                </strong>
                </br>
                <strong class="mb-8">
                    <?php echo $oldDateFormated?>
                </strong>
            </p>
            </br>
            <strong class="mb-8">
                SWAV 1.2
            </strong><p class="text-center mb-2">
                <strong>
                    Small and Wide Accountant Version
                </strong>
            </p>
            <br/>
            <a class="btn btn-success btn-sm" href="https://paystack.com/pay/christthekingfellowshipmulti-purposeco-operativesociety" target="_blank">
                Renew Licence
            </a>
        </div>
        <?php
            /*
            if ($_SESSION['role'] == "Staff" || $_SESSION['role'] == "Manager" || $_SESSION['role'] == "Treasurer" || $_SESSION['role'] == "Chairman" || $_SESSION['role'] == "Developer") {

                echo '<div class="sidebar-card">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
                <p class="text-center mb-2"><strong>License Key: CTKFCOOP</strong>
                </br><strong>Valid Until</strong>
                </br><strong class="mb-8">'.$oldDateFormated.'</strong></p>
                </br><strong class="mb-8">E-Accountant v1.0</strong></p>
                <a class="btn btn-success btn-sm" href="https://paystack.com/pay/christthekingfellowshipmulti-purposeco-operativesociety" target="_blank">Renew Licence</a>
                </div>';
            }
            */
        ?>
    </ul>
    <!-- End of Sidebar -->