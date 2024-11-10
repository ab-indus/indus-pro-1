@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->



<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Task History Personal</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <div class="table-responsive">

                        
                    <table class="table table-bordered">
    <thead>
            <tr>


              <th class="card-title">Project Name</th>
              <th class="card-title">Task</th>
              <th class="card-title">Estimated Time</th>
              <th class="card-title">Estimated Cost</th>
              <th class="card-title">Deadline</th>
              <th class="card-title">Assigned by</th>
              <th class="card-title">Assigned Date</th>
              <th class="card-title">Assignor Notes</th>
              <th class="card-title">Start Time</th>
              <th class="card-title">End Time</th>
              <th class="card-title">Assignee Note</th>
              <th class="card-title">Status</th>
              <th class="card-title">Actual time</th>
              
              <th class="card-title">Action</th>

              {{-- old --}}
              {{-- <th class="card-title">Task Details</th>
              <th class="card-title">Category</th>
              <th class="card-title">Estimated Time</th>
              <th class="card-title">Employee Name</th>
              <th class="card-title">Employee Start time </th>
              <th class="card-title">Employee End time</th>
              <th class="card-title">Total Time</th>
              <th class="card-title">Status</th>
              <th class="card-title">Notes</th>
               --}}


            </tr>
    </thead>
    <tbody>

      @foreach($data as $item)
      <tr>
         
          {{-- old --}}
          {{-- <td>{{ $item->task_name }}</td>
          <td>{{ $item->project->project_name }}</td>
          <td>{{ $item->time_estimate }}</td>
          <td>{{ $item->user->name }} </td>
          <td>{{ $item->Start_time }}</td>
          <td>{{ $item->End_time }}</td>
          <td>{{ $item->total_time }}</td>
          <td>{{ $item->status }}</td>
          <td>{{ $item->Notes }}</td> --}}

          <td>{{ $item->project->project_name ?? 'N/A' }}</td>
          <td>{{ $item->task_name }}</td>
          <td>{{ $item->time_estimate ?? 'N/A' }}</td>
          <td>{{ $item->EstimatedCost ?? 'N/A' }}</td>
          <td>{{ $item->DueDate ?? 'N/A' }}</td>
          <td>{{ $item->assignBy->First_Name ?? 'N/A' }}</td>
          <td>{{ $item->created_at ?? 'N/A' }}</td>

          <td>{{ $item->Notes ?? 'N/A' }}</td>
          <td>{{ $item->Start_time ?? 'N/A' }}</td>
          <td>{{ $item->End_time ?? 'N/A' }}</td>
          <td>{{ $item->Notes_Assignee ?? 'N/A' }}</td>
          <td>{{ $item->status ?? 'N/A' }}</td>
          <td>{{ $item->total_time  ?? '0' }} Minutes</td>

          


          <td>
              <!-- Button to trigger modal for account deletion -->
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
