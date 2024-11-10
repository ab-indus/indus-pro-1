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
  {{ Form::open([ 'url' => 'work-business-address-update/' . $workBussinessAddress->id, 'method' => 'POST' ]) }}
  @method('POST')
<div class="col-12 grid-margin" id="appendClone">

{{-- address details section start --}}
    <section class="mb-2 clone">
        <div class="card" id="cloneContainer">
                <div class="card-body">
                    <h2 class="fw-bold">Address Details</h2>
                    <h4 class="card-title">Work Business Address</h4>
                    <p class="card-description">Work Business Address Fields</p>
                    <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("street address","Street Address" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('wb_street_address', old('wb_street_address',$workBussinessAddress->wb_street_address) , ["class" => "form-control"]) }}
                            @error("wb_street_address")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("city","City" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('wb_city', old('wb_city',$workBussinessAddress->wb_city) , ["class" => "form-control"]) }}
                            @error("wb_city")
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
                            {{ Form::text('wb_country', old('wb_country',$workBussinessAddress->wb_country) , ["class" => "form-control"]) }}
                            @error("wb_country")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("state","State" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('wb_state', old('wb_state',$workBussinessAddress->wb_state) , ["class" => "form-control"]) }}
                            @error("wb_state")
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
                            {{ Form::number('wb_zip_code', old('wb_zip_code',$workBussinessAddress->wb_zip_code) , ["class" => "form-control"]) }}
                            @error("wb_zip_code")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("rent or own","Rent or Own" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::select('wb_rent_or_own', ['rent' => 'Rent' , 'own' => 'Own', 'Not Applicable' => 'Not Applicable'] , old('wb_rent_or_own',$workBussinessAddress->wb_rent_or_own) , ["class" => "form-control" , 'placeholder' => 'Rent or Own...']) }}
                            @error("wb_rent_or_own")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                </div>
            </div>
        </section>


    <div class="col-12 grid-margin">
      {{ Form::submit('Update',['class' => 'btn btn-primary mr-2 px-4']) }}
    </div>
</div> {{-- grid margin close --}}
@endsection