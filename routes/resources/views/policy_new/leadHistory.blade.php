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
                        <th class="card-title">Timestamp</th>
                        <th class="card-title">Name Agent</th>
                        <th class="card-title">Medium of Contact</th>
                        <th class="card-title">First Name</th>
                        <th class="card-title">Last Name</th>
                        <th class="card-title">Phone</th>
                        <th class="card-title">Reason for Contact</th>
                        <th class="card-title">Notes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $entry)
                        <tr>
                            <td>{{ $entry->created_at }}</td> <!-- Timestamp field -->
                            <td>{{ $entry->agent_name }}</td> <!-- Name Agent field -->
                            <td>{{ $entry->contact_medium }}</td> 
                            <td>{{ $entry->first_name }}</td>
                            <td>{{ $entry->last_name }}</td>
                             <!-- Last Name field -->
                            <td>{{ $entry->contact_number }}</td>
                            <td>{{ $entry->question }}</td> <!-- Contact Name field --> <!-- Contact Number field -->
                            <td>{{ $entry->notes }}</td> <!-- Notes field -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            


    </div>
        


<br>


</div></div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



@endsection
