@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

    <!-- <h4 class="card-title">Summary</h4> -->


        <?php
         

            $totalExpenseDebit = 0;
            $totalExpenseCredit = 0;
            $ExpenseBalance = 0;

          // Variables for individual categories
            $charitableContributionsDebit = 0;
            $charitableContributionsCredit = 0;
            $charitableContributionsBalance = 0;

            $taxesPaidDebit = 0;
            $taxesPaidCredit = 0;
            $taxesPaidBalance = 0;

            $propertyTaxDebit = 0;
            $propertyTaxCredit = 0;
            $propertyTaxBalance = 0;

            $payrollTaxExpensesDebit = 0;
            $payrollTaxExpensesCredit = 0;
            $payrollTaxExpensesBalance = 0;

          

        ?>
        @foreach($data as $item)
            <?php
                if ($item->acr_main == 'Expense') {
                    $totalExpenseCredit += $item->Credit;
                }
               
            ?>

            <?php
                if ($item->adr_main == 'Expense') {
                    $totalExpenseDebit += $item->Debit;
                }
            ?>
            <!-- for category -->
            <?php

                 // Calculate individual category amounts credit
                switch ($item->acr_cat) {
                    case 'Charitable Contributions':
                        $charitableContributionsCredit += $item->Credit;
                        break;

                    case 'Taxes Paid':
                        $taxesPaidCredit += $item->Credit;
                        break;

                    case 'Property Tax':
                        $propertyTaxCredit += $item->Credit;
                        break;

                    case 'Payroll Tax Expenses':
                        $payrollTaxExpensesCredit += $item->Credit;
                        break;
                    
                    // Add more cases for other categories as needed

                    default:
                        // Handle default case if needed
                        break;
                }
               

                    // Calculate individual category amounts for adr_cat
                    switch ($item->adr_cat) {
                        case 'Charitable Contributions':
                            $charitableContributionsDebit += $item->Debit;
                            break;

                        case 'Taxes Paid':
                            $taxesPaidDebit += $item->Debit;
                            break;

                        case 'Property Tax':
                            $propertyTaxDebit += $item->Debit;
                            break;

                        case 'Payroll Tax Expenses':
                            $payrollTaxExpensesDebit += $item->Debit;
                            break;

                        // Add more cases for other categories as needed

                        default:
                            // Handle default case if needed
                            break;
                    }

             


            ?>
        @endforeach
        <?php
            // for total expense
            $ExpenseBalance = $totalExpenseCredit - $totalExpenseDebit;


         // Calculate category balances
        $charitableContributionsBalance = $charitableContributionsCredit - $charitableContributionsDebit;
        $taxesPaidBalance = $taxesPaidCredit - $taxesPaidDebit;
        $propertyTaxBalance = $propertyTaxCredit - $propertyTaxDebit;
        $payrollTaxExpensesBalance = $payrollTaxExpensesCredit - $payrollTaxExpensesDebit;

          
        ?>


<br>
    <h4 class="card-title">Expense Summary</h4>

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
                @if ($item->acr_main == 'Expense' && $item->adr_main == 'Expense')
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
                    <h4 class="card-title">Expense</h4>
                    <canvas id="transaction-history" class="transaction-chart"></canvas>

                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Total Expense </h6>
                        <p class="text-muted mb-0">Balance</p>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">${{ $ExpenseBalance }}</h6>
                      </div>
                    </div>
                 

                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Total Expense</h6>
                        <p class="text-muted mb-0">Credited</p>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">${{ $totalExpenseCredit }}</h6>
                      </div>
                    </div>

                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Total Expense</h6>
                        <p class="text-muted mb-0">Debited</p>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">${{ $totalExpenseDebit }}</h6>
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
                                <h6 class="preview-subject">Charitable Contributions</h6>
                                <p class="text-muted mb-0">Balance : ${{$charitableContributionsBalance}}</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">Credited : ${{$charitableContributionsCredit}}</p>
                                <p class="text-muted mb-0">Debited : ${{$charitableContributionsDebit}}</p>
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
                                <h6 class="preview-subject">Taxes Paid</h6>
                                <p class="text-muted mb-0">Balance : ${{$taxesPaidBalance}}</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <p class="text-muted">Credited : ${{$taxesPaidCredit}}</p>
                                <p class="text-muted mb-0">Debited : ${{$taxesPaidDebit}}</p>
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
                                <h6 class="preview-subject">Property Tax</h6>
                                <p class="text-muted mb-0">Balance : ${{$propertyTaxBalance}}</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                              <p class="text-muted">Credited : ${{$propertyTaxCredit}}</p>
                                <p class="text-muted mb-0">Debited : ${{$propertyTaxDebit}}</p>
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
                                <h6 class="preview-subject">Payroll Tax Expenses<</h6>
                                <p class="text-muted mb-0">Balance : ${{$payrollTaxExpensesBalance}}</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">Credited : ${{$payrollTaxExpensesCredit}}</p>
                                <p class="text-muted mb-0">Debited : ${{$payrollTaxExpensesDebit}} </p>
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
                                <p class="text-muted mb-0">Balance : ${{$taxesPaidDebit}}</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">Credited : ${{$taxesPaidDebit}}</p>
                                <p class="text-muted mb-0">Debited : ${{$taxesPaidDebit}}</p>
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
                                    <p class="text-muted mb-0">Balance : ${{$taxesPaidDebit}}</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-muted">Credited : ${{$taxesPaidDebit}}</p>
                                    <p class="text-muted mb-0">Debited : ${{$taxesPaidDebit}}</p>
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
                                    <p class="text-muted mb-0">Balance : ${{$taxesPaidDebit}}</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-muted">Credited : ${{$taxesPaidDebit}}</p>
                                    <p class="text-muted mb-0">Debited : ${{$taxesPaidDebit}}</p>
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
                                    <p class="text-muted mb-0">Balance : ${{$taxesPaidDebit}}</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-muted">Credited : ${{$taxesPaidDebit}}</p>
                                    <p class="text-muted mb-0">Debited : ${{$taxesPaidDebit}}</p>
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
