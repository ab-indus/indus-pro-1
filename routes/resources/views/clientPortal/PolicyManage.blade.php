@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
    <form action="{{ route('ClientPortal.MainFormStore') }}" method="POST" enctype="multipart/form-data">
    @csrf

 

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

     {{--option card  --}}
    <div class="card my-2" id="cloneILPContainer">
        <div class="card-body">

        <h4 class="card-title">Client Portal </h4>
         {{-- <p class="card-description"> Info</p> --}}

         {{-- <input type="text" hidden id="type_of_customer" name="type_of_customer" >

         <input type="text" hidden name="phone123" id="phone123">

         <input type="text" hidden value="{{ Auth::user()->name }}" name="agentName" id="agentName"> --}}


            <div class="row">


                <div class="col-md-4 mb-4">
                    <div class="form-group">
                        <label for="FirstName">First Name</label>
                        <input type="text"  class="form-control" id="FirstName" name="FirstName" value="{{ $data->first_name }}">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="form-group">
                        <label for="LastName">Last Name</label>
                        <input type="text" class="form-control" id="LastName" name="LastName" value="{{ $data->last_name }}">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="text" class="form-control" id="Phone" name="Phone" value="{{ $data->phone }}">
                    </div>
                </div>

            </div>

            <div class="row">
                {{-- <p class="card-description">Policy Info </p> --}}


                <div class="col-md-4 mb-4">
                    <label for="carrier">Carrier</label>
                    <input type="text" class="form-control" id="carrier1" name="carrier1" value="{{ $data->carrier }}">
                    
                    {{-- <select class="form-select" id="carrier1" name="carrier1">
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
                    </select> --}}
                </div>
                <div class="col-md-4 mb-4">
                    <label for="policy_number">Policy Number</label>
                    <input type="text" class="form-control" id="policy_number1" name="policy_number1" value="{{ $data->policy_number }}">
                </div>
            
           

            </div>

            <script>
                $(document).ready(function() {
                // First name auto-fill
                $('#FirstName').on('input', function() {
                    $('#first_name2').val($(this).val());
                });

                // Last name auto-fill
                $('#LastName').on('input', function() {
                    $('#last_name2').val($(this).val());
                });

                // Phone auto-fill
                $('#Phone').on('input', function() {
                    $('#phone22').val($(this).val());
                });

                // Carrier auto-fill for carrier1 to carrier2
                $('#carrier1').on('change', function() {
                    $('#carrier2').val($(this).val());
                    $('#carrier3').val($(this).val()); // Additional auto-fill for carrier3
                });

                // Policy number auto-fill
                $('#policy_number1').on('input', function() {
                    $('#policy_number2').val($(this).val());
                    $('#policy_number3').val($(this).val()); // Additional auto-fill for policy_number3
                });
            });

            </script>

            


         <div class="row">
            <div class="col-md-12">
                {{-- <label class="form-label">Options</label> --}}
                <!-- d-flex makes it horizontally aligned, flex-wrap ensures wrapping on small screens -->
                <div class="d-flex flex-wrap">
                    <div class="form-check me-3 mb-2">
                        <input class="form-check-input" type="radio" name="options" id="generalQuestion" required value="General Question">
                        <label class="form-check-label" for="generalQuestion">General Question</label>
                    </div>
                    <div class="form-check me-3 mb-2">
                        <input class="form-check-input" type="radio" name="options" id="MakePayment" required value="Make Payment">
                        <label class="form-check-label" for="newLead">Make Payment</label>
                    </div>
                    <div class="form-check me-3 mb-2">
                        <input class="form-check-input" type="radio" name="options" id="RequestChange" required value="Request Change">
                        <label class="form-check-label" for="addNewPolicy">Request Change</label>
                    </div>
                 
                </div>
            </div>
         </div>

    </div></div>
    <input type="hidden" value="{{$id}}" id="hiddenPolicyId" name="policy_id">


  

  

    {{--General Question  --}}
    <div id="generalQuestionDiv" style="display: none">

        <div class="card my-2">
        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-4">
                    <label for="notes" class="form-label">Question</label>
                    <textarea class="form-control" id="notes_gneral" name="notes_gneral" rows="5" placeholder="Enter notes"></textarea>
                </div>

            </div>


         </div></div>

    </div>
    {{--General Question div end --}}

