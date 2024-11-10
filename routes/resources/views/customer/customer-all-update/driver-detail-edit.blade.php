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
  {{ Form::open([ 'url' => 'driver-detail-update/' . $driverDetail->id, 'method' => 'POST' ]) }}
  @method('POST')
<div class="col-12 grid-margin" id="appendClone">

{{-- driver detail start --}}
    <section class="clone my-2" id="driverSection">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Driver Details</h4>
                <p class="card-description"> Driver Detail Fields</p>
                <!-- row -->
                    <div class="row">
                        <!-- {{ Form::hidden('driver_id[]', $driverDetail->id) }} -->
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("driver name","Named Driver" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('driver_name', ['named' => 'Named','rated' => 'Rated', 'excluded' => 'Excluded'], old('driver_name',$driverDetail->driver_name) , ['placeholder' => 'Named Driver...' , "class" => "form-control"]) }}
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
                                {{ Form::select('relationship', [
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
                                {{ Form::text('f_name', old('f_name',$driverDetail->f_name)  , ["class" => "form-control"]) }}
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
                                {{ Form::text('m_name', old('m_name',$driverDetail->m_name)  , ["class" => "form-control"]) }}
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
                                {{ Form::text('l_name', old('l_name',$driverDetail->l_name)  , ["class" => "form-control"]) }}
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
                                {{ Form::email('email', old('email',$driverDetail->email)  , ["class" => "form-control"]) }}
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
                                {{ Form::text('phone', old('phone',$driverDetail->phone)  , ["class" => "form-control"]) }}
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
                                {{ Form::select('gender', ['male' => 'Male','female' => 'Female','other' => 'Other'], old('gender',$driverDetail->gender) , ['placeholder' => 'Gender...' , "class" => "form-control"]) }}
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
                                {{ Form::date('dob', old('dob',$driverDetail->dob)  , ["class" => "form-control"]) }}
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
                                {{ Form::text('ss_no', old('ss_no',$driverDetail->ss_no)  , ["class" => "form-control"]) }}
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
                                {{ Form::text('id_no', old('id_no',$driverDetail->id_no)  , ["class" => "form-control"]) }}
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
                                {{ Form::text('id_type', old('id_type',$driverDetail->id_type)  , ["class" => "form-control"]) }}
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
                                {{ Form::text('emp_or_bsn_name', old('emp_or_bsn_name',$driverDetail->employer_or_bsn_name)  , ["class" => "form-control"]) }}
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
                                {{ Form::text('type_of_bsn_or_work', old('type_of_bsn_or_work',$driverDetail->type_of_bsn_or_work)  , ["class" => "form-control"]) }}
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
                                {{ Form::text('ein_no', old('ein_no',$driverDetail->ein)  , ["class" => "form-control"]) }}
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
                                {{ Form::text('bsn_work_phone', old('bsn_work_phone',$driverDetail->bsn_or_work_phone)  , ["class" => "form-control"]) }}
                                @error("bsn_work_phone")
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
    {{-- driver detail end --}}

<div class="col-12 grid-margin">
      {{ Form::submit('Update',['class' => 'btn btn-primary mr-2 px-4']) }}
    </div>
</div> {{-- grid margin close --}}
@endsection