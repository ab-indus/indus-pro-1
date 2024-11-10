@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">



<div class="col-lg-12 grid-margin stretch-card">
<div class="card my-2" id="cloneILPContainer">
  <div class="card-body">

      <h4 class="card-title">Basic </h4>
       <p class="card-description"></p>   

       <div class="row">

        <div class="col-md-2 mb-4">
          <label class="card-description">Status:</label>
          {{ $Member->status }}
          
        </div>
      
        <div class="col-md-2 mb-4">
          <label class="card-description">Salary:</label>
          {{ $Member->BaseSalary }}
          
        </div>
      
        <div class="col-md-2 mb-4">
          <label class="card-description">Schedule:</label>
          {{ $Member->Schedule }}
          
        </div>
      
      </div>


</div></div></div>
 


{{-- skills card --}}
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card my-2" >

      <div class="card">
          <div class="card-body">
              {{-- <p class="card-description ">Skills</p> --}}
              <h4 class="card-title ">Skills</h4>
  
  
              <table class="table table-bordered">
                  <thead>
                  <tr>
                    
                    <th class="card-title">Skill</th>
                    <th class="card-title">Estimated Time</th>
                    <th class="card-title">Estimated Cost</th>
                   
                  </tr>
                </thead>
                <tbody>
    
                    @if ($Member->memberSkills->isNotEmpty())
                        @foreach ($Member->memberSkills as $skill)
                            <tr>
                                <td>{{ $skill->skill_sub_category }}</td>
                                <td class="time">{{ $skill->estimated_time }}</td>
                                <td class="cost">{{ $skill->estimated_cost }}</td>
    
                            </tr>
                        @endforeach
                @else
                    No Skill Recorded.
                @endif
                      
                      </tbody>
                  </table>
            {{-- </div> --}}
  
  
              
          </div>
      </div>
      
      
  </div></div>
  
{{-- skills card end --}}



  {{-- info card --}}
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card my-2" id="cloneILPContainer">
      <div class="card-body">
  
        <h4 class="card-title">Member Info</h4>
        <p class="card-description"></p>
  
        <div class="row">
          <!-- First Name -->
          <div class="col-md-4 mb-4">
            <label class="card-description">First Name:</label>
            {{ $Member->First_Name }}
          </div>
  
          <!-- Middle Name -->
          <div class="col-md-4 mb-4">
            <label class="card-description">Middle Name:</label>
            {{ $Member->Middle_Name }}
          </div>
  
          <!-- Surname -->
          <div class="col-md-4 mb-4">
            <label class="card-description">Surname:</label>
            {{ $Member->Surname }}
          </div>
        </div>
  
        <div class="row">
          <!-- CNIC / NTN if Company -->
          <div class="col-md-4 mb-4">
            <label class="card-description">CNIC / NTN if Company:</label>
            {{ $Member->CNIC_NTN }}
          </div>
  
          <!-- Cell -->
          <div class="col-md-4 mb-4">
            <label class="card-description">Cell:</label>
            {{ $Member->Cell }}
          </div>
  
          <!-- Email -->
          <div class="col-md-4 mb-4">
            <label class="card-description">Email:</label>
            {{ $Member->Email }}
          </div>
        </div>
  
        <div class="row">
          <!-- Address Line 1 -->
          <div class="col-md-4 mb-4">
            <label class="card-description">Address Line 1:</label>
            {{ $Member->Address_Line_1 }}
          </div>
  
          <!-- City -->
          <div class="col-md-4 mb-4">
            <label class="card-description">City:</label>
            {{ $Member->City }}
          </div>
  
          <!-- Province -->
          <div class="col-md-4 mb-4">
            <label class="card-description" class="card-description">Province:</label>
            {{ $Member->Province }}
          </div>
        </div>
  
        <div class="row">
          <!-- Notes -->
          <div class="col-md-4 mb-4">
            <label class="card-description">Notes:</label>
            {{ $Member->Notes }}
          </div>
  
          <!-- Easy Paisa -->
          <div class="col-md-4 mb-4">
            <label class="card-description">Easy Paisa:</label>
            {{ $Member->EasyPaisa }}
          </div>
        </div>
  
      </div>
    </div>
  </div>
  
  {{-- info card end --}}



<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Task List Personal</h4>
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

              <th class="card-title">Action</th>
              


              {{--  old --}}
              
              {{-- <th class="card-title">Project</th>
              <th class="card-title">Created At</th>
              <th class="card-title">Due Date</th>

              <th class="card-title">Estimated Time</th>
              <th class="card-title">Employe Name</th>
              <th class="card-title">Status</th>
              <th class="card-title">Priority</th> --}}

              {{-- <th class="card-title">Task</th> --}}
              {{-- <th class="card-title">Employe Start time </th>
              <th class="card-title">Employe End time</th>
              <th class="card-title">Total Time</th> --}}
              
              {{-- <th class="card-title">Notes</th> --}}
            </tr>
    </thead>
    <tbody>

      @isset($item)
        <tr>
            {{-- <td> <a href="{{ route('accounts.show',$item->id) }}"> {{ $item->name }}</a>  </td> --}}

            {{-- <td>
              <a href="{{ URL::TO('Project/page', $item->id) }}">{{ $item->project_name }}</a>
            </td> --}}

            {{-- <td>{{ $item->task_name ?? 'N/A' }}</td> --}}

            {{-- new --}}
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


            

            {{-- <td>{{ $item->user->First_Name ?? 'N/A' }}</td>
            <td>{{ $item->priority ?? 'N/A' }}</td> --}}

           
            {{-- <td>{{ $item->total_time ?? 'N/A' }}</td> --}}
            {{-- <td>{{ $item->Notes ?? 'N/A' }}</td> --}}

            <td>
                <!-- Button to trigger modal for account deletion -->
                {{-- <a class="btn btn-sm btn-info px-2" href="{{ route('Task.View', $item->id) }}">Work</a> --}}
                <a class="btn btn-sm btn-info px-2" href="{{ route('Task.Edit', $item->id) }}">Start Work</a>

                {{-- <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('Task.Delete', $item->id) }}')">Delete</button> --}}
            </td>
        </tr>
    @else
        <p>No task right now</p>
    @endisset

  

        
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
