@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
  <form action="{{ route('notes-edit', $notes->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    {{-- Reminder card --}}
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Notes        </h4>
        {{-- <p class="card-description">   </p> --}}

        <!-- row  -->
        <div class="form-group row">

          <div class="col-2">
            <label>Date</label>
            <div id="">
              <input class="typeahead" type="date" name="Reminder_date" value="{{$notes->date}}" >
            </div>
          </div>
          <div class="col-10">
            <label>Details</label>
            <div id="">
              <input class="typeahead" type="text" name="Reminder_Details" value="{{$notes->details}}">
            </div>
          </div>

        </div>
        <!-- row end -->

      </div>
    </div>

  </div>
{{-- Reminder card end --}}


<div class="col-12 grid-margin">
    <button type="submit" class="btn btn-primary mr-2" >Update </button> 
 </div>


  </form>
</div>

@endsection
