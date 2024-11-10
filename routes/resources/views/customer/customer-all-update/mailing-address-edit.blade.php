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
  {{ Form::open([ 'url' => 'mailing-address-update/' . $mailingAddress->id, 'method' => 'POST' ]) }}
  @method('POST')
<div class="col-12 grid-margin" id="appendClone">

{{-- address details section start --}}
    <section class="mb-2 clone">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h2 class="fw-bold">Address Details</h2>
                <h4 class="card-title">Mailing Address</h4>
                <p class="card-description">Mailing Address Fields</p>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("street address","Street Address" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('ma_street_address', old('ma_street_address',$mailingAddress->ma_street_address) , ["class" => "form-control"]) }}
                            @error("ma_street_address")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("city","City" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('ma_city', old('ma_city',$mailingAddress->ma_city) , ["class" => "form-control"]) }}
                            @error("ma_city")
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
                            {{ Form::text('ma_country', old('ma_country',$mailingAddress->ma_country) , ["class" => "form-control"]) }}
                            @error("ma_country")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("state","State" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('ma_state', old('ma_state',$mailingAddress->ma_state) , ["class" => "form-control"]) }}
                            @error("ma_state")
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
                            {{ Form::number('ma_zip_code', old('ma_zip_code',$mailingAddress->ma_zip_code) , ["class" => "form-control"]) }}
                            @error("ma_zip_code")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("rent or own","Rent or Own" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::select('ma_rent_or_own', ['rent' => 'Rent' , 'own' => 'Own'] , old('ma_rent_or_own',$mailingAddress->ma_rent_or_own) , ["class" => "form-control" , 'placeholder' => 'Rent or Own...']) }}
                            @error("ma_rent_or_own")
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