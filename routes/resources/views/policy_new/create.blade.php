@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">
<form action="{{ url('Policy/new/create')}}" method="post" enctype="multipart/form-data">
@csrf



<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title">Add Policy </h4>
        <p class="card-description">Policy Info</p>

        <div class="row">
            <div class="col-md-4 mb-4">
                {{-- <label for="autopay">Autopay</label> --}}
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="autopay" name="autopay">
                    <label class="form-check-label" for="autopay">Autopay</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                {{-- <label for="new_customer">New Customer</label> --}}
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="new_customer" name="new_customer">
                    <label class="form-check-label" for="new_customer">New Customer</label>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                {{-- <label for="rewrite">Rewrite</label> --}}
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rewrite" name="rewrite">
                    <label class="form-check-label" for="rewrite">Rewrite</label>
                </div>
            </div>
        
            <!-- Second Row -->
            <div class="col-md-4 mb-4">
                {{-- <label for="renew">Renew</label> --}}
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="renew" name="renew">
                    <label class="form-check-label" for="renew">Renew</label>
                </div>
            </div>
        </div>



</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

     

        
         <div class="row">
            <!-- First Column -->
        

   

            <div class="col-md-4 mb-4">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
            </div>

            <!-- Third Row -->
            <div class="col-md-4 mb-4">
                <label for="middle_name">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ old('middle_name') }}">
            </div>

            <div class="col-md-4 mb-4">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
            </div>
          
            {{-- <div class="col-md-4 mb-4">
            </div> --}}
            
        

        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <label for="preferred_name">Preferred Name</label>
                <input type="text" class="form-control" id="preferred_name" name="preferred_name" value="{{ old('preferred_name') }}">
            </div>
        </div>
        

</div></div>


<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <div class="row">
            <!-- First Row -->
            <div class="col-md-4 mb-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="col-md-4 mb-4">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                <span id="phone-error" style="color: red; display: none;">Please enter a valid phone number (e.g., 123-123-1234).</span>
            </div>

            <div class="col-md-4 mb-4">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob') }}">
            </div>
        
            <!-- Second Row -->
            <div class="col-md-4 mb-4">
                <label for="ssn">SSN</label>
                <input type="text" class="form-control" id="ssn" name="ssn" value="{{ old('ssn') }}">
                <span id="ssn-error" style="color: red; display: none;">Please enter a valid SSN (e.g., 123-12-1234).</span>
            </div>

            <div class="col-md-4 mb-4">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" value="{{ old('zip') }}">
                <span id="zip-error" style="color: red; display: none;">Please enter a valid ZIP code (e.g., 12345).</span>
            </div>

            <div class="col-md-4 mb-4">
                <label for="type_of_id">Type of ID</label>
                {{-- <input type="text" class="form-control" id="type_of_id" name="type_of_id" value="{{ old('type_of_id') }}"> --}}
                <select class="form-control" id="type_of_id" name="type_of_id">
                    <option value="">Select Type of ID ⬇️</option>
                    <option value="TX ID">TX ID</option>
                    <option value="TX DL">TX DL</option>
                    <option value="Out of state ID">Out of state ID</option>
                    <option value="Out of state DL">Out of state DL</option>
                    <option value="Matricular">Matricular</option>
                    <option value="Passport">Passport</option>
                    <option value="Foreign ID">Foreign ID</option>
                    <option value="Foreign DL ">Foreign DL </option>
                </select>
            </div>
        
            <!-- Third Row -->
            <div class="col-md-4 mb-4">
                <label for="dl_id">DL / ID #</label>
                <input type="text" class="form-control" id="dl_id" name="dl_id" value="{{ old('dl_id') }}">
            </div>



            

        </div>

        
        