{{-- make change div start --}}
<div id="makeChangeDiv" style="display: none">

        <div class="card my-2">
            <div class="card-body">
            <h4 style="display: none">if make Change</h4>
            <input type="text" hidden id="completed" name="completed" value="Pending">


            <div class="row">
                <p class="card-description">Policy Info </p>


                <div class="col-md-4 mb-4">
                    <label for="carrier">Carrier</label>
                    <input type="text" class="form-control" id="carrier3" name="carrier3" value="{{ $data->carrier }}">

                    {{-- <select class="form-select" id="carrier3" name="carrier3">
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
                    </select> --}}
                </div>
                <div class="col-md-4 mb-4">
                    <label for="policy_number">Policy Number</label>
                    <input type="text" class="form-control" id="policy_number3" name="policy_number3" value="{{ $data->policy_number }}">
                </div>
            
                <!-- Fourth Row -->
                <div class="col-md-4 mb-4">
                    <label for="type_of_policy">Type of Policy</label>
                    <input type="text" class="form-control" id="type_of_policy3" name="type_of_policy3" value="{{ $data->type_of_policy }}">

                    {{-- <select class="form-select" id="type_of_policy3" name="type_of_policy3">
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
    
                   
                    </select> --}}
                </div>

            </div>


         </div></div>

   
            <!-- Driver Actions Section -->
        <div class="card my-2">
            <div class="card-body">
            
                            <div class="row">
                                <div class="col-12">
                                    <label>Drivers </label>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="driver_action" id="delete_driver" value="delete_driver">
                                                <label class="form-check-label" for="delete_driver">Delete Driver</label>
                                            </div>
                                        </div>
            
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="driver_action" id="add_driver" value="add_driver">
                                                <label class="form-check-label" for="add_driver">Add Driver</label>
                                            </div>
                                        </div>
            
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="driver_action" id="exclude_driver" value="exclude_driver">
                                                <label class="form-check-label" for="exclude_driver">Exclude Driver</label>
                                            </div>
                                        </div>
            
                                    </div>
                                </div>
                            </div>
            
                            <br>
            
                            <div class="row" id="driverDiv" style="display: none">
            
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="driver_name">Driver Name</label>
                                        <input type="text" class="form-control" id="driver_name" name="driver_name3" placeholder="Enter Driver Name">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="dl">DL</label>
                                        <input type="text" class="form-control" id="dl" name="dl3" placeholder="Enter DL">
                                    </div>
                                </div>
            
                            </div>
            
                            <script>
                                $(document).ready(function () {
                                    // Handle change event on the radio buttons for driver actions
                                    $('input[name="driver_action"]').on('change', function () {
                                        // Show the driverDiv when any of the radio buttons is selected
                                        $('#driverDiv').show();
                                    });
                                });
            
                            </script>
            
            </div>
        </div>

    
           <!-- Vehicle Actions Section -->
           <div class="card my-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="vehicle_option" id="add_vehicle" value="add">
                            <label class="form-check-label" for="add_vehicle">Add Vehicle</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="vehicle_option" id="delete_vehicle" value="delete">
                            <label class="form-check-label" for="delete_vehicle">Delete Vehicle</label>
                        </div>
                    </div>

                </div>
                <br>

                <div id="VehicleDiv" style="display: none">


                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="vin">VIN</label>
                            <input type="text" class="form-control" id="vin" name="vin3" placeholder="Enter VIN">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="year">Year</label>
                            {{-- <input type="date" class="form-control" id="year" name="year"> --}}
                            <select class="form-control" name="year3" id="year">
                                @for ($year = 2000; $year <= 2024; $year++)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                            </select>
                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="make">Make</label>
                            <input type="text" class="form-control" id="make" name="make3" placeholder="Enter Make">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" class="form-control" id="model" name="model3" placeholder="Enter Model">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="change_option" value="liability"> Liability
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="change_option" value="comp_collision"> Comp/Collision
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="change_option" value="AddLien"> Add Lien
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="change_option" value="RemoveLien"> Remove Lien
                            </label>
                        </div>
                    </div>
                </div>
                


                </div>


                <script>
                    $(document).ready(function () {
                        // Handle change event on the radio buttons
                        $('input[name="vehicle_option"]').on('change', function () {
                            // Check if any of the radio buttons is selected
                            if ($('input[name="vehicle_option"]:checked').length > 0) {
                                // Show the vehicle div
                                $('#VehicleDiv').show();
                            } else {
                                // Hide the vehicle div if no option is selected (optional case)
                                $('#VehicleDiv').hide();
                            }
                        });
                    });
                </script>


            </div>

        </div>

        <div class="card my-2">
            <div class="card-body">


                <div class="row">
                    <!-- Number Field for New Phone Number -->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="new_phone_checkbox">
                            <label class="form-check-label" for="new_phone_checkbox">Update Phone Number</label>
                        </div>
                        <div class="form-group" id="phone_input_group" style="display: none;">
                            <label for="new_phone_number">New Phone Number</label>
                            <input type="number" class="form-control" id="new_phone_number" name="new_phone_number3" placeholder="Enter New Phone Number">
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="new_email_checkbox">
                            <label class="form-check-label" for="new_email_checkbox">Update Email</label>
                        </div>
                        <div class="form-group" id="email_input_group" style="display: none;">
                            <label for="new_email">New Email</label>
                            <input type="email" class="form-control" id="new_email" name="new_email3" placeholder="Enter New Email">
                        </div>
                    </div>
                    

                </div>

                <script>
                    $(document).ready(function () {
                        // Toggle phone input based on checkbox
                        $('#new_phone_checkbox').on('change', function () {
                            if ($(this).is(':checked')) {
                                $('#phone_input_group').show();
                            } else {
                                $('#phone_input_group').hide();
                            }
                        });

                        // Toggle email input based on checkbox
                        $('#new_email_checkbox').on('change', function () {
                            if ($(this).is(':checked')) {
                                $('#email_input_group').show();
                            } else {
                                $('#email_input_group').hide();
                            }
                        });
                    });

                </script>
                
                <div class="row">
                    <!-- Text Field for New Address -->

                    {{-- <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="new_address">New Address</label>
                            <input type="text" class="form-control" id="new_address" name="new_address" placeholder="Enter New Address">
                        </div>
                    </div> --}}


                    <div class="col-sm-12 col-md-6">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="new_addressBox">
                            <label class="form-check-label" for="new_addressBox">New Address</label>
                        </div>

                        <div class="form-group" id="new_address" style="display: none;">
                            <label for="new_address">New Address</label>
                            <input type="text" class="form-control" id="new_address" name="new_address3" placeholder="Enter New Address">
                        </div>
                    </div>


                    <script>
                        $(document).ready(function () {
                         
    
                            // Toggle email input based on checkbox
                            $('#new_addressBox').on('change', function () {
                                if ($(this).is(':checked')) {
                                    $('#new_address').show();
                                } else {
                                    $('#new_address').hide();
                                }
                            });
                        });
    
                    </script>

                </div>


            </div>
        </div>



