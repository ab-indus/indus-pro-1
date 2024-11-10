@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">


    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title">Search Policy/Client  </h4>
         <p class="card-description"></p>

        <!-- Search Form -->
        <form id="search-form" method="GET" action="{{ route('PolicyNew.index') }}">
            @csrf
            <div class="row">

                <div class="col-6">
                    <label for="search_field"> Search Field</label>
                    <select name="search_field" id="search_field" class="form-control">
                        {{-- <option value="">Select Search Term</option> --}}
                        <option value="last_name" {{ request()->search_field == 'first_name' ? 'selected' : '' }}>Last Name</option>
                        <option value="first_name" {{ request()->search_field == 'first_name' ? 'selected' : '' }}>First Name</option>
                        <option value="email" {{ request()->search_field == 'email' ? 'selected' : '' }}>Email</option>
                        <option value="phone" {{ request()->search_field == 'phone' ? 'selected' : '' }}>Phone</option>
                        <option value="dob" {{ request()->search_field == 'dob' ? 'selected' : '' }}>DOB</option>
                        <option value="policy_number" {{ request()->search_field == 'policy_number' ? 'selected' : '' }}>Policy Number</option>
                        <option value="carrier" {{ request()->search_field == 'carrier' ? 'selected' : '' }}>Carrier</option>
                    </select>
                </div>

                <div class="col-6">
                    <label for="search_field">Search Value</label>
                    <input type="text" class="form-control" name="search_value" id="search_value" placeholder="Enter search value" value="{{ request()->search_value }}">
                </div>

           


            </div>
            {{-- <div class="col-2">
                <label for="">Apply Filter</label>

            </div> --}}
            <br>
            <div class="input-group mb-3">
             

                {{-- <span style="padding: 5px"> </span> --}}

                
                <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>

                </div>
            </div>
        </form>

         <div class="table-responsive">

         <table class="table table-bordered">
            <thead>
                <tr>
                    
                    <th class="card-title">Add Payment</th>
                    <th class="card-title">Change Policy</th>
                    <th class="card-title">Last Name</th>
                    <th class="card-title">First Name</th>
                    <th class="card-title">Middle Name</th>

                    <th class="card-title">Preferred Name</th>
                    <th class="card-title">Email</th>
                    <th class="card-title">Phone</th>
                    <th class="card-title">DOB</th>
                    <th class="card-title">SSN</th>
                    <th class="card-title">ZIP</th>
                    <th class="card-title">Type of ID</th>
                    <th class="card-title">DL/ID #</th>
                    <th class="card-title">Carrier</th>
                    <th class="card-title">Policy Number</th>
                    <th class="card-title">Type of Policy</th>
                    <th class="card-title">Insured Items</th>
                    <th class="card-title">Insured Drivers</th>
                    <th class="card-title">Excluded Drivers</th>
                    <th class="card-title">Lien</th>
                    <th class="card-title">Effective Date</th>
                    <th class="card-title">Expiration Date</th>
                    <th class="card-title">Term Months</th>
                    <th class="card-title">Due Date</th>
                    <th class="card-title">Amount Due</th>
                    <th class="card-title">Base Premium</th>
                    <th class="card-title">State Fee (MVCA)</th>
                    <th class="card-title">Policy Fee</th>
                    <th class="card-title">Roadside Assistance Fee</th>
                    <th class="card-title">SR22</th>
                    <th class="card-title">Other Fee</th>
                    <th class="card-title">Total Premium</th>
                    <th class="card-title">Annual Premium</th>
                    
                    {{-- <th class="card-title">Paid Today</th> --}}
                    <th class="card-title">Amount Paid CC</th>
                    <th class="card-title">Amount Paid Cash</th>
                    <th class="card-title">Direct Pay</th>

                    <th class="card-title">Name on Card</th>
                    {{-- <th class="card-title">Debit Card Visa/MC</th> --}}
                    <th class="card-title">Credit Card Name</th>

                    <th class="card-title">Number 1st 4</th>
                    <th class="card-title">Number 2nd 4</th>
                    <th class="card-title">Number 3rd 4</th>
                    <th class="card-title">Expiration 1</th>
                    <th class="card-title">Expiration 2</th>
                    <th class="card-title">Billing Zip</th>
                    <th class="card-title">CVC</th>

                    <th class="card-title">Autopay</th>
                    <th class="card-title">New Customer</th>
                    <th class="card-title">Rewrite</th>
                    <th class="card-title">Renew</th>

                    <th class="card-title">Notes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $policy)
                    <tr>
                  


                        {{-- <td>{{ $policy->autopay }}</td>
                        <td>{{ $policy->new_customer }}</td>
                        <td>{{ $policy->rewrite }}</td>
                        <td>{{ $policy->renew }}</td> --}}
                        <td>
                            <a class="btn btn-primary " href="{{ url('Payment/new', $policy->id )}}">Add Payment</a>
                        </td>
                        <td>
                            <a class="btn btn-info " href="{{ url('Policy/change', $policy->id )}}">Change</a>
                        </td>

                        <td>{{ $policy->last_name }}</td>
                        <td>{{ $policy->first_name }}</td>
                        <td>{{ $policy->middle_name }}</td>

                        <td>{{ $policy->preferred_name }}</td>
                        <td>{{ $policy->email }}</td>
                        <td>{{ $policy->phone }}</td>
                        <td>{{ $policy->dob }}</td>
                        <td>{{ $policy->ssn }}</td>
                        <td>{{ $policy->zip }}</td>
                        <td>{{ $policy->type_of_id }}</td>
                        <td>{{ $policy->dl_id }}</td>
                        <td>{{ $policy->carrier }}</td>
                        <td>{{ $policy->policy_number }}</td>
                        <td>{{ $policy->type_of_policy }}</td>
                        <td>{{ $policy->insured_items }}</td>
                        <td>{{ $policy->insured_drivers }}</td>
                        <td>{{ $policy->excluded_drivers }}</td>
                        <td>{{ $policy->lien }}</td>
                        <td>{{ $policy->effective_date }}</td>
                        <td>{{ $policy->expiration_date }}</td>
                        <td>{{ $policy->term_months }}</td>
                        <td>{{ $policy->due_date }}</td>
                        <td>{{ $policy->amount_due }}</td>
                        <td>{{ $policy->base_premium }}</td>
                        <td>{{ $policy->state_fee_mvca }}</td>
                        <td>{{ $policy->policy_fee }}</td>
                        <td>{{ $policy->roadside_assistance_fee }}</td>
                        <td>{{ $policy->sr22 }}</td>
                        <td>{{ $policy->other_fee }}</td>
                        <td>{{ $policy->total_premium }}</td>
                        <td>{{ $policy->annual_premium }}</td>
                        
                        {{-- <td>{{ $policy->paid_today }}</td> --}}
                        <td>{{ $policy->amount_paid_cc }}</td>
                        <td>{{ $policy->amount_paid_cash }}</td>
                        <td>{{ $policy->direct_pay }}</td>

                        <td>{{ $policy->name_on_card }}</td>
                        {{-- <td>{{ $policy->debit_card }}</td> --}}
                        
                        <td>{{ $policy->debit_card }}</td>
                        {{-- <td>{{ $policy->credit_card_name }}</td> --}}


                        <td>{{ $policy->number_1st_4 }}</td>
                        <td>{{ $policy->number_2nd_4 }}</td>
                        <td>{{ $policy->number_3rd_4 }}</td>
                        <td>{{ $policy->expiration_1 }}</td>
                        <td>{{ $policy->expiration_2 }}</td>
                        <td>{{ $policy->billing_zip }}</td>
                        <td>{{ $policy->cvc }}</td>

                        <td>{!! $policy->autopay == 'on' ? '✅' : '❌' !!}</td>
                        <td>{!! $policy->new_customer == 'on' ? '✅' : '❌' !!}</td>
                        <td>{!! $policy->rewrite == 'on' ? '✅' : '❌' !!}</td>
                        <td>{!! $policy->renew == 'on' ? '✅' : '❌' !!}</td>

                        <td>{{ $policy->notes }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        


<br>


</div></div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



@endsection
