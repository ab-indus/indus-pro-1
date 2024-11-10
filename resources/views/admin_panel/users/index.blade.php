@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

  <!-- header -->
  <div class="page-header">
              <h3 class="page-title">  </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb"> 
                  <a href="{{ route('users.create') }}" type="button" class="btn btn-info btn-icon-text" >
                    <i class="mdi mdi-plus-circle-outline"></i>
                    Add New User </a>
                </ol>
              </nav>
            </div>
            <!-- header end -->

            <div class="template-demo">
              <!-- Add this button to your HTML -->
              <button class="btn btn-primary mb-2 mb-md-0 mr-2" id="import-button">Import</button>
      <!-- <a href="" >Import</a> -->

      <a href="{{ route('user-export')}}" class="btn btn-primary mb-2 mb-md-0">Export</a>


      <!-- <a href="" class="btn btn-success">Document Management</a> -->

      
    </div><br>




<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User Table</h4>
                    <p class="card-description"> All User's Details <code></code>
                    </p>

                    <!-- Add this form to your HTML, initially hidden -->
<form id="formexpo" action="{{ route('import-user') }}" method="post" enctype="multipart/form-data" style="display: none;">
    @csrf
    <div class="mb-3">
        <label for="file" class="form-label">Choose File To Import</label>
        <input type="file" class="form-control" name="file" id="file" placeholder="" aria-describedby="fileHelpId">
        <div id="fileHelpId" class="form-text"></div>
    </div>
    <input type="submit" class="btn btn-primary mb-2 mb-md-0 mr-2" > 
</form>
              <br>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> Id </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Role </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $key => $user)

                          <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                              @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                   <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                              @endif
                            </td>
                            <td>
                              <a href="{{ route('users.edit', $user->id) }}"> <label class="badge badge-info">Edit</label></a> 
                                <form method="post" action="{{route('users.destroy',$user->id)}}">
                                  @method('delete')
                                  @csrf
                                  <button type="submit" class="badge badge-danger">Delete</button>
                              </form>
                              </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                      <!-- Add this section to display pagination links -->
                    </div>
                  </div>
                  
                </div>
              </div>
              
<!-- Add this section to display pagination links -->
<div class="d-flex justify-content-center">
    {!! $data->links('pagination::bootstrap-4') !!}
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        let formVisible = false; // Track the visibility state of the form

        $("#import-button").click(function () {
            
                $("#formexpo").toggle();
           

        });
    });
</script>
@endsection
