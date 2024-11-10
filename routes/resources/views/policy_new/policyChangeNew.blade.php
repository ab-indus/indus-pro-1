@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
    <form action="{{ url('Policy/change' ,$data->id) }}" method="Post" enctype="multipart/form-data">
        @csrf

        <div class="card my-2">
            <div class="card-body">
                <h4 class="card-title">Change Policy</h4>
                <p class="card-description">Agent/ CSR</p>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    
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
                </div>{{-- payment div --}}

            </div>
        </div>

        <!-- First Name, Last Name Section -->
        <div class="card my-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $data->first_name }}" placeholder="Enter First Name">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $data->last_name }}" placeholder="Enter Last Name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="carrier">Carrier</label>
                            <input type="text" name="carrier" id="carrier" class="form-control" value="{{ $data->carrier }}" placeholder="Enter Carrier">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="policy_number">Policy #</label>
                            <input type="text" name="policy_number" id="policy_number" class="form-control" value="{{ $data->id }}" placeholder="Enter Policy Number">
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
                                <input type="radio" name="change_option" value="coverage"> Coverage
                            </label>
                        </div>
                    </div>
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
                                <input type="radio" name="change_option" value="other_change"> Other Change
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6">
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
                    </div>
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

                <div class="form-group">
                    <label for="notes">Notes</label>
                    <textarea name="notes" id="notes" class="form-control" rows="5" placeholder="Enter any additional information">{{ $data->notes }}</textarea>
                </div>

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
