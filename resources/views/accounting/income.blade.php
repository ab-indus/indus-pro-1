@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

    <!-- <h4 class="card-title">Summary</h4> -->


        <?php
         

            $totalIncomeDebit = 0;
            $totalIncomeCredit = 0;
            $IncomeBalance = 0;

            // for cat variables 
            $commissionDebit = 0;
            $commissionCredit = 0;
            $commissionBalance = 0;

            $feeDebit = 0;
            $feeCredit = 0;
            $feeBalance = 0;

            $agencyDebit = 0;
            $agencyCredit = 0;
            $agencyBalance = 0;

            $taxDebit = 0;
            $taxCredit = 0;
            $taxBalance = 0;

            $bookDebit = 0;
            $bookCredit = 0;
            $bookBalance = 0;

            $payRollDebit = 0;
            $payRollCredit = 0;
            $payRollBalance = 0;

            $otherFeeDebit = 0;
            $otherFeeCredit = 0;
            $otherFeeBalance = 0;

            $otherIncomeDebit = 0;
            $otherIncomeCredit = 0;
            $otherIncomeBalance = 0;

        ?>
        @foreach($data as $item)
            <?php
                if ($item->acr_main == 'Income') {
                    $totalIncomeCredit += $item->Credit;
                }
               
            ?>

            <?php
                if ($item->adr_main == 'Income') {
                    $totalIncomeDebit += $item->Debit;
                }
            ?>
            <!-- for category -->
            <?php
                if ($item->acr_main == 'Income' && $item->acr_cat == 'Commisions Income') {
                    $commissionCredit += $item->Credit;
                }
                elseif ($item->acr_main == 'Income' && $item->acr_cat == 'Service Fee Income') {
                    $feeCredit += $item->Credit;
                }
                elseif ($item->acr_main == 'Income' && $item->acr_cat == 'Agency Fee Income') {
                    $agencyCredit += $item->Credit;
                }
                elseif ($item->acr_main == 'Income' && $item->acr_cat == 'Tax Prep/Filing Fee Income') {
                    $taxCredit += $item->Credit;
                }
                elseif ($item->acr_main == 'Income' && $item->acr_cat == 'Bookkeeping Fee Income') {
                    $bookCredit += $item->Credit;
                }

                elseif ($item->acr_main == 'Income' && $item->acr_cat == 'Payroll Fee Income') {
                    $payRollCredit += $item->Credit;
                }
                elseif ($item->acr_main == 'Income' && $item->acr_cat == 'Other Fee Income') {
                    $otherFeeCredit += $item->Credit;
                }
                elseif ($item->acr_main == 'Income' && $item->acr_cat == 'Other Income') {
                    $otherIncomeCredit += $item->Credit;
                }
               


                // for adr - cat 
                if ($item->adr_main == 'Income' && $item->adr_cat == 'Commisions Income') {
                    $commissionDebit += $item->Debit;
                }
                elseif ($item->adr_main == 'Income' && $item->adr_cat == 'Service Fee Income') {
                    $feeDebit += $item->Debit;
                }
                elseif ($item->adr_main == 'Income' && $item->adr_cat == 'Agency Fee Income') {
                    $agencyDebit += $item->Debit;
                }
                elseif ($item->adr_main == 'Income' && $item->adr_cat == 'Tax Prep/Filing Fee Income') {
                    $taxDebit += $item->Debit;
                }
                elseif ($item->adr_main == 'Income' && $item->adr_cat == 'Bookkeeping Fee Income') {
                    $bookDebit += $item->Debit;
                }

                elseif ($item->adr_main == 'Income' && $item->adr_cat == 'Payroll Fee Income') {
                    $payRollDebit += $item->Debit;
                }
                elseif ($item->adr_main == 'Income' && $item->adr_cat == 'Other Fee Income') {
                    $otherFeeDebit += $item->Debit;
                }
                elseif ($item->adr_main == 'Income' && $item->adr_cat == 'Other Income') {
                    $otherIncomeDebit += $item->Debit;
                }
            ?>
        @endforeach
        <?php
            $IncomeBalance = $totalIncomeDebit - $totalIncomeCredit;
            $commissionBalance = $commissionDebit - $commissionCredit;
            $feeBalance = $feeDebit - $feeCredit;

            $agencyBalance = $agencyDebit - $agencyCredit;
            $taxBalance = $taxDebit - $taxCredit;
            $bookBalance = $bookDebit - $bookCredit;
            $payRollBalance = $payRollDebit - $payRollCredit;
            $otherFeeBalance = $otherFeeDebit - $otherFeeCredit;
            $otherIncomeBalance = $otherIncomeDebit - $otherIncomeCredit;

          
        ?>


