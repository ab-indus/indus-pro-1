@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">


   <div class="row">

    <button id="dueBtn" class="btn btn-primary mr-2 col-4" type="button">Due Tomorrow</button>

    <button id="expireBtn"  class="btn btn-primary mr-2 col-4" type="button">Expire Tomorrow</button>
   </div>

    <br>

   <div class="row">
    <button id="autoBtn" class="btn btn-primary mr-2 col-4" type="button">Upcoming Auto Pay</button>

    <button id="birthdayBtn" class="btn btn-primary mr-2 col-4" type="button">Birthday Today</button>
   </div>

<div class="card my-2" id="dueCard" style="display: none">
    <div class="card-body">

        <h4 class="card-title">Due Tomorrow</h4>
        <p class="card-description"></p>


        <div class="table-responsive">

            <table class="table table-bordered">
               <thead>
                    <tr>
                        {{-- <th class="card-title">Active/Inactive</th> --}}
                        <th class="card-title">First Name</th>
                        <th class="card-title">Last Name</th>
                        <th class="card-title">Policy Number</th>
                        <th class="card-title">Amount Due</th>
                        <th class="card-title">Due Date</th>
                        <th class="card-title">Phone</th>
                        <th class="card-title">Email</th>
                    </tr>
                   
               </thead>
               <tbody>
                   @foreach ($dueTomorrow as $policy)
                    <tr>
                        {{-- <td>{!! $policy->active == 'on' ? '✅' : '❌' !!}</td>  --}}
                        {{-- <td>✅</td>  --}}
                        <td>{{ $policy->first_name }}</td>
                        <td>{{ $policy->last_name }}</td>
                        <td>{{ $policy->policy_number }}</td>
                        <td>{{ $policy->amount_due }}</td>
                        <td>{{ $policy->due_date }}</td>
                        <td>{{ $policy->phone }}</td>
                        <td>{{ $policy->email }}</td>
                    </tr>
        
                   @endforeach
               </tbody>
           </table>
       </div>
 
</div></div>


<div class="card my-2"  id="expireCard" style="display: none">
    <div class="card-body">

        <h4 class="card-title">Expire Tomorrow</h4>
        <p class="card-description"></p>


        <div class="table-responsive">

            <table class="table table-bordered">
               <thead>
                        <tr>
                            {{-- <th class="card-title">Active/Inactive</th> --}}
                            <th class="card-title">First Name</th>
                            <th class="card-title">Last Name</th>
                            <th class="card-title">Policy Number</th>
                            <th class="card-title">Amount Due</th>
                            <th class="card-title">Due Date</th>
                            <th class="card-title">Effective Date</th>
                            <th class="card-title">Expiration Date</th>
                            <th class="card-title">Phone</th>
                            <th class="card-title">Email</th>
                        </tr>
                   
               </thead>
               <tbody>
                   @foreach ($ExpireTomorrow as $policy)
                        <tr>
                            {{-- <td>✅</td>  --}}

                            <td>{{ $policy->first_name }}</td>
                            <td>{{ $policy->last_name }}</td>
                            <td>{{ $policy->policy_number }}</td>
                            <td>{{ $policy->amount_due }}</td>
                            <td>{{ $policy->due_date }}</td>
                            <td>{{ $policy->effective_date }}</td>
                            <td>{{ $policy->expiration_date }}</td>
                            <td>{{ $policy->phone }}</td>
                            <td>{{ $policy->email }}</td>
                        </tr>
        
                   @endforeach
               </tbody>
           </table>
       </div>
 
</div></div>

<div class="card my-2" id="autoCard" style="display: none">
    <div class="card-body">

        <h4 class="card-title">Upcoming Auto Pay</h4>
        <p class="card-description"></p>


        <div class="table-responsive">

            <table class="table table-bordered">
               <thead>
                        <tr>
                            {{-- <th class="card-title">Active/Inactive</th> --}}
                            <th class="card-title">First Name</th>
                            <th class="card-title">Last Name</th>
                            <th class="card-title">Policy Number</th>
                            <th class="card-title">Amount Due</th>
                            <th class="card-title">Due Date</th>

                            <th class="card-title">Auto Pay</th>

                            <th class="card-title">Phone</th>
                            <th class="card-title">Email</th>
                        </tr>
                   
               </thead>
               <tbody>
                   @foreach ($UpcomingAutoPay as $policy)
                        <tr>
                            {{-- <td>✅</td> <!-- You can update this to dynamically show active/inactive status --> --}}
                            <td>{{ $policy->first_name }}</td>
                            <td>{{ $policy->last_name }}</td>
                            <td>{{ $policy->policy_number }}</td>
                            <td>{{ $policy->amount_due }}</td>
                            <td>{{ $policy->due_date }}</td>
                            <td>{!! $policy->autopay == 'on' ? '✅' : '❌' !!}</td>

                            <td>{{ $policy->phone }}</td>
                            <td>{{ $policy->email }}</td>
                        </tr>
        
                   @endforeach
               </tbody>
           </table>
       </div>
 
</div></div>


<div class="card my-2"  id="birthdayCard" style="display: none">
    <div class="card-body">

        <h4 class="card-title">Birthday Today</h4>
        <p class="card-description"></p>


        <div class="table-responsive">

            <table class="table table-bordered">
               <thead>
                        <tr>
                            {{-- <th class="card-title">Active/Inactive</th> --}}
                            <th class="card-title">First Name</th>
                            <th class="card-title">Last Name</th>
                            <th class="card-title">DOB</th>
                    
                            <th class="card-title">Phone</th>
                            <th class="card-title">Email</th>
                        </tr>
                   
               </thead>
               <tbody>
                   @foreach ($BirthdayToday as $policy)
                        <tr>
                            {{-- <td>✅</td> <!-- You can update this to dynamically show active/inactive status --> --}}
                            <td>{{ $policy->first_name }}</td>
                            <td>{{ $policy->last_name }}</td>
                            <td>{{ $policy->dob }}</td>
                  
                            <td>{{ $policy->phone }}</td>
                            <td>{{ $policy->email }}</td>
                        </tr>
        
                   @endforeach
               </tbody>
           </table>
       </div>
 
</div></div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<script>
    $(document).ready(function() {
    // Toggle Due Tomorrow Card
    $('#dueBtn').click(function() {
        console.log('nice');
        $('#dueCard').toggle(); // Show/hide due card
    });

    // Toggle Expire Tomorrow Card
    $('#expireBtn').click(function() {
        $('#expireCard').toggle(); // Show/hide expire card
    });

    // Toggle Upcoming Auto Pay Card
    $('#autoBtn').click(function() {
        $('#autoCard').toggle(); // Show/hide auto pay card
    });

    // Toggle Birthday Today Card
    $('#birthdayBtn').click(function() {
        $('#birthdayCard').toggle(); // Show/hide birthday card
    });
});

</script>

@endsection
