@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">
<form action="{{ url('Payment/new' ,$data->id) }}" method="POST" enctype="multipart/form-data">
@csrf

    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <h4 class="card-title">Payment </h4>
         <p class="card-description">Payment Info</p>

         <input type="text" name="policy_id" value="{{$data->id}}" hidden="true">

         <div class="row">
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="person" id="nadia" value="Nadia">
                    <label class="form-check-label" for="nadia">
                        Nadia
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="person" id="kiren" value="Kiren">
                    <label class="form-check-label" for="kiren">
                        Kiren
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="person" id="amara" value="Amara">
                    <label class="form-check-label" for="amara">
                        Amara
                    </label>
                </div>
            </div>
        </div>

        <br>
        
        <div class="row">
            <!-- First Name -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" value="{{$data->first_name}}" name="first_name" class="form-control" id="first_name" placeholder="Enter First Name">
                </div>
            </div> 
        
            <!-- Last Name -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" value="{{$data->last_name}}" name="last_name" class="form-control" id="last_name" placeholder="Enter Last Name">
                </div>
            </div>
        
            <!-- Carrier -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="carrier">Carrier</label>
                    <input type="text" value="{{$data->carrier}}" name="carrier"  class="form-control" id="carrier" placeholder="Enter Carrier">
                </div>
            </div>
        </div>
        
        <div class="row">
           
        
            <!-- Amount Due -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="amount_due">Amount Due</label>
                    <input type="text" value="{{$data->amount_due}}" name="amount_due"  class="form-control" id="amount_due" placeholder="Enter Amount Due">
                </div>
            </div>
        
            <!-- Due Date -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="due_date">Due Date</label>
                    <input type="date" value="{{$data->due_date}}" name="due_date"  class="form-control" id="due_date">
                </div>
            </div>
        </div>
        
      
        


<br>



</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <div class="row">
            <!-- New Amount Due -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="new_amount_due">New Amount Due</label>
                    <input type="number" step="any" placeholder="0.0" name="new_amount_due" class="form-control" id="new_amount_due" placeholder="Enter New Amount Due">
                </div>
            </div>
        
            <!-- New Due Date -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="new_due_date">New Due Date</label>
                    <input type="date" class="form-control" name="new_due_date" id="new_due_date">
                </div>
            </div>
        
            <!-- Amount Paid CC -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="amount_paid_cc">Amount Paid CC</label>
                    <input type="text" value="{{$data->amount_paid_cc}}" name="amount_paid_cc" step="any" placeholder="0.0" class="form-control" id="amount_paid_cc" placeholder="Enter Amount Paid by Credit Card">
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Amount Paid Cash -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="amount_paid_cash">Amount Paid Cash</label>
                    <input type="text" value="{{$data->amount_paid_cash}}" name="amount_paid_cash" step="any" placeholder="0.0" class="form-control" id="amount_paid_cash" placeholder="Enter Amount Paid in Cash">
                </div>
            </div>
        
            <!-- Direct Pay -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="direct_pay">Direct Pay</label>
                    <input type="text" value="{{$data->direct_pay}}" name="direct_pay" class="form-control" id="direct_pay" placeholder="Enter Direct Pay Info">
                </div>
            </div>
        </div>
        

