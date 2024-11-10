@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">


    <a id="import" class="btn btn-info" href="#" data-toggle="modal" data-target="#importModal">Import</a>
    <a class="btn btn-success" href="{{ url('Policy/Export') }}">Export</a>


    {{-- import model --}}
        <!-- Modal -->
        <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="importModalLabel">Import Policies</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form action="{{ route('PolicyNew.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <label for="file">Select File:</label>
                    <input type="file" name="file" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Import Policies</button>
                </form>
                </div>
            </div>
            </div>
        </div>



    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title"> Policy Database  </h4>
         <p class="card-description"></p>

 
            <br>
            <div class="input-group mb-3">

         <div class="table-responsive">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="card-title">View</th>
                        <th class="card-title">Active</th>
                        <th class="card-title">Autopay</th>
                        <th class="card-title">Type of Customer</th>
                        <th class="card-title">Last Name</th>
                        <th class="card-title">First Name</th>
                        <th class="card-title">Middle</th>
                        <th class="card-title">Preferred Name</th>
                        <th class="card-title">Carrier</th>
                        <th class="card-title">Policy Number</th>
                        <th class="card-title">Type of Policy</th>
                        <th class="card-title">Due Date</th>
                        <th class="card-title">Due Amount</th>
                        <th class="card-title">Name on Card</th>
                        <th class="card-title">Type of Card</th>
                        <th class="card-title">Number 1st 4</th>
                        <th class="card-title">Number 2nd 4</th>
                        <th class="card-title">Number 3rd 4</th>
                        <th class="card-title">Last 4 Numbers</th>
                        <th class="card-title">Expiration Month</th>
                        <th class="card-title">Expiration Year</th>
                        <th class="card-title">Billing Zip</th>
                        <th class="card-title">CVC</th>
                        <th class="card-title">Email</th>
                        <th class="card-title">Phone</th>
                        <th class="card-title">DOB</th>
                        <th class="card-title">SSN</th>
                        <th class="card-title">Zip Code</th>
                        <th class="card-title">Type of ID</th>
                        <th class="card-title">DL/ID #</th>
                        <th class="card-title">Insured Items</th>
                        <th class="card-title">Insured Drivers</th>
                        <th class="card-title">Excluded Drivers</th>
                        <th class="card-title">Lien</th>
                        <th class="card-title">Effective Date</th>
                        <th class="card-title">Expiration Date</th>
                        <th class="card-title">Term Months</th>
                        <th class="card-title">Base Premium</th>
                        <th class="card-title">State Fee (MVCA)</th>
                        <th class="card-title">Policy Fee</th>
                        <th class="card-title">Roadside Assistance Fee</th>
                        <th class="card-title">SR22</th>
                        <th class="card-title">Other Fee</th>
                        <th class="card-title">Total Premium</th>
                        <th class="card-title">Annual Premium</th>
                        <th class="card-title">Notes</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $policy)
                        <tr>

                            <td>
                                <a class="btn btn-primary" href="{{ url('Policy/View/'.$policy->id)}}">View</a>
                            </td>

                            <td>{!! $policy->activeBox == 'on' ? '✅' : '❌' !!}</td>
                            <td>{!! $policy->autopay == 'on' ? '✅' : '❌' !!}</td>
                            <td>{{ $policy->type_of_customer }}</td>
                            <td>{{ $policy->last_name }}</td>
                            <td>{{ $policy->first_name }}</td>
                            <td>{{ $policy->middle_name }}</td>
                            <td>{{ $policy->preferred_name }}</td>
                            <td>{{ $policy->carrier }}</td>
                            <td>{{ $policy->policy_number }}</td>
                            <td>{{ $policy->type_of_policy }}</td>
                            <td>{{ $policy->due_date }}</td>
                            <td>{{ $policy->amount_due }}</td>
                            <td>{{ $policy->name_on_card }}</td>
                            <td>{{ $policy->debit_card }}</td>
                            <td>{{ $policy->number_1st_4 }}</td>
                            <td>{{ $policy->number_2nd_4 }}</td>
                            <td>{{ $policy->number_3rd_4 }}</td>
                            <td>{{ $policy->number_4th_4 }}</td>
                            <td>{{ $policy->expiration_1 }}</td>
                            <td>{{ $policy->expiration_2 }}</td>
                            <td>{{ $policy->billing_zip }}</td>
                            <td>{{ $policy->cvc }}</td>
                            <td>{{ $policy->email }}</td>
                            <td>{{ $policy->phone }}</td>
                            <td>{{ $policy->dob }}</td>
                            <td>{{ $policy->ssn }}</td>
                            <td>{{ $policy->zip }}</td>
                            <td>{{ $policy->type_of_id }}</td>
                            <td>{{ $policy->dl_id }}</td>
                            <td>{{ $policy->insured_items }}</td>
                            <td>{{ $policy->insured_drivers }}</td>
                            <td>{{ $policy->excluded_drivers }}</td>
                            <td>{{ $policy->lien }}</td>
                            <td>{{ $policy->effective_date }}</td>
                            <td>{{ $policy->expiration_date }}</td>
                            <td>
                                @if($policy->term_months == 12)
                                    Monthly
                                @elseif($policy->term_months == 4)
                                    Quarterly
                                @elseif($policy->term_months == 2)
                                    Semi-Annual
                                @elseif($policy->term_months == 1)
                                    Annual
                                @else
                                    Unknown
                                @endif
                            </td>
                                                        <td>{{ $policy->base_premium }}</td>
                            <td>{{ $policy->state_fee_mvca }}</td>
                            <td>{{ $policy->policy_fee }}</td>
                            <td>{{ $policy->roadside_assistance_fee }}</td>
                            <td>{{ $policy->sr22 }}</td>
                            <td>{{ $policy->other_fee }}</td>
                            <td>{{ $policy->total_premium }}</td>
                            <td>{{ $policy->annual_premium }}</td>
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
