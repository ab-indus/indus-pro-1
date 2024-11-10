@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

  <!-- header -->
  {{-- <div class="page-header">
              <h3 class="page-title">  </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb"> 
                  <button type="button" class="btn btn-info btn-icon-text" 
                  onclick="window.location.href='{{ URL::TO('Team-Member/Time-Sheet/Add',$id) }}';" >
                            <i class="mdi mdi-plus-circle-outline"></i>
                            Add New Log </button>
                </ol>
              </nav>
            </div> --}}
            
            <!-- header end -->

            {{-- card start --}}

            {{-- <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Rate Details</h4>

      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="hourly_rate">Hourly Rate</label>
                <input type="text" value=" {{ $member->rate->Hourly_Rate}}" class="form-control" id="hourly_rate" name="hourly_rate">
            </div>
            <div class="form-group">
                <label for="monthly_rate">Monthly Rate</label>
                <input type="text" value=" {{ $member->rate->Monthly_Rate}}" class="form-control" id="monthly_rate" name="monthly_rate">
            </div>
            <div class="form-group">
                <label for="annual_rate">Annual Rate</label>
                <input type="text" value=" {{ $member->rate->Annual_Rate}}" class="form-control" id="annual_rate" name="annual_rate">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="hourly_overtime_rate">Hourly Over Time Rate</label>
                <input type="text" value=" {{ $member->rate->Hourly_Over_Time_Rate}}" class="form-control" id="hourly_overtime_rate" name="hourly_overtime_rate">
            </div>
            <div class="form-group">
                <label for="minimum_weekly_hours">Minimum Weekly Hours</label>
                <input type="text" value=" {{ $member->rate->Minimum_Weekly_Hours}}" class="form-control" id="minimum_weekly_hours" name="minimum_weekly_hours">
            </div>
            <div class="form-group">
                <label for="minimum_monthly_hours">Minimum Monthly Hours</label>
                <input type="text" value=" {{ $member->rate->Minimum_Monthly_Hours}}" class="form-control" id="minimum_monthly_hours" name="minimum_monthly_hours">
            </div>
        </div>
    </div>
    
    

 

            
                </div></div></div> --}}
                {{-- card end --}}

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
      {{-- date form --}}
      <form action="{{ url('Team-Member/Pay-Sheet',$id) }}" method="GET"> <!-- Add this form -->
        @csrf
      <div class="row">

        <div class="col-md-4">
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Date From</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="dateFrom" />
            </div>
          </div>
        </div>

          <div class="col-md-4">
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Date To</label>
              <div class="col-sm-8">
                <input type="date" class="form-control" name="dateTo" />
              </div>
            </div>

          </div> 

          <div class="col-md-4">
            <button type="submit" class="btn btn-info mr-2" >Set Date Range </button> <br>

          </div> 

      



      </div>

       </form>

      
      {{-- date form end --}}



      <div style="text-align: right;">
        <a href="{{ url('Pay-Run2', $member->id) }}" style="display: inline-block; margin-right: 10px;">
        <button type="submit" class="btn btn-primary" >View Pay-Run </button> 
        </a>
      </div> 

                    <h4 class="card-title">Pay Sheet</h4>

                    <div class="row">

                      {{-- <div class="col-md-2">
                        <button type="button" id="CommissionBtn" class="btn btn-info" >Commission </button> 
                        <input style="display: none" id="CommissionInput" type="number" class="form-control" name="Commission" />
                      </div> 

                      <div class="col-md-2">
                        <button type="button" id="FlatRateBtn" class="btn btn-info" > Flat Rate </button> 
                        <input style="display: none" id="FlatRateInput" type="number" class="form-control" name="FlatRate" />
                      </div> 
                      <div class="col-md-2">
                        <button type="button" id="GiftBtn" class="btn btn-info" > Gift   </button> 
                        <input style="display: none" id="GiftInput" type="number" class="form-control" name="Gift" />
                      </div> 
                      <div class="col-md-2">
                        <button type="button" id="AllowancesBtn" class="btn btn-info" > All Allowances   </button> 
                        <input style="display: none" id="AllowancesInput" type="number" class="form-control" name="Allowances" />
                      </div>  --}}
                      
                    </div>

                    <br>
                    <div class="row">

                      {{-- <div class="col-md-2">
                        <button type="button" id="TaxBtn" class="btn btn-danger" > Income Tax </button> 
                        <input style="display: none" id="taxInput" type="number" class="form-control" name="tax" />
                      </div>  --}}

                    {{--                       
                      <div class="col-md-2">
                        <button type="button" id="InsuranceBtn" class="btn btn-danger" > Insurance </button> 
                        <input style="display: none" id="InsuranceInput" type="number" class="form-control" name="Insurance" />
                      </div> 
                      <div class="col-md-2">
                        <button type="button" id="deductionBtn" class="btn btn-danger" > Anyother deduction </button> 
                        <input style="display: none" id="deductionInput" type="number" class="form-control" name="deduction" />
                      </div> --}}

                      <div class="col-md-2">
                        <button type="button" id="calculateBtn" class="btn btn-primary" > Calculate </button> 
                      </div>  

                    </div>
                    
                    {{-- <br> --}}


                    <p class="card-description"> All Details <code></code>
                    </p>

                    

                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th><h6 class="card-title">Name</h6></th>
                            {{-- <th><h6 class="card-title">CNIC/NTN</h6></th> --}}
                            <th><h6 class="card-title">Total Regular Hours</h6></th>

                            <th><h6 class="card-title">Total Hours work</h6></th>
                            <th><h6 class="card-title">Hourly Rate</h6></th>
                            <th><h6 class="card-title">Base Salary </h6></th>

                            <th><h6 class="card-title">Over Time Hours</h6></th>
                            <th><h6 class="card-title">Over Time Rate</h6></th>
                            <th><h6 class="card-title">Total Over Amount</h6></th>

                          

                            <th><h6 class="card-title">Bonus/Comm </h6></th>
                            <th><h6 class="card-title">Flat Rate </h6></th>
                            <th><h6 class="card-title">Gift Amount </h6></th>
                            <th><h6 class="card-title">Allowances </h6></th>


                            <th><h6 class="card-title">Gross Salary </h6></th>

                          
                            <th><h6 class="card-title">Insurance </h6></th>
                            <th><h6 class="card-title">Other Deductions </h6></th>

                            <th><h6 class="card-title">Payout w</h6></th>
                            <th><h6 class="card-title" >Tax Withheld  </h6></th>

                            <th><h6 class="card-title">Net Pay-out w</h6></th>
                            <th><h6 class="card-title">Month</h6></th>

                                        
                          </tr>
                        </thead>

                <tbody>
                 <form action="{{ route('pay-run.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf

                  @if ($errors->any())
                  <div class="col-md-12">
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  </div>
              @endif
  
                  <input type="hidden" name="team_member_id" value="{{ $member->id }}">
                 
                  <tr>
                    <td>{{ $member->First_Name }} {{ $member->Middle_Name }} {{ $member->Surname }}</td>
                    {{-- <td>{{ $member->CNIC_NTN }}</td> --}}
                    <td>{{ $member->rate->Minimum_Monthly_Hours}}</td>

                    <td><input type="hidden" name="hours" value="{{ $Hours/6 }}">{{ $Hours/6 }}</td>
                    <td><input type="hidden" name="hourly_rate" value="{{ $member->rate->Hourly_Rate }}">{{ $member->rate->Hourly_Rate }}</td>
                    @php
                    $baseSalary = 0;
                    if($Hours/6 >= $member->rate->Minimum_Monthly_Hours) {
                        $baseSalary = $member->rate->Minimum_Monthly_Hours * $member->rate->Hourly_Rate;
                    } else {
                        $baseSalary = ($Hours/6) * $member->rate->Hourly_Rate;
                    }
                    @endphp
                    <td id="BaseSalary"><input type="hidden" name="base_salary" value="{{ $baseSalary }}">{{ $baseSalary }}</td>
            
                    @php
                    $overTimeHours = max(0, ($Hours/6) - $member->rate->Minimum_Monthly_Hours);
                    $overTimePay = $overTimeHours * $member->rate->Hourly_Over_Time_Rate;
                    @endphp
                    <td><input type="hidden" name="over_time_hours" value="{{ $overTimeHours }}">{{ $overTimeHours }}</td>
                    <td><input type="hidden" name="over_time_rate" value="{{ $member->rate->Hourly_Over_Time_Rate }}">{{ $member->rate->Hourly_Over_Time_Rate }}</td>
                    <td id="overtimeAmount"><input type="hidden"  name="total_over_amount" value="{{ $overTimePay }}">{{ $overTimePay }}</td>
            
                    <td><input class="form-control" type="number" name="bonus_comm" id="CommissionTd"></td>
                    <td><input class="form-control" type="number" name="flat_rate" id="FlatRateTd"></td>
                    <td><input class="form-control" type="number" name="gift" id="GiftTd"></td>
                    <td><input class="form-control" type="number" name="allowances" id="AllowancesTd"></td>
                    <td><input class="form-control" type="number" name="gross_salary" id="gross"></td>
                    <td><input class="form-control" type="number" name="insurance" id="InsuranceTd"></td>
                    <td><input class="form-control" type="number" name="other_deductions" id="deductionTd"></td>
                    <td><input class="form-control" type="number" name="payout_w" id="payOut"></td>
                    <td><input class="form-control" type="number" name="income_tax" id="taxTd"></td>
                    <td><input class="form-control" type="number" name="net_pay_out_w" id="NetPayOut"></td>
                    <td><input class="form-control" type="text" name="Duration"></td>

                    
                </tr>


                </tbody>
                      </table>
                    </div>
                    
                    <br>
                    {{-- <div class="col-md-2">
                      <button type="submit" id="PayRunBtn" class="btn btn-primary" > Add This to Pay Run </button> 
                    </div>  --}}

                  </form>


                  </div>
                </div>

            </div>
                <!-- Modal Start -->
                <center>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <form method="POST" > 
                      @csrf
                      @method('delete')
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete Vendor Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Are you sure you want to delete ?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </center>
<!-- Modal End-->
              </div>
              

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function showForm(url){

$("#exampleModal form").attr('action', url);
$("#exampleModal").modal("show");
}


