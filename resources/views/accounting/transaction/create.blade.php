@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
  <form action="{{ route('transaction.store') }}" method="POST" enctype="multipart/form-data">
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
    {{-- Money card --}}
<div  class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        {{-- <h4 class="card-title">Add Transaction        </h4> --}}
        {{-- <p class="card-description">   </p> --}}
        {{-- button --}}
   <div class="row justify-content-center">
        <div class="col-md-6">
            <button type="button" id="money_in_btn" class="btn btn-primary btn-block mb-3">Money In</button>
        </div>
        <div class="col-md-6">
            <button type="button" id="money_out_btn" class="btn btn-danger btn-block mb-3">Money Out</button>
        </div>
    </div>

    <br><br>
        <!-- row  -->
        <input type="hidden" name="type" >



{{-- money in card --}}
<div id="moneyin" style="display: none">

  {{-- <h5 class="card-title">Money In</h5> --}}
  <p class="card-description">Money In   </p>


  <div class="form-group">
    <label for="exampleInputName1">Date</label>
    <input type="date" class="form-control" name="Date_in" placeholder="Date_in">
  </div>

  <div class="row">

    <div class="col-md-10">
      </div>
      <div class="col-md-2">
        <a href="{{url('new/customer')}}" class="btn btn-info mr-2">Add Customer  </a>
        </div>

</div><br>

  <div class="form-group">
    <label >Coming From</label>
    <select id="new_customer" name="customer_id" class="form-control">
        @foreach ($customers as $customer)
        <option value="{{ $customer->cus_id }}" >{{ $customer->FIRSTNAME}} {{ $customer->MIDDLE}} {{ $customer->LASTNAME}}</option>
        @endforeach
  </select>
  </div>

  <div class="row">

    <div class="col-md-10">
      </div>
      <div class="col-md-2">
        <a href="{{url('accounts/create')}}" class="btn btn-info mr-2">Add Income Account  </a>
        </div>

</div><br>

  <div class="form-group">
    <label for="exampleInputName1">For What</label>
  <select  name="ForWhat_in" class="form-control">
    @foreach ($comeIn as $account)
    <option value="{{ $account->id }}" >{{ $account->name }}</option>
    @endforeach
</select>
  </div>

  <div class="form-group">
    <label for="">Amount To Come In Now</label>
    <input class="typeahead" type="number" name="Amount_in" >
  </div>

  <div class="form-group">
    <label for="">Amount To Come Later</label>
    <input class="typeahead" type="number" name="AmountLater_in"  >
  </div>

  {{-- <div class="form-group">
    <label for="">Receipt, Invoice</label>
    <select id="receipt_invoice_money_in" name="ReceiptInvoice_in" class="form-control">
      <option value="Receipt">Receipt</option>
      <option value="Invoice">Invoice</option>
  </select>  
</div> --}}

       
  <button type="button" id="ReceiptIn" class="btn btn-primary mr-2" > Receipt</button> 
  <button type="button" id="InvoiceIn" class="btn btn-primary mr-2" > Invoice</button> 

            </div>
              {{-- money in end --}}


              {{-- money Out card --}}
<div id="moneyOut" style="display: none">

{{-- new money out --}}
<p class="card-description">Money Out   </p>

<div class="form-group">
  <label for="exampleInputName1">Date</label>
  <input type="date" class="form-control" name="Date_out" >
</div>

<div class="row">

  <div class="col-md-10">
    </div>
    <div class="col-md-2">
      <a href="{{url('new/customer')}}" class="btn btn-info mr-2">Add Vendor  </a>
      </div>

</div><br>

<div class="form-group">
  <label >Going To</label>
  <select id="new_customer" name="vendor_id" class="form-control">
    @foreach ($vendors as $vendor)
        <option value="{{ $vendor->id }}" >{{ $vendor->vendor_name }}</option>
        @endforeach
</select>
</div>

<div class="row">

  <div class="col-md-10">
    </div>
    <div class="col-md-2">
      <a href="{{url('accounts/create')}}" class="btn btn-info mr-2">Add Expense Account  </a>
      </div>

</div><br>

<div class="form-group">
  <label for="exampleInputName1">For What</label>

<select id="for_what_money_out" name="ForWhat_out" class="form-control">
  @foreach ($comeOut as $ComeOut)
  <option value="{{ $ComeOut->id }}" >{{ $ComeOut->name }}</option>
  @endforeach
</select>
</div>

<div class="form-group">
  <label for="">Amount Going Now</label>
  <input class="typeahead" type="number" name="AmountNow_out" >
</div>

<div class="form-group">
  <label for="">Amount To Go Later</label>
  <input class="typeahead" type="number" name="AmountLater_out"  >
</div>

{{-- <div class="form-group">
  <label for="">Receipt, Invoice</label>
  <select id="receipt_invoice_money_in" name="ReceiptInvoice_out" class="form-control">
    <option value="Receipt">Receipt</option>
    <option value="Invoice">Invoice</option>
</select>  
</div> --}}

<button type="button" id="ReceiptOut" class="btn btn-primary mr-2" > Receipt</button> 
<button type="button" id="InvoiceOut" class="btn btn-primary mr-2" > Invoice</button> 


{{-- new end --}}
      

        </div>
          {{-- money Out end --}}




      </div></div></div>
{{-- Money card end --}}


<div class="col-12 grid-margin">
    <button type="submit" class="btn btn-primary mr-2" >Submit </button> 
 </div>

  </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function () {
    // Initially hide the money out section
    $('#moneyOut').hide();
    // $('#moneyin').hide();

    // Show money in section on money in button click
    $('#money_in_btn').click(function () {
      $('#moneyin').show();
      $('#moneyOut').hide();
      $('input[name="type"]').val("Money In");
    });

    // Show money out section on money out button click
    $('#money_out_btn').click(function () {
      $('#moneyin').hide();
      $('#moneyOut').show();
      $('input[name="type"]').val("Money Out");
    });
  });
</script>

@endsection