<br>
    <h4 class="card-title">Income Summary</h4>

    <!-- Display the detailed summary table -->
    <table class="table table-bordered">
        <!-- Add your table headers here -->
        <thead>
            <tr>
                <!-- Add your header columns here -->
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                @if ($item->acr_main == 'Assets' && $item->adr_main == 'Assets')
                    <tr>
                        <!-- Display your table rows here -->
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
<!-- new table  -->


<!-- Main and sub div -->

<div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Income</h4>
                    <canvas id="transaction-history" class="transaction-chart"></canvas>

                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Total Income </h6>
                        <p class="text-muted mb-0">Balance</p>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">${{ $IncomeBalance }}</h6>
                      </div>
                    </div>
                 

                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Total Income</h6>
                        <p class="text-muted mb-0">Credited</p>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">${{ $totalIncomeCredit }}</h6>
                      </div>
                    </div>

                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Total Income</h6>
                        <p class="text-muted mb-0">Debited</p>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">${{ $totalIncomeDebit }}</h6>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>

              <!-- category div -->
              <div class="col-md-8 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Categories</h4>
                      <p class="text-muted mb-1">All Income Categories </p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Commision's Income</h6>
                                <p class="text-muted mb-0">Balance : ${{$commissionBalance}}</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">Credited : ${{$commissionCredit}}</p>
                                <p class="text-muted mb-0">Debited : ${{$commissionDebit}}</p>
                              </div>
                            </div>  

                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-success">
                                <i class="mdi mdi-cloud-download"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Service Fee Income</h6>
                                <p class="text-muted mb-0">Balance : ${{$feeBalance}}</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <p class="text-muted">Credited : ${{$feeCredit}}</p>
                                <p class="text-muted mb-0">Debited : ${{$feeDebit}}</p>
                              </div>
                            </div>
                          </div>

                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-clock"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Agency Fee Income</h6>
                                <p class="text-muted mb-0">Balance : ${{$agencyBalance}}</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <p class="text-muted">Credited : ${{$agencyCredit}}</p>
                                <p class="text-muted mb-0">Debited : ${{$agencyDebit}}</p>
                              </div>
                            </div>
                          </div>

                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-danger">
                                <i class="mdi mdi-email-open"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Tax Prep/Filing Fee Income<</h6>
                                <p class="text-muted mb-0">Balance : ${{$taxBalance}}</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">Credited : ${{$taxCredit}}</p>
                                <p class="text-muted mb-0">Debited : ${{$taxDebit}} </p>
                              </div>
                            </div>
                          </div>

                          <div class="preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-warning">
                                <i class="mdi mdi-chart-pie"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Bookkeeping Fee Income</h6>
                                <p class="text-muted mb-0">Balance : ${{$bookBalance}}</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">Credited : ${{$bookCredit}}</p>
                                <p class="text-muted mb-0">Debited : ${{$bookDebit}}</p>
                              </div>
                            </div>
                          </div>

                          <div class="preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-chart-pie"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">Payroll Income</h6>
                                    <p class="text-muted mb-0">Balance : ${{$payRollBalance}}</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-muted">Credited : ${{$payRollCredit}}</p>
                                    <p class="text-muted mb-0">Debited : ${{$payRollDebit}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-danger">
                                    <i class="mdi mdi-email-open"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">Other Fee Income</h6>
                                    <p class="text-muted mb-0">Balance : ${{$otherFeeBalance}}</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-muted">Credited : ${{$otherFeeCredit}}</p>
                                    <p class="text-muted mb-0">Debited : ${{$otherFeeDebit}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-chart-pie"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">Other Income</h6>
                                    <p class="text-muted mb-0">Balance : ${{$otherIncomeBalance}}</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-muted">Credited : ${{$otherIncomeCredit}}</p>
                                    <p class="text-muted mb-0">Debited : ${{$otherIncomeDebit}}</p>
                                </div>
                            </div>
                        </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

<!-- main and sub div end -->

            <!-- category row start-->
            <!-- <h4 class="card-title">Categories </h4>

<div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">$12.34</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Potential growth</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">$17.34</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Revenue current</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">$12.34</h3>
                          <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger">
                          <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Daily Income</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">$31.53</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Expense current</h6>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- category row end -->




</div>
@endsection
