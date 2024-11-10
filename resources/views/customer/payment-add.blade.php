@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
  <form action="" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Money card --}}
<div  class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Money In / Money Out        </h4>
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


{{-- money in card --}}
<div id="moneyin" style="display: none">

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
    <select id="new_customer" name="ComingFrom_in" class="form-control">
      <option value="Anthony">Anthony</option>
      <option value="Sara">Sara</option>
      {{-- <option value="new_customer">Add New Customer</option> --}}
  </select>
  </div>

  <div class="form-group">
    <label for="exampleInputName1">For What</label>
    <select id="for_what_money_in" name="ForWhat_in" class="form-control">
      <option value="Insurance Commission">Insurance Commission</option>
      <option value="Tax Prep/Filing Fee">Tax Prep/Filing Fee</option>
      <option value="EA Service Fee">EA Service Fee</option>
      <option value="Incorporating Fee">Incorporating Fee</option>
      <option value="Payroll Fee">Payroll Fee</option>
      <option value="Bookkeeping Fee">Bookkeeping Fee</option>
      <option value="Consultation Fee">Consultation Fee</option>
      <option value="Website/App Fee">Website/App Fee</option>
      <option value="Web Maintenance Fee">Web Maintenance Fee</option>
      <option value="Domain Fee">Domain Fee</option>
      <option value="Hosting Fee">Hosting Fee</option>
      <option value="IT Consult Fee">IT Consult Fee</option>
      <option value="SEO Fees">SEO Fees</option>
      <option value="SMM Fee">SMM Fee</option>
      <option value="PPC FEE">PPC FEE</option>
      <option value="Graphic Designing Fee">Graphic Designing Fee</option>
      <option value="Content Fee">Content Fee</option>
      <option value="Other Fee">Other Fee</option>
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

  <div class="form-group">
    <label for="">Receipt, Invoice</label>
    <select id="receipt_invoice_money_in" name="ReceiptInvoice_in" class="form-control">
      <option value="Receipt">Receipt</option>
      <option value="Invoice">Invoice</option>
  </select>  
</div>

       

            </div>
              {{-- money in end --}}


              {{-- money Out card --}}
<div id="moneyOut" style="display: none">

{{-- new money out --}}
<div class="form-group">
  <label for="exampleInputName1">Date</label>
  <input type="date" class="form-control" name="Date_in" placeholder="Date_out">
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
  <select id="new_customer" name="GoingTo_out" class="form-control">
    <option value="Anthony">Anthony</option>
    <option value="Sara">Sara</option>
    {{-- <option value="new_customer">Add New Customer</option> --}}
</select>
</div>

<div class="form-group">
  <label for="exampleInputName1">For What</label>
  <select id="for_what_money_in" name="ForWhat_out" class="form-control">
    <option value="Insurance Commission">Insurance Commission</option>
    <option value="Tax Prep/Filing Fee">Tax Prep/Filing Fee</option>
    <option value="EA Service Fee">EA Service Fee</option>
    <option value="Incorporating Fee">Incorporating Fee</option>
    <option value="Payroll Fee">Payroll Fee</option>
    <option value="Bookkeeping Fee">Bookkeeping Fee</option>
    <option value="Consultation Fee">Consultation Fee</option>
    <option value="Website/App Fee">Website/App Fee</option>
    <option value="Web Maintenance Fee">Web Maintenance Fee</option>
    <option value="Domain Fee">Domain Fee</option>
    <option value="Hosting Fee">Hosting Fee</option>
    <option value="IT Consult Fee">IT Consult Fee</option>
    <option value="SEO Fees">SEO Fees</option>
    <option value="SMM Fee">SMM Fee</option>
    <option value="PPC FEE">PPC FEE</option>
    <option value="Graphic Designing Fee">Graphic Designing Fee</option>
    <option value="Content Fee">Content Fee</option>
    <option value="Other Fee">Other Fee</option>
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

<div class="form-group">
  <label for="">Receipt, Invoice</label>
  <select id="receipt_invoice_money_in" name="ReceiptInvoice_out" class="form-control">
    <option value="Receipt">Receipt</option>
    <option value="Invoice">Invoice</option>
</select>  
</div>
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
    });

    // Show money out section on money out button click
    $('#money_out_btn').click(function () {
      $('#moneyin').hide();
      $('#moneyOut').show();
    });
  });
</script>

@endsection