</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <div class="row">
            <div class="col-md-4 mb-4">
                <label for="carrier">Carrier</label>
                <select class="form-control" id="carrier" name="carrier">
                    <option value="">Select Carrier ⬇️</option>
                    <option value="Alinsco">Alinsco</option>
                    <option value="Blue Fire">Blue Fire</option>
                    <option value="Bristol West">Bristol West</option>
                    <option value="Common Wealth">Common Wealth</option>
                    <option value="Connect">Connect</option>
                    <option value="CNA Surety">CNA Surety</option>
                    <option value="Dairyland">Dairyland</option>
                    <option value="Excellent">Excellent</option>
                    <option value="Foremost">Foremost</option>
                    <option value="Gainsco">Gainsco</option>
                    <option value="Progressive">Progressive</option>
                    <option value="National Lloyds">National Lloyds</option>
                    <option value="Wellington">Wellington</option>
                    <option value="EMC National Life">EMC National Life</option>
                    <option value="Mutual of Omaha">Mutual of Omaha</option>
                    <option value="Blue Cross Blue Shield">Blue Cross Blue Shield</option>
                    <option value="Ambetter">Ambetter</option>
                    <option value="United Health Care">United Health Care</option>
                    <option value="Humana">Humana</option>
                    <option value="Cigna">Cigna</option>
                    <option value="Well Care">Well Care</option>
                    <option value="Aetna">Aetna</option>
                    <option value="Delta Dental">Delta Dental</option>
                    <!-- Add options here -->
                </select>
            </div>
            <div class="col-md-4 mb-4">
                <label for="policy_number">Policy Number</label>
                <input type="text" class="form-control" id="policy_number" name="policy_number" value="{{ old('policy_number') }}">
            </div>
        
            <!-- Fourth Row -->
            <div class="col-md-4 mb-4">
                <label for="type_of_policy">Type of Policy</label>
                <select class="form-control" id="type_of_policy" name="type_of_policy">
                    <option value="">Select Type of Policy ⬇️</option>
                    <option value="Auto Personal">Auto Personal</option>
                    <option value="Auto Commercial">Auto Commercial</option>
                    <option value="Other Commercial">Other Commercial</option>
                    <option value="Motorcycles">Motorcycles</option>
                    <option value="Home">Home</option>
                    <option value="Renters">Renters</option>
                    <option value="Life">Life</option>
                    <option value="Medicare">Medicare</option>
                    <option value="ACA">ACA</option>
                    <option value="Others">Others</option>

               
                </select>
            </div>
            
        </div>