</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <div class="row">
            <div class="col-md-6 mb-4">
                <label for="name_on_card">Name on Card</label>
                <input type="text" value="{{$data->name_on_card}}" class="form-control" id="name_on_card" name="name_on_card" value="{{ old('name_on_card') }}">
            </div>

            <div class="col-md-6 mb-5">
                <label for="debit_card">Credit Card Section</label>
                <input type="text" value="{{$data->debit_card}}" class="form-control" id="debit_card" name="debit_card" value="{{ old('debit_card') }}">
                {{-- <select class="form-control" id="debit_card" name="debit_card">
                    <option value="">Select Card ⬇️</option>
                    <option value="Master Card Debit Card">Master Card Debit Card</option>
                    <option value="Visa Debit Card">Visa Debit Card</option>
                    <option value="Master Card Credit Card">Master Card Credit Card</option>
                    <option value="Visa Credit Card">Visa Credit Card</option>
                    <option value="Discover">Discover</option>
                    <option value="American Express">American Express</option>

                </select> --}}
            </div>
            
        </div>

        <div class="row">
            <p class="card-description">Card Number</p>
            <div class="col-md-3 mb-4">
                <label for="number_1st_4">1st 4 Digits</label>
                <input type="number" value="{{$data->number_1st_4}}" class="form-control" id="number_1st_4" name="number_1st_4" value="{{ old('number_1st_4') }}" max="9999">
                <span class="text-danger" id="number_1st_4_error"></span>
            </div>

            <div class="col-md-3 mb-4">
                <label for="number_2nd_4">2nd 4 Digits</label>
                <input type="number" value="{{$data->number_2nd_4}}" class="form-control" id="number_2nd_4" name="number_2nd_4" value="{{ old('number_2nd_4') }}" max="9999">
                <span class="text-danger" id="number_2nd_4_error"></span>
            </div>

            <div class="col-md-3 mb-4">
                <label for="number_3rd_4">3rd 4 Digits</label>
                <input type="number" value="{{$data->number_3rd_4}}" class="form-control" id="number_3rd_4" name="number_3rd_4" value="{{ old('number_3rd_4') }}" max="9999">
                <span class="text-danger" id="number_3rd_4_error"></span>
            </div>

            <div class="col-md-3 mb-4">
                <label for="number_4th_4">Last 4 Digits</label>
                <input type="number" value="{{$data->number_4th_4}}" class="form-control" id="number_4th_4" name="number_4th_4" value="{{ old('number_4th_4') }}" max="9999">
                <span class="text-danger" id="number_4th_4_error"></span>
            </div>

        </div>

        <div class="row">

            <div class="col-md-3 mb-4">
                <label for="expiration_1">Expiration Month</label>
                <input type="text" value="{{$data->expiration_1}}"  class="form-control" id="expiration_1" name="expiration_1" value="{{ old('expiration_1') }}">
                {{-- <select class="form-control" id="expiration_1" name="expiration_1">
                    <option value="">Select Month ⬇️</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select> --}}
            </div>

            <div class="col-md-3 mb-4">
                <label for="expiration_2">Expiration Year</label>
                <input type="number" value="{{$data->expiration_2}}" class="form-control" id="expiration_2" name="expiration_2" value="{{ old('expiration_2') }}">
                {{-- <select class="form-control" id="expiration_2" name="expiration_2">
                    <option value="">Select Year ⬇️</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                    <option value="2031">2031</option>
                    <option value="2032">2032</option>
                    <option value="2033">2033</option>
                    <option value="2034">2034</option>
                </select> --}}
            </div>

            <div class="col-md-3 mb-4">
                <label for="billing_zip">Billing Zip</label>
                <input type="number" value="{{$data->billing_zip}}" class="form-control" id="billing_zip" name="billing_zip" value="{{ old('billing_zip') }}" max="99999">
                <span class="text-danger" id="billing_zip_error"></span>
            </div>
            
            
            <!-- Fourth Row -->
            <div class="col-md-3 mb-4">
                <label for="cvc">CVC</label>
                <input type="text" value="{{$data->cvc}}" class="form-control" id="cvc1" name="cvc" value="">
            </div>
  

        </div>

        <div class="row">

            <!-- Third Row -->
           
            <div class="col-md-8 mb-4">
                <label for="notes">Notes:</label>
                <textarea class="form-control" value="{{$data->notes}}" id="notes" name="notes" rows="3">{{ old('notes') }}</textarea>
            </div>
        </div>
        

</div></div>


<button type="submit" class="btn btn-primary mr-2" >Submit </button> 
 

</form>





@endsection
