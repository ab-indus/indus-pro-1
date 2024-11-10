@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
  <form action="{{ route('record-edit', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

   
    <!-- record card -->
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Record</h4>
        <p class="card-description"> Add Record Or Just Notes/Remainder </p>

        <!-- row  -->
        <div class="form-group row">
          <div class="col">
            <label>Type</label>
            <div id="">
                <input class="typeahead" type="text" value="{{$data->date}}" name="type_record">
            </div>
          </div>
          <div class="col">
            <label>Date</label>
            <div id="">
              <input class="typeahead" type="date" value="{{$data->date}}" name="date_record0">
            </div>
          </div>

          <div class="col">
            <label>Details</label>
            <div id="">
              <input class="typeahead" type="text" value="{{$data->details}}" name="details_record0">
            </div>
          </div>

          <div class="col">
            <label>Amount</label>
            <div id="">
              <input class="typeahead" type="number" value="{{$data->Amount}}" name="amount_record0">
            </div>
          </div>

           

          <div class="col">
            <label>Posted by</label>
            <div id="">
              <input class="typeahead" value="{{$data->Posted_by}}" type="text" name="Postedby">
            </div>
          </div>

       

        </div>
        <!-- row end -->

      </div>
    </div>

  </div>
<!-- record end -->


<div class="col-12 grid-margin">
    <button type="submit" class="btn btn-primary mr-2" >Update </button> 
 </div>


  </form>
</div>

@endsection
