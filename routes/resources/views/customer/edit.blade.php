@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
    
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucess!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
  <!-- 1st card -->
  {{ Form::open([ 'url' => $url, 'method' => $method ]) }}
  @method($method)
<div class="col-12 grid-margin" id="appendClone">

{{-- customer or lead info section sart --}}
    <section class="mb-2 clone">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Customer\Lead Info</h4>
                <p class="card-description">Customer\Lead Info Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("customer or lead","Customer / Lead" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::select('cus_or_lead', ['customer' => 'Customer', 'lead' => 'Lead'], old('cus_or_lead',$customer->cus_or_lead) , ['placeholder' => 'Customer / Lead...' , "class" => "form-control"]) }}
                                @error("cus_or_lead")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("account or client name","Account / Client Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('account_name', ['bussiness name' => 'Bussiness Name', 'client name' => 'Client Name', 'lead name' => 'Lead Name'], old('account_name',$customer->account_name), ['placeholder' => 'Account / Client Name...' , "class" => "form-control"]) }}
                                @error("account_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- row end -->
    
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("status","Status" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('status', ['0' => 'Inactive', '1' => 'Active'], old('status',$customer->status), ['placeholder' => 'Status...' , "class" => "form-control"]) }}
                                @error("status")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("eft","EFT" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('eft', ['yes' => 'Yes', 'no' => 'No'], old('eft',$customer->eft), ['placeholder' => 'EFT...' , "class" => "form-control"]) }}
                                @error("eft")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
    
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("customer type","Type of Customer" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('cus_type', ['personal' => 'Personal', 'commercial' => 'Commercial', 'both' => 'Both', 'lead' => 'Lead'], old('cus_type',$customer->cus_type), ['placeholder' => 'Type of Customer...' , "class" => "form-control"]) }}
                                @error("cus_type")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("reffral source","Refferal Source" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('refferal_src', ['other client' => 'Other Client',
                                'previous client' => 'Previous Client',
                                'phone' => 'Phone',
                                'walk-in' => 'Walk-in',
                                'website' => 'Website',
                                'social media' => 'Social Media',
                                'other' => 'Other'] , old('refferal_src',$customer->referral_src), ['placeholder' => 'Refferal Source...' , "class" => "form-control"]) }}
                                @error("refferal_src")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
    

                </div> {{-- card body --}}
            </div> {{-- card close --}}
        </section>
        <!-- <div class="col-12 grid-margin">
            {{ Form::submit('Add Customer',['class' => 'btn btn-primary mr-2 px-4']) }}
          </div> -->
        {{-- customer or lead info section end --}}

    {{-- payment detail start --}}
    <section class="clone my-2">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Payment Details</h4>
                <p class="card-description">payment detail Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("type of payment","Type of Payment" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('pay_type', ['new' => 'New', 'renewal' => 'Renewal','reinstate' => 'Reinstate','rewrite' => 'Rewrite'], old('pay_type',$paymentDetail->typ_of_pay), ['placeholder' => 'Type of Payment...' , "class" => "form-control"]) }}
                                @error("pay_type")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("carrier name","Carrier Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('carrier_name', old('carrier_name',$paymentDetail->carrier_name) , ["class" => "form-control"]) }}
                                @error("carrier_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("policy number","Policy No." , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('policy_no', old('policy_no',$paymentDetail->policy_num) , ["class" => "form-control"]) }}
                                @error("policy_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("due amount","Amount Due" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('due_amount', old('due_amount',$paymentDetail->due_amount) , ["class" => "form-control"]) }}
                                @error("due_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("due date","Due Date" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('due_date', old('due_date',$paymentDetail->due_date) , ["class" => "form-control"]) }}
                                @error("due_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("paid date","Date Paid" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('paid_date', old('paid_date',$paymentDetail->paid_date) , ["class" => "form-control"]) }}
                                @error("paid_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
    
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("mode of pay","Mode of Payment" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('mode_of_pay', 
                                [
                                    'cash in bank' => 'Cash in Bank',
                                    'cash in office' => 'Cash in Office',
                                    'phone payment' => 'Phone Payment',
                                    'web payment' => 'Web Payment',
                                    'paid to carrier' => 'Paid to Carrier',
                                    'debit card' => 'Debit Card',
                                    'credit card' => 'Credit Card',
                                    'etf' => 'ETF'
                                ]
                                , old('mode_of_pay',$paymentDetail->mode_of_pay), ['placeholder' => 'Mode of Payment...' , "class" => "form-control"]) }}
                                @error("mode_of_pay")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("received by","Received By" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('received_by',
                                [
                                    'received by' => 'Received by',
                                    'carrier' => 'Carrier',
                                    'nadia' => 'Nadia',
                                    'kiren' => 'Kiren',
                                    'csr' => 'CSR',
                                ], old('received_by',$paymentDetail->received_by), ['placeholder' => 'Received By...' , "class" => "form-control"]) }}
                                @error("received_by")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("new due amount","New Amount Due" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('new_due_amount', old('new_due_amount',$paymentDetail->new_due_amount) , ["class" => "form-control"]) }}
                                @error("new_due_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("new due date","New Due Date" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('new_due_date', old('new_due_date',$paymentDetail->new_due_date) , ["class" => "form-control"]) }}
                                @error("new_due_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
    
                </div> {{-- card body --}}
            </div> {{-- card close --}}
    </section>
    {{-- payment detail end --}}

    {{-- driver detail start --}}
    @foreach ($driverDetail as $driverDetail)
    <section class="clone my-2" id="driverSection">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Driver Details</h4>
                <p class="card-description">driver detail Fields</p>
                <!-- row -->
                    <div class="row">

                        {{ Form::hidden('driver_id[]', $driverDetail->id) }}
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("driver name","Named Driver" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('driver_name[]', ['named' => 'Named','rated' => 'Rated', 'excluded' => 'Excluded'], old('driver_name',$driverDetail->driver_name) , ['placeholder' => 'Named Driver...' , "class" => "form-control"]) }}
                                @error("driver_name")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("relationship","Relationship" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('relationship[]', [
                                   'self' => 'Self',
                                   'spouse/partner' => 'Spouse / Partner',
                                   'child' => 'Child',
                                   'sibling' => 'Sibling',
                                   'parent' => 'Parent',
                                   'other family' => 'Other Family',
                                   'other than family' => 'Other than Family'
                                ], old('relationship',$driverDetail->relationship) , ['placeholder' => 'Relationship...' , "class" => "form-control"]) }}
                                @error("relationship")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("first name","First Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('f_name[]', old('f_name',$driverDetail->f_name)  , ["class" => "form-control"]) }}
                                @error("f_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("middle name","Middle Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('m_name[]', old('m_name',$driverDetail->m_name)  , ["class" => "form-control"]) }}
                                @error("m_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("last name","Last Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('l_name[]', old('l_name',$driverDetail->l_name)  , ["class" => "form-control"]) }}
                                @error("l_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("email","Email" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::email('email[]', old('email',$driverDetail->email)  , ["class" => "form-control"]) }}
                                @error("email")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("phone","Phone" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('phone[]', old('phone',$driverDetail->phone)  , ["class" => "form-control"]) }}
                                @error("phone")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("gender","Gender" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('gender[]', ['male' => 'Male','female' => 'Female'], old('gender',$driverDetail->gender) , ['placeholder' => 'Gender...' , "class" => "form-control"]) }}
                                @error("gender")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("date of birth","DOB" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('dob[]', old('dob',$driverDetail->dob)  , ["class" => "form-control"]) }}
                                @error("dob")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("ss no","SS #" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ss_no[]', old('ss_no',$driverDetail->ss_no)  , ["class" => "form-control"]) }}
                                @error("ss_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("id no","ID #" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('id_no[]', old('id_no',$driverDetail->id_no)  , ["class" => "form-control"]) }}
                                @error("id_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("id type","ID Type" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('id_type[]', old('id_type',$driverDetail->id_type)  , ["class" => "form-control"]) }}
                                @error("id_type")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("employer or bussiness name","Employer or Business Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('emp_or_bsn_name[]', old('emp_or_bsn_name',$driverDetail->employer_or_bsn_name)  , ["class" => "form-control"]) }}
                                @error("emp_or_bsn_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("type of bussiness or work","Type of Business / Work" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('type_of_bsn_or_work[]', old('type_of_bsn_or_work',$driverDetail->type_of_bsn_or_work)  , ["class" => "form-control"]) }}
                                @error("type_of_bsn_or_work")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("ein if applies","EIN (if applies):" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ein_no[]', old('ein_no',$driverDetail->ein)  , ["class" => "form-control"]) }}
                                @error("ein_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("bussiness or work phone","Business / Work Phone" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('bsn_work_phone[]', old('bsn_work_phone',$driverDetail->bsn_or_work_phone)  , ["class" => "form-control"]) }}
                                @error("bsn_work_phone")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-sm-9" id="values-container">
                                    <button type="button" class="btn btn-sm btn-success p-2 my-2" id="addDriverBtn" onclick="moreDrivers()">Add More Driver Details</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div> {{-- card body --}}
            </div> {{-- card close --}}
    </section>
    @endforeach
    {{-- driver detail end --}}

    {{-- address details section start --}}
    <section class="mb-2 clone">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h2 class="fw-bold">Address Details</h2>
                <h4 class="card-title">Physical Address</h4>
                <p class="card-description">Physical Address Fields</p>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("street address","Street Address" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('pa_street_address', old('pa_street_address',$physicalAddress->pa_street_address) , ["class" => "form-control"]) }}
                            @error("pa_street_address")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("city","City" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('pa_city', old('pa_city',$physicalAddress->pa_city) , ["class" => "form-control"]) }}
                            @error("pa_city")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("country","Country" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('pa_country', old('pa_country',$physicalAddress->pa_country) , ["class" => "form-control"]) }}
                            @error("pa_country")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("state","State" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('pa_state', old('pa_state',$physicalAddress->pa_state) , ["class" => "form-control"]) }}
                            @error("pa_state")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("zip code","Zip Code" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::number('pa_zip_code', old('pa_zip_code',$physicalAddress->pa_zip_code) , ["class" => "form-control"]) }}
                            @error("pa_zip_code")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("rent or own","Rent or Own" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::select('pa_rent_or_own', ['rent' => 'Rent' , 'own' => 'Own'] , old('pa_rent_or_own',$physicalAddress->pa_rent_or_own) , ["class" => "form-control" , 'placeholder' => 'Rent or Own...']) }}
                            @error("pa_rent_or_own")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

        
                </div> {{-- card body --}}
            </div> {{-- card close --}}
        </section>
        {{-- address details section end --}}

    <!-- ==================== insured items, lien info and premium calculations start ==================== -->
    @foreach($InsLienPre as $InsLienPre)
    <section class="clone my-2">
        <div class="card my-2" id="cloneILPContainer">
            <div class="card-body">
                <!-- ========== insured items start =============== -->
                <h4 class="card-title">Insured Items</h4>
                <p class="card-description">Insured Items Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Insurance company","Insurance Company" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::hidden('insurance_id[]', $InsLienPre->ins_id) }}
                                {{ Form::text('ins_com[]', old('ins_com',$InsLienPre->ins_com) , ["class" => "form-control"]) }}
                                @error("ins_com")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("policy_no","Policy Number" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_policy_no[]', old('ins_policy_no',$InsLienPre->policy_no) , ["class" => "form-control"]) }}
                                @error("ins_policy_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("type","Type" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('ins_type[]', ['1-3 month' => '1-3 month' ,'6-12 month' => '6-12 month'] , old('ins_type',$InsLienPre->type) , ["class" => "form-control",'placeholder' => 'Type 1-3-6-12 (Months)']) }}
                                @error("ins_type")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("insurance year","Year" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_year[]', old('ins_year',$InsLienPre->year) , ["class" => "form-control"]) }}
                                @error("ins_year")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("insurance make","Make" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_make[]', old('ins_make',$InsLienPre->make) , ["class" => "form-control"]) }}
                                @error("ins_make")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("insurance model","Model" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_model[]', old('ins_model',$InsLienPre->model) , ["class" => "form-control"]) }}
                                @error("ins_model")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    {{-- row --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("insurance vin no","VIN Number" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_vin_no[]', old('ins_vin_no',$InsLienPre->vin_no) , ["class" => "form-control"]) }}
                                @error("ins_vin_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("liability limit","Liability Limits" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('liability_limit[]', old('liability_limit',$InsLienPre->liability_limit) , ["class" => "form-control"]) }}
                                @error("liability_limit")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    {{-- row end --}}

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("comp deductible","Comp (OTC) Deductible" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('comp_deductible[]', old('comp_deductible',$InsLienPre->comp_deductible) , ["class" => "form-control"]) }}
                                @error("comp_deductible")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("collison deductible","Collision Deductible" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('collison_deductible[]', old('collison_deductible',$InsLienPre->collison_deductible) , ["class" => "form-control"]) }}
                                @error("collison_deductible")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("um_uim_bi_limit","UM/UIM BI Limit" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('um_uim_bi_limit[]', old('um_uim_bi_limit',$InsLienPre->um_uim_bi_limit) , ["class" => "form-control"]) }}
                                @error("um_uim_bi_limit")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("um_uim_pd","UM/UIM PD" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('um_uim_pd[]', old('um_uim_pd',$InsLienPre->um_uim_pd) , ["class" => "form-control"]) }}
                                @error("um_uim_pd")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("rent amount","Rental Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('rent_amount[]', old('rent_amount',$InsLienPre->rent_amount) , ["class" => "form-control"]) }}
                                @error("rent_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("towing amount","Towing Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('towing_amount[]', old('towing_amount',$InsLienPre->towing_amount) , ["class" => "form-control"]) }}
                                @error("towing_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("gap","Gap Y/N" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('gap[]', old('gap',$InsLienPre->gap) , ["class" => "form-control"]) }}
                                @error("gap")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("pip amount","PIP Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('pip_amount[]', old('pip_amount',$InsLienPre->pip_amount) , ["class" => "form-control"]) }}
                                @error("pip_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("med amount","Med Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('med_amount[]', old('med_amount',$InsLienPre->med_amount) , ["class" => "form-control"]) }}
                                @error("med_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- ========== insured items end =============== -->

                    

                    <!-- ========== lien info start =============== -->
                    <h4 class="card-title">Lien / Mortgage</h4>
                    <p class="card-description">Lien / Mortgage Fields</p>
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("item number","Item No." , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::hidden('lien_info_id[]', $InsLienPre->lien_info_id) }}
                                {{ Form::text('lh_item_no[]', old('lh_item_no',$InsLienPre->item_no) , ["class" => "form-control"]) }}
                                @error("lh_item_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder account","Lien Account" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_account[]', old('lh_account',$InsLienPre->account) , ["class" => "form-control"]) }}
                                @error("lh_account")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder address","Lien Holder Address" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_address[]', old('lh_address',$InsLienPre->address) , ["class" => "form-control"]) }}
                                @error("lh_address")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder city","City" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_city[]', old('lh_city',$InsLienPre->city) , ["class" => "form-control"]) }}
                                @error("lh_city")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder state","State" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_state[]', old('lh_state',$InsLienPre->state) , ["class" => "form-control"]) }}
                                @error("lh_state")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder zip","Zip" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_zip[]', old('lh_zip',$InsLienPre->zip) , ["class" => "form-control"]) }}
                                @error("lh_zip")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder contact name","Lien Contact Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_con_name[]', old('lh_con_name',$InsLienPre->contact_name) , ["class" => "form-control"]) }}
                                @error("lh_con_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder phone no","Lien Holder Phone" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_phone_no[]', old('lh_phone_no',$InsLienPre->phone_no) , ["class" => "form-control"]) }}
                                @error("lh_phone_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row start -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder email","Lien Holder Email" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::email('lh_email[]', old('lh_email',$InsLienPre->email) , ["class" => "form-control"]) }}
                                @error("lh_email")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- ========== lien info end =============== -->
                    
                    <!-- ========== premium calculation start =============== -->
                    <h4 class="card-title">Premium Calculation</h4>
                    <p class="card-description">Premium Calculation Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("base premium","Base Premium" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::hidden('prc_id[]', $InsLienPre->prc_id) }}
                                {{ Form::text('base_premium[]', old('base_premium',$InsLienPre->base_premium) , ["class" => "form-control"]) }}
                                @error("base_premium")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("crime prevention fee","Crime Prevention Fee" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('crime_prevention_fee[]', old('crime_prevention_fee',$InsLienPre->crime_prevention_fee) , ["class" => "form-control"]) }}
                                @error("crime_prevention_fee")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("policy fee","Policy Fee" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('policy_fee[]', old('policy_fee',$InsLienPre->policy_fee) , ["class" => "form-control"]) }}
                                @error("policy_fee")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Agency fee","Agency Fee" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('agency_fee[]', old('agency_fee',$InsLienPre->agency_fee) , ["class" => "form-control"]) }}
                                @error("agency_fee")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Other Fees","Other Fees" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('other_fees[]', old('other_fees',$InsLienPre->other_fees) , ["class" => "form-control"]) }}
                                @error("other_fees")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("total premium","Total Premium" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('total_premium[]', old('total_premium',$InsLienPre->total_premium) , ["class" => "form-control"]) }}
                                @error("total_premium")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- ========== premium calculation end =============== -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-sm-9" id="values-container">
                                    <button type="button" class="btn btn-sm btn-success p-2 my-2" id="addMore" onclick="moreILP()">Add More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                </div> {{-- card body --}}
            </div> {{-- card close --}}
    </section>
    @endforeach
    <!-- ==================== insured items, lien info and premium calculations start ==================== -->

    {{-- dates and amount section sart --}}
    <section class="mb-2 clone">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Dates & Amount</h4>
                <p class="card-description">Dates & Amount Info Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("effective date","Effective Date" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::date('effective_date', old('effective_date',$datesAndAmount->effective_date) , ["class" => "form-control"]) }}
                                @error("effective_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("expiry date","Exp Date" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::date('expiry_date', old('expiry_date',$datesAndAmount->expiry_date) , ["class" => "form-control"]) }}
                                @error("expiry_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
    
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("reminder date","Reminder Date" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::date('reminder_date', old('reminder_date',$datesAndAmount->reminder_date) , ["class" => "form-control"]) }}
                                @error("reminder_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("cancellation notice date","Cancellation Notice Date" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::date('canc_notice_date', old('canc_notice_date',$datesAndAmount->canc_notice_date) , ["class" => "form-control"]) }}
                                @error("canc_notice_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("due date","Due Date" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::date('da_due_date', old('da_due_date',$datesAndAmount->due_date) , ["class" => "form-control"]) }}
                                @error("da_due_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("date paid","Date Paid" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::date('da_date_paid', old('da_date_paid',$datesAndAmount->date_paid) , ["class" => "form-control"]) }}
                                @error("da_date_paid")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("next amount due","Next Amount Due" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::number('next_amount_due', old('next_amount_due',$datesAndAmount->next_amount_due) , ["class" => "form-control"]) }}
                                @error("next_amount_due")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("new amount due","New Amount Due" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::number('new_amount_due', old('new_amount_due',$datesAndAmount->new_amount_due) , ["class" => "form-control"]) }}
                                @error("new_amount_due")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
    
                </div> {{-- card body --}}
            </div> {{-- card close --}}
        </section>
        {{-- dates and amount section end --}}

    <div class="col-12 grid-margin">
      {{ Form::submit($btnText,['class' => 'btn btn-primary mr-2 px-4']) }}
    </div>

      {{ Form::close() }}

          {{-- script tag start --}}
          {{-- <script>
                function cloneFields() { 
                  let clone = document.getElementById("cloneContainer");
                  let appendClone = document.getElementById("appendClone");
                  const cloned = clone.cloneNode(true);
                  appendClone.insertAdjacentElement("beforeend",cloned);
              }
          </script> --}}
          {{-- script tag close --}}

          <script>
              function moreDrivers(){
                  var driverSectionCloning = document.getElementById("driverSection");
                  var cloned = driverSectionCloning.cloneNode(true);
                  console.log(cloned.querySelectorAll('input').forEach((e) => {
                    console.log(e.value = "");
                  }));
                //   console.log(cloned.querySelectorAll('input').forEach(function (e){
                //     console.log(e.getAttribute("name"));
                //   }));
                  driverSectionCloning.insertAdjacentElement("afterend",cloned);
                }
              function moreILP(){
                  var premiumSectionCloning = document.getElementById("cloneILPContainer");
                  var cloned = premiumSectionCloning.cloneNode(true);
                  $nameCounter = 1;
                  cloned.querySelectorAll('input').forEach((e) => {
                    // e.setAttribute('name',)
                  });
                  premiumSectionCloning.insertAdjacentElement("afterend",cloned);
                }
            //   function morePremiums(){
            //       var premiumSectionCloning = document.getElementById("primiumCalculations");
            //       var cloned = premiumSectionCloning.cloneNode(true);
            //       premiumSectionCloning.insertAdjacentElement("afterend",cloned);
            //     }
          </script>


</div> {{-- grid margin close --}}
@endsection