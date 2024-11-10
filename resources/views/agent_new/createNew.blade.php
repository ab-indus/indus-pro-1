@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
    <form id="formId" action="{{ route('AgentNew.storeNew') }}" method="POST" enctype="multipart/form-data">
    @csrf

 

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="card my-2" id="cloneILPContainer">
            <div class="card-body">

        <h4 class="card-title">Agent / CSR Portal </h4>
         <p class="card-description">Agent / CSR  Info</p>

         <input type="text" hidden id="type_of_customer" name="type_of_customer" >

         <input type="text" hidden name="phone123" id="phone123">

         <input type="text" hidden value="{{ Auth::user()->name }}" name="agentName" id="agentName">
         <div class="row">

            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label>Medium of Contact</label>
                    <div id="medium_of_contact">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="contact_call" name="medium_of_contact" value="Call">
                            <label class="form-check-label" for="contact_call">
                                Call
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="contact_text" name="medium_of_contact" value="Text">
                            <label class="form-check-label" for="contact_text">
                                Text
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="contact_office" name="medium_of_contact" value="Office">
                            <label class="form-check-label" for="contact_office">
                                Office
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="contact_email_online" name="medium_of_contact" value="Email-Online">
                            <label class="form-check-label" for="contact_email_online">
                                Email-Online
                            </label>
                        </div>
                    </div>
                </div>
            </div> --}}

             <div class="col-md-12">
                    <label class="form-label">Medium of Contact</label>
                    <div class="d-flex flex-wrap">
                        <div class="form-check me-3 mb-2">
                            <input required class="form-check-input" type="radio" name="medium_of_contact" id="contact_medium_call" value="Call">
                            <label class="form-check-label" for="contact_medium_call">Call</label>
                        </div>
                        <div class="form-check me-3 mb-2">
                            <input class="form-check-input" type="radio" name="medium_of_contact" id="contact_medium_text" value="Text">
                            <label class="form-check-label" for="contact_medium_text">Text</label>
                        </div>
                        <div class="form-check me-3 mb-2">
                            <input class="form-check-input" type="radio" name="medium_of_contact" id="contact_medium_email" value="Email">
                            <label class="form-check-label" for="contact_medium_email">Email</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="medium_of_contact" id="contact_medium_office" value="Office">
                            <label class="form-check-label" for="contact_medium_office">Office</label>
                        </div>
                    </div>
                </div>

         </div>

         <br>
         <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="LastName">Last Name</label>
                    <input type="text" class="form-control" id="LastName" name="LastName" value="{{ old('LastName') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="FirstName">First Name</label>
                    <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{ old('FirstName') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="Phone">Phone</label>
                    <input type="number" class="form-control" id="Phone" name="Phone" value="{{ old('Phone') }}">
                </div>
            </div>

         </div>

         <script>
            $(document).ready(function() {
                // Listen for changes in the #LastName input field
                $('#LastName').on('input', function() {
                    // Get the value of the #LastName input field
                    var lastNameValue = $(this).val();
                    // Update the value of the #last_name input field
                    $('#last_name').val(lastNameValue);
                    $('#last_name2').val(lastNameValue);
                    $('#last_name3').val(lastNameValue);
                });

                $('#FirstName').on('input', function() {
                    // Get the value of the #LastName input field
                    var FirstNameValue = $(this).val();
                    // Update the value of the #last_name input field
                    $('#first_name').val(FirstNameValue);
                    $('#first_name2').val(FirstNameValue);
                    $('#first_name3').val(FirstNameValue);
                });


            });

         </script>


         <div class="row mb-3">
            <div class="col-md-12">
                <label class="form-label">Options</label>
                <!-- d-flex makes it horizontally aligned, flex-wrap ensures wrapping on small screens -->
                <div class="d-flex flex-wrap">
                    <div class="form-check me-3 mb-2">
                        <input class="form-check-input" type="radio" name="options" id="generalQuestion" value="General Question">
                        <label class="form-check-label" for="generalQuestion">General Question</label>
                    </div>
                    <div class="form-check me-3 mb-2">
                        <input class="form-check-input" type="radio" name="options" id="newLead" value="New Lead">
                        <label class="form-check-label" for="newLead">New Lead</label>
                    </div>
                    <div class="form-check me-3 mb-2">
                        <input class="form-check-input" type="radio" name="options" id="addNewPolicy" value="Add New Policy">
                        <label class="form-check-label" for="addNewPolicy">Add New Policy</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="options" id="existingClient" value="Existing Client">
                        <label class="form-check-label" for="existingClient">Existing Client</label>
                    </div>
                </div>
            </div>
        </div>
        

        

          




    </div></div>

    <div id="generalQuestionDiv" style="display: none">

        <div class="card my-2">
        <div class="card-body">

            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">

                  

                    {{-- <div class="mb-3">
                        <label for="agent_name" class="form-label">Agent Name</label>
                        <input type="text" class="form-control" id="agent_name_gneral" name="agent_name_gneral" placeholder="Enter agent name" value="{{ Auth::user()->name }}">
                    </div> --}}
                    
                    
                    {{-- <div class="mb-3">
                        <label for="contact_medium" class="form-label">Medium of Contact</label>
                        <input type="text" class="form-control" id="contact_medium_gneral" name="contact_medium_gneral" placeholder="Enter contact medium">
                    </div> --}}
            
                    {{-- <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name_gneral" name="last_name_gneral" placeholder="Enter last name">
                    </div> --}}

                </div>
            
                <!-- Right Column -->
                <div class="col-md-6">

                    {{-- <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name_gneral" name="first_name_gneral" placeholder="Enter first name">
                    </div> --}}
            
                    {{-- <div class="mb-3">
                        <label for="contact_number" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="contact_number_gneral" name="contact_number_gneral" placeholder="Enter phone number">
                    </div> --}}
            
                   

                </div>
            </div>

            <div class="row mb-3">

                {{-- <div class="col-md-12">
                    <label class="form-label">Medium of Contact</label>
                    <div class="d-flex flex-wrap">
                        <div class="form-check me-3 mb-2">
                            <input class="form-check-input" type="radio" name="contact_medium_gneral" id="contact_medium_call" value="Call">
                            <label class="form-check-label" for="contact_medium_call">Call</label>
                        </div>
                        <div class="form-check me-3 mb-2">
                            <input class="form-check-input" type="radio" name="contact_medium_gneral" id="contact_medium_text" value="Text">
                            <label class="form-check-label" for="contact_medium_text">Text</label>
                        </div>
                        <div class="form-check me-3 mb-2">
                            <input class="form-check-input" type="radio" name="contact_medium_gneral" id="contact_medium_email" value="Email">
                            <label class="form-check-label" for="contact_medium_email">Email</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="contact_medium_gneral" id="contact_medium_office" value="Office">
                            <label class="form-check-label" for="contact_medium_office">Office</label>
                        </div>
                    </div>
                </div> --}}

            </div>
            

            <div class="row">

                {{-- <div class="col-md-6 mb-4">
                    <label for="notes">Drop Your Question</label>
                    <textarea class="form-control" id="question_gneral" name="question_gneral" rows="3">{{ old('question_gneral') }}</textarea>
                </div> --}}

                <div class="col-md-6 mb-4">
                    <label for="notes" class="form-label">Notes</label>
                    <textarea class="form-control" id="notes_gneral" name="notes_gneral" rows="3" placeholder="Enter notes"></textarea>
                </div>

            </div>


     
            


         </div></div>

    </div>



    <div id="newLeadDiv" style="display: none">

        <div class="card my-2">
            <div class="card-body">


                <div class="row mb-3">
                    <div class="col-md-12">
                        {{-- <label class="form-label">Options</label> --}}
                        <div class="d-flex">

                            <div class="form-check me-3">
                                <input class="form-check-input" type="checkbox" id="rateNow" name="rateNow" value="Rate Now" onclick="toggleCheckboxes(this, 'rateLater')">
                                <label class="form-check-label" for="rateNow">Rate Now</label>
                            </div>
                            
                            <script>
                                // Add an event listener for form submission
                                document.querySelector('form').addEventListener('submit', function(event) {
                                    var rateNowCheckbox = document.getElementById('rateNow');
                                    
                                    // Check if the "Rate Now" checkbox is checked
                                    if (rateNowCheckbox.checked) {
                                        // Open the link in a new tab
                                        window.open('https://www.turborater.com/login/', '_blank');
                                    }
                                });
                            </script>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rateLater" name="rateLater" value="Rate Later"  onclick="toggleCheckboxes(this, 'rateNow')">
                                <label class="form-check-label" for="rateLater">Rate Later</label>
                            </div>

                            <script>
                                function toggleCheckboxes(clickedCheckbox, otherCheckboxId) {
                                    if (clickedCheckbox.checked) {
                                        document.getElementById(otherCheckboxId).checked = false;
                                    }
                                }
                            </script>

                        </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="dlNumber" class="form-label">DL #</label>
                        <input type="text" class="form-control" id="dlNumber_lead" name="dlNumber_lead" placeholder="Enter DL #">
                    </div>
                    <div class="col-md-6">
                        <label for="dob" class="form-label">DOB</label>
                        <input type="date" class="form-control" id="dob_lead" name="dob_lead">
                    </div>
                </div>
                

    
        </div></div>

    </div>



<div id="searchPolicyDiv" style="display: none">

    <div class="card my-2">
            <div class="card-body">

                
                <div class="row">
                    <!-- Existing Client Search Field -->
                    <div class="col-md-6 mb-3">
                        <label for="policySearch" class="form-label">Search Existing Policy </label>
                        <input type="text" class="form-control" id="policySearch" placeholder="Search client">
                        
                        <!-- Policy Dropdown Table -->
                        <table class="table mt-2" id="policyDropdown">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>DOB</th>
                                    <th>Carrier</th>
                                    <th>Policy Number</th>
                                    <th>Zip Code</th>
                                    <th>My notes</th>

                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="disabled">
                                    <td colspan="7">Start typing to search policies...</td>
                                </tr>
                                @foreach($policy as $pol)
                                    <tr class="policy-item" data-value="{{ $pol->id }}">
                                        <input type="text" hidden name="policy_select_value" id="policy_select_value" value="{{$pol->first_name }} {{ $pol->last_name }}">
                                        <td>{{ $pol->status }}</td>
                                        <td class="first-name">{{ $pol->first_name }}</td>
                                        <td class="last-name">{{ $pol->last_name }}</td>
                                        <td>{{ $pol->dob }}</td>
                                        <td>{{ $pol->carrier }}</td>
                                        <td>{{ $pol->policy_number }}</td>
                                        <td>{{ $pol->zip_code }}</td>
                                        <td>{{ $pol->notes }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                
                    <input type="hidden" id="hiddenPolicyId" name="policy_id">
                
                    <style>
                        #policyDropdown {
                            display: none;
                            max-height: 200px;
                            overflow-y: auto;
                            cursor: pointer;
                        }
                        .policy-item:hover {
                            background-color: #f1f1f1;
                        }
                        /* Optional: Style to make the table header sticky */
                        #policyDropdown thead {
                            position: sticky;
                            top: 0;
                            background-color: #fff;
                        }
                    </style>
                </div>
                

       

    </div></div>


