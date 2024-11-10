@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">
<form action="{{ url('Agent/new/create')}}" method="post" enctype="multipart/form-data">
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

        <h4 class="card-title">Agent / CSR Portal  </h4>
         <p class="card-description">Agent / CSR  Info</p>

   
         <div class="row">

            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="name_agent">Name Agent</label>
                    <div id="name_agent">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="agent_nadia" name="name_agent" value="Nadia">
                            <label class="form-check-label" for="agent_nadia">
                                Nadia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="agent_kiren" name="name_agent" value="Kiren">
                            <label class="form-check-label" for="agent_kiren">
                                Kiren
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="agent_amara" name="name_agent" value="Amara">
                            <label class="form-check-label" for="agent_amara">
                                Amara
                            </label>
                        </div>
                    </div>
                </div>
            </div> --}}


            <div class="col-md-6">
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
            </div>
            

         

        </div>
        
        <div class="row">

            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="contact_name">Contact Name</label>
                    <input type="text" class="form-control" id="contact_name" name="contact_name" value="{{ old('contact_name') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="number" class="form-control" id="contact_number" name="contact_number" value="{{ old('contact_number') }}">
                </div>
            </div> --}}

            <div class="col-md-6">
                <div class="form-group">
                    <label for="LastName">Last Name</label>
                    <input type="text" class="form-control" id="LastName" name="LastName" value="{{ old('LastName') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="FirstName">First Name</label>
                    <input type="number" class="form-control" id="FirstName" name="FirstName" value="{{ old('FirstName') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="Phone">Phone</label>
                    <input type="number" class="form-control" id="Phone" name="Phone" value="{{ old('Phone') }}">
                </div>
            </div>


        </div>
        


<br>



</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <div class="row">
         
            <div class="col-md-4">
                <div class="form-group" style="margin-left: 0px;">
                    <span style="margin-right: 10px;"></span>
                    <input type="checkbox" class="form-check-input" id="GeneralQuestion" name="GeneralQuestion" value="1" {{ old('GeneralQuestion') ? 'checked' : '' }} style="margin-right: 5px;">

                    <label for="GeneralQuestion" style="margin-top: 6px;">General Question</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <span style="margin-right: 10px;"></span>
                    <input type="checkbox"  class="form-check-input" id="AddNewPolicy" name="AddNewPolicy" value="1" {{ old('AddNewPolicy') ? 'checked' : '' }} style="margin-right: 5px;">

                    <label for="AddNewPolicy" style="margin-top: 6px;">Add New Policy</label>
                </div>
            </div>
        </div>


</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <div class="row">
            <!-- New Lead Field -->
            <div class="col-md-6 mb-3">
                <label for="newLead" class="form-label">New Lead</label>
                <input type="text" class="form-control" id="newLead" placeholder="Enter new lead">
            </div>
        
            <!-- Rate Field -->
            <div class="col-md-6 mb-3">
                <label for="rate" class="form-label">Rate</label>
                <input type="text" class="form-control" id="rate" placeholder="Enter rate">
            </div>
        </div>
        
        <div class="row">
            <!-- DL # Field -->
            <div class="col-md-6 mb-3">
                <label for="dlNumber" class="form-label">DL #</label>
                <input type="text" class="form-control" id="dlNumber" placeholder="Enter DL number">
            </div>
        
            <!-- DOB Field -->
            <div class="col-md-6 mb-3">
                <label for="dob" class="form-label">DOB</label>
                <input type="date" class="form-control" id="dob" placeholder="Enter date of birth">
            </div>
        </div>
        
        <div class="row">
            <!-- Add To Leads Checkbox -->
            <div class="col-md-6 mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="addToLeads">
                    <label class="form-check-label" for="addToLeads">
                        Add To Leads
                    </label>
                </div>
            </div>
        </div>
        