</script>

<script>
$(document).ready(function() {
    // Function to calculate gross pay and update the corresponding <td>
    function calculateGrossPay() {
        var overTimeHours = parseFloat($('#overtimeAmount').text());
        var baseSalary = parseFloat($('#BaseSalary').text());
        var commission = parseFloat($('#CommissionTd').val() || 0);
        var flatRate = parseFloat($('#FlatRateTd').val() || 0);
        var gift = parseFloat($('#GiftTd').val() || 0);
        var allowances = parseFloat($('#AllowancesTd').val() || 0);

        var Insurance = parseFloat($('#InsuranceTd').val() || 0);
        var deduction = parseFloat($('#deductionTd').val() || 0);
        // var incomeTax = parseFloat($('#taxTd').val() || 0);



        var grossPay = overTimeHours + baseSalary + commission + flatRate + gift + allowances;
        var payout = grossPay - Insurance - deduction;

        var grossPay1 = Math.floor(parseFloat(grossPay));
        var payout1 = Math.floor(parseFloat(payout));


        $('#gross').val(grossPay1);
        $('#payOut').val(payout1);

        var yearlyPay = payout *12;
        var yearlyTax = calculateTax(yearlyPay);
        var taxWithHeld = 0;

        if(yearlyTax > 0){
          var taxWithHeld = yearlyTax/12
        }

        var taxWithHeld1 = Math.floor(parseFloat(taxWithHeld));

        $('#taxTd').val(taxWithHeld1);
        // console.log(taxWithHeld);
        // console.log(yearlyTax);

      

        var netPayOut = payout - taxWithHeld;
        var netPayOut1 = Math.floor(parseFloat(netPayOut));


        $('#NetPayOut').val(netPayOut1);
   





    }

    function calculateTax(yearlyIncome) 
    {
                var tax = 0;

                if (yearlyIncome > 12000000) {
                    tax = (yearlyIncome - 12000000) * 0.35;
                    yearlyIncome = 12000000;
                }

                if (yearlyIncome > 6000000) {
                    tax += (yearlyIncome - 6000000) * 0.325;
                    yearlyIncome = 6000000;
                }

                if (yearlyIncome > 3600000) {
                    tax += (yearlyIncome - 3600000) * 0.25;
                    yearlyIncome = 3600000;
                }
                if (yearlyIncome > 2400000) {
                    tax += (yearlyIncome - 2400000) * 0.20;
                    yearlyIncome = 2400000;
                }
                if (yearlyIncome > 1200000) {
                    tax += (yearlyIncome - 1200000) * 0.125;
                    yearlyIncome = 1200000;
                }
                if (yearlyIncome > 600000) {
                    tax += (yearlyIncome - 600000) * 0.025;
                    yearlyIncome = 600000;
                }
                return tax;
    }

    // Calculate gross pay when the Calculate button is clicked
    $('#calculateBtn').click(function() {
        calculateGrossPay();
    });

    // Show tax input when Income Tax button is clicked
    
    // $('#TaxBtn').click(function() {
    //     $('#taxInput').show();
    // });

    // Show insurance input when Insurance button is clicked
    $('#InsuranceBtn').click(function() {
        $('#InsuranceInput').show();
    });
    // Show any other deduction input when Deduction button is clicked
    $('#deductionBtn').click(function() {
        $('#deductionInput').show();
    });

    // Show commission input when Commission button is clicked
    $('#CommissionBtn').click(function() {
        $('#CommissionInput').show();
    });
    // Show flat rate input when Flat Rate button is clicked
    $('#FlatRateBtn').click(function() {
        $('#FlatRateInput').show();
    });
    // Show gift input when Gift button is clicked
    $('#GiftBtn').click(function() {
        $('#GiftInput').show();
    });
    // Show allowances input when Allowances button is clicked
    $('#AllowancesBtn').click(function() {
        $('#AllowancesInput').show();
    });

    // Update tax value in the corresponding <td> when user inputs tax value

    // $('#taxInput').change(function() {
    //     var taxValue = $(this).val();
    //     $('#taxTd').val(taxValue);
    // });

    // Update insurance value in the corresponding <td> when user inputs insurance value
    $('#InsuranceInput').change(function() {
        var insuranceValue = $(this).val();
        $('#InsuranceTd').val(insuranceValue);
    });
    // Update deduction value in the corresponding <td> when user inputs deduction value
    $('#deductionInput').change(function() {
        var deductionValue = $(this).val();
        $('#deductionTd').val(deductionValue);
    });
    // Update commission value in the corresponding <td> when user inputs commission value
    $('#CommissionInput').change(function() {
        var commissionValue = $(this).val();
        $('#CommissionTd').val(commissionValue);
    });
    // Update flat rate value in the corresponding <td> when user inputs flat rate value
    $('#FlatRateInput').change(function() {
        var flatRateValue = $(this).val();
        $('#FlatRateTd').val(flatRateValue);
    });
    // Update gift value in the corresponding <td> when user inputs gift value
    $('#GiftInput').change(function() {
        var giftValue = $(this).val();
        $('#GiftTd').val(giftValue);
    });
    // Update allowances value in the corresponding <td> when user inputs allowances value
    $('#AllowancesInput').change(function() {
        var allowancesValue = $(this).val();
        $('#AllowancesTd').val(allowancesValue);
    });
});


</script>



@endsection
