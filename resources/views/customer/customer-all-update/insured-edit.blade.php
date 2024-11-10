@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form action="{{ route('customerInsured.update', $data->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('POST')

      <!-- ==================== insured items, lien info and premium calculations start ==================== -->
      <section class="clone my-2" id="cloneILPContainer">
        <div class="card my-2" >
            <div class="card-body">
                <!-- ========== insured items start =============== -->
                <h4 class="card-title">Insured Items</h4>
                <p class="card-description">Insured Items Fields</p>
                <!-- row -->
                    <div class="row">

                    <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Item No","Item No" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                            <input type="number" class="form-control" value="{{ $data->insured_item_no }}" name="insured_item_no"  />

                                @error("insured_item_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Insurance company","Carrier " , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                 <input type="text" class="form-control" value="{{ $data->ins_com }}" name="ins_com"  />

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
                                <input type="text" class="form-control" value="{{ $data->policy_no }}" name="policy_no"  />

                                @error("policy_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("insurance plan","Plan" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $data->plan }}" name="plan"  />

                                @error("plan")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("type","Policy Term" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $data->type }}" name="type"  />

                                @error("type")
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
                            {{ Form::label("insurance year","Year" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $data->year }}" name="year"  />

                                @error("year")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("insurance make","Make" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $data->make }}" name="make"  />

                                @error("make")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("insurance model","Model" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $data->model }}" name="model"  />

                                @error("model")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("insurance vin no","VIN Number" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $data->vin_no }}" name="vin_no"  />

                                @error("vin_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                    </div>
                    <!-- row end -->

            
                    </div> {{-- card body --}}
            </div> {{-- card close --}}
                    <!-- ========== insured items end =============== -->


                    <div class="card my-2" >
            <div class="card-body">
                <!-- ========== coverage start =============== -->
                <h4 class="card-title">Coverage</h4>
                <p class="card-description">Coverage Fields</p>

                <div class="row">

                   <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("liability limit","Liability Limits" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $data->liability_limit }}" name="liability_limit"  />

                                @error("liability_limit")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                    

                </div>
                <!-- row -->

                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("comp deductible","Comp (OTC) Deductible" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $data->comp_deductible }}" name="comp_deductible"  />

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
                                <input type="text" class="form-control" value="{{ $data->collison_deductible }}" name="collison_deductible"  />

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
                                <input type="text" class="form-control" value="{{ $data->um_uim_bi_limit }}" name="um_uim_bi_limit"  />

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
                                <input type="text" class="form-control" value="{{ $data->um_uim_pd }}" name="um_uim_pd"  />

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
                                <input type="number" class="form-control" value="{{ $data->rent_amount }}" name="rent_amount"  />

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
                                <input type="number" class="form-control" value="{{ $data->towing_amount }}" name="towing_amount"  />

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
                                 <input type="text" class="form-control" value="{{ $data->gap }}" name="gap"  />
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
                                <input type="text" class="form-control" value="{{ $data->pip_amount }}" name="pip_amount"  />
                                @error("pip_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("med amount","Med Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <input type="number" class="form-control" value="{{ $data->med_amount }}" name="med_amount"  />

                                @error("med_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>

                    </div>
                    <!-- row end -->


            </div> {{-- card body --}}
            </div> {{-- card close --}}



<div class="col-12 grid-margin">
   <button type="submit" class="btn btn-primary mr-2" >Submit </button> 

</div>

</form>
</div>
{{-- <script src="{{asset('assets/js/employee.js')}}"></script> --}}

@endsection
