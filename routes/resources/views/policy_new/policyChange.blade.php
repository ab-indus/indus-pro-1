@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">
<form action="{{ url('Policy/new/create')}}" method="post" enctype="multipart/form-data">
@csrf



<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title">Change Policy </h4>
        <p class="card-description">Policy Info</p>

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



</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">
        
  
        <div class="row">
            <!-- First Name -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" value="{{ old('first_name') }}">
                </div>
            </div>
        
            <!-- Last Name -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" value="{{ old('last_name') }}">
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Carrier -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="carrier">Carrier</label>
                    <input type="text" name="carrier" id="carrier" class="form-control" placeholder="Enter Carrier" value="{{ old('carrier') }}">
                </div>
            </div>
        
            <!-- Policy # -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="policy_number">Policy #</label>
                    <input type="text" name="policy_number" id="policy_number" class="form-control" placeholder="Enter Policy Number" value="{{ old('policy_number') }}">
                </div>
            </div>
        </div>
        

</div></div>









<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <div class="row">
            <div class="col-md-12">
                <label>Driver Actions</label>
                <div class="row">
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="driver_action" id="delete_driver" value="delete_driver">
                            <label class="form-check-label" for="delete_driver">Delete Driver</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="driver_action" id="add_driver" value="add_driver">
                            <label class="form-check-label" for="add_driver">Add Driver</label>
                        </div>
                    </div>
                    <div class="col-4">
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
            <div class="col-6">
                <div class="form-group">
                    <label for="driver_name">Driver Name</label>
                    <input type="text" class="form-control" id="driver_name" name="driver_name" placeholder="Enter Driver Name">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="dl">DL</label>
                    <input type="text" class="form-control" id="dl" name="dl" placeholder="Enter DL">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="vehicle_option" id="add_vehicle" value="add">
                        <label class="form-check-label" for="add_vehicle">
                            Add Vehicle
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="vehicle_option" id="delete_vehicle" value="delete">
                        <label class="form-check-label" for="delete_vehicle">
                            Delete Vehicle
                        </label>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="row">
            <!-- Text Field for VIN -->
            <div class="col-6">
                <div class="form-group">
                    <label for="vin">VIN</label>
                    <input type="text" class="form-control" id="vin" name="vin" placeholder="Enter VIN">
                </div>
            </div>
        
            <!-- Calendar for Year -->
            <div class="col-6">
                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="date" class="form-control" id="year" name="year">
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Number Field for Make -->
            <div class="col-6">
                <div class="form-group">
                    <label for="make">Make</label>
                    <input type="number" class="form-control" id="make" name="make" placeholder="Enter Make">
                </div>
            </div>
        
            <!-- Text Field for Model -->
            <div class="col-6">
                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" id="model" name="model" placeholder="Enter Model">
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <!-- Radio button for Coverage -->
            <div class="col-3">
                <div class="form-group">
                    <label>
                        <input type="radio" name="change_option" value="coverage">
                        Coverage
                    </label>
                </div>
            </div>
        
            <!-- Radio button for Liability -->
            <div class="col-3">
                <div class="form-group">
                    <label>
                        <input type="radio" name="change_option" value="liability">
                        Liability
                    </label>
                </div>
            </div>
        
            <!-- Radio button for Comp/Collision -->
            <div class="col-3">
                <div class="form-group">
                    <label>
                        <input type="radio" name="change_option" value="comp_collision">
                        Comp/Collision
                    </label>
                </div>
            </div>
        
            <!-- Radio button for Other Change -->
            <div class="col-3">
                <div class="form-group">
                    <label>
                        <input type="radio" name="change_option" value="other_change">
                        Other Change
                    </label>
                </div>
            </div>
        </div>
        
        
        <div class="row">
            <!-- Number Field for New Phone Number -->
            <div class="col-6">
                <div class="form-group">
                    <label for="new_phone_number">New Phone Number</label>
                    <input type="number" class="form-control" id="new_phone_number" name="new_phone_number" placeholder="Enter New Phone Number">
                </div>
            </div>
        
            <!-- Text Field for New Email -->
            <div class="col-6">
                <div class="form-group">
                    <label for="new_email">New Email</label>
                    <input type="email" class="form-control" id="new_email" name="new_email" placeholder="Enter New Email">
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Text Field for New Address -->
            <div class="col-6">
                <div class="form-group">
                    <label for="new_address">New Address</label>
                    <input type="text" class="form-control" id="new_address" name="new_address" placeholder="Enter New Address">
                </div>
            </div>
        
            <!-- Notes Field -->
            <div class="col-6">
                <div class="form-group">
                    <label for="notes">Notes</label>
                    <textarea class="form-control" id="notes" name="notes" rows="4" placeholder="Enter Notes"></textarea>
                </div>
            </div>
        </div>
        

</div></div>







<button type="submit" class="btn btn-primary mr-2" >Submit </button> 
</form>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>




    

@endsection
