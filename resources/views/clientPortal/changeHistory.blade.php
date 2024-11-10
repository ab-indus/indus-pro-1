@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">



    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title">Client Change History </h4>
         <p class="card-description"></p>


         <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="card-title">Timestamp</th>
                        <th class="card-title">Agents</th>
                        <th class="card-title">First Name</th>
                        <th class="card-title">Last Name</th>
                        <th class="card-title">Phone</th>
                        <th class="card-title">Carrier</th>
                        <th class="card-title">Policy #</th>
                        <th class="card-title">Auto Pay</th>
                        <th class="card-title">Driver</th>
                        <th class="card-title">Driver Name</th>
                        <th class="card-title">DL</th>
                        <th class="card-title">Vehicle</th>
                        <th class="card-title">Vin</th>
                        <th class="card-title">Year</th>
                        <th class="card-title">Make</th>
                        <th class="card-title">Model</th>
                        <th class="card-title">Coverage</th>
                        <th class="card-title">Lien</th>
                        <th class="card-title">New Phone Number</th>
                        <th class="card-title">New Email</th>
                        <th class="card-title">New Address</th>
                        <th class="card-title">Notes</th>
                        <th class="card-title">Agent Notes</th>
                        <th class="card-title">Completed</th>
                        <th class="card-title">Done Time</th>
                        <th class="card-title">Policy View</th>

                        
     
                    </tr>
                </thead>
                <tbody>

                    @foreach($data as $change)
                    <tr>
                        <td>{{ $change->created_at }}</td> <!-- Timestamp -->
                        <td>{{ $change->agent }}</td> <!-- Agents -->
                        <td>{{ $change->first_name }}</td> <!-- First Name -->
                        <td>{{ $change->last_name }}</td> <!-- Last Name -->
                        <td>{{ $change->phone }}</td> <!-- Phone -->
                        <td>{{ $change->carrier }}</td> <!-- Carrier -->
                        <td>{{ $change->policy_number }}</td> <!-- Policy # -->
                        <td>{{ $change->auto_pay }}</td> <!-- Auto Pay -->
                        <td>{{ $change->driver_action }}</td> <!-- Driver -->
                        <td>{{ $change->driver_name }}</td> <!-- Driver Name -->
                        <td>{{ $change->dl }}</td> <!-- DL -->
                        <td>{{ $change->vehicle_option }}</td> <!-- Vehicle -->
                        <td>{{ $change->vin }}</td> <!-- Vin -->
                        <td>{{ $change->year }}</td> <!-- Year -->
                        <td>{{ $change->make }}</td> <!-- Make -->
                        <td>{{ $change->model }}</td> <!-- Model -->
                        <td>{{ $change->coverage }}</td> <!-- Coverage -->
                        <td>{{ $change->lien_option }}</td> <!-- Lien -->
                        <td>{{ $change->new_phone_number }}</td> <!-- New Phone Number -->
                        <td>{{ $change->new_email }}</td> <!-- New Email -->
                        <td>{{ $change->new_address }}</td> <!-- New Address -->
                        <td>{{ $change->notes }}</td> <!-- Notes -->
                        <td>{{ $change->agent_notes }}</td> <!-- Agent Notes -->
                        <td>
                            <span 
                                style="
                                    color: white; 
                                    padding: 5px 10px; 
                                    border-radius: 5px;
                                    background-color: 
                                        @if ($change->completed === 'Done') green
                                        @elseif ($change->completed === 'Quoted / No Change') orange
                                        @elseif ($change->completed === 'Pending') red
                                        @else gray 
                                        @endif;
                                ">
                                {{ $change->completed }}
                            </span>
                        </td>
                                                {{-- <td>
                            <button 
                                class="status-toggle-btn" 
                                data-id="{{ $change->id }}" 
                                data-completed="{{ $change->completed }}" 
                                style="background-color: {{ $change->completed ? 'green' : 'red' }}; color: white;">
                                {{ $change->completed ? 'Yes' : 'No' }}
                            </button>
                        </td> --}}
                    
                        <td>{{ $change->done_time ?? 'Pending' }}</td> <!-- Done Time -->
                        <td>
                            <a href="{{ url('Policy/View/'.$change->policy_id)}}">View</a>
                        </td>
     
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
        
       

        


<br>


</div></div>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>





@endsection