</div>
{{-- make change div end --}}


    {{-- make payment div end --}}
    <div id="makepaymentDiv" style="display: none">

        <div class="card my-2">
            <div class="card-body">
            <h4 style="display: none">if make payment</h4>

            <div class="row">
                <!-- First Column -->
            
    
       
    
                <div class="col-md-4 mb-4">
                    <label for="last_name2">Last Name</label>
                    <input type="text" class="form-control" id="last_name2" name="last_name2" value="{{ $data->last_name }}">
                </div>
                
                <div class="col-md-4 mb-4">
                    <label for="first_name2">First Name</label>
                    <input type="text" class="form-control" id="first_name2" name="first_name2" value="{{ $data->first_name }}">
                </div>
    
                <!-- Third Row -->
                <div class="col-md-4 mb-4">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name2" name="middle_name2" value="{{ $data->middle_name }}">
                </div>
    
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <label for="preferred_name2">Preferred Name</label>
                        <input type="text" class="form-control" id="preferred_name2" name="preferred_name2" value="{{ $data->preferred_name }}">
                    </div>

                </div>
                
            
    
            </div>



        </div></div>

        <div class="card my-2">
            <div class="card-body">

                <div class="row">
                    <p class="card-description">Policy Info </p>
    
    
                    <div class="col-md-4 mb-4">
                        <label for="carrier2">Carrier</label>
                        <input type="text" class="form-control" id="carrier2" name="carrier2" value="{{ $data->carrier }}">

                        {{-- <select class="form-select" id="carrier2" name="carrier2">
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
                        </select> --}}
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="policy_number2">Policy Number</label>
                        <input type="text" class="form-control" id="policy_number2" name="policy_number2" value="{{ $data->policy_number }}">
                    </div>
                
                    <!-- Fourth Row -->
                    <div class="col-md-4 mb-4">
                        <label for="type_of_policy">Type of Policy</label>
                        <input type="text" class="form-control" id="type_of_policy2" name="type_of_policy2" value="{{ $data->type_of_policy }}">

                        {{-- <select class="form-select" id="type_of_policy2" name="type_of_policy2">
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
        
                       
                        </select> --}}
                    </div>
    
                </div>


                <p class="card-description">Due Date   </p>
                <div class="row">

                    <div class="col-md-4 mb-4">
                        <label for="due_date2">Due Date</label>
                        <input type="date" class="form-control" id="due_date2" name="due_date2" value="{{ $data->due_date }}">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="amount_due2">Amount Due</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="amount_due2" name="amount_due2" value="{{ $data->amount_due }}">
                    </div>
                    
                

                </div>


        </div></div>

        <div class="card my-2">
            <div class="card-body">


                <p class="card-description">Paid Today</p>
                <div class="row">        
        
                     <!-- First Row -->
                    <div class="col-md-4 mb-4">
                        <label for="amount_paid_cc2">Amount Paid CC</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="amount_paid_cc2" name="amount_paid_cc2" value="{{ old('amount_paid_cc2') }}">
                        <span class="text-danger" id="amount_paid_cc_error2"></span>
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <label for="amount_paid_cash2">Amount Paid Cash</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="amount_paid_cash2" name="amount_paid_cash2" value="{{ old('amount_paid_cash2') }}">
                        <span class="text-danger" id="amount_paid_cash_error2"></span>
                    </div>
        
                    <!-- Second Row -->
                    <div class="col-md-4 mb-4">
                        <label for="direct_pay">Direct Pay</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="direct_pay2" name="direct_pay2" value="{{ old('direct_pay2') }}">
                        <span class="text-danger" id="direct_pay_error2"></span>
                    </div>
        
        
                </div>
        
        </div></div>



        <div class="card my-2">
            <div class="card-body">

                <p class="card-description">Card Info</p>
        
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="name_on_card">Name on Card</label>
                        <input type="text" class="form-control" id="name_on_card2" name="name_on_card2" value="{{ $data->name_on_card }}">
                    </div>
        
                    <div class="col-md-6 mb-5">
                        <label for="debit_card2">Credit Card Section</label>
                        <input type="text" class="form-control" id="debit_card2" name="debit_card2" value="{{ $data->debit_card }}">
                        {{-- <select class="form-select" id="debit_card2" name="debit_card2">
                            <option value="">Select Card ⬇️</option>
                            <option value="Master Debit">Master Debit </option>
                            <option value="Master Credit">Master Credit </option>

                            <option value="Visa Debit">Visa Debit </option>
                            <option value="Visa Credit">Visa Credit </option>

                            <option value="Discover">Discover</option>
                            <option value="American Express">American Express</option>
        
                        </select> --}}
                    </div>
                    
                </div>
        
                <div class="row">
                    <p class="card-description">Card Number</p>
                    <div class="col-md-3 mb-4">
                        <label for="number_1st_42">1st 4 Digits</label>
                        <input type="number" class="form-control" id="number_1st_42" name="number_1st_42" value="{{ $data->number_1st_4 }}" max="9999">
                        <span class="text-danger" id="number_1st_4_error2"></span>
                    </div>
        
                    <div class="col-md-3 mb-4">
                        <label for="number_2nd_42">2nd 4 Digits</label>
                        <input type="number" class="form-control" id="number_2nd_42" name="number_2nd_42" value="{{ $data->number_2nd_4 }}" max="9999">
                        <span class="text-danger" id="number_2nd_4_error2"></span>
                    </div>
        
                    <div class="col-md-3 mb-4">
                        <label for="number_3rd_42">3rd 4 Digits</label>
                        <input type="number" class="form-control" id="number_3rd_42" name="number_3rd_42" value="{{ $data->number_3rd_4 }}" max="9999">
                        <span class="text-danger" id="number_3rd_4_error2"></span>
                    </div>
        
                    <div class="col-md-3 mb-4">
                        <label for="number_4th_42">Last 4 Digits</label>
                        <input type="number" class="form-control" id="number_4th_42" name="number_4th_42" value="{{ $data->number_4th_4 }}" max="9999">
                        <span class="text-danger" id="number_4th_4_error2"></span>
                    </div>
        
                </div>
        
                <div class="row">
        
                    <div class="col-md-3 mb-4">
                        <label for="expiration_12">Expiration Month</label>
                        <input type="text" class="form-control" id="expiration_12" name="expiration_12" value="{{ $data->expiration_1}}">
                        {{-- <select class="form-control" id="expiration_12" name="expiration_12">
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
                        <label for="expiration_22">Expiration Year</label>
                        <input type="number" class="form-control" id="expiration_2" name="expiration_2" value="{{ $data->expiration_2 }}">
                        {{-- <select class="form-control" id="expiration_22" name="expiration_22">
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
                        <label for="billing_zip2">Billing Zip</label>
                        <input type="number" class="form-control" id="billing_zip2" name="billing_zip2" value="{{ $data->billing_zip }}" max="99999">
                        <span class="text-danger" id="billing_zip2"></span>
                    </div>
                    
                    
                    <!-- Fourth Row -->
                    <div class="col-md-3 mb-4">
                        <label for="cvc">CVC</label>
                        <input type="text" class="form-control" maxlength="3" max="999" id="cvc2" name="cvc2" value="{{ $data->cvc }}">
                    </div>
          
        
                </div>
        
        </div></div>

        <div class="card my-2">
            <div class="card-body">

                <p class="card-description">Client Info</p>
    
        
                <div class="row">
                    <!-- First Row -->
                    <div class="col-md-4 mb-4">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}">
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone22" name="phone22" value="{{ $data->phone }}">
                        <span id="phone-error" style="color: red; display: none;">Please enter a valid phone number (e.g., 123-123-1234).</span>
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" value="{{ $data->dob }}">
                    </div>
                
                    <!-- Second Row -->
                    <div class="col-md-4 mb-4">
                        <label for="ssn">SSN</label>
                        <input type="text" class="form-control" id="ssn" name="ssn" value="{{ $data->ssn }}">
                        <span id="ssn-error" style="color: red; display: none;">Please enter a valid SSN (e.g., 123-12-1234).</span>
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" name="zip" value="{{ $data->zip }}">
                        <span id="zip-error" style="color: red; display: none;">Please enter a valid ZIP code (e.g., 12345).</span>
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <label for="type_of_id">Type of ID</label>
                        <input type="text" class="form-control" id="type_of_id" name="type_of_id" value="{{ $data->type_of_id }}">
                        {{-- <select class="form-select" id="type_of_id" name="type_of_id">
                            <option value="">Select Type of ID ⬇️</option>
                            <option value="TX ID">TX ID</option>
                            <option value="TX DL">TX DL</option>
                            <option value="Out of state ID">Out of state ID</option>
                            <option value="Out of state DL">Out of state DL</option>
                            <option value="Matricular">Matricular</option>
                            <option value="Passport">Passport</option>
                            <option value="Foreign ID">Foreign ID</option>
                            <option value="Foreign DL ">Foreign DL </option>
                        </select> --}}
                    </div>
                
                    <!-- Third Row -->
                    <div class="col-md-4 mb-4">
                        <label for="dl_id">DL / ID #</label>
                        <input type="text" class="form-control" id="dl_id" name="dl_id" value="{{ $data->dl_id }}">
                    </div>
                    
        
                </div>
        
        </div></div>

        <div class="card my-2">
            <div class="card-body">

                <p class="card-description">Items </p>
    
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="insuredItems" class="form-label">Insured Items</label>
                        <input type="number" value="{{$data->insured_items}}" name="insured_items" class="form-control" id="insuredItems" placeholder="Enter number">
                        <span class="text-danger" id="insuredItemsError" style="display: none;">Please enter a single digit.</span>
                    </div>
                    <div class="col-md-4">
                        <label for="insuredDrivers" class="form-label">Insured Drivers</label>
                        <input type="number" value="{{$data->insured_drivers}}" name="insured_drivers" class="form-control" id="insuredDrivers" placeholder="Enter number">
                        <span class="text-danger" id="insuredDriversError" style="display: none;">Please enter a single digit.</span>
                    </div>
                    <div class="col-md-4">
                        <label for="excludedDrivers" class="form-label">Excluded Drivers</label>
                        <input type="number" value="{{$data->excluded_drivers}}" name="excluded_drivers" class="form-control" id="excludedDrivers" placeholder="Enter number">
                        <span class="text-danger" id="excludedDriversError" style="display: none;">Please enter a single digit.</span>
                    </div>
                </div>
                
                <!-- Second row: Lien Checkbox -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="lien" class="form-label">Lien</label>
                        <input type="number" value="{{$data->lien}}" name="lien" class="form-control" id="lien" placeholder="Enter number">
                        <span class="text-danger" id="lienError" style="display: none;">Please enter a single digit.</span>
                    </div>
                </div>

                <p class="card-description">Term </p>
                <div class="row mb-3">

                    <div class="col-md-4">
                        <label for="effectiveDate" class="form-label">Effective Date</label>
                        <input type="date" value="{{$data->effective_date}}" name="effective_date" class="form-control" id="effectiveDate">
                        <span class="text-danger" id="effectiveDateError" style="display: none;">Please enter a valid date.</span>
                    </div>
                    <div class="col-md-4">
                        <label for="expirationDate" class="form-label">Expiration Date</label>
                        <input type="date" value="{{$data->expiration_date}}" name="expiration_date" class="form-control" id="expirationDate">
                        <span class="text-danger" id="expirationDateError" style="display: none;">Please enter a valid date.</span>
                    </div>

                    <div class="col-md-4">
                        <label for="term" class="form-label">Term (Months)</label>
                        <input type="text" value="{{$data->term_months}}" name="term_months" class="form-control" id="term_months">

                        {{-- <select class="form-select" id="term_months" name="term_months">
                            <option value="">Select Term ⬇️</option>
                            <option value="12">Monthly</option>
                            <option value="4">Quarterly</option>
                            <option value="2">Semi-Annual</option>
                            <option value="1">Annual</option>
            
                        </select> --}}
                    </div>

                </div>
        
        </div></div>

        <div class="card my-2">
            <div class="card-body">

                <p class="card-description">Policy Premium </p>
        
                <div class="row">
                    <!-- First Row -->
                    <div class="col-md-4 mb-4">
                        <label for="base_premium">Base Premium</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="base_premium" name="base_premium" value="{{ $data->base_premium }}">
                        <span class="text-danger" id="base_premium_error"></span>
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <label for="state_fee_mvca">State Fee (MVCA)</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="state_fee_mvca" name="state_fee_mvca" value="{{ $data->state_fee_mvca }}">
                        <span class="text-danger" id="state_fee_mvca_error"></span>
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <label for="policy_fee">Policy Fee</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="policy_fee" name="policy_fee" value="{{ $data->policy_fee }}">
                        <span class="text-danger" id="policy_fee_error"></span>
                    </div>
        
                    <!-- Second Row -->
                    <div class="col-md-4 mb-4">
                        <label for="roadside_assistance_fee">Roadside Assistance Fee</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="roadside_assistance_fee" name="roadside_assistance_fee" value="{{ $data->roadside_assistance_fee }}">
                        <span class="text-danger" id="roadside_assistance_fee_error"></span>
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <label for="sr22">SR22</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="sr22" name="sr22" value="{{ $data->sr22 }}">
                        <span class="text-danger" id="sr22_error"></span>
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <label for="other_fee">Other Fee (if any)</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="other_fee" name="other_fee" value="{{ $data->other_fee }}">
                        <span class="text-danger" id="other_fee_error"></span>
                    </div>
        
                
                    <!-- Third Row -->
                    <div class="col-md-4 mb-4">
                        <label for="total_premium">Total Premium</label>
                        <input type="text" class="form-control" id="total_premium" name="total_premium" value="{{ $data->total_premium }}">
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <label for="annual_premium">Annual Premium</label>
                        <input type="number" class="form-control" id="annual_premium" name="annual_premium" value="{{ $data->annual_premium }}">
                    </div>
        
                </div>

        
        </div></div>

  




    </div>
    {{-- make payment div end --}}



    <button type="submit" class="btn btn-primary mr-2" >Submit  </button> 

</form>
</div>


{{-- show main cards --}}

<script>
    $(document).ready(function() {
    $('input[name="options"]').on('change', function() {
        if ($('#generalQuestion').is(':checked')) {
            $('#generalQuestionDiv').show();
        } else {
            $('#generalQuestionDiv').hide();
        }
        
        if ($('#RequestChange').is(':checked')) {
            $('#makeChangeDiv').show();
            // $('#searchPolicyDiv').show();

        } else {
            $('#makeChangeDiv').hide();

        }

        if ($('#MakePayment').is(':checked')) {
            $('#makepaymentDiv').show();

        } else {
            $('#makepaymentDiv').hide();

        }
        
       

   


    });
});

</script>

@endsection