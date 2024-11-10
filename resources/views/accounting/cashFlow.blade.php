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
        <h4 class="card-title">Cash Flow Statement</h4>
        <p class="card-description"> <code > Strating Balance : {{$starting}} </code>
        </p>
        <div class="table-responsive" style="overflow-x: hidden; overflow-y: hidden;">
          <table class="table table-bordered">
            {{-- <form action="{{ route('cashFlow') }}" method="GET"> <!-- Add this form -->
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
        </form> --}}
            {{-- <br> --}}
            <tbody>
                {{-- assets card --}}
              <tr class="table-success">
                <td>cash flow from operating activities</td>
                <td>Balance</td>
              </tr>
             

              <tr>
                <td>Net Profit</td>
                <td>${{$retainLeft}}</td>
              </tr>

              @php
                    $totalCashBank = 0;
                    $totalAccountPay = 0;
                @endphp

              @foreach ($cashBank as $item)
              <tr>
                <td>{{$item->name}}</td>
                {{-- change the balance to negative  --}}
                <td>${{$item->Balance * -1 }}</td>
              </tr>
              @php
                    $totalCashBank += $item->Balance * -1;
                @endphp

              @endforeach


              @foreach ($accountPay as $accPay)
              <tr>
                <td>{{$accPay->name}}</td>
                <td>${{$accPay->Balance}}</td>
              </tr>
              @php
                    $totalAccountPay += $accPay->Balance;
                @endphp

              @endforeach


              <tr>
                <td class="card-description">Operating activities Total</td>
                <td class="card-description">$ {{$totalCashBank + $totalAccountPay}} </td>
              </tr> 
              {{-- total bank {{$totalCashBank}}
              total pay {{$totalAccountPay}} --}}

             <tr>
                <td colspan="2"></td>
             </tr>
              {{-- assets card  end--}}

                       {{-- Investing activities card --}}
                       <tr class="table-success">
                        <td> Investing activities</td>
                        <td>Balance</td>
                      </tr>

                            @php
                            $totalfixAssets = 0;
                        @endphp

                      @foreach ($fixAss as $fix)
                      <tr>
                        <td>{{$fix->name}}</td>
                        <td>${{$fix->Balance * -1}}</td>
                      </tr>
                      @php
                            $totalfixAssets += $fix->Balance * -1;
                        @endphp
        
                      @endforeach
        
                    
        
                      <tr>
                        <td class="card-description">Total  investing activities</td>
                        <td class="card-description">${{$totalfixAssets}}</td>
                      </tr>
                      
                      <tr>
                        <td colspan="2"></td>
                     </tr>
                      {{-- Liability card  end--}}

        
                {{-- Equity card --}}
                       <tr class="table-success">
                        <td>Financing activities</td>
                        <td>Balance</td>
                      </tr>

                      @php
                            $totalcap = 0;
                        @endphp
  
  
                @foreach ($capital as $cap)
                <tr>
                  <td>{{$cap->name}}</td>
                  <td>${{$cap->Balance}}</td>
                </tr>
                @php
                      $totalcap += $cap->Balance;
                  @endphp
  
                @endforeach
        
        
                    
        
                      <tr>
                        <td class="card-description">Total Financing activities</td>
                        <td class="card-description">${{$totalcap}}</td>
                      </tr>
                      
                      <tr>
                        <td colspan="2"></td>
                     </tr>
            {{-- Equity card  end--}}

            {{-- total side --}}
            <tr>
              <td class="card-description">Total Cash Flow</td>
              <td class="card-description">$ {{$totalcap + $totalfixAssets + $totalCashBank + $totalAccountPay}}</td>
            </tr>

            {{-- <tr>
              <td class="card-description">Liability + Equity</td>
              <td class="card-description">$</td>
            </tr> --}}


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
