@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

  <!-- buttons -->
<div class="template-demo">
  <a href="{{url('accounts/create')}}" class="btn btn-info mb-2 mb-md-0 mr-2">Add Ledger Account</a>


  {{-- <a href="{{url('customer-documents/')}}" class="btn btn-success">Document Management</a>
  <a href="{{url('new/customer/')}}" class="btn btn-success">New Customer</a> --}}

</div>
<br>
<!-- buttons div end -->

    <h4 class="card-title">Summary</h4>

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Account Type</th>
            <th>Total Debit</th>
            <th>Total Credit</th>
            <th>Total Balance</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $totalAssetDebit = 0;
            $totalAssetCredit = 0;
            $assetsBalance = 0;

            $totalIncomeDebit = 0;
            $totalIncomeCredit = 0;
            $IncomeBalance = 0;

            $totalLiabilityDebit = 0;
            $totalLiabilityCredit = 0;
            $liabilitiesBalance = 0;

            $totalEquityDebit = 0;
            $totalEquityCredit = 0;
            $equityBalance = 0;

            $totalExpenseDebit = 0;
            $totalExpenseCredit = 0;
            $expenseBalance = 0;
        ?>
        @foreach($data as $item)
            <?php
                if ($item->acr_main == 'Assets') {
                    $totalAssetCredit += $item->Credit;
                }
                elseif ($item->acr_main == 'Income') {
                    $totalIncomeCredit += $item->Credit;
                }
                elseif ($item->acr_main == 'Liabilities') {
                    $totalLiabilityCredit += $item->Credit;
                }
                elseif ($item->acr_main == 'Equity') {
                    $totalEquityCredit += $item->Credit;
                }
                elseif ($item->acr_main == 'Expense') {
                    $totalExpenseCredit += $item->Credit;
                }
            ?>

            <?php
                if ($item->adr_main == 'Assets') {
                    $totalAssetDebit += $item->Debit;
                }
                elseif ($item->adr_main == 'Income') {
                    $totalIncomeDebit += $item->Debit;
                }
                elseif ($item->adr_main == 'Liabilities') {
                    $totalLiabilityDebit += $item->Debit;
                }
                elseif ($item->adr_main == 'Equity') {
                    $totalEquityDebit += $item->Debit;
                }
                elseif ($item->adr_main == 'Expense') {
                    $totalExpenseDebit += $item->Debit;
                }
            ?>
        @endforeach
        <?php
            $assetsBalance = $totalAssetDebit - $totalAssetCredit;
            $IncomeBalance = $totalIncomeDebit - $totalIncomeCredit;
            $liabilitiesBalance = $totalLiabilityCredit - $totalLiabilityDebit;
            $equityBalance = $totalEquityCredit - $totalEquityDebit;
            $expenseBalance = $totalExpenseCredit - $totalExpenseDebit;
        ?>

        <tr>
            <td>Assets</td>
            <td>{{ $totalAssetDebit }}</td>
            <td>{{ $totalAssetCredit }}</td>
            <td>{{ $assetsBalance }}</td>
        </tr>

        <tr>
            <td>Income</td>
            <td>{{ $totalIncomeDebit }}</td>
            <td>{{ $totalIncomeCredit }}</td>
            <td>{{ $IncomeBalance }}</td>
        </tr>

        <tr>
            <td>Liabilities</td>
            <td>{{ $totalLiabilityDebit }}</td>
            <td>{{ $totalLiabilityCredit }}</td>
            <td>{{ $liabilitiesBalance }}</td>
        </tr>

        <tr>
            <td>Equity</td>
            <td>{{ $totalEquityDebit }}</td>
            <td>{{ $totalEquityCredit }}</td>
            <td>{{ $equityBalance }}</td>
        </tr>

        <tr>
            <td>Expense</td>
            <td>{{ $totalExpenseDebit }}</td>
            <td>{{ $totalExpenseCredit }}</td>
            <td>{{ $expenseBalance }}</td>
        </tr>
    </tbody>
</table>


<br>
    <h4 class="card-title">Detailed Summary</h4>

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
                                <p class="text-muted mb-0">Balance : $77</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">Credited : $34</p>
                                <p class="text-muted mb-0">Debited : $55</p>
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
                                <p class="text-muted mb-0">Balance : $77</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">1 hour ago</p>
                                <p class="text-muted mb-0">23 tasks, 5 issues </p>
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
                                <h6 class="preview-subject">Project meeting</h6>
                                <p class="text-muted mb-0">New project discussion</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">35 minutes ago</p>
                                <p class="text-muted mb-0">15 tasks, 2 issues</p>
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
                                <h6 class="preview-subject">Broadcast Mail</h6>
                                <p class="text-muted mb-0">Sent release details to team</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">55 minutes ago</p>
                                <p class="text-muted mb-0">35 tasks, 7 issues </p>
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
                                <h6 class="preview-subject">UI Design</h6>
                                <p class="text-muted mb-0">New application planning</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">50 minutes ago</p>
                                <p class="text-muted mb-0">27 tasks, 4 issues </p>
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
