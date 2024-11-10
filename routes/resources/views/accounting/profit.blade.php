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
        <h4 class="card-title">Profit & Loss Statement        </h4>
        <p class="card-description"> <code></code>
        </p>
        <div class="table-responsive" style="overflow-x: hidden; overflow-y: hidden;">
          <table class="table table-bordered">
            <form action="{{ route('profit') }}" method="GET"> <!-- Add this form -->
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
                <td>Account</td>
                <td>Balance</td>
              </tr>

              <tr>
                <td>Income</td>
                <td>${{$IncoemT}}</td>
              </tr>

            

              <tr>
                <td>Expense</td>
                <td>${{$ExpenseT}}</td>
              </tr>

            

             


              <tr>
                <td class="card-description">Total Profit/Loss</td>
                <td class="card-description">${{$retainLeft}}</td>
              </tr>
             {{-- <tr>
                <td colspan="2"></td>
             </tr> --}}


            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>

</div>
@endsection
