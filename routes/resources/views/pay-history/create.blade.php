@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form class="form-sample" action="{{url('pay-history/add/'.$customerId)}}" method="post">
@csrf
<!-- form start  -->
customer : {{$customerId}}

<div class="col-12 grid-margin">
  <div class="card">
      <div class="card-body">
          <h4 class="card-title">Add Payment</h4>

          <div class="row">

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Heading</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="heading" />
                      </div>
                  </div>
              </div>

            <!-- Add this hidden field to store the selected customer_id -->
<input type="hidden" id="custom_payment_id" name="customer_id" value="{{$customerId}}">

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Total Fee</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="total_fee" />
                      </div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Paid date</label>
                      <div class="col-sm-9">
                          <input type="date" class="form-control" name="pay_date" />
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Next Payment</label>
                      <div class="col-sm-9">
                          <input type="date" class="form-control"  name="next_pay" />
                      </div>
                  </div>
              </div>

          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Paid Amount</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control"  name="paid_amount" />
                    </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Amount left</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control"  name="fee_remain" />
                      </div>
                  </div>
              </div>

          </div>

 

    </div></div></div>






        <div class="col-12 grid-margin">
   {{-- <button type="button" class="btn btn-primary mr-2" onclick="add_policy()">Add Additional Policy </button>  --}}
   <button type="submit" class="btn btn-primary mr-2" >Submit Form </button> 

</div>




    </form>

    <!-- form end -->
  </div>
  {{-- <script src="{{asset('assets/js/employee.js')}}"></script> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->

@endsection
