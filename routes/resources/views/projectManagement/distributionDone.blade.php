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
            onclick="window.location.href='{{ URL::TO('Project/task/add/') }}';" >
                      <i class="mdi mdi-plus-circle-outline"></i>
                      Add New Task </button>
          </ol>
        </nav>
      </div>
      <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Task Done</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <div class="table-responsive">
                    <table class="table table-bordered">
    <thead>
            <tr>
              <th class="card-title">Task</th>
              <th class="card-title">Project</th>
              <th class="card-title">Created At</th>
              <th class="card-title">Due Date</th>

              <th class="card-title">Estimated Time</th>
              <th class="card-title">Employee Name</th>

              <th class="card-title">Employee Start time </th>
              <th class="card-title">Employee End time</th>
              <th class="card-title">Total hours</th>
              <th class="card-title">Status</th>
              <th class="card-title">Priority</th>
              <th class="card-title">Notes</th>
              <th class="card-title"><h6>Action</h6></th>
            </tr>
    </thead>
    <tbody>
      @foreach($data as $item)
      <tr>
          {{-- <td> <a href="{{ route('accounts.show',$item->id) }}"> {{ $item->name }}</a>  </td> --}}

          {{-- <td>
            <a href="{{ URL::TO('Project/page', $item->id) }}">{{ $item->project_name }}</a>
          </td> --}}
          <td>{{ $item->task_name }}</td>
          <td>{{ $item->project->project_name }}</td>
          <td>{{ $item->created_at }}</td>
          <td>{{ $item->DueDate }}</td>

          <td>{{ $item->time_estimate }}</td>
          <td>{{ $item->user->First_Name ?? 'N/A' }} </td>
          <td>{{ $item->Start_time }}</td>
          <td>{{ $item->End_time }}</td>
          <td>{{ $item->total_time }}</td>
          <td>{{ $item->status }}</td>
          <td>{{ $item->priority }}</td>
          <td>{{ $item->Notes }}</td>
          <td>
              <!-- Button to trigger modal for account deletion -->
              <a class="btn btn-sm btn-info px-2" href="{{ route('Task.Edit', $item->id) }}">Edit</a>
              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('Task.Delete', $item->id) }}')">Delete</button>
          </td>
      </tr>
  @endforeach
  

        
    </tbody>
</table>


                    </div>
                  </div>
                </div>
              </div>

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
