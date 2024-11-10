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
  {{ Form::open([ 'url' => 'payment-detail-update/' . $paymentDetail->id, 'method' => 'POST' ]) }}
  @method('POST')
<div class="col-12 grid-margin" id="appendClone">
{{-- payment detail start --}}
    <section class="clone my-2">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Payment Details</h4>
                <p class="card-description">Payment Detail Fields</p>
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
                                    'eft' => 'EFT'
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
    <div class="col-12 grid-margin">
      {{ Form::submit('Update',['class' => 'btn btn-primary mr-2 px-4']) }}
    </div>
</div> {{-- grid margin close --}}
@endsection