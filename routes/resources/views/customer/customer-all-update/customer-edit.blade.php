@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
    
    @if(session('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failed!</strong> {{ session('failed') }}
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
                            <!-- {{ Form::text('account_name', null , ["class" => "form-control"]) }} -->
                            {{ Form::text('account_name', old('account_name',$customer->account_name) , ["class" => "form-control"]) }}

                                <!-- {{ Form::select('account_name', ['bussiness name' => 'Bussiness Name', 'client name' => 'Client Name', 'lead name' => 'Lead Name'], old('account_name',$customer->account_name), ['placeholder' => 'Account / Client Name...' , "class" => "form-control"]) }} -->
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
                                {{ Form::label("eft","Payment Method" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('eft', ['EFT' => 'EFT', 'Direct Pay' => 'Direct Pay', 'Phone Pay' => 'Phone Pay', 'Online Pay' => 'Online Pay', 'Office Pay' => 'Office Pay', 'Cash' => 'Cash'], old('eft',$customer->eft), ['placeholder' => 'EFT...' , "class" => "form-control"]) }}
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
                            {{ Form::label("reffral source","Referral Source" , ["class" => "col-sm-3 col-form-label"]) }}
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
        {{-- customer or lead info section end --}}
    <div class="col-12 grid-margin">
      {{ Form::submit($btnText,['class' => 'btn btn-primary mr-2 px-4']) }}
    </div>

      {{ Form::close() }}

</div> {{-- grid margin close --}}
@endsection