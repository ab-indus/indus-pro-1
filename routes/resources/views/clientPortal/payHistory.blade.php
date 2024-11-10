@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">



    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title">Client Pay History </h4>
         <p class="card-description"></p>


         <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="card-title">Timestamp</th>
                        <th class="card-title">First Name</th>
                        <th class="card-title">Last Name</th>
                        <th class="card-title">Phone</th>
                        <th class="card-title">Carrier</th>
                        <th class="card-title">Policy #</th>
                        <th class="card-title">Due Date</th>
                        <th class="card-title">Due Amount</th>
                        <th class="card-title">Direct Paid Today</th>
                        {{-- <th class="card-title status-column"  > --  Update Status  --</th> --}}
                        {{-- <th class="card-title">Update Status</th> --}}
                        <th class="card-title">Policy View</th>

     
                    </tr>
                </thead>
                <tbody>

                    @foreach($data as $pay)
                        <tr>
                            <td>{{ $pay->created_at }}</td>
                            <td>{{ $pay->first_name }}</td>
                            <td>{{ $pay->last_name }}</td>
                            <td>{{ $pay->phone }}</td>
                            <td>{{ $pay->carrier }}</td>
                            <td>{{ $pay->policy_number }}</td>
                            <td>{{ $pay->due_date }}</td>
                            <td>{{ $pay->amount_due }}</td>
                            <td>{{ $pay->direct_pay }}</td>
                            {{-- <td>{{ $pay->status }}</td> --}}
                            <td>
                                <a href="{{ url('Policy/View/'.$pay->policy_id)}}">View</a>
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
