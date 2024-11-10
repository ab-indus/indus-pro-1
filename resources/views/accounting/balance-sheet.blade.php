@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

  <!-- header -->
  {{-- <div class="page-header">
    <h3 class="page-title"></h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <button type="button" class="btn btn-info btn-icon-text"
          onclick="window.location.href='{{ URL::TO('accounts/create') }}';">
          <i class="mdi mdi-plus-circle-outline"></i> Add New Account </button>
      </ol>
    </nav>
  </div> --}}
  <!-- header end -->

  <!-- form start -->
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Balance Sheet</h4>
        <p class="card-description"> <code></code>
        </p>
        <div class="table-responsive" style="overflow-x: hidden; overflow-y: hidden;">
          <table class="table table-bordered">
            <form action="{{ route('balanceSheet') }}" method="GET"> <!-- Add this form -->
                @csrf
              
            <thead>
              <tr>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Date From</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="dateFrom" />
                      </div>
                    </div>
                  </div>

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date To</label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" name="dateTo" />
                        </div>
                      </div>
                    </div> 

                </div>
              </tr>
                <button type="submit" class="btn btn-info mr-2" >Set Date Range </button> <br>
             
            </thead> 
        </form>
            <br>
            <tbody>
                {{-- assets card --}}
              <tr class="table-success">
                <td>Asset Accounts</td>
                <td>Balance</td>
              </tr>

              <tr>
                <td>Cash/Bank</td>
                <td>${{$cashAssT}}</td>
              </tr>

              {{-- <tr>
                <td>Accounts Receivable</td>
                <td>${{$receiveAssets}}</td>
              </tr> --}}

              {{-- <tr>
                <td>Pre-payment</td>
                <td>${{$prePay}}</td>
              </tr> --}}

              <tr>
                <td>Current Assets</td>
                <td>${{$currentAssT}}</td>
              </tr>

              <tr>
                <td>Fixed Assets</td>
                {{-- <td>${{$fixAssets}}</td> --}}
                <td>${{$fixNew}}</td>

              </tr>

              <tr>
                <td>Other Assets</td>
                <td>${{$otherAssT}}</td>
              </tr>


              <tr>
                <td class="card-description">Total Assets</td>
                <td class="card-description">${{$totalAssets}}</td>
              </tr>
             <tr>
                <td colspan="2"></td>
             </tr>
              {{-- assets card  end--}}

                       {{-- Liability card --}}
                       <tr class="table-success">
                        <td>Liability Accounts</td>
                        <td>Balance</td>
                      </tr>

                      <tr>
                        <td>Current Liabilities</td>
                        <td>${{$currentLibT}}</td>
                      </tr>
        
                      <tr>
                        <td>Long Term Liabilities</td>
                        <td>${{$longLibT}}</td>
                      </tr>
        
                      <tr>
                        <td class="card-description">Total Liability</td>
                        <td class="card-description">${{$totalLib}}</td>
                      </tr>
                      
                      <tr>
                        <td colspan="2"></td>
                     </tr>
                      {{-- Liability card  end--}}

        
                {{-- Equity card --}}
                       <tr class="table-success">
                        <td>Equity Accounts</td>
                        <td>Balance</td>
                      </tr>
        
                      <tr>
                        <td>Capital</td>
                        <td>${{$capitalEqT}}</td>
                      </tr>
        
                      <tr>
                        <td>Retained Earning</td>
                        <td>${{$retainEqT + $retainLeft}}</td>
                      </tr>
        
                      {{-- <tr>
                        <td>Other Equity </td>
                        <td>${{$otherEquity}}</td>
                      </tr> --}}
        
                    
        
                      <tr>
                        <td class="card-description">Total Equity</td>
                        <td class="card-description">${{$totalEquity}}</td>
                      </tr>
                      
                      <tr>
                        <td colspan="2"></td>
                     </tr>
            {{-- Equity card  end--}}

            {{-- total side --}}
            <tr>
              <td class="card-description">Assets</td>
              <td class="card-description">${{$totalAssets}}</td>
            </tr>

            <tr>
              <td class="card-description">Liability + Equity</td>
              <td class="card-description">${{$totalEquity + $totalLib }}</td>
            </tr>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
