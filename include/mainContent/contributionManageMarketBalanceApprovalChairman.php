<?php
echo '
    <!-- CHAIRMAN APPROVAL -->
    <div class="col-xl-6 col-md-6 mb-6">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div>
                            <h3 class="m-0 text-primary text-center">Chairman Consent</h3>
                            <br/>
                        </div>';

                        if ($chairman_consent == "Pending") {

                            echo '
                                <div style="line-height:450%;">
                                    <br>
                                </div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800 text-center">
                                    ₦'.$english_format_number = number_format($amount, 2).'
                                </div>
                                <div style="line-height:20%;">
                                    <br>
                                </div>
                                <h6 class="text-center">Manager: '.$manager_name.'</h6>
                                <div style="line-height:20%;">
                                    <br>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="justify-content-center btn btn-primary" data-toggle="modal" data-target="#postBalanceModal"><i
                                    class="fa fa-check fa-sm text-white-50"></i>&nbsp;&nbsp;Approve Balance</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#" class="justify-content-center btn btn-danger" data-toggle="modal" data-target="#postBalanceModalCancel"><i
                                class="fa fa-times fa-sm text-white-50"></i>&nbsp;&nbsp;Cancel Balance</a>
                                </div>
                            ';

                        } elseif ($chairman_consent == "Cancelled") {

                            echo '
                                <div class="zoom text-center">
                                    <img src="img/cancel.png" class="img-fluid" alt="Contribution completed">
                                    <div style="line-height:80%;">
                                        <br>
                                    </div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800 text-center">'. $chairman_consent.'</div>
                                </div>
                            ';

                        } elseif ($chairman_consent == "Approved") {

                            echo '
                                <div class="zoom text-center">
                                    <img src="img/activated.png" class="img-fluid" alt="Contribution completed">
                                    <div style="line-height:80%;">
                                        <br>
                                    </div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800 text-center">'. $chairman_consent.'</div>
                                </div>
                            ';

                        }

                        echo '
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TREASURER APPROVAL -->
    <div class="col-xl-6 col-md-6 mb-6">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div>
                            <h3 class="m-0 text-primary text-center">Treasurer Consent</h3>
                            <br/>
                        </div>';

                        if ($Treasurer_consent == "Pending") {

                            echo '
                                <div class="zoom text-center">
                                    <img src="img/alert.png" class="img-fluid" alt="Contribution completed">
                                    <div style="line-height:80%;">
                                        <br>
                                    </div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800 text-center">'. $Treasurer_consent.'</div>
                                </div>
                            ';

                        } elseif ($Treasurer_consent == "Cancelled") {

                            echo '
                                <div class="zoom text-center">
                                    <img src="img/cancel.png" class="img-fluid" alt="Contribution completed">
                                    <div style="line-height:80%;">
                                        <br>
                                    </div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800 text-center">'. $Treasurer_consent.'</div>
                                </div>
                            ';

                        } elseif ($Treasurer_consent == "Approved") {

                            echo '
                                <div class="zoom text-center">
                                    <img src="img/activated.png" class="img-fluid" alt="Contribution completed">
                                    <div style="line-height:80%;">
                                        <br>
                                    </div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800 text-center">'. $Treasurer_consent.'</div>
                                </div>
                            ';

                        }

                        echo '
                    </div>
                </div>
            </div>
        </div>
    </div>

';



// Button trigger Approve modal
echo "
    <div class='modal fade' id='postBalanceModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Contribution Market Balance</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    <style>
                        .vl {
                        border-right: 1px solid #dcdcdc;
                        height: 100%;
                        }
                    </style>
                    <div class='row'>
                        <div class='col-md-8 vl'>
                            <div class='h6 mb-0 font-weight-bold text-gray-800 text-center'>You are about to approve CONTRIBUTION BALANCE.</div><br/><div class='h4 mb-0 font-weight-bold text-gray-800 text-center'>₦".$english_format_number = number_format($amount, 2)."</div>
                        </div>
                        <div class='col-md-4'><i
                        class='fas fa-8x fa-check text-success'></i>
                        </div>
                    </div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <a href='contributionMarketBalanceApprovalDB.php' title='Approve Balance' class='justify-content-center btn btn-primary'><i
                        class='fas fa-fw fa-check text-white-50'></i>&nbsp;&nbsp;Yes! Approve</a>
                </div>
            </div>
        </div>
    </div>"
;

// Button trigger Cancel modal
echo "
    <div class='modal fade' id='postBalanceModalCancel' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Cancel Balance</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    <style>
                        .vl {
                        border-right: 1px solid #dcdcdc;
                        height: 100%;
                        }
                    </style>
                    <div class='row'>
                        <div class='col-md-8 vl'>
                            <div class='h6 mb-0 font-weight-bold text-gray-800 text-center'>You are about to cancel CONTRIBUTION BALANCE.</div><br/><div class='h4 mb-0 font-weight-bold text-gray-800 text-center'>₦".$english_format_number = number_format($amount, 2)."</div>
                        </div>
                        <div class='col-md-4'><i
                        class='fas fa-8x fa-times text-danger'></i>
                        </div>
                    </div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <a href='contributionMarketBalanceCancelDB.php' title='Cancel Balance' class='justify-content-center btn btn-danger'><i
                        class='fas fa-fw fa-check text-white-50'></i>&nbsp;&nbsp;Yes! Cancel</a>
                </div>
            </div>
        </div>
    </div>"
;

?>