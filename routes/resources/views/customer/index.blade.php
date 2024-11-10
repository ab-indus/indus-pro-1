@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

  <!-- header -->
    <div class="page-header">
        <h3 class="page-title">  </h3>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb"> 
            <button type="button" class="btn btn-info btn-icon-text" 
            onclick="window.location.href='{{ URL::TO('new/customer') }}';" >
                    <i class="mdi mdi-plus-circle-outline"></i>
                    Add New Customer Detail </button>
        </ol>
        </nav>

    </div>
    <div class="template-demo">
      <!-- <a href="{{url('')}}" class="btn btn-primary mb-2 mb-md-0 mr-2">Import</a> -->
      <button class="btn btn-primary mb-2 mb-md-0 mr-2" id="import-button">Import</button>
      <a href="{{ route('customer-export')}}" class="btn btn-primary mb-2 mb-md-0">Export</a>


      <!-- <a href="" class="btn btn-success">Document Management</a> -->

      
    </div>

<br>
    <!-- header end -->

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucess!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    
<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card" id="formexpo"  style="display: none;">

<div class="card" >
<div class="card-body" >
    <!-- Add this form to your HTML, initially hidden -->
    <form  action="{{ route('import-customer') }}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="mb-3">
        <label for="file" class="form-label">Choose File To Import</label>
        <input type="file" class="form-control" name="file" id="file" placeholder="" aria-describedby="fileHelpId">
        <div id="fileHelpId" class="form-text"></div>
    </div>
    <input type="submit" class="btn btn-primary mb-2 mb-md-0 mr-2" > 
</form>
</div></div></div>

<div class="col-lg-12 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">

                  
                    <h4 class="card-title">Customer List</h4>
                    <p class="card-description">  <code></code>
                    </p>

                                    


                    <form action="{{ route('customer.index') }}" method="GET">
                        <div class="form-group">
                            <label for="search">Search:</label>
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search by name">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form><br>

                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th><h6>Name</h6></th>
                            <th><h6>Email</h6></th>
                            <th><h6>SSN</h6></th>
                            <th><h6>Phone</h6></th>
                            <th><h6>Actions</h6></th>
                          </tr>
                        </thead>
                        <tbody>
                          @if ($data)
                            @foreach ($data as  $item)
                            <tr>
                              
                              <td>  <a href="{{ route('new-show',$item->cus_id) }}"> {{ $item->FIRSTNAME }} </a> </td>
                              <td> {{ $item->email }} </td>
                              <td> {{ $item->SSN }} </td>
                              <td> {{ $item->Phone }} </td>
                              <td>
                                <div class="d-flex">
                                  <form action="{{ route('customer.destroy', $item->cus_id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                {{-- <a href="{{ route('customer.edit',$item->cus_id) }}" class="btn btn-sm btn-success ms-1">Edit</a> --}}
                                <a href="{{ route('new-show',$item->cus_id) }}" class="btn btn-sm btn-light ms-1">Show</a>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                          @else
                            <tr>
                              <td colspan="13">No customers found...!.</td>
                            </tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
</div>

<script>
  function showForm(url){
  
  $("#exampleModal form").attr('action', url);
  $("#exampleModal").modal("show");
  }
  
  </script>
  <script src="{{ asset('js/search.js') }}"></script>
<script>
    $(document).ready(function () {
        let formVisible = false; // Track the visibility state of the form

        $("#import-button").click(function () {
            
                $("#formexpo").toggle();
           

        });
    });
</script>
@endsection
