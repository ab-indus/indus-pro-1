@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
  <form action="{{ route('customerPremium.update', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <!-- 1st card -->


                   <!-- ========== premium calculation start =============== -->
                   <div class="card my-2" >
            <div class="card-body">
                    <h4 class="card-title">Premium Calculation</h4>
                    <p class="card-description">Premium Calculation Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("base premium","Base Premium" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $data->base_premium }}" name="base_premium"  />

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
                                <input type="number" class="form-control" value="{{ $data->crime_prevention_fee }}" name="crime_prevention_fee"  />

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
                                <input type="number" class="form-control" value="{{ $data->policy_fee }}" name="policy_fee"  />

                                @error("policy_fee")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Late Fee","Late Fee" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="number" class="form-control" value="{{ $data->late_fee }}" name="late_fee"  />

                                @error("late_fee")
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
                            {{ Form::label("reinstatement fee","Reinstatement Fee" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="number" class="form-control" value="{{ $data->reinstatement_fee }}" name="reinstatement_fee"  />

                                @error("reinstatement_fee")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Installment Fee","Installment Fee" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="number" class="form-control" value="{{ $data->installment_fee }}" name="installment_fee"  />

                                @error("installment_fee")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Credit Card Fee","Credit Card Fee" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="number" class="form-control" value="{{ $data->credit_card_fee }}" name="credit_card_fee"  />

                                @error("credit_card_fee")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Misc. Fee","Misc. Fee" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="number" class="form-control" value="{{ $data->misc_fee }}" name="misc_fee"  />

                                @error("misc_fee")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Other Fees","Other Fees" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="number" class="form-control" value="{{ $data->other_fees }}" name="other_fees"  />

                                @error("other_fees")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Agency fee","Agency Fee" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="number" class="form-control" value="{{ $data->agency_fee }}" name="agency_fee"  />

                                @error("agency_fee")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("total premium","Total Premium" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="number" class="form-control" value="{{ $data->total_premium }}" name="total_premium"  />

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




    <div class="col-12 grid-margin">
      <button type="submit" class="btn btn-primary mr-2">Update</button>
    </div>
  </form>
</div>

@endsection
