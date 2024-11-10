@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form action="{{ url('payment/'.$payment->id )}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
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
                    <select class="form-control" name="agent" required>
                      <option @if($payment->agent == 'Agent 1') selected @endif value="Agent 1">Agent 1</option>
                      <option @if($payment->agent == 'Agent 2') selected @endif value="Agent 2">Agent 2</option>
                    </select>
                  </div>
                </div>
              </div>

                            <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Customer</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="customer" required>
                      <option @if($payment->customer == 'Customer 1') selected @endif value="Customer 1">Customer 1</option>
                      <option @if($payment->customer == 'Customer 2') selected @endif value="Customer 2">Customer 2</option>
                    </select>
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
          <select class="form-control" name="policy" required>
          <option>ex</option>
          <option>ex</option>
          </select>
      </div>
      </div>
  </div> --}}

    <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Type Of Payment</label>
      <div class="col-sm-9">
          <select class="form-control" name="type_of_payment" required>
          <option @if($payment->type_of_payment == 'Monthly') selected @endif  value="Monthly">Monthly</option>
          <option @if($payment->type_of_payment == 'Endorsement') selected @endif value="Endorsement">Endorsement</option>
          <option @if($payment->type_of_payment == 'Down') selected @endif value="Down">Down</option>
          <option @if($payment->type_of_payment == 'Renewal') selected @endif value="Renewal">Renewal</option>
          <option @if($payment->type_of_payment == 'Reinstate') selected @endif value="Reinstate">Reinstate</option>
          </select>
      </div>
      </div>
  </div>
  <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Split Payment</label>
      <div class="col-sm-9">
          <select class="form-control" name="split_payment" required id ="payment" onmousedown="this.value='';" onchange="jsFunction(this.value);">
          <option @if($payment->split_payment == 'No') selected @endif value="No">No</option>
          <option @if($payment->split_payment == 'Yes') selected @endif value="Yes">Yes</option>
          </select>
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
      <input type="number" class="form-control" value="{{ $payment->payment_amount }}" name="payment_amount" required />
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
      <input type="number" class="form-control" value="{{ $payment->total_payment }}" name="total_payment" required />
    </div>
  </div>
</div>
<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Agency fee</label>
    <div class="col-sm-9">
      <input type="number" class="form-control"  value="{{ $payment->agency_fee }}"  name="agency_fee" required />
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
      <input type="number" class="form-control"  value="{{ $payment->total_recieved }}"  name="total_recieved" required />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Future due date </label>
    <div class="col-sm-9">
      <input type="date" class="form-control" value="<?php echo $payment->future_due_date ?>"   name="future_due_date" required />
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
        <input type="text" class="form-control" value="{{ $payment->notes }}" name="notes" required />
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Type Of Payment</label>
      <div class="col-sm-9">
        <select class="form-control" name="payment_method" required>
          <option @if($payment->payment_method == 'Card') selected @endif value="Card">Card</option>
          <option @if($payment->payment_method == 'Check') selected @endif value="cheque">cheque</option>
          <option @if($payment->payment_method == 'E-Check') selected @endif value="E-cheque">E-cheque</option>
          <option @if($payment->payment_method == 'EFT/Auto Pay') selected @endif value="EFT/Auto Pay">EFT/Auto Pay</option>
          <option @if($payment->payment_method == 'Money Order') selected @endif value="Money Order">Money Order</option>
          </select>
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload Reciept</label>
                  <div class="col-sm-9">
                    <input type="file" name="receipt" class="form-control"  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Policy </label>
                  <div class="col-sm-9">
                  <select class="form-control" name="policy" required>
                  <option @if($payment->policy == 'Policy 1') selected @endif value="Policy 1">Policy 1</option>
                  <option @if($payment->policy == 'Policy 2') selected @endif value="Policy 2">Policy 2</option>
                  </select>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                </div>
              </div>
              
            </div>
  <!-- end -->
</div></div></div>
<div id="pay_card">

    <!-- 2nd card -->


</div>


<div class="col-12 grid-margin">
   <button type="submit" class="btn btn-primary mr-2" >Update </button> 

</div>

</form>
</div>
<script src="{{asset('assets/js/employee.js')}}"></script>

@endsection
