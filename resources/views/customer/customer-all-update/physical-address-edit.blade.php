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
  {{ Form::open([ 'url' => 'physical-address-update/' . $physicalAddress->id, 'method' => 'POST' ]) }}
  @method('POST')
<div class="col-12 grid-margin" id="appendClone">

{{-- address details section start --}}
    <section class="mb-2 clone">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h2 class="fw-bold">Address Details</h2>
                <!-- <h4 class="card-title">Physical Address</h4>
                <p class="card-description">Physical Address Fields</p> -->
                <!-- row -->
                <div class="row">


                <!-- <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Type of Adderss</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="type_of_address">
                            <option value="Physical">Physical</option>
                            <option value="Garage">Garage</option>
                            <option value="Mailing">Mailing</option>
                            <option value="Business">Business</option>
                        </select>
                    </div>
                </div>
            </div> -->



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
                            {{ Form::select('pa_rent_or_own', ['rent' => 'Rent' , 'own' => 'Own', 'Not Applicable' => 'Not Applicable'] , old('pa_rent_or_own',$physicalAddress->pa_rent_or_own) , ["class" => "form-control" , 'placeholder' => 'Rent or Own...']) }}
                            @error("pa_rent_or_own")
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