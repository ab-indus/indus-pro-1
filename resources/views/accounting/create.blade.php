@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form action="{{ url('accounting')}}" method="POST" enctype="multipart/form-data">
  @csrf

  @if ($errors->any())
  <div class="col-md-12">
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  </div>
@endif

                    <!-- ========== Journal start =============== -->
                    <div class="card my-2" id="cloneILPContainer">
            <div class="card-body">

                    <h4 class="card-title">Journal</h4>
                    <p class="card-description">Journal Fields</p>
                    <!-- row -->
                    <div class="row">
                                <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="date" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="Description" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Account (Dr)","Account (Dr)" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <!-- {{ Form::text('AccountDr', null , ["class" => "form-control"]) }} -->
                                <select class="form-control" required name="adr_id" id="AccountDr">
                            @foreach ($data as $data)
                                <option value="{{ $data->id }}" >{{ $data->name }}</option>
                            @endforeach
                        </select>
                                @error("AccountDr")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>


                           <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Debit","Debit" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('Debit', null , ["class" => "form-control"]) }}
                                @error("Debit")
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
                            {{ Form::label("Account (Cr)","Account (Cr)" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <select class="form-control" name="acr_id" id="AccountCr">
                                    @foreach ($item as $item)
                                        <option value="{{ $item->id }}" >{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error("AccountCr")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Credit","Credit" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('Credit', null , ["class" => "form-control"]) }}
                                @error("Credit")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                    </div>

                    <!-- row end -->

                


                    </div> {{-- card body --}}
            </div> {{-- card close --}}

                    <!-- ========== Journal end =============== -->


<!-- <div class="col-12 grid-margin"> -->




<div class="col-12 grid-margin">
   <button type="submit" class="btn btn-primary mr-2" >Submit </button> 

</div>

</form>
</div>
{{-- <script src="{{asset('assets/js/employee.js')}}"></script> --}}

@endsection