</div>




{{-- new policy --}}
    <div id="newpolicyDiv" style="display: none">

        <div class="card my-2">
            <div class="card-body">

               

        <div class="row">
            <div class="col-md-4 mb-4">
                {{-- <label for="autopay">Autopay</label> --}}
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="autopay" name="autopay">
                    <label class="form-check-label" for="autopay">Autopay </label>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                {{-- <label for="autopay">Autopay</label> --}}
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="activeBox" name="activeBox">
                    <label class="form-check-label" for="Active">Active</label>
                </div>
            </div>


        </div>

        <div class="row">

            <p class="card-description">Client Already Register ?</p>

            <div class="col-md-12 d-flex">
                <div class="form-check me-4">
                    <input type="radio" class="form-check-input" id="clientRegister" required name="clientRegister" value="Yes">
                    <label class="form-check-label" for="clientRegister">Yes</label>
                </div>

                <div class="form-check me-4">
                    <input type="radio" class="form-check-input" id="clientRegister" required name="clientRegister" value="Create Client User">
                    <label class="form-check-label" for="clientRegister">Create Client User</label>
                </div>
            
            </div>

        </div>
            <br>
            <div class="row" id="registered" style="display: none">

                <div class="col-md-4 mb-4">
                    <label for="policy_id">Select Client Who Can Access This Policy</label>
                    <select class="form-select" id="user_id" name="user_id">
                        <option value="">Select Client User ⬇️</option>
                        @foreach($user as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            {{-- <div class="row" id="NotRegistered" style="display: none">
                <div class="alert alert-info mt-3" role="alert" style="font-weight: bold;">
                    <p class="">
                        Need to register this client? Fill in the policy details now and complete the client registration later by visiting the 
                        <a href="{{ url('Client/Register') }}" target="_blank" style="text-decoration: underline;">Client Registration page</a> in a new tab.
                    </p>
                </div>
                
            </div> --}}

            <script>
                $(document).ready(function() {
                    $('input[name="clientRegister"]').on('change', function() {
                        if ($(this).val() === 'Yes') {
                            $('#registered').show();
                            // $('#NotRegistered').hide();
                        } else if ($(this).val() === 'Create Client User') {
                            $('#registered').hide();
                            // $('#NotRegistered').show();
                            
                            // Clear input fields in #registered div
                            $('#registered').find('input, select').val('');
                        }
                    });
                });
            </script>
            

            <br>
            <p class="card-description">Type of Customer</p>

            <div class="row mb-4">
                <div class="col-md-12 d-flex">
                    <div class="form-check me-4">
                        <input type="radio" class="form-check-input" id="new_customer" name="customerOptions" value="new_customer">
                        <label class="form-check-label" for="new_customer">New Customer</label>
                    </div>
                    <div class="form-check me-4">
                        <input type="radio" class="form-check-input" id="rewrite" name="customerOptions" value="rewrite">
                        <label class="form-check-label" for="rewrite">Rewrite</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="renew" name="customerOptions" value="renew">
                        <label class="form-check-label" for="renew">Renew</label>
                    </div>
                </div>

            </div>
            
        
               

        </div></div>

        <div class="card my-2">
            <div class="card-body">

                <div class="row">
                    <!-- First Column -->
                
        
                    <div class="col-md-4 mb-4">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
                    </div>
        
                    <!-- Third Row -->
                    <div class="col-md-4 mb-4">
                        <label for="middle_name">Middle Name </label>
                        <input type="text" class="form-control" id="middle_name" name="middle_name1" value="{{ old('middle_name1') }}">
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

                <div class="row">
                <p class="card-description">Policy Info </p>


                <div class="col-md-4 mb-4">
                    <label for="carrier">Carrier</label>
                    <select class="form-select" id="carrier" name="carrier">
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
                    <select class="form-select" id="type_of_policy" name="type_of_policy">
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

                <p class="card-description">Due Date   </p>
                <div class="row">

                    <div class="col-md-4 mb-4">
                        <label for="due_date">Due Date</label>
                        <input type="date" class="form-control" id="due_date" name="due_date" value="{{ old('due_date') }}">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="amount_due">Amount Due</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="amount_due" name="amount_due" value="{{ old('amount_due') }}">
                    </div>
                    
               
                </div>


        </div></div>

        <div class="card my-2">
            <div class="card-body">
        
                <p class="card-description">Paid Today</p>
        
    
               
            
        
                <div class="row">        
        
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


                
        
        <div class="card my-2">
            <div class="card-body">
        
                <p class="card-description">Card Info</p>
    
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="name_on_card">Name on Card</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="{{ old('name_on_card') }}">
                    </div>
        
                    <div class="col-md-6 mb-5">
                        <label for="debit_card">Credit Card Section</label>
                        {{-- <input type="text" class="form-control" id="debit_card" name="debit_card" value="{{ old('debit_card') }}"> --}}
                        <select class="form-select" id="debit_card" name="debit_card">
                            <option value="">Select Card ⬇️</option>
                            <option value="Master Debit">Master Debit </option>
                            <option value="Master Credit">Master Credit </option>

                            <option value="Visa Debit">Visa Debit </option>
                            <option value="Visa Credit">Visa Credit </option>

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
        
              
                
        
        </div></div>


        <div class="card my-2">
            <div class="card-body">
                <p class="card-description">Client Info</p>
    
        
                <div class="row">
                    <!-- First Row -->
                    <div class="col-md-4 mb-4">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone22" name="phone22" value="{{ old('phone22') }}">
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
                        <select class="form-select" id="type_of_id" name="type_of_id">
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

        <div class="card my-2">
            <div class="card-body">
        
                <p class="card-description">Items </p>
    
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="insuredItems" class="form-label">Insured Items</label>
                        <input type="number" name="insured_items" class="form-control" id="insuredItems" placeholder="Enter number">
                        <span class="text-danger" id="insuredItemsError" style="display: none;">Please enter a single digit.</span>
                    </div>
                    <div class="col-md-4">
                        <label for="insuredDrivers" class="form-label">Insured Drivers</label>
                        <input type="text" name="insured_drivers" class="form-control" id="insuredDrivers" placeholder="Enter number">
                        <span class="text-danger" id="insuredDriversError" style="display: none;">Please enter a single digit.</span>
                    </div>
                    <div class="col-md-4">
                        <label for="excludedDrivers" class="form-label">Excluded Drivers</label>
                        <input type="text" name="excluded_drivers" class="form-control" id="excludedDrivers" placeholder="Enter number">
                        <span class="text-danger" id="excludedDriversError" style="display: none;">Please enter a single digit.</span>
                    </div>
                </div>
                
                <!-- Second row: Lien Checkbox -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="lien" class="form-label">Lien</label>
                        <input type="number" name="lien" class="form-control" id="lien" placeholder="Enter number">
                        <span class="text-danger" id="lienError" style="display: none;">Please enter a single digit.</span>
                    </div>
                </div>
                
    
    
                <p class="card-description">Term </p>
    


                <div class="row mb-3">

                    <div class="col-md-4">
                        <label for="effectiveDate" class="form-label">Effective Date</label>
                        <input type="date" name="effective_date" class="form-control" id="effectiveDate">
                        <span class="text-danger" id="effectiveDateError" style="display: none;">Please enter a valid date.</span>
                    </div>
                    <div class="col-md-4">
                        <label for="expirationDate" class="form-label">Expiration Date</label>
                        <input type="date" name="expiration_date" class="form-control" id="expirationDate">
                        <span class="text-danger" id="expirationDateError" style="display: none;">Please enter a valid date.</span>
                    </div>

                    <div class="col-md-4">
                        <label for="term" class="form-label">Term (Months)</label>
                        <select class="form-select" id="term_months" name="term_months">
                            <option value="">Select Term ⬇️</option>
                            <option value="12">Monthly</option>
                            <option value="4">Quarterly</option>
                            <option value="2">Semi-Annual</option>
                            <option value="1">Annual</option>
            
                        </select>
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
    
                <div class="row">
    
                    <!-- Third Row -->
                   
                    <div class="col-md-8 mb-4">
                        <label for="notes">Notes:</label>
                        <textarea class="form-control" id="notes" name="notes" rows="3">{{ old('notes') }}</textarea>
                    </div>
                </div>
                
        
        </div></div>

        <div class="card my-2" >
            <div class="card-body">

                <!-- Add To Do List - Checkbox (one row) -->
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="addToDoList" name="addToDoList">
                        <label class="form-check-label" for="addToDoList">Add To Do List</label>
                    </div>
                </div>
            </div>

            <!-- Docsave, Proof Upload, Picture Upload - Dropdowns (one row) -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="docsave" class="form-label">Docsave</label>
                    <select class="form-select" id="docsave" name="docsave">
                        <option value="Pending">Pending</option>
                        <option value="Done">Done</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="proofUpload" class="form-label">Proof Upload</label>
                    <select class="form-select" id="proofUpload" name="proofUpload">
                        <option value="Pending">Pending</option>
                        <option value="Done">Done</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="pictureUpload" class="form-label">Picture Upload</label>
                    <select class="form-select" id="pictureUpload" name="pictureUpload">
                        <option value="Pending">Pending</option>
                        <option value="Done">Done</option>
                    </select>
                </div>
            </div>

            <!-- To Do List Notes - Text Field (one row) -->
            <div class="row mb-3">
                <div class="col-md-8 mb-4">
                    <label for="toDoListNotes" class="form-label">To Do List Notes</label>
                    <textarea class="form-control" id="toDoListNotes" name="toDoListNotes" rows="3" placeholder="Enter your notes here..."></textarea>
                </div>
            </div>


        </div></div>


    </div>
    {{-- new policy div end --}}

    {{-- existing policy div --}}
    <div id="existingDiv" style="display: none">

        <div class="card my-2">
            <div class="card-body">
           
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="actionType" id="makePayment" value="makePayment">
                            <label class="form-check-label" for="makePayment">
                                Make Payment
                            </label>
                        </div>
                
                    </div>
                
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="actionType" id="makeChange" value="makeChange">
                            <label class="form-check-label" for="makeChange">
                                Make Change
                            </label>
                        </div>
                    </div>
                
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="TodoAction" id="TodoAction" value="addToDoList">
                            <label class="form-check-label" for="TodoAction">
                                Add To Do List
                            </label>
                        </div>
                    </div>

                </div>
                
           
        </div></div>

   {{-- make payment div end --}}
   <div id="makepaymentDiv" style="display: none">

    <div class="card my-2">
        <div class="card-body">
        <h4 style="display: none">if make payment</h4>
    
                    <div class="row">
                        <!-- First Column -->
                    
            
               
            
                        <div class="col-md-4 mb-4">
                            <label for="last_name2">Last Name</label>
                            <input type="text" class="form-control" id="last_name2" name="last_name2" value="{{ old('last_name2') }}">
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <label for="first_name2">First Name</label>
                            <input type="text" class="form-control" id="first_name2" name="first_name2" value="{{ old('first_name2') }}">
                        </div>
            
                        <!-- Third Row -->
                        <div class="col-md-4 mb-4">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" class="form-control" id="middle_name2" name="middle_name2" value="{{ old('middle_name2') }}">
                        </div>
            
                      
                      
                        {{-- <div class="col-md-4 mb-4">
                        </div> --}}
                        
                    
            
                    </div>
            
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <label for="preferred_name2">Preferred Name</label>
                            <input type="text" class="form-control" id="preferred_name2" name="preferred_name2" value="{{ old('preferred_name2') }}">
                        </div>
    
                    </div>
    
                <div class="row">
                    <p class="card-description">Policy Info </p>
    
    
                    <div class="col-md-4 mb-4">
                        <label for="carrier2">Carrier</label>
                        <select class="form-select" id="carrier2" name="carrier2">
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
                        <label for="policy_number2">Policy Number</label>
                        <input type="text" class="form-control" id="policy_number2" name="policy_number2" value="{{ old('policy_number2') }}">
                    </div>
                
                    <!-- Fourth Row -->
                    <div class="col-md-4 mb-4">
                        <label for="type_of_policy">Type of Policy</label>
                        <select class="form-select" id="type_of_policy2" name="type_of_policy2">
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

                    <p class="card-description">Term </p>
    


                    <div class="row mb-3">
    
                        <div class="col-md-4">
                            <label for="effectiveDate" class="form-label">Effective Date</label>
                            <input type="date" class="form-control" name="effectiveDate2" id="effectiveDate2">
                            <span class="text-danger" id="effectiveDateError2" style="display: none;">Please enter a valid date.</span>
                        </div>

                        <div class="col-md-4">
                            <label for="expirationDate" class="form-label">Expiration Date</label>
                            <input type="date" class="form-control" id="expirationDate2" name="expirationDate2" >
                            <span class="text-danger" id="expirationDateError2" style="display: none;">Please enter a valid date.</span>
                        </div>
    
                        <div class="col-md-4">
                            <label for="term2" class="form-label">Term (Months)</label>
                            <select class="form-select" id="term_months2" name="term_months2">
                                <option value="">Select Term ⬇️</option>
                                <option value="12">Monthly</option>
                                <option value="4">Quarterly</option>
                                <option value="2">Semi-Annual</option>
                                <option value="1">Annual</option>
                
                            </select>
                        </div>
    
                    </div>
    
                    <p class="card-description">Due Date   </p>
                    <div class="row">

                        <div class="col-md-4 mb-4">
                            <label for="due_date2">Due Date</label>
                            <input type="date" class="form-control" id="due_date2" name="due_date2" value="{{ old('due_date2') }}">
                        </div>

                        <div class="col-md-4 mb-4">
                            <label for="amount_due2">Amount Due</label>
                            <input type="number" step="any" placeholder="0.0" class="form-control" id="amount_due2" name="amount_due2" value="{{ old('amount_due2') }}">
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
                            <input type="text" class="form-control" id="name_on_card2" name="name_on_card2" value="{{ old('name_on_card2') }}">
                        </div>
            
                        <div class="col-md-6 mb-5">
                            <label for="debit_card2">Credit Card Section</label>
                            {{-- <input type="text" class="form-control" id="debit_card" name="debit_card" value="{{ old('debit_card') }}"> --}}
                            <select class="form-select" id="debit_card2" name="debit_card2">
                                <option value="">Select Card ⬇️</option>
                                <option value="Master Debit">Master Debit </option>
                                <option value="Master Credit">Master Credit </option>
    
                                <option value="Visa Debit">Visa Debit </option>
                                <option value="Visa Credit">Visa Credit </option>
    
                                <option value="Discover">Discover</option>
                                <option value="American Express">American Express</option>
            
                            </select>
                        </div>
                        
                    </div>
            
                    <div class="row">
                        <p class="card-description">Card Number</p>
                        <div class="col-md-3 mb-4">
                            <label for="number_1st_42">1st 4 Digits</label>
                            <input type="number" class="form-control" id="number_1st_42" name="number_1st_42" value="{{ old('number_1st_42') }}" max="9999">
                            <span class="text-danger" id="number_1st_4_error2"></span>
                        </div>
            
                        <div class="col-md-3 mb-4">
                            <label for="number_2nd_42">2nd 4 Digits</label>
                            <input type="number" class="form-control" id="number_2nd_42" name="number_2nd_42" value="{{ old('number_2nd_42') }}" max="9999">
                            <span class="text-danger" id="number_2nd_4_error2"></span>
                        </div>
            
                        <div class="col-md-3 mb-4">
                            <label for="number_3rd_42">3rd 4 Digits</label>
                            <input type="number" class="form-control" id="number_3rd_42" name="number_3rd_42" value="{{ old('number_3rd_42') }}" max="9999">
                            <span class="text-danger" id="number_3rd_4_error2"></span>
                        </div>
            
                        <div class="col-md-3 mb-4">
                            <label for="number_4th_42">Last 4 Digits</label>
                            <input type="number" class="form-control" id="number_4th_42" name="number_4th_42" value="{{ old('number_4th_42') }}" max="9999">
                            <span class="text-danger" id="number_4th_4_error2"></span>
                        </div>
            
                    </div>
            
                    <div class="row">
            
                        <div class="col-md-3 mb-4">
                            <label for="expiration_12">Expiration Month</label>
                            {{-- <input type="text" class="form-control" id="expiration_1" name="expiration_1" value="{{ old('expiration_1') }}"> --}}
                            <select class="form-control" id="expiration_12" name="expiration_12">
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
                            <label for="expiration_22">Expiration Year</label>
                            {{-- <input type="number" class="form-control" id="expiration_2" name="expiration_2" value="{{ old('expiration_2') }}"> --}}
                            <select class="form-control" id="expiration_22" name="expiration_22">
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
                            <label for="billing_zip2">Billing Zip</label>
                            <input type="number" class="form-control" id="billing_zip2" name="billing_zip2" value="{{ old('billing_zip2') }}" max="99999">
                            <span class="text-danger" id="billing_zip2"></span>
                        </div>
                        
                        
                        <!-- Fourth Row -->
                        <div class="col-md-3 mb-4">
                            <label for="cvc">CVC</label>
                            <input type="text" class="form-control" id="cvc2" name="cvc2" value="{{ old('cvc2') }}">
                        </div>
              
            
                    </div>
            
                  
                    
            
            </div></div>

    </div>
        {{-- make payment div end --}}

     

      

               


               
  


        {{-- make change div  --}}

        <div id="makeChangeDiv" style="display: none">

            <div class="card my-2">
                <div class="card-body">
                <h4 style="display: none">if make Change</h4>

              
        
                       
        
                <div class="row">
                    <div class="col-md-4 mb-4">
                        {{-- <label for="autopay">Autopay</label> --}}
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="autopay3" name="AutoPayBox">
                            <label class="form-check-label" for="autopay3">Autopay</label>
                        </div>
                    </div>
        
                    <div class="col-md-4 mb-4">
                        {{-- <label for="autopay">Autopay</label> --}}
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="Active3" name="Active3">
                            <label class="form-check-label" for="Active3">Active</label>
                        </div>
                    </div>
        
                </div>
        
                
                    
                
                       
        
            </div></div>
        
                <div class="card my-2">
                    <div class="card-body">
        
                        <div class="row">
                            <!-- First Column -->
                        
                
                   
                            <div class="col-md-4 mb-4">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name3" name="last_name3" value="{{ old('last_name3') }}">
                            </div>
                
                            <div class="col-md-4 mb-4">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name3" name="first_name3" value="{{ old('first_name3') }}">
                            </div>
                
                            <!-- Third Row -->
                            <div class="col-md-4 mb-4">
                                <label for="middle_name">Middle Name </label>
                                <input type="text" class="form-control" id="middle_name3" name="middle_name3" value="{{ old('middle_name3') }}">
                            </div>
                
                           
                          
                            {{-- <div class="col-md-4 mb-4">
                            </div> --}}
                            
                        
                
                        </div>
                
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <label for="preferred_name">Preferred Name</label>
                                <input type="text" class="form-control" id="preferred_name3" name="preferred_name3" value="{{ old('preferred_name3') }}">
                            </div>
        
                        </div>
        
                        <div class="row">
                        <p class="card-description">Policy Info </p>
        
        
                        <div class="col-md-4 mb-4">
                            <label for="carrier">Carrier</label>
                            <select class="form-select" id="carrier3" name="carrier3">
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
                            <input type="text" class="form-control" id="policy_number3" name="policy_number3" value="{{ old('policy_number3') }}">
                        </div>
                    
                        <!-- Fourth Row -->
                        <div class="col-md-4 mb-4">
                            <label for="type_of_policy">Type of Policy</label>
                            <select class="form-select" id="type_of_policy3" name="type_of_policy3">
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
                            <input type="text" class="form-control" id="driver_name" name="driver_name" placeholder="Enter Driver Name">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="dl">DL</label>
                            <input type="text" class="form-control" id="dl" name="dl" placeholder="Enter DL">
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
                            <input type="text" class="form-control" id="vin" name="vin" placeholder="Enter VIN">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="year">Year</label>
                            {{-- <input type="date" class="form-control" id="year" name="year"> --}}
                            <select class="form-control" name="year" id="year">
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
                            <input type="text" class="form-control" id="make" name="make" placeholder="Enter Make">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" class="form-control" id="model" name="model" placeholder="Enter Model">
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
                            <input type="number" class="form-control" id="new_phone_number" name="new_phone_number" placeholder="Enter New Phone Number">
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="new_email_checkbox">
                            <label class="form-check-label" for="new_email_checkbox">Update Email</label>
                        </div>
                        <div class="form-group" id="email_input_group" style="display: none;">
                            <label for="new_email">New Email</label>
                            <input type="email" class="form-control" id="new_email" name="new_email" placeholder="Enter New Email">
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
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="new_address">New Address</label>
                            <input type="text" class="form-control" id="new_address" name="new_address" placeholder="Enter New Address">
                        </div>
                    </div>
                </div>


            </div>
        </div>






        
                
        
        
                <div class="card my-2">
                    <div class="card-body">
                        <p class="card-description">Client Info 2</p>
            
                
                        <div class="row">
                            <!-- First Row -->
                            <div class="col-md-4 mb-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email3" name="email3" value="{{ old('email3') }}">
                            </div>
                
                            <div class="col-md-4 mb-4">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone3" name="phone3" value="{{ old('phone3') }}">
                                <span id="phone-error" style="color: red; display: none;">Please enter a valid phone number (e.g., 123-123-1234).</span>
                            </div>
                
                            {{-- <div class="col-md-4 mb-4">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob3" name="dob3" value="{{ old('dob3') }}">
                            </div> --}}
                        
                            <!-- Second Row -->
                            {{-- <div class="col-md-4 mb-4">
                                <label for="ssn">SSN</label>
                                <input type="text" class="form-control" id="ssn3" name="ssn3" value="{{ old('ssn3') }}">
                                <span id="ssn-error3" style="color: red; display: none;">Please enter a valid SSN (e.g., 123-12-1234).</span>
                            </div> --}}
                
                            <div class="col-md-4 mb-4">
                                <label for="zip">Zip</label>
                                <input type="text" class="form-control" id="zip3" name="zip3" value="{{ old('zip3') }}">
                                <span id="zip-error3" style="color: red; display: none;">Please enter a valid ZIP code (e.g., 12345).</span>
                            </div>
                
                            {{-- <div class="col-md-4 mb-4">
                                <label for="type_of_id">Type of ID</label>
                                <select class="form-select" id="type_of_id3" name="type_of_id3">
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
                            </div> --}}
                        
                            <!-- Third Row -->
                            {{-- <div class="col-md-4 mb-4">
                                <label for="dl_id">DL / ID #</label>
                                <input type="text" class="form-control" id="dl_id3" name="dl_id3" value="{{ old('dl_id3') }}">
                            </div> --}}
                            
                
                        </div>
                
                </div></div>
        
                <div class="card my-2">
                    <div class="card-body">
                
                        <p class="card-description">Items</p>
            
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="insuredItems" class="form-label">Insured Items</label>
                                <input type="number" class="form-control" name="insuredItems3" id="insuredItems3" placeholder="Enter number">
                                <span class="text-danger" id="insuredItemsError3" style="display: none;">Please enter a single digit.</span>
                            </div>
                            <div class="col-md-4">
                                <label for="insuredDrivers" class="form-label">Insured Drivers</label>
                                <input type="number" class="form-control" name="insuredDrivers3" id="insuredDrivers3" placeholder="Enter number">
                                <span class="text-danger" id="insuredDriversError3" style="display: none;">Please enter a single digit.</span>
                            </div>
                            <div class="col-md-4">
                                <label for="excludedDrivers" class="form-label">Excluded Drivers</label>
                                <input type="number" class="form-control" name="excludedDrivers3" id="excludedDrivers3" placeholder="Enter number">
                                <span class="text-danger" id="excludedDriversError3" style="display: none;">Please enter a single digit.</span>
                            </div>
                        </div>
                        
                        <!-- Second row: Lien Checkbox -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="lien" class="form-label">Lien</label>
                                <input type="number" class="form-control" name="lien3" id="lien3" placeholder="Enter number">
                                <span class="text-danger" id="lienError3" style="display: none;">Please enter a single digit.</span>
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
                                <input type="number" step="any" placeholder="0.0" class="form-control" id="base_premium3" name="base_premium3" value="{{ old('base_premium3') }}">
                                <span class="text-danger" id="base_premium_error3"></span>
                            </div>
                
                            <div class="col-md-4 mb-4">
                                <label for="state_fee_mvca">State Fee (MVCA)</label>
                                <input type="number" step="any" placeholder="0.0" class="form-control" id="state_fee_mvca3" name="state_fee_mvca3" value="{{ old('state_fee_mvca3') }}">
                                <span class="text-danger" id="state_fee_mvca_error"></span>
                            </div>
                
                            <div class="col-md-4 mb-4">
                                <label for="policy_fee">Policy Fee</label>
                                <input type="number" step="any" placeholder="0.0" class="form-control" id="policy_fee3" name="policy_fee3" value="{{ old('policy_fee3') }}">
                                <span class="text-danger" id="policy_fee_error"></span>
                            </div>
                
                            <!-- Second Row -->
                            <div class="col-md-4 mb-4">
                                <label for="roadside_assistance_fee">Roadside Assistance Fee</label>
                                <input type="number" step="any" placeholder="0.0" class="form-control" id="roadside_assistance_fee3" name="roadside_assistance_fee3" value="{{ old('roadside_assistance_fee3') }}">
                                <span class="text-danger" id="roadside_assistance_fee_error3"></span>
                            </div>
                
                            <div class="col-md-4 mb-4">
                                <label for="sr22">SR22</label>
                                <input type="number" step="any" placeholder="0.0" class="form-control" id="sr223" name="sr223" value="{{ old('sr223') }}">
                                <span class="text-danger" id="sr22_error"></span>
                            </div>
                
                            <div class="col-md-4 mb-4">
                                <label for="other_fee">Other Fee (if any)</label>
                                <input type="number" step="any" placeholder="0.0" class="form-control" id="other_fee3" name="other_fee3" value="{{ old('other_fee3') }}">
                                <span class="text-danger" id="other_fee_error3"></span>
                            </div>
                
                        
                            <!-- Third Row -->
                            <div class="col-md-4 mb-4">
                                <label for="total_premium">Total Premium</label>
                                <input type="text" class="form-control" id="total_premium3" name="total_premium3" value="{{ old('total_premium3') }}">
                            </div>
                
                            <div class="col-md-4 mb-4">
                                <label for="annual_premium">Annual Premium</label>
                                <input type="text" class="form-control" id="annual_premium3" name="annual_premium3" value="{{ old('annual_premium3') }}">
                            </div>
                
                        </div>
            
                        <div class="row">
            
                            <!-- Third Row -->
                           
                            <div class="col-md-8 mb-4">
                                <label for="notes">Notes:</label>
                                <textarea class="form-control" id="notes3" name="notes3" rows="3">{{ isset($policy2->notes) ? $policy2->notes : '' }}</textarea>
                            </div>
                        </div>
                        
                
                </div></div>
        
 

            
 


        <div class="card my-2">
            <div class="card-body">
        
        
    
               
            
        
                <div class="row">  
                    
                    <p class="card-description">Due Date   </p>
                    <div class="row">

                        <div class="col-md-4 mb-4">
                            <label for="due_date3">Due Date</label>
                            <input type="date" class="form-control" id="due_date3" name="due_date3" value="{{ old('due_date3') }}">
                        </div>

                        <div class="col-md-4 mb-4">
                            <label for="amount_due3">Amount Due</label>
                            <input type="number" step="any" placeholder="0.0" class="form-control" id="amount_due3" name="amount_due3" value="{{ old('amount_due3') }}">
                        </div>
                        
                    

                    </div>
        
                    <p class="card-description">Paid Today</p>

                     <!-- First Row -->
                    <div class="col-md-4 mb-4">
                        <label for="amount_paid_cc">Amount Paid CC</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="amount_paid_cc3" name="amount_paid_cc3" value="{{ old('amount_paid_cc3') }}">
                        <span class="text-danger" id="amount_paid_cc_error3"></span>
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <label for="amount_paid_cash">Amount Paid Cash</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="amount_paid_cash3" name="amount_paid_cash3" value="{{ old('amount_paid_cash3') }}">
                        <span class="text-danger" id="amount_paid_cash_error3"></span>
                    </div>
        
                    <!-- Second Row -->
                    <div class="col-md-4 mb-4">
                        <label for="direct_pay">Direct Pay</label>
                        <input type="number" step="any" placeholder="0.0" class="form-control" id="direct_pay3" name="direct_pay3" value="{{ old('direct_pay3') }}">
                        <span class="text-danger" id="direct_pay_error3"></span>
                    </div>
        
        
                </div>

               
                
        </div></div>


                
        
        <div class="card my-2">
            <div class="card-body">
        
                <p class="card-description">Card Info</p>
    
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="name_on_card">Name on Card</label>
                        <input type="text" class="form-control" id="name_on_card3" name="name_on_card3" value="{{ old('name_on_card3') }}">
                    </div>
        
                    <div class="col-md-6 mb-5">
                        <label for="debit_card">Credit Card Section</label>
                        {{-- <input type="text" class="form-control" id="debit_card" name="debit_card" value="{{ old('debit_card') }}"> --}}
                        <select class="form-select" id="debit_card3" name="debit_card3">
                            <option value="">Select Card ⬇️</option>
                            <option value="Master Debit">Master Debit </option>
                            <option value="Master Credit">Master Credit </option>

                            <option value="Visa Debit">Visa Debit </option>
                            <option value="Visa Credit">Visa Credit </option>

                            <option value="Discover">Discover</option>
                            <option value="American Express">American Express</option>
        
                        </select>
                    </div>
                    
                </div>
        
                <div class="row">
                    <p class="card-description">Card Number</p>
                    <div class="col-md-3 mb-4">
                        <label for="number_1st_4">1st 4 Digits</label>
                        <input type="number" class="form-control" id="number_1st_43" name="number_1st_43" value="{{ old('number_1st_43') }}" max="9999">
                        <span class="text-danger" id="number_1st_4_error3"></span>
                    </div>
        
                    <div class="col-md-3 mb-4">
                        <label for="number_2nd_4">2nd 4 Digits</label>
                        <input type="number" class="form-control" id="number_2nd_43" name="number_2nd_43" value="{{ old('number_2nd_43') }}" max="9999">
                        <span class="text-danger" id="number_2nd_4_error3"></span>
                    </div>
        
                    <div class="col-md-3 mb-4">
                        <label for="number_3rd_4">3rd 4 Digits</label>
                        <input type="number" class="form-control" id="number_3rd_43" name="number_3rd_43" value="{{ old('number_3rd_43') }}" max="9999">
                        <span class="text-danger" id="number_3rd_4_error3"></span>
                    </div>
        
                    <div class="col-md-3 mb-4">
                        <label for="number_4th_4">Last 4 Digits</label>
                        <input type="number" class="form-control" id="number_4th_43" name="number_4th_43" value="{{ old('number_4th_43') }}" max="9999">
                        <span class="text-danger" id="number_4th_4_error3"></span>
                    </div>
        
                </div>
        
                <div class="row">
        
                    <div class="col-md-3 mb-4">
                        <label for="expiration_1">Expiration Month</label>
                        {{-- <input type="text" class="form-control" id="expiration_1" name="expiration_1" value="{{ old('expiration_1') }}"> --}}
                        <select class="form-control" id="expiration_13" name="expiration_13">
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
                        <label for="expiration_23">Expiration Year</label>
                        {{-- <input type="number" class="form-control" id="expiration_2" name="expiration_2" value="{{ old('expiration_2') }}"> --}}
                        <select class="form-control" id="expiration_23" name="expiration_23">
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
                        <input type="number" class="form-control" id="billing_zip3" name="billing_zip3" value="{{ old('billing_zip3') }}" max="99999">
                        <span class="text-danger" id="billing_zip_error3"></span>
                    </div>
                    
                    
                    <!-- Fourth Row -->
                    <div class="col-md-3 mb-4">
                        <label for="cvc">CVC</label>
                        <input type="text" class="form-control" id="cvc3" name="cvc3" value="{{ old('cvc3') }}">
                    </div>
          
        
                </div>
        
              
                
        
        </div></div>

   

        </div>
        {{-- make change div end  --}}

        {{-- to do list --}}
        <div class="card my-2" id="toDoListNew" style="display: none">
            <div class="card-body">

                <!-- Add To Do List - Checkbox (one row) -->
            <div class="row mb-3">

            </div>
            

            <!-- Docsave, Proof Upload, Picture Upload - Dropdowns (one row) -->
            
            <div class="row">
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="addToDoList2" id="addToDoList2" value="addToDoList">
                        <label class="form-check-label" for="addToDoList">
                            Add To Do List
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="docsave" class="form-label">Docsave</label>
                    <select class="form-select" id="docsave3" name="docsave3">
                        <option value="Pending">Pending</option>
                        <option value="Done">Done</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="proofUpload" class="form-label">Proof Upload</label>
                    <select class="form-select" id="proofUpload3" name="proofUpload3">
                        <option value="Pending">Pending</option>
                        <option value="Done">Done</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="pictureUpload" class="form-label">Picture Upload</label>
                    <select class="form-select" id="pictureUpload3" name="pictureUpload3">
                        <option value="Pending">Pending</option>
                        <option value="Done">Done</option>
                    </select>
                </div>
            </div>

            <!-- To Do List Notes - Text Field (one row) -->
            <div class="row mb-3">
                <div class="col-md-8 mb-4">
                    <label for="toDoListNotes" class="form-label">To Do List Notes</label>
                    <textarea  class="form-control" id="toDoListNotes3" name="toDoListNotes3" rows="3" placeholder="Enter your notes here..."></textarea>
                </div>
            </div>


        
       
    </div></div>


    </div>
    {{-- existing policy div end --}}



    <button type="button" id="submitBtn" class="btn btn-primary mr-2" >Submit  </button> 

    </form>
</div>

<!-- Custom Alert Modal -->
<div id="customAlert" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9999;">
    <div style="max-width: 400px; margin: 100px auto; background: #fff; padding: 20px; border-radius: 8px; text-align: center;">
        <p style="color: black"><strong>New User Details</strong></p>
        <p style="color: black">Email: <span id="alertEmail"></span></p>
        <p style="color: black">Password: <span id="alertPassword"></span></p>
        <button type="button" id="copyBtn" class="btn btn-secondary">Copy Password</button>
        <button type="button" id="confirmBtn" class="btn btn-primary">OK & Submit</button>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#submitBtn').on('click', function(e) {
            e.preventDefault(); // Prevent form submission
            
            // Check if the "Create Client User" radio button is selected
            if ($('input[name="clientRegister"]:checked').val() === 'Create Client User') {
                // Fetch the email and last name values
                const email = $('#email').val();
                const lastName = $('#last_name').val();
                
                // Generate the password
                const password = lastName + '12345';
                
                // Display email and password in the custom alert
                $('#alertEmail').text(email);
                $('#alertPassword').text(password);
                $('#customAlert').show(); // Show the alert modal
                
                // Copy password to clipboard
                $('#copyBtn').on('click', function() {
                    navigator.clipboard.writeText(password).then(function() {
                        alert('Password copied to clipboard!');
                    });
                });

                // Handle OK & Submit button in custom alert
                $('#confirmBtn').on('click', function() {
                    $('#customAlert').hide(); // Hide the alert modal
                    $('#formId').submit(); // Submit the form
                });
            } else {
                // If "Create Client User" is not selected, submit the form directly
                $('#formId').submit();
            }
        });
    });
