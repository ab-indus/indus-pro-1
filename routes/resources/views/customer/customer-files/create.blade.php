@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form action="{{ route('customer-import.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

  @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- ========== import start =============== -->
    <div class="card my-2" >
        <div class="card-body">

            <h4 class="card-title">Import File</h4>
            <p class="card-description">Import</p>
               

            
            <div class="row">

           

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">File Name</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" />         
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Type</label>
                            <div class="col-sm-9">
                            <select class="form-control" required name="type">
                                    <option value="Csv">Csv</option>
                                    <option value="Docs">Docs</option>
                                    <option value="Excel">Excel</option>
                            </select>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">File</label>
                            <div class="col-sm-9">
                            <input type="file" class="form-control" name="file" />         
                            </div>
                        </div>
                    </div>

            </div>


                   




        </div> {{-- card body --}}
    </div> {{-- card close --}}

                    <!-- ==========  import end =============== -->



<div class="col-12 grid-margin">
   <button type="submit" class="btn btn-primary mr-2" >Upload </button> 

</div>

</form>
</div>

@endsection
