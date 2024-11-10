@extends('admin_frontend.master')
@section('content')

 <div class="content-wrapper">
<form action="{{ url('Quotes/4')}}" method="Get" enctype="multipart/form-data">
@csrf

    <div class="card my-2">
        <div class="card-body">

            <h4 class="card-title">Additional </h4>
            <p class="card-description">PART</p>

        
            


            <br>
            <div class="col-12 grid-margin">
                <button type="submit" class="btn btn-primary mr-2" >Submit </button> 
            
            </div>


        </div>
    </div>
    
</form>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



@endsection