</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <div class="row">
            <!-- Existing Client Search Field -->
            <div class="col-md-6 mb-3">
                <label for="policySearch" class="form-label">Existing Client</label>
                <input type="text" class="form-control" id="policySearch" placeholder="Search client">
                <ul class="list-group mt-2" id="policyDropdown">
                    <li class="list-group-item disabled">Start typing to search policies...</li>
                    @foreach($policy as $pol)
                        <li class="list-group-item policy-item" data-value="{{ $pol->id }}">
                            {{ $pol->first_name }} {{ $pol->middle_name }} {{ $pol->last_name }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <input type="hidden" id="hiddenPolicyId" name="policy_id">


            <style>
                #policyDropdown {
                    display: none;
                    max-height: 200px;
                    overflow-y: auto;
                    cursor: pointer;
                }
                .policy-item {
                    display: none;
                }
                .policy-item:hover {
                    background-color: #f1f1f1;
                }

            </style>


            {{-- <select style="display: none"  class="form-control" id="policyHiddenlist">
                @foreach($policy as $pol)
                    <option value="{{ $pol->id }}">{{ $pol->first_name }} {{ $pol->middle_name }} {{ $pol->last_name }}</option>
                @endforeach
            </select> --}}

        </div>
        
        <div class="row">
            <!-- Make Change Checkbox -->
            <div class="col-md-6 mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="makeChange">
                    <label class="form-check-label" for="makeChange">
                        Make Change
                    </label>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="MakePayment">
                    <label class="form-check-label" for="MakePayment">
                        Make Payment
                    </label>
                </div>
            </div>
        
            <!-- Add To Do List Checkbox -->
            <div class="col-md-6 mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="addToDoList">
                    <label class="form-check-label" for="addToDoList">
                        Add To Do List
                    </label>
                </div>
            </div>

           

        </div>
        


</div></div>