</script>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
    $('input[name="options"]').on('change', function() {
        if ($('#generalQuestion').is(':checked')) {
            $('#generalQuestionDiv').show();
        } else {
            $('#generalQuestionDiv').hide();
            $('#searchPolicyDiv').hide();

            
            
        }
        
        if ($('#newLead').is(':checked')) {
            $('#newLeadDiv').show();
            // $('#searchPolicyDiv').show();

        } else {
            $('#newLeadDiv').hide();
            $('#searchPolicyDiv').hide();

        }
        
        if ($('#addNewPolicy').is(':checked')) {
            $('#newpolicyDiv').show();
            $('#searchPolicyDiv').show();

        } else {
            $('#newpolicyDiv').hide();
            $('#searchPolicyDiv').hide();

        }

        if ($('#existingClient').is(':checked')) {
            $('#existingDiv').show();
            $('#searchPolicyDiv').show();

        } else {
            $('#existingDiv').hide();
        }


    });
});

</script>


{{-- policy search --}}
<script>
  
  $(document).ready(function () {
    // Store the original list of policies (table body)
    var originalPolicies = $('#policyDropdown tbody').html();

    // Search input handler
    $('#policySearch').on('input', function () {
        var searchValue = $(this).val().toLowerCase();

        // Show or hide the dropdown based on input value
        if (searchValue.length > 0) {
            $('#policyDropdown').show();
        } else {
            // Restore the original list if search input is cleared
            $('#policyDropdown tbody').html(originalPolicies);
            $('#policyDropdown').hide();
            return;
        }

        // Filter the policies in the table
        var hasVisiblePolicies = false;
        $('#policyDropdown tbody tr.policy-item').each(function () {
            var rowText = $(this).text().toLowerCase();
            if (rowText.includes(searchValue)) {
                $(this).show();
                hasVisiblePolicies = true;
            } else {
                $(this).hide();
            }
        });

        // If no policies match, show a "No results" message
        if (!hasVisiblePolicies) {
            $('#policyDropdown tbody').html('<tr><td colspan="7" class="list-group-item disabled">No results found</td></tr>');
        }
    });

    // Handle clicking on a policy row
    $(document).on('click', '.policy-item', function () {
        var policyId = $(this).data('value');
        var policySelectValue = $('#policy_select_value').val(); // Get the hidden input value

        // Set the input value to the hidden field value
        $('#policySearch').val(policySelectValue);

        // Set the hidden field value to the selected policy ID
        $('#hiddenPolicyId').val(policyId);

        // Hide the dropdown after selecting
        $('#policyDropdown').hide();
    });

    // Hide the dropdown if clicked outside
    $(document).click(function (e) {
        if (!$(e.target).closest('#policySearch, #policyDropdown').length) {
            $('#policyDropdown').hide();
        }
    });
});



