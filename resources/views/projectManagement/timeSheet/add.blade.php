@extends('admin_frontend.master')
@section('content')

    
 <div class="content-wrapper">
<form action="{{ url('Team-Member/Time-Sheet/Store', $id)}}" method="POST" enctype="multipart/form-data">
@csrf

    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

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

        <h4 class="card-title">Add Log </h4>
         <p class="card-description"></p>

        
         <div class="row">

            <div class="col">
                <div class="form-group">
                    <label for="Login">Login Time</label>
                    <input type="datetime-local" class="form-control" id="Login" name="Login">

                </div>
           
            
                <div class="form-group">
                    <label for="Date">Date</label>
                    <input type="date" class="form-control" id="Date" name="Date">
                </div>
                     

                
            </div>
            
            <div class="col">

                <div class="col">
                    <div class="form-group">
                        <label for="Logout">Logout</label>
                        <input type="datetime-local" class="form-control" id="Logout" name="Logout">
                    </div>

                    <div class="form-group">
                        <label for="Hours">Total Minutes</label>
                        <input type="number" class="form-control" id="Hours" name="Hours">
                    </div>

          

            

           

            </div>

        </div>
        
        


<br>
<div class="col-12 grid-margin">
    <button type="submit" class="btn btn-primary mr-2" >Submit </button> 
 
 </div>


</form></div></div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



@endsection
