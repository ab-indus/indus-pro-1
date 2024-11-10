@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">


    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title">Policy Change History </h4>
         <p class="card-description">List of all Policy Changes</p>


         <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        {{-- <th class="card-title">Timestamp</th> --}}
                        <th class="card-title">Timestamp</th>
                        <th class="card-title">Agent/CSR</th>
                        <th class="card-title">First Name</th>
                        <th class="card-title">Last Name</th>
                        <th class="card-title">Carrier</th>
                        <th class="card-title">Policy #</th>
                        <th class="card-title">Auto Pay</th>

                        
                        <th class="card-title">Delete/Add/Exclude Driver</th>
                        <th class="card-title">Driver Name</th>
                        <th class="card-title">DL</th>
                        <th class="card-title">Add/Delete Vehicle</th>
                        <th class="card-title">Vin</th>
                        <th class="card-title">Year</th>
                        <th class="card-title">Make</th>
                        <th class="card-title">Model</th>
                        <th class="card-title">Liability</th>
                        <th class="card-title">Comp/Collision</th>
                        <th class="card-title">New Phone Number</th>
                        <th class="card-title">New Email</th>
                        <th class="card-title"> New Address</th>
                        <th class="card-title">Notes</th>
                  
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $change)
                    <tr>
                        <td>{{ $change->created_at }}</td> <!-- Timestamp -->
                        <td>{{ $change->agent_csr ?? 'N/A' }}</td> <!-- Agent/CSR, replace with actual field if exists -->
                        <td>{{ $change->first_name }}</td>
                        <td>{{ $change->last_name }}</td>
                        <td>{{ $change->carrier }}</td>
                        <td>{{ $change->policy_number }}</td>
                        <td> {!! $change->AutoPayBox == 'on' ? '✅' : '❌' !!}</td>

                        
                        <td>{{ $change->driver_action }}</td> <!-- Delete/Add/Exclude Driver -->
                        <td>{{ $change->driver_name }}</td>
                        <td>{{ $change->dl }}</td>
                        <td>{{ $change->vehicle_option }}</td> <!-- Add/Delete Vehicle -->
                        <td>{{ $change->vin }}</td>
                        <td>{{ $change->year }}</td>
                        <td>{{ $change->make }}</td>
                        <td>{{ $change->model }}</td>
                        <td>{{ $change->change_option == 'liability' ? 'Yes' : 'No' }}</td> <!-- Liability -->
                        <td>{{ $change->change_option == 'comp_collision' ? 'Yes' : 'No' }}</td> <!-- Comp/Collision -->
                        <td>{{ $change->new_phone_number }}</td>
                        <td>{{ $change->new_email }}</td>
                        <td>{{ $change->new_address }}</td>
                        <td>{{ $change->notes }}</td>
                    </tr>
                    @endforeach
          
                </tbody>
            </table>
        </div>
        
       
        


<br>


</div></div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



@endsection