</script>

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

{{-- part 2 --}}


<script>
    $(document).ready(function() {

        // Phone validation: Format 
        $('#phone2').on('input', function() {
            var phone = $(this).val();
            var phonePattern = /^\d{3}-\d{3}-\d{4}$/;
            if (!phonePattern.test(phone)) {
                $('#phone-error2').show();
            } else {
                $('#phone-error2').hide();
            }
        });

        // SSN validation: Format 123-12-1234
        $('#ssn2').on('input', function() {
            var ssn = $(this).val();
            var ssnPattern = /^\d{3}-\d{2}-\d{4}$/;
            if (!ssnPattern.test(ssn)) {
                $('#ssn-error2').show();
            } else {
                $('#ssn-error2').hide();
            }
        });

        // ZIP validation: Format 12345
        $('#zip2').on('input', function() {
            var zip = $(this).val();
            var zipPattern = /^\d{5}$/;
            if (!zipPattern.test(zip)) {
                $('#zip-error2').show();
            } else {
                $('#zip-error2').hide();
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
        $('#insured_items2').on('input', function() {
            validateSingleDigit('#insured_items2', '#insured_items_error2');
        });

        $('#insured_drivers2').on('input', function() {
            validateSingleDigit('#insured_drivers2', '#insured_drivers_error2');
        });

        $('#excluded_drivers2').on('input', function() {
            validateSingleDigit('#excluded_drivers2', '#excluded_drivers_error2');
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
        $('#base_premium2, #state_fee_mvca2, #policy_fee2, #roadside_assistance_fee2, #sr222, #other_fee2, #amount_paid_cc2, #amount_paid_cash2, #direct_pay2').on('blur', function() {
            formatDecimal(`#${this.id}`);
        });

        // Apply format when the page is loaded for existing values
        $('#base_premium2, #state_fee_mvca2, #policy_fee2, #roadside_assistance_fee2, #sr222, #other_fee2, #amount_paid_cc2, #amount_paid_cash2, #direct_pay2').each(function() {
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
        $('#number_1st_42, #number_2nd_42, #number_3rd_42, #number_4th_42').on('input blur', function() {
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
        $('#billing_zip2').on('input blur', function() {
            validateZipCode('#billing_zip2', '#billing_zip_error2');
        });

        function updateTotalPremium() {
        let basePremium = parseFloat($('#base_premium2').val().replace(/[^0-9.-]/g, '')) || 0;
        let stateFeeMVCA = parseFloat($('#state_fee_mvca2').val().replace(/[^0-9.-]/g, '')) || 0;
        let policyFee = parseFloat($('#policy_fee2').val().replace(/[^0-9.-]/g, '')) || 0;
        let roadsideAssistanceFee = parseFloat($('#roadside_assistance_fee2').val().replace(/[^0-9.-]/g, '')) || 0;
        let sr22 = parseFloat($('#sr222').val().replace(/[^0-9.-]/g, '')) || 0;
        let otherFee = parseFloat($('#other_fee2').val().replace(/[^0-9.-]/g, '')) || 0;

        let totalPremium = basePremium + stateFeeMVCA + policyFee + roadsideAssistanceFee + sr22 + otherFee;

        $('#total_premium2').val(totalPremium.toFixed(2)); // Set total with two decimal places
    }

    // Trigger updateTotalPremium function when any of the relevant fields change
    $('#base_premium2, #state_fee_mvca2, #policy_fee2, #roadside_assistance_fee2, #sr222, #other_fee2').on('input', function() {
        updateTotalPremium();
    });

    function updateAnnualPremium() {
        let totalPremium = parseFloat($('#total_premium2').val().replace(/[^0-9.-]/g, '')) || 0;
        let termMonths = parseFloat($('#term_months2').val()) || 1; // Default to 1 if not selected

        let annualPremium = totalPremium * termMonths;

        $('#annual_premium2').val(annualPremium.toFixed(2)); // Set annual premium with two decimal places
    }

    // Trigger updateAnnualPremium function when Total Premium or Term value changes
    $('#total_premium2, #term_months2, #state_fee_mvca2, #policy_fee2, #roadside_assistance_fee2, #sr222, #other_fee2').on('input change', function() {
        updateAnnualPremium();
    });


    });
</script>

{{-- part 2 end --}}

<script>
    $(document).ready(function() {
    // Function to validate input fields
    function validateField(inputId, errorId) {
        var value = $(inputId).val();
        if (value.length > 1) {
            $(errorId).show();  // Show error if more than 1 digit
            return false;
        } else {
            $(errorId).hide();  // Hide error if valid
            return true;
        }
    }

    // Validate each field on input
    $('#insuredItems').on('input', function() {
        validateField('#insuredItems', '#insuredItemsError');
    });

    $('#insuredDrivers').on('input', function() {
        validateField('#insuredDrivers', '#insuredDriversError');
    });

    $('#excludedDrivers').on('input', function() {
        validateField('#excludedDrivers', '#excludedDriversError');
    });

    $('#lien').on('input', function() {
        validateField('#lien', '#lienError');
    });

    // Optionally, validate on form submit
    $('form').on('submit', function(e) {
        var valid1 = validateField('#insuredItems', '#insuredItemsError');
        var valid2 = validateField('#insuredDrivers', '#insuredDriversError');
        var valid3 = validateField('#excludedDrivers', '#excludedDriversError');
        var valid4 = validateField('#lien', '#lienError');

        // if (!valid1 || !valid2 || !valid3 || !valid4) {
        //     e.preventDefault(); // Prevent form submission if any field is invalid
        // }
    });
});

</script>

{{-- make payment show --}}
<script>
    $(document).ready(function () {
        // Function to handle radio button and checkbox logic
        function toggleActionDivs() {
            // Check if "Add To Do List" checkbox is checked
            if ($('#TodoAction').is(':checked')) {
                $('#makepaymentDiv').hide();  // Hide the make payment div
                $('#makeChangeDiv').hide();   // Hide the make change div
                // $('#toDoListNew').show();  

                
            } else {
                // If "Add To Do List" is unchecked, show divs based on selected radio
                if ($('#makePayment').is(':checked')) {
                    $('#makepaymentDiv').show();
                    // $('#toDoListNew').hide();  

                } else {
                    $('#makepaymentDiv').hide();
                }

                if ($('#makeChange').is(':checked')) {
                    $('#makeChangeDiv').show();
                    // $('#toDoListNew').show();  

                } else {
                    $('#makeChangeDiv').hide();
                }
            }

            if ($('#TodoAction').is(':checked') || $('#makeChange').is(':checked')) {
                $('#toDoListNew').show();  
                
            }
            else {
                $('#toDoListNew').hide();  
            }
        }

        // Attach change events to the radio buttons and checkbox
        $('input[name="actionType"]').on('change', toggleActionDivs);
        $('#TodoAction').on('change', toggleActionDivs);
        
        // Initialize the divs based on initial state
        toggleActionDivs();
    });

</script>


<script>
    $(document).ready(function() {
    // Function to validate date fields
    function validateDateField(inputId, errorId) {
        var dateValue = $(inputId).val();
        if (!isValidDate(dateValue)) {
            $(errorId).show();  // Show error if invalid
            return false;
        } else {
            $(errorId).hide();  // Hide error if valid
            return true;
        }
    }

    // Function to check if a string is a valid date
    function isValidDate(dateString) {
        // Create a new Date object from the date string
        var date = new Date(dateString);
        // Check if the date is valid by comparing the original string to the formatted date
        return !isNaN(date.getTime()) && dateString === date.toISOString().split('T')[0];
    }

    // Validate on input
    $('#effectiveDate').on('input', function() {
        validateDateField('#effectiveDate', '#effectiveDateError');
    });

    $('#expirationDate').on('input', function() {
        validateDateField('#expirationDate', '#expirationDateError');
    });

    // Optionally, validate on form submit
    $('form').on('submit', function(e) {
        var valid1 = validateDateField('#effectiveDate', '#effectiveDateError');
        var valid2 = validateDateField('#expirationDate', '#expirationDateError');

        // if (!valid1 || !valid2) {
        //     e.preventDefault(); // Prevent form submission if invalid
        // }
    });
});

</script>

{{-- ajax request --}}
<script>

$(document).ready(function () {

    // When a policy item is clicked
    $(document).on('click', '.policy-item', function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        var policyName = $(this).text();
        var policyId = $(this).data('value');
        
        // Set the input value to the selected policy name
        // $('#policySearch').val(policyName);
        
        // Set the hidden policy_id field
        $('#hiddenPolicyId').val(policyId);

        // Hide the dropdown
        $('#policyDropdown').hide();

        // AJAX request to fetch policy details
        $.ajax({
            url: '/api/AgentNew/getPolicy/' + policyId,
            type: 'GET',
            success: function (response) {
                if (response.status === 'success') {
                    var policy2 = response.policy2;
                    
                    // Now you can use the policy object to update the fields
                    console.log(policy2); // For debugging

                    $('#type_of_customer').val(policy2.type_of_customer);
                    $('#phone123').val(policy2.phone);

                    // Example: Update fields dynamically with policy data
                    // $('#first_name').val(policy2.first_name);
                    // $('#middle_name').val(policy2.middle_name);
                    // $('#last_name').val(policy2.last_name);

                    // search policy
                    $('#policySearch').val(policy2.first_name + ' ' + policy2.last_name );

                    // card make payment
                    $('#first_name2').val(policy2.first_name);
                    $('#middle_name2').val(policy2.middle_name);
                    $('#last_name2').val(policy2.last_name);

                    $('#preferred_name2').val(policy2.preferred_name);
                    $('#carrier2').val(policy2.carrier);  // select
                    $('#policy_number2').val(policy2.policy_number);
                    $('#type_of_policy2').val(policy2.type_of_policy); // select

                    $('#effectiveDate2').val(policy2.effective_date);
                    $('#expirationDate2').val(policy2.expiration_date);

                    $('#term_months2').val(policy2.term_months);
                    $('#due_date2').val(policy2.due_date);
                    $('#amount_due2').val(policy2.amount_due);
                    $('#amount_paid_cc2').val(policy2.amount_paid_cc);
                    $('#amount_paid_cash2').val(policy2.amount_paid_cash);
                    $('#direct_pay2').val(policy2.direct_pay);
                    $('#name_on_card2').val(policy2.name_on_card);
                    $('#debit_card2').val(policy2.debit_card);
                    $('#number_1st_42').val(policy2.number_1st_4);
                    $('#number_2nd_42').val(policy2.number_2nd_4);
                    $('#number_3rd_42').val(policy2.number_3rd_4);
                    $('#number_4th_42').val(policy2.number_4th_4);
                    $('#expiration_12').val(policy2.expiration_1);
                    $('#expiration_22').val(policy2.expiration_2);
                    $('#billing_zip2').val(policy2.billing_zip);
                    $('#cvc2').val(policy2.cvc);
                 
                    

                    

                    




                    // card make change
                    $('#first_name3').val(policy2.first_name);
                    $('#middle_name3').val(policy2.middle_name);
                    $('#last_name3').val(policy2.last_name);

                    $('#preferred_name3').val(policy2.preferred_name);
                    $('#carrier3').val(policy2.carrier);  // select
                    $('#policy_number3').val(policy2.policy_number);
                    $('#type_of_policy3').val(policy2.type_of_policy); // select
                    $('#effectiveDate3').val(policy2.effectiveDate);
                    $('#expirationDate3').val(policy2.expirationDate);
                    $('#term_months3').val(policy2.term_months);
                    $('#due_date3').val(policy2.due_date);
                    $('#amount_due3').val(policy2.amount_due);
                    $('#amount_paid_cc3').val(policy2.amount_paid_cc);
                    $('#amount_paid_cash3').val(policy2.amount_paid_cash);
                    $('#direct_pay3').val(policy2.direct_pay);
                    $('#name_on_card3').val(policy2.name_on_card);
                    $('#debit_card3').val(policy2.debit_card);
                    $('#number_1st_43').val(policy2.number_1st_4);
                    $('#number_2nd_43').val(policy2.number_2nd_4);
                    $('#number_3rd_43').val(policy2.number_3rd_4);
                    $('#number_4th_43').val(policy2.number_4th_4);
                    $('#expiration_13').val(policy2.expiration_1);
                    $('#expiration_23').val(policy2.expiration_2);
                    $('#billing_zip3').val(policy2.billing_zip);
                    $('#cvc3').val(policy2.cvc);


                    $('#autopay3').val(policy2.autopay);
                    $('#Active3').val(policy2.Active);
                    $('#email3').val(policy2.email);
                    $('#phone3').val(policy2.phone);
                    $('#zip3').val(policy2.zip);

                    $('#insuredItems3').val(policy2.insuredItems);
                    $('#insuredDrivers3').val(policy2.insuredDrivers);
                    $('#excludedDrivers3').val(policy2.excludedDrivers);
                    $('#lien3').val(policy2.lien);

                    $('#base_premium3').val(policy2.base_premium);
                    $('#state_fee_mvca3').val(policy2.state_fee_mvca);
                    $('#policy_fee3').val(policy2.policy_fee);
                    $('#roadside_assistance_fee3').val(policy2.roadside_assistance_fee);
                    $('#sr223').val(policy2.sr22);
                    $('#other_fee3').val(policy2.other_fee);
                    $('#total_premium3').val(policy2.total_premium);
                    $('#annual_premium3').val(policy2.annual_premium);
                    $('#notes3').val(policy2.notes);
                    $('#due_date3').val(policy2.due_date);
                    $('#amount_due3').val(policy2.amount_due);



                    // new policy
                    $('#first_name').val(policy2.first_name);
                    $('#middle_name').val(policy2.middle_name);
                    $('#last_name').val(policy2.last_name);

                    $('#preferred_name').val(policy2.preferred_name);
                    $('#carrier').val(policy2.carrier);  // select
                    $('#policy_number').val(policy2.policy_number);
                    $('#type_of_policy').val(policy2.type_of_policy); // select
                    $('#effectiveDate').val(policy2.effectiveDate);
                    $('#expirationDate').val(policy2.expirationDate);
                    $('#term_months').val(policy2.term_months);
                    $('#due_date').val(policy2.due_date);
                    $('#amount_due').val(policy2.amount_due);
                    $('#amount_paid_cc').val(policy2.amount_paid_cc);
                    $('#amount_paid_cash').val(policy2.amount_paid_cash);
                    $('#direct_pay').val(policy2.direct_pay);
                    $('#name_on_card').val(policy2.name_on_card);
                    $('#debit_card').val(policy2.debit_card);
                    $('#number_1st_4').val(policy2.number_1st_4);
                    $('#number_2nd_4').val(policy2.number_2nd_4);
                    $('#number_3rd_4').val(policy2.number_3rd_4);
                    $('#number_4th_4').val(policy2.number_4th_4);
                    $('#expiration_1').val(policy2.expiration_1);
                    $('#expiration_2').val(policy2.expiration_2);
                    $('#billing_zip').val(policy2.billing_zip);
                    $('#cvc').val(policy2.cvc);


                    $('#autopay').val(policy2.autopay);
                    $('#Active').val(policy2.Active);
                    $('#email').val(policy2.email);
                    $('#phone').val(policy2.phone);
                    $('#zip').val(policy2.zip);

                    $('#insuredItems').val(policy2.insuredItems);
                    $('#insuredDrivers').val(policy2.insuredDrivers);
                    $('#excludedDrivers').val(policy2.excludedDrivers);
                    $('#lien').val(policy2.lien);

                    $('#base_premium').val(policy2.base_premium);
                    $('#state_fee_mvca').val(policy2.state_fee_mvca);
                    $('#policy_fee').val(policy2.policy_fee);
                    $('#roadside_assistance_fee').val(policy2.roadside_assistance_fee);
                    $('#sr22').val(policy2.sr22);
                    $('#other_fee').val(policy2.other_fee);
                    $('#total_premium').val(policy2.total_premium);
                    $('#annual_premium').val(policy2.annual_premium);
                    $('#notes').val(policy2.notes);
                    $('#due_date').val(policy2.due_date);
                    $('#amount_due').val(policy2.amount_due);

                    
                    $('#FirstName').val(policy2.first_name);
                    $('#LastName').val(policy2.last_name);
                    $('#Phone').val(policy2.phone);


                    // ... add more fields as needed
                    
                } else {
                    alert(response.message);
                }
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);  // Log the full response
                console.log(status);            // Log status
                console.log(error);             // Log error
                alert('An error occurred while fetching the policy data.');
            }

        });

     

    });
});
</script>


@endsection
