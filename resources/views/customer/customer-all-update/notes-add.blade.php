@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
  <form action="{{ route('notes-store') }}" method="POST" enctype="multipart/form-data">
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

    {{-- Reminder card --}}
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Notes        </h4>
        {{-- <p class="card-description">   </p> --}}

        <!-- row  -->
        <div class="form-group row">

            <input type="hidden" name="customer_id" value="{{$id}}">
          <div class="col-2">
            <label>Date</label>
            <div id="">
              <input class="typeahead" type="date" name="date" value="" >
            </div>
          </div>
          <div class="col-10">
            <label>Details</label>
            <div id="">
              <input class="typeahead" type="text" name="details" value="">
            </div>
          </div>

        </div>
        <!-- row end -->

      </div>
    </div>

  </div>
{{-- Reminder card end --}}


<div class="col-12 grid-margin">
    <button type="submit" class="btn btn-primary mr-2" >Add </button> 
 </div>


  </form>
</div>

@endsection
