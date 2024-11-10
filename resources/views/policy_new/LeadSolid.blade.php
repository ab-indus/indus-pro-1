@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">


    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title">Policy Sold  </h4>
         <p class="card-description"></p>

    

         <div class="table-responsive">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="card-title">Timestamp</th>
                        <th class="card-title">Type of Product</th>
                        <th class="card-title">Assigned to</th>
                        <th class="card-title">Need Additional Info</th>
                        <th class="card-title">Received Info</th>
                        <th class="card-title">Gave a quote</th>
                        <th class="card-title">Office/Call/Text/Email</th>
                        <th class="card-title">Follow Up Note</th>
                        <th class="card-title">Appointment Date</th>
                        <th class="card-title">Appointment Time</th>
                        <th class="card-title">Office/Call/Text</th>
                        <th class="card-title">Status</th>

                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $lead)
                    <tr data-id="{{ $lead->id }}">
                        <td>{{ $lead->created_at }}</td> <!-- Timestamp -->
                    
                        <td>{{ $lead->product_type ?? 'N/A' }}</td> <!-- Type of Product -->
                    
                        <td>{{ $lead->agent_name ?? 'N/A' }}</td> <!-- Agent/CSR -->
                    
                        <td>{!! $lead->need_additional_info ? '✅' : '❌' !!}</td> <!-- Need Additional Info -->
                    
                        <td>{!! $lead->received_info ? '✅' : '❌' !!}</td> <!-- Received Info -->
                    
                        <td>{!! $lead->gave_quote ? '✅' : '❌' !!}</td> <!-- Gave a quote -->
                    
                        <td>{{ $lead->medium_of_contact ?? 'N/A' }}</td> <!-- Medium of Contact -->
                    
                        <td>{{ $lead->follow_up_note ?? 'N/A' }}</td> <!-- Follow Up Note -->
                    
                        <td>{{ $lead->appointment_date ?? 'N/A' }}</td> <!-- Appointment Date -->
                    
                        <td>{{ $lead->appointment_time ?? 'N/A' }}</td> <!-- Appointment Time -->
                    
                        <td>{{ $lead->appointment_method ?? 'N/A' }}</td> <!-- Appointment Method -->
                    
                        <td>{{ $lead->status ?? 'N/A' }}</td> <!-- Status -->
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
            
            
            


    </div>
        


<br>


</div></div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



@endsection
