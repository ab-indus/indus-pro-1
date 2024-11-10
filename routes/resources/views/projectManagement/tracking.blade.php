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
              onclick="window.location.href='{{ URL::TO('Project/Add') }}'" >
                        <i class="mdi mdi-plus-circle-outline"></i>
                        Add New Project </button>
            </ol>
          </nav>
        </div>
        <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Working Task List</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <div class="table-responsive">
                    <table class="table table-bordered">
    <thead>
            <tr >
              <th class="card-title">Task Title</th>
              <th class="card-title">Assign To</th>
              <th class="card-title">Status</th>
              <th class="card-title">Due Date</th>
              <th class="card-title">Project Name</th>
              <th class="card-title">Priority Level</th>
              <th class="card-title">Short Detail</th>
              <th class="card-title"><h6>Action</h6></th>
            </tr>
    </thead>
    <tbody>
        @foreach($working as $item)
            <tr>
                {{-- <td> <a href="{{ route('accounts.show',$item->id) }}"> {{ $item->name }}</a>  </td> --}}

                <td>{{ $item->task_name }}</td>
                <td>later</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->due_date }}</td>
                <td>later</td>
                <td>{{ $item->priority_level }}</td>
                <td>{{ $item->short_detail }}</td>
                <td>
                    <!-- Button to trigger modal for account deletion -->
                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('Task.Delete', $item->id) }}')">Delete</button>
                </td>
            </tr>
        @endforeach
        
    </tbody>
</table>


                    </div>

                  </div> </div></div>

              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <h4 class="card-title"> Task In Queue</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <div class="table-responsive">
                    <table class="table table-bordered">
    <thead>
            <tr >
              <th class="card-title">Task Title</th>
              <th class="card-title">Assign To</th>
              <th class="card-title">Status</th>
              <th class="card-title">Due Date</th>
              <th class="card-title">Project Name</th>
              <th class="card-title">Priority Level</th>
              <th class="card-title">Short Detail</th>
              <th class="card-title"><h6>Action</h6></th>
            </tr>
    </thead>
    <tbody>
        @foreach($pending as $item)
            <tr>
                {{-- <td> <a href="{{ route('accounts.show',$item->id) }}"> {{ $item->name }}</a>  </td> --}}

                <td>{{ $item->task_name }}</td>
                <td>later</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->due_date }}</td>
                <td>later</td>
                <td>{{ $item->priority_level }}</td>
                <td>{{ $item->short_detail }}</td>
                <td>
                    <!-- Button to trigger modal for account deletion -->
                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('Task.Delete', $item->id) }}')">Delete</button>
                </td>
            </tr>
        @endforeach
        
    </tbody>
</table>

                    </div>
                    {{-- table div end --}}
                  </div></div></div>




              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete  Project</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" >
                      @method('delete')
                      @csrf
                    <div class="modal-body">
                      Are you sure you want to delete
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              
<script>
  function showForm(url){
  
  $("#exampleModal form").attr('action', url);
  $("#exampleModal").modal("show");
  }
  
  </script>
@endsection
