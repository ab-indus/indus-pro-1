@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">
<form action="{{ url('Payment/select')}}" method="POST" enctype="multipart/form-data">
@csrf

    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif


        <h4 class="card-title">Add Payment </h4>
         <p class="card-description">Select Policy</p>


          
    
         <div class="col-md-4">
            <div class="form-group">
                <label for="policy_number">Policy </label>
                {{-- <input type="text" class="form-control" id="policy_number" placeholder="Enter Policy Number"> --}}
                <select class="form-control" id="policy" name="policy">
                    <option value="">Select Policy</option>
                    @foreach ($data as $policy)

                    <option value="{{$policy->id}}">{{$policy->first_name}}</option>
                 
                    @endforeach

                </select>
            </div>
        </div>
        


<br>
<div class="col-12 grid-margin">
    <button type="submit" class="btn btn-primary mr-2">Next</button>
 
 </div>


</form>
</div></div>




@endsection
