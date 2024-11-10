@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">


    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title">Log History </h4>
         <p class="card-description"></p>


         <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="card-title">Name Agent</th>
                        <th class="card-title">Medium of Contact</th>
                        <th class="card-title">Contact Name</th>
                        <th class="card-title">Contact Number</th>
                        <th class="card-title">Reason for Contact</th>
                        <th class="card-title">Office Hours / Address</th>
                        <th class="card-title">Lien Holder Confirmation</th>
                        <th class="card-title">Premium Due Info</th>
                        <th class="card-title">Quote</th>
                        <th class="card-title">Collect Rating Info</th>
                        <th class="card-title">Add New Policy</th>
                        <th class="card-title">Make Payment</th>
                        <th class="card-title">Policy Change</th>
                        <th class="card-title">Schedule Appointment</th>
                        <th class="card-title">Appointment Date</th>
                        <th class="card-title">Appointment Time</th>
                        <th class="card-title">Office</th>
                        <th class="card-title">Call</th>
                        <th class="card-title">Notes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $agent)
                    <tr>
                        <td>{{ $agent->name_agent }}</td>
                        <td>{{ $agent->medium_of_contact }}</td>
                        <td>{{ $agent->contact_name }}</td>
                        <td>{{ $agent->contact_number }}</td>
                        <td>{{ $agent->reason_for_contact }}</td>
                        <td>{{ $agent->office_hours_address }}</td>
                        <td>{{ $agent->lien_holder_confirmation }}</td>
                        <td>{{ $agent->premium_due_info }}</td>
                        <td>{{ $agent->quote }}</td>
                        <td>{{ $agent->collect_rating_info }}</td>
                        <td>{{ $agent->add_new_policy }}</td>
                        <td>{{ $agent->make_payment }}</td>
                        <td>{{ $agent->policy_change }}</td>
                        <td>{{ $agent->schedule_appointment }}</td>
                        <td>{{ $agent->appointment_date }}</td>
                        <td>{{ $agent->appointment_time }}</td>
                        <td>{{ $agent->office }}</td>
                        <td>{{ $agent->call }}</td>
                        <td>{{ $agent->notes }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
       
        


<br>


</div></div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



@endsection
