@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form action="{{ route('product.store') }}" method="POST">
  @csrf
<!-- 1st card -->
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Payments Pending</h4>
<!-- info -->
<!-- product -->
<p class="card-description"> Payment Information Fields</p>
<!-- row  -->
            <div class="row">

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Agent</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $payment->agent }}</p> 
                  </div>
                </div>
              </div>

                            <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Customer</label>
                    <div class="col-sm-9">
                    <p class="col-form-label text-muted">{{ $payment->customer }}</p> 
                    </div>
                    </div>
                </div>

            </div>
<!-- row -->
<div class="row">

{{-- <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Policy</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $payment->policy }}</p> 
      </div>
      </div>
  </div> --}}
<!-- try -->

    <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Payment Method</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $payment->payment_method }}</p> 
      </div>
      </div>
  </div>
  <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Split Payment</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $payment->split_payment }}</p> 
      </div>
      </div>
  </div>


</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Payment amount</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $payment->payment_amount }}</p> 
    </div>
  </div>
</div>

              <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Payment method</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $payment->payment_method }}</p> 
      </div>
      </div>
  </div>

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Total Payment</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $payment->total_payment }}</p> 
    </div>
  </div>
</div>
<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Agency fee</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $payment->agency_fee }}</p> 
    </div>
  </div>
</div>
          

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Total recieved </label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $payment->total_recieved }}</p> 
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Future due date </label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $payment->future_due_date }}</p> 
    </div>
  </div>
</div>

</div>
<!-- end -->
<!-- row -->
<div class="row">

  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Notes</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $payment->notes }}</p> 
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload Reciept</label>
                  <div class="col-sm-9">
                    <div class="py-1 ">
                      <img  src="{{ asset('storage/'.$payment->receipt) }}" height="100px" width="100px" alt="job image" title="job image">
                        </div>
                  </div>
                </div>
              </div>
              
            </div>
  <!-- end -->
</div></div></div>

    <!-- 2nd card -->
<div  class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<p class="card-description"> Split Payment  </p>

<div class="row">
  
<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Payment amount</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $payment->payment_amount_Split }}</p> 
    </div>
  </div>
</div>

            <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Payment method</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $payment->payment_method_Split }}</p> 
      </div>
      </div>
  </div> 
  
  </div>
  <!-- row -->
</div></div></div>

</form>
</div>


@endsection