</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <div class="row">
            <div class="col-md-4 mb-4">
                <label for="insured_items">Insured Items</label>
                <input type="number" class="form-control" id="insured_items" name="insured_items" value="{{ old('insured_items') }}">
                <span class="text-danger" id="insured_items_error"></span>
            </div>

            <div class="col-md-4 mb-4">
                <label for="insured_drivers">Insured Drivers</label>
                <input type="number" class="form-control" id="insured_drivers" name="insured_drivers" value="{{ old('insured_drivers') }}">
                <span class="text-danger" id="insured_drivers_error"></span>
            </div>

            <div class="col-md-4 mb-4">
                <label for="excluded_drivers">Excluded Drivers</label>
                <input type="number" class="form-control" id="excluded_drivers" name="excluded_drivers" value="{{ old('excluded_drivers') }}">
                <span class="text-danger" id="excluded_drivers_error"></span>
            </div>
            
            <!-- Second Row -->
    
            
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <label for="lien" class="form-label">Lien</label>
                <div class="d-flex align-items-center">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="lien" id="lien_yes" value="1" {{ old('lien') == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="lien_yes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lien" id="lien_no" value="0" {{ old('lien') == '0' ? 'checked' : '' }}>
                        <label class="form-check-label" for="lien_no">No</label>
                    </div>
                </div>
                {{-- <span class="text-danger" id="lien_error"></span> --}}
            </div>
        </div>
        

</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

    <div class="row">
        <div class="col-md-4 mb-4">
            <label for="effective_date">Effective Date</label>
            <input type="date" class="form-control" id="effective_date" name="effective_date" value="{{ old('effective_date') }}">
        </div>
        <div class="col-md-4 mb-4">
            <label for="expiration_date">Expiration Date</label>
            <input type="date" class="form-control" id="expiration_date" name="expiration_date" value="{{ old('expiration_date') }}">
        </div>
    
        <!-- Third Row -->
        <div class="col-md-4 mb-4">
            <label for="term_months">Term (Months)</label>
            {{-- <input type="number" class="form-control" id="term_months" name="term_months" value="{{ old('term_months') }}"> --}}

            <select class="form-control" id="term_months" name="term_months">
                <option value="">Select Term ⬇️</option>
                <option value="12">Monthly</option>
                <option value="4">Quarterly</option>
                <option value="2">Semi-Annual</option>
                <option value="1">Annual</option>

            </select>

        </div>

    </div>

</div></div>


<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <div class="row">

            <div class="col-md-4 mb-4">
                <label for="amount_due">Amount Due</label>
                <input type="number" step="any" placeholder="0.0" class="form-control" id="amount_due" name="amount_due" value="{{ old('amount_due') }}">
            </div>
            
            <div class="col-md-4 mb-4">
                <label for="due_date">Due Date</label>
                <input type="date" class="form-control" id="due_date" name="due_date" value="{{ old('due_date') }}">
            </div>

        </div>

</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

      

        <div class="row">
            <!-- First Row -->
            <div class="col-md-4 mb-4">
                <label for="base_premium">Base Premium</label>
                <input type="number" step="any" placeholder="0.0" class="form-control" id="base_premium" name="base_premium" value="{{ old('base_premium') }}">
                <span class="text-danger" id="base_premium_error"></span>
            </div>

            <div class="col-md-4 mb-4">
                <label for="state_fee_mvca">State Fee (MVCA)</label>
                <input type="number" step="any" placeholder="0.0" class="form-control" id="state_fee_mvca" name="state_fee_mvca" value="{{ old('state_fee_mvca') }}">
                <span class="text-danger" id="state_fee_mvca_error"></span>
            </div>

            <div class="col-md-4 mb-4">
                <label for="policy_fee">Policy Fee</label>
                <input type="number" step="any" placeholder="0.0" class="form-control" id="policy_fee" name="policy_fee" value="{{ old('policy_fee') }}">
                <span class="text-danger" id="policy_fee_error"></span>
            </div>

            <!-- Second Row -->
            <div class="col-md-4 mb-4">
                <label for="roadside_assistance_fee">Roadside Assistance Fee</label>
                <input type="number" step="any" placeholder="0.0" class="form-control" id="roadside_assistance_fee" name="roadside_assistance_fee" value="{{ old('roadside_assistance_fee') }}">
                <span class="text-danger" id="roadside_assistance_fee_error"></span>
            </div>

            <div class="col-md-4 mb-4">
                <label for="sr22">SR22</label>
                <input type="number" step="any" placeholder="0.0" class="form-control" id="sr22" name="sr22" value="{{ old('sr22') }}">
                <span class="text-danger" id="sr22_error"></span>
            </div>

            <div class="col-md-4 mb-4">
                <label for="other_fee">Other Fee (if any)</label>
                <input type="number" step="any" placeholder="0.0" class="form-control" id="other_fee" name="other_fee" value="{{ old('other_fee') }}">
                <span class="text-danger" id="other_fee_error"></span>
            </div>

        
            <!-- Third Row -->
            <div class="col-md-4 mb-4">
                <label for="total_premium">Total Premium</label>
                <input type="text" class="form-control" id="total_premium" name="total_premium" value="{{ old('total_premium') }}">
            </div>

            <div class="col-md-4 mb-4">
                <label for="annual_premium">Annual Premium</label>
                <input type="text" class="form-control" id="annual_premium" name="annual_premium" value="{{ old('annual_premium') }}">
            </div>

        </div>
        

</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <p class="card-description">Paid Today</p>

    

        <div class="row">
            <!-- First Row -->

            {{-- <div class="col-md-4 mb-4">
                <label for="paid_today">/label>
                <input type="text" class="form-control" id="paid_today" name="paid_today" value="{{ old('paid_today') }}">
            </div> --}}

             <!-- First Row -->
            <div class="col-md-4 mb-4">
                <label for="amount_paid_cc">Amount Paid CC</label>
                <input type="number" step="any" placeholder="0.0" class="form-control" id="amount_paid_cc" name="amount_paid_cc" value="{{ old('amount_paid_cc') }}">
                <span class="text-danger" id="amount_paid_cc_error"></span>
            </div>

            <div class="col-md-4 mb-4">
                <label for="amount_paid_cash">Amount Paid Cash</label>
                <input type="number" step="any" placeholder="0.0" class="form-control" id="amount_paid_cash" name="amount_paid_cash" value="{{ old('amount_paid_cash') }}">
                <span class="text-danger" id="amount_paid_cash_error"></span>
            </div>

            <!-- Second Row -->
            <div class="col-md-4 mb-4">
                <label for="direct_pay">Direct Pay</label>
                <input type="number" step="any" placeholder="0.0" class="form-control" id="direct_pay" name="direct_pay" value="{{ old('direct_pay') }}">
                <span class="text-danger" id="direct_pay_error"></span>
            </div>


        </div>
        

</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <div class="row">
            <div class="col-md-6 mb-4">
                <label for="name_on_card">Name on Card</label>
                <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="{{ old('name_on_card') }}">
            </div>

            <div class="col-md-6 mb-5">
                <label for="debit_card">Credit Card Section</label>
                {{-- <input type="text" class="form-control" id="debit_card" name="debit_card" value="{{ old('debit_card') }}"> --}}
                <select class="form-control" id="debit_card" name="debit_card">
                    <option value="">Select Card ⬇️</option>
                    <option value="Master Card Debit Card">Master Card Debit Card</option>
                    <option value="Visa Debit Card">Visa Debit Card</option>
                    <option value="Master Card Credit Card">Master Card Credit Card</option>
                    <option value="Visa Credit Card">Visa Credit Card</option>
                    <option value="Discover">Discover</option>
                    <option value="American Express">American Express</option>

                </select>
            </div>
            
        </div>

        <div class="row">
            <p class="card-description">Card Number</p>
            <div class="col-md-3 mb-4">
                <label for="number_1st_4">1st 4 Digits</label>
                <input type="number" class="form-control" id="number_1st_4" name="number_1st_4" value="{{ old('number_1st_4') }}" max="9999">
                <span class="text-danger" id="number_1st_4_error"></span>
            </div>

            <div class="col-md-3 mb-4">
                <label for="number_2nd_4">2nd 4 Digits</label>
                <input type="number" class="form-control" id="number_2nd_4" name="number_2nd_4" value="{{ old('number_2nd_4') }}" max="9999">
                <span class="text-danger" id="number_2nd_4_error"></span>
            </div>

            <div class="col-md-3 mb-4">
                <label for="number_3rd_4">3rd 4 Digits</label>
                <input type="number" class="form-control" id="number_3rd_4" name="number_3rd_4" value="{{ old('number_3rd_4') }}" max="9999">
                <span class="text-danger" id="number_3rd_4_error"></span>
            </div>

            <div class="col-md-3 mb-4">
                <label for="number_4th_4">Last 4 Digits</label>
                <input type="number" class="form-control" id="number_4th_4" name="number_4th_4" value="{{ old('number_4th_4') }}" max="9999">
                <span class="text-danger" id="number_4th_4_error"></span>
            </div>

        </div>

        <div class="row">

            <div class="col-md-3 mb-4">
                <label for="expiration_1">Expiration Month</label>
                {{-- <input type="text" class="form-control" id="expiration_1" name="expiration_1" value="{{ old('expiration_1') }}"> --}}
                <select class="form-control" id="expiration_1" name="expiration_1">
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
                </select>
            </div>

            <div class="col-md-3 mb-4">
                <label for="expiration_2">Expiration Year</label>
                {{-- <input type="number" class="form-control" id="expiration_2" name="expiration_2" value="{{ old('expiration_2') }}"> --}}
                <select class="form-control" id="expiration_2" name="expiration_2">
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
                </select>
            </div>

            <div class="col-md-3 mb-4">
                <label for="billing_zip">Billing Zip</label>
                <input type="number" class="form-control" id="billing_zip" name="billing_zip" value="{{ old('billing_zip') }}" max="99999">
                <span class="text-danger" id="billing_zip_error"></span>
            </div>
            
            
            <!-- Fourth Row -->
            <div class="col-md-3 mb-4">
                <label for="cvc">CVC</label>
                <input type="text" class="form-control" id="cvc" name="cvc" value="{{ old('cvc') }}">
            </div>
  

        </div>

        <div class="row">

            <!-- Third Row -->
           
            <div class="col-md-8 mb-4">
                <label for="notes">Notes:</label>
                <textarea class="form-control" id="notes" name="notes" rows="3">{{ old('notes') }}</textarea>
            </div>
        </div>
        

</div></div>

<button type="submit" class="btn btn-primary mr-2" >Submit </button> 
</form>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

{{-- <script>
    $(document).ready(function() {
    function calculateSum() {
        var termMonths = parseFloat($('#term_months').val()) || 0;
        var basePremium = parseFloat($('#base_premium').val()) || 0;

        var sum = termMonths + basePremium;

        $('#state_fee_mvca').val(sum);
        $('#total_premium').val(sum);

        
    }

    // Calculate on page load
    calculateSum();

    // Calculate whenever term_months or base_premium inputs change
    $('#term_months, #base_premium').on('input', function() {
        calculateSum();
    });
});

</script> --}}

<script>
    $(document).ready(function() {

        // Phone validation: Format 
        $('#phone').on('input', function() {
            var phone = $(this).val();
            var phonePattern = /^\d{3}-\d{3}-\d{4}$/;
            if (!phonePattern.test(phone)) {
                $('#phone-error').show();
            } else {
                $('#phone-error').hide();
            }
        });

        // SSN validation: Format 123-12-1234
        $('#ssn').on('input', function() {
            var ssn = $(this).val();
            var ssnPattern = /^\d{3}-\d{2}-\d{4}$/;
            if (!ssnPattern.test(ssn)) {
                $('#ssn-error').show();
            } else {
                $('#ssn-error').hide();
            }
        });

        // ZIP validation: Format 12345
        $('#zip').on('input', function() {
            var zip = $(this).val();
            var zipPattern = /^\d{5}$/;
            if (!zipPattern.test(zip)) {
                $('#zip-error').show();
            } else {
                $('#zip-error').hide();
            }
        });


         // Function to validate a single digit input
        function validateSingleDigit(inputId, errorId) {
            let value = $(inputId).val();
            if (!/^[1-9]{1}$/.test(value)) {
                $(errorId).text("Please enter a single digit number (1-9).");
                return false;
            } else {
                $(errorId).text("");
                return true;
            }
        }

        // Validate each field on input
        $('#insured_items').on('input', function() {
            validateSingleDigit('#insured_items', '#insured_items_error');
        });

        $('#insured_drivers').on('input', function() {
            validateSingleDigit('#insured_drivers', '#insured_drivers_error');
        });

        $('#excluded_drivers').on('input', function() {
            validateSingleDigit('#excluded_drivers', '#excluded_drivers_error');
        });

        // $('#lien').on('input', function() {
        //     validateSingleDigit('#lien', '#lien_error');
        // });

        // Function to format number as plain decimal (e.g., 10.00)
        function formatDecimal(inputId) {
            let value = $(inputId).val().replace(/[^0-9.]/g, ''); // Remove any non-numeric characters
            if (value) {
                value = parseFloat(value).toFixed(2); // Convert to a number with 2 decimal places
                $(inputId).val(value); // Set the formatted value
            } else {
                $(inputId).val(''); // Leave empty if no valid input
            }
        }

        // Apply format on each input field when the user finishes typing
        $('#base_premium, #state_fee_mvca, #policy_fee, #roadside_assistance_fee, #sr22, #other_fee, #amount_paid_cc, #amount_paid_cash, #direct_pay').on('blur', function() {
            formatDecimal(`#${this.id}`);
        });

        // Apply format when the page is loaded for existing values
        $('#base_premium, #state_fee_mvca, #policy_fee, #roadside_assistance_fee, #sr22, #other_fee, #amount_paid_cc, #amount_paid_cash, #direct_pay').each(function() {
            formatDecimal(`#${this.id}`);
        });


        // Function to validate 4-digit numbers
        function validateFourDigits(inputId, errorId) {
            let value = $(inputId).val();
            if (value.length > 4) {
                $(errorId).text("The number must be 4 digits or less.");
                $(inputId).val(value.substring(0, 4)); // Limit to 4 digits
            } else {
                $(errorId).text(""); // Clear the error if valid
            }
        }

        // Apply validation on each field when user types or loses focus
        $('#number_1st_4, #number_2nd_4, #number_3rd_4, #number_4th_4').on('input blur', function() {
            validateFourDigits(`#${this.id}`, `#${this.id}_error`);
        });

        // Function to validate 5-digit zip code
        function validateZipCode(inputId, errorId) {
            let value = $(inputId).val();
            if (value.length > 5) {
                $(errorId).text("Zip code must be 5 digits or less.");
                $(inputId).val(value.substring(0, 5)); // Limit to 5 digits
            } else {
                $(errorId).text(""); // Clear the error if valid
            }
        }

        // Apply validation when user types or loses focus
        $('#billing_zip').on('input blur', function() {
            validateZipCode('#billing_zip', '#billing_zip_error');
        });

        function updateTotalPremium() {
        let basePremium = parseFloat($('#base_premium').val().replace(/[^0-9.-]/g, '')) || 0;
        let stateFeeMVCA = parseFloat($('#state_fee_mvca').val().replace(/[^0-9.-]/g, '')) || 0;
        let policyFee = parseFloat($('#policy_fee').val().replace(/[^0-9.-]/g, '')) || 0;
        let roadsideAssistanceFee = parseFloat($('#roadside_assistance_fee').val().replace(/[^0-9.-]/g, '')) || 0;
        let sr22 = parseFloat($('#sr22').val().replace(/[^0-9.-]/g, '')) || 0;
        let otherFee = parseFloat($('#other_fee').val().replace(/[^0-9.-]/g, '')) || 0;

        let totalPremium = basePremium + stateFeeMVCA + policyFee + roadsideAssistanceFee + sr22 + otherFee;

        $('#total_premium').val(totalPremium.toFixed(2)); // Set total with two decimal places
    }

    // Trigger updateTotalPremium function when any of the relevant fields change
    $('#base_premium, #state_fee_mvca, #policy_fee, #roadside_assistance_fee, #sr22, #other_fee').on('input', function() {
        updateTotalPremium();
    });

    function updateAnnualPremium() {
        let totalPremium = parseFloat($('#total_premium').val().replace(/[^0-9.-]/g, '')) || 0;
        let termMonths = parseFloat($('#term_months').val()) || 1; // Default to 1 if not selected

        let annualPremium = totalPremium * termMonths;

        $('#annual_premium').val(annualPremium.toFixed(2)); // Set annual premium with two decimal places
    }

    // Trigger updateAnnualPremium function when Total Premium or Term value changes
    $('#total_premium, #term_months, #state_fee_mvca, #policy_fee, #roadside_assistance_fee, #sr22, #other_fee').on('input change', function() {
        updateAnnualPremium();
    });


    });
    </script>
    

@endsection
