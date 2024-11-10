@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">
<form action="{{ url('Quotes/4')}}" method="Get" enctype="multipart/form-data">
@csrf

    <div class="card my-2">
        <div class="card-body">

            <h4 class="card-title">My Polices </h4>
            <p class="card-description">Manage Polices</p>

            {{-- <div class="row">
                @foreach($data as $policy)
                    <a href="{{ url('Client/Portal/Form/'.$policy->id) }}" class="btn btn-primary mr-2 col-4">
                        Manage {{ $policy->type_of_policy ?? 'Policy' }}
                    </a>
                @endforeach
            </div> --}}
        
            <div class="table-responsive">


                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="card-title">Carrier</th>
                            <th class="card-title">Policy Number</th>
                            <th class="card-title">Type of Policy</th>
                            <th class="card-title">Due Date</th>
                            <th class="card-title">Due Amount</th>
                            <th class="card-title">Term Months</th>
                       
                            <th class="card-title">Action</th>
                            {{-- <th class="card-title">Manage Policy</th> --}}
    
    
                        </tr>
                    </thead>
                    <tbody>
                        @if ($data->isEmpty())
                            <tr>
                                <td colspan="40" class="text">No policy found for this user</td>
                            </tr>
                        @else

                            @foreach ($data as $policy)
                                <tr>
                           
                                    <td>{{ $policy->carrier }}</td>
                                    <td>{{ $policy->policy_number }}</td>
                                    <td>{{ $policy->type_of_policy }}</td>
                                    <td>{{ $policy->due_date }}</td>
                                    <td>{{ $policy->amount_due }}</td>                              
                                    <td>{{ $policy->term_months }}</td>

                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{ url('Policy/View/'.$policy->id) }}">View</a>
                                        <a class="btn btn-sm btn-info" href="{{ url('Client/Portal/Form/'.$policy->id) }}">Manage Policy</a>
    
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    
                </table>
                
    
    
            </div>
            
            


            <br>
            <div class="col-12 grid-margin">
            
            </div>


        </div>
    </div>

  
    

</form>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



@endsection
