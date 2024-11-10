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
  {{ Form::open([ 'url' => 'date-amount-update/' . $datesAndAmount->id, 'method' => 'POST' ]) }}
  @method('POST')
<div class="col-12 grid-margin" id="appendClone">

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
      {{ Form::submit('Update',['class' => 'btn btn-primary mr-2 px-4']) }}
    </div>
</div> {{-- grid margin close --}}
@endsection