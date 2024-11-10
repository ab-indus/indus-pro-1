@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
  <form action="{{ route('record-store') }}" method="POST" enctype="multipart/form-data">
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

<!-- record card -->
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Record</h4>
        <p class="card-description">  </p>

        <input type="hidden" name="customer_id" value="{{$id}}">

        <!-- row  -->
        <div class="form-group row">
          <div class="col">
            <label>Type</label>
            <div id="">
                <select class="typeahead form-control"  name="Type">
                    <option selected value="Payment">Payment</option>
                    <option value="Call">Call</option>
                    <option value="Text">Text</option>
                    <option value="Email">Email</option>
                    <option value="Walk In">Walk In</option>
                    <option value="Web">Web</option>
                    <option value="Reminder Sent">Reminder Sent</option>
            </select>
            </div>
          </div>
          <div class="col">
            <label>Date</label>
            <div id="">
              <input class="typeahead" type="date" name="date">
            </div>
          </div>

          <div class="col">
            <label>Details</label>
            <div id="">
              <input class="typeahead" type="text" name="details">
            </div>
          </div>

          <div class="col">
            <label>Amount</label>
            <div id="">
              <input class="typeahead" type="number" name="Amount">
            </div>
          </div>

          <div class="col">
            <label>Assigned to</label>
            <div id="">
              <select class="form-control"  name="employee_id" >
                @foreach ($employee as $employee)
                <option value="{{ $employee->id }}" >{{ $employee->email }}</option>
            @endforeach
            </select>
            </div>
          </div>

          <div class="col">
            <label>Posted by</label>
            <div id="">
              <input class="typeahead" type="text" name="Posted_by">
            </div>
          </div>

       

        </div>
        <!-- row end -->

      </div>
    </div>

  </div>
<!-- record end -->


<div class="col-12 grid-margin">
    <button type="submit" class="btn btn-primary mr-2" >Add </button> 
 </div>


  </form>
</div>

@endsection