{{-- policy Change Div div --}}
<div id="policyChangeDiv" style="display: none">

    {{-- <div class="card my-2">
        <div class="card-body">
       
                
            <input type="hidden" name="policy_id" value="{{ $data->id }}">

            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="person" id="nadia" value="Nadia">
                        <label class="form-check-label" for="nadia">Nadia</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="person" id="kiren" value="Kiren">
                        <label class="form-check-label" for="kiren">Kiren</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="person" id="amara" value="Amara">
                        <label class="form-check-label" for="amara">Amara</label>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="card my-2">
        <div class="card-body">

            <h4 class="card-title">Change Policy</h4>
            {{-- <p class="card-description">Agent/ CSR</p> --}}

             
                
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" value="" placeholder="Enter First Name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="last_name">Middle Name</label>
                        <input type="text" name="middle_name" id="middle_name" class="form-control" value="" placeholder="Enter Middle Name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" value="" placeholder="Enter Last Name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="last_name">Policy Type</label>
                        <input type="text" name="PolicyType" id="PolicyType" class="form-control" value="" placeholder="Enter Policy Type">
                    </div>
                </div>

              

            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="carrier">Carrier</label>
                        <input type="text" name="carrier" id="carrier" class="form-control" value="" placeholder="Enter Carrier">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="policy_number">Policy #</label>
                        <input type="text" name="policy_number" id="policy_number" class="form-control" value="" placeholder="Enter Policy Number">
                    </div>
                </div>
            </div>
        </div>
    </div>

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

                <div class="row">
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
            </div>
        </div>

        <!-- Coverage Options and Additional Info Section -->
        <div class="card my-2">
            <div class="card-body">
                <div class="row">
    

                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label>
                                <input type="radio" name="change_option" value="liability"> Liability
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label>
                                <input type="radio" name="change_option" value="comp_collision"> Comp/Collision
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label>
                                <input type="radio" name="add_lien" value="add_lien"> Add Lien
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label>
                                <input type="radio" name="remove_lien" value="remove_lien"> Remove Lien
                            </label>
                        </div>

                    </div>


                </div>

                <div class="row">

                    {{-- <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="effective_date">Effective Date</label>
                            <input type="date" class="form-control" id="effective_date" name="effective_date">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="annual_premium">Annual Premium</label>
                            <input type="text" class="form-control" id="annual_premium" name="annual_premium" placeholder="Enter Annual Premium">
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>

           <!-- Additional Notes -->
           <div class="card my-2">
            <div class="card-body">


                <div class="row">
                    <!-- Number Field for New Phone Number -->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="new_phone_number">New Phone Number</label>
                            <input type="number" class="form-control" id="new_phone_number" name="new_phone_number" placeholder="Enter New Phone Number">
                        </div>
                    </div>
                
                    <!-- Text Field for New Email -->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="new_email">New Email</label>
                            <input type="email" class="form-control" id="new_email" name="new_email" placeholder="Enter New Email">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <!-- Text Field for New Address -->
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="new_address">New Address</label>
                            <input type="text" class="form-control" id="new_address" name="new_address" placeholder="Enter New Address">
                        </div>
                    </div>
                </div>

                {{-- test --}}
                <div class="form-group">
                    <label for="notes">Notes</label>
                    <textarea name="notes" id="notes" class="form-control" rows="5" placeholder="Enter any additional information"></textarea>
                </div>

            </div>
        </div>


</div>
{{-- policy Change Div end --}}

{{-- payment div --}}

<div id="PaymentDiv" style="display: none">

    <div class="card my-2" id="cloneILPContainer">
        <div class="card-body">
    
            <h4 class="card-title">Make Payment </h4>
            <p class="card-description"></p>
    
            <div class="row">
                <div class="col-md-4 mb-4">
                    {{-- <label for="autopay">Autopay</label> --}}
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="autopay" name="autopay">
                        <label class="form-check-label" for="autopay">Autopay</label>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    {{-- <label for="autopay">Autopay</label> --}}
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Active" name="Active">
                        <label class="form-check-label" for="Active">Active</label>
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
    
            <div class="row">
                <div class="col-md-4 mb-4">
                    <label for="TypeofCustomer">Type of Customer</label>
                    <input type="text" class="form-control" id="TypeofCustomer" name="TypeofCustomer" value="{{ old('TypeofCustomer') }}">
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

                <div class="col-md-4 mb-4">
                    <div class="form-group">
                        <label for="carrier">Carrier</label>
                        <input type="text" name="carrier" id="carrier" class="form-control" value="" placeholder="Enter Carrier">
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="form-group">
                        <label for="policy_number">Policy #</label>
                        <input type="text" name="policy_number" id="policy_number" class="form-control" value="" placeholder="Enter Policy Number">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="form-group">
                        <label for="last_name">Policy Type</label>
                        <input type="text" name="PolicyType" id="PolicyType" class="form-control" value="" placeholder="Enter Policy Type">
                    </div>
                </div>


            </div>

            
            
    
    </div></div>

    <div class="card my-2" id="cloneILPContainer">
        <div class="card-body">
    
            <p class="card-description">Paid Today</p>
    

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
    
            <p class="card-description">Card Info</p>

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
    
          
            
    
    </div></div>


    <div class="card my-2" id="cloneILPContainer">
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
    
            <p class="card-description">Items</p>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="insuredItems" class="form-label">Insured Items</label>
                    <input type="number" class="form-control" id="insuredItems" placeholder="Enter number">
                </div>
                <div class="col-md-4">
                    <label for="insuredDrivers" class="form-label">Insured Drivers</label>
                    <input type="number" class="form-control" id="insuredDrivers" placeholder="Enter number">
                </div>
                <div class="col-md-4">
                    <label for="excludedDrivers" class="form-label">Excluded Drivers</label>
                    <input type="number" class="form-control" id="excludedDrivers" placeholder="Enter number">
                </div>
            </div>
        
            <!-- Second row: Lien Checkbox -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="lien">
                        <label class="form-check-label" for="lien">Lien</label>
                    </div>
                </div>
            </div>


            <p class="card-description">Term </p>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="effectiveDate" class="form-label">Effective Date</label>
                    <input type="date" class="form-control" id="effectiveDate">
                </div>
                <div class="col-md-4">
                    <label for="expirationDate" class="form-label">Expiration Date</label>
                    <input type="date" class="form-control" id="expirationDate">
                </div>
                <div class="col-md-4">
                    <label for="term" class="form-label">Term (Months)</label>
                    <select class="form-control" id="term">
                        <option value="1">1 Month</option>
                        <option value="6">Semi-Annual (6 Months)</option>
                        <option value="12">Annual (12 Months)</option>
                    </select>
                </div>
            </div>
        

    </div></div>


    <div class="card my-2" id="cloneILPContainer">
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

    <div class="card my-2" id="cloneILPContainer">
        <div class="card-body">
            
            <p class="card-description">Files </p>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="docsave" class="form-label">Docsave</label>
                    <input type="file" class="form-control" id="docsave" accept=".doc, .docx, .pdf">
                </div>
                <div class="col-md-4">
                    <label for="proofUpload" class="form-label">Proof Upload</label>
                    <input type="file" class="form-control" id="proofUpload" accept=".doc, .docx, .pdf">
                </div>
                <div class="col-md-4">
                    <label for="pictureUpload" class="form-label">Picture Upload</label>
                    <input type="file" class="form-control" id="pictureUpload" accept="image/*">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="addToDoList">
                        <label class="form-check-label" for="addToDoList">Add To Do List</label>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-8">
                    <label for="toDoListNotes" class="form-label">To Do List Notes</label>
                    <textarea class="form-control" id="toDoListNotes" rows="4" placeholder="Enter notes"></textarea>
                </div>
            </div>

    </div></div>

</div>
{{-- payment div end --}}


<button type="submit" class="btn btn-primary mr-2" >Submit </button> 

</form>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
{{-- show hide div --}}
<script>
$(document).ready(function () {
    // Attach a change event listener to the checkbox
    $('#makeChange').change(function () {
        // If the checkbox is checked, show the div, otherwise hide it
        if ($(this).is(':checked')) {
            $('#policyChangeDiv').show();
        } else {
            $('#policyChangeDiv').hide();
        }
    });

    $('#MakePayment').change(function () {
        // If the checkbox is checked, show the div, otherwise hide it
        if ($(this).is(':checked')) {
            $('#PaymentDiv').show();
        } else {
            $('#PaymentDiv').hide();
        }
    });
});

</script>

<script>
    $(document).ready(function() {
        // Check if the checkbox is already checked (preserve state when page is reloaded)
        if ($('#schedule_appointment').is(':checked')) {
            $('#appointment_details').show(); // Show if checkbox is checked
        }

        // Toggle visibility on checkbox change
        $('#schedule_appointment').on('change', function() {
            if ($(this).is(':checked')) {
                $('#appointment_details').show(); // Show appointment fields
            } else {
                $('#appointment_details').hide(); // Hide appointment fields
            }
        });
    });

</script>

<script>
    $(document).ready(function () {
    // Store the original list of policies
    var originalPolicies = $('#policyDropdown').html();

    $('#policySearch').on('input', function () {
        var searchValue = $(this).val().toLowerCase();

        // Show or hide the dropdown based on input value
        if (searchValue.length > 0) {
            $('#policyDropdown').show();
        } else {
            // Restore the original list if search input is cleared
            $('#policyDropdown').html(originalPolicies);
            $('#policyDropdown').hide();
            return;
        }

        // Filter the policies
        var hasVisiblePolicies = false;
        $('.policy-item').each(function () {
            var policyText = $(this).text().toLowerCase();
            if (policyText.includes(searchValue)) {
                $(this).show();
                hasVisiblePolicies = true;
            } else {
                $(this).hide();
            }
        });

        // If no policies match, show a "No results" message, otherwise restore original list
        if (!hasVisiblePolicies) {
            $('#policyDropdown').html('<li class="list-group-item disabled">No results found</li>');
        }
    });

    // Handle clicking on a policy item
    $(document).on('click', '.policy-item', function () {
        var policyName = $(this).text();
        var policyId = $(this).data('value');
        
        // Set the input value to the selected policy name
        $('#policySearch').val(policyName);

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

@endsection
