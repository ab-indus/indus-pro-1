@extends('admin_frontend.master')
@section('content')

    
 <div class="content-wrapper">
<form action="{{ url('Project/task/update',$id)}}" method="POST" enctype="multipart/form-data">
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

        <h4 class="card-title">Edit Task </h4>
         <p class="card-description">Task Info</p>

        
         <div class="row">
            <div class="col">

                <div class="form-group">
                    <label for="task_name">Task Name</label>
                    <input type="text" class="form-control" id="task_name" name="task_name" value="{{$task->task_name}}">
                </div>

    
              
            
                <div class="form-group">
                    <label for="End_time">Completed at</label>
                    <input type="datetime-local" class="form-control" id="End_time" name="End_time" value="{{ old('End_time', $task->End_time) }}">
                </div>
            

                <div class="form-group">
                    <label for="End_time">Task Running Cost</label>
                    <input type="number" class="form-control" id="RunningCost" name="RunningCost" value="{{ old('RunningCost', $task->RunningCost) }}">
                </div>

             

                {{-- <div class="form-group">
                    <label for="End_time">Actual Task Time (in minutes)</label>
                    <input type="number" class="form-control" id="ActualTime" name="ActualTime" value="{{ old('ActualTime', $task->ActualTime) }}">
                </div> --}}

             
             


                <div class="form-group">
                    <label for="long_detail">Notes</label>
                    <textarea class="form-control" id="Notes" name="Notes">{{$task->Notes}}</textarea>
                </div>


                {{-- <button type="button" class="btn btn-primary">Add More Person</button> --}}
                
            </div>
            
            <div class="col">

                <div class="form-group">
                    <label for="time_estimate">Time Estimate (in minutes)</label>
                    <input type="number" class="form-control" id="time_estimate" name="time_estimate" value="{{$task->time_estimate}}">
                </div>


                <div class="form-group">
                    <label for="Start_time">Started at</label>
                    <input type="datetime-local" class="form-control" id="Start_time" name="Start_time" value="{{ old('Start_time', $task->Start_time) }}">
                </div>

                {{-- <div class="form-group">
                    <label for="total_time">Total Hours Spend</label>
                    <input required type="text" class="form-control" id="total_time" name="total_time" value="{{$task->total_time}}" >
                </div> --}}

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Working" {{ $task->status == 'Working' ? 'selected' : '' }}>Working</option>
                        <option value="Done" {{ $task->status == 'Done' ? 'selected' : '' }}>Done</option>
                        <option value="Time Out" {{ $task->status == 'Time Out' ? 'selected' : '' }}>Time Out</option>
                        <option value="Can't do" {{ $task->status == "Can't do" ? 'selected' : '' }}>Can't do</option>

                        
                    </select>
                </div>
              
                <div class="form-group">
                    <label for="End_time">Task Percent Done</label>
                    <input type="number" class="form-control" id="percentDone" name="percentDone" value="{{ old('percentDone', $task->percentDone) }}">
                </div>

            

                
            </div>
        </div>
        
        


<br>



</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <div class="row">

            <div class="form-group col-6">
                <label for="assign_to_person">Assign to Employee</label>
                <select required class="form-control" id="user_id" name="user_id" onchange="updateSkillsTable()">
                    @foreach ($member as $Member)
                        <option value="{{ $Member->id }}" {{ $Member->id == $task->user_id ? 'selected' : '' }}>
                            {{ $Member->First_Name }} {{ $Member->Middle_Name }} {{ $Member->Surname }}
                        </option>
                    @endforeach
                </select>
            </div>

            <script>
                const memberSkills = @json($member->mapWithKeys(function ($member) {
                    return [$member->id => $member->memberSkills];
                }));
            </script>
            
            
    
            <div class="col-12">

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
            </div>




        </div>
       

</div></div>

<button type="submit" class="btn btn-primary mr-2" >Submit </button> 
 
</form>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function(){
        $('#total_time').on('input', function() {
            this.value = this.value
                .replace(/[^0-9.]/g, '') // Remove any character that's not a digit or a dot
                .replace(/(\..*?)\..*/g, '$1'); // Allow only one dot
        });
    });
</script>

<script>
    function updateSkillsTable() {
    // Get the selected member ID
    const selectedMemberId = document.getElementById('user_id').value;

    // Get the skills for the selected member
    const skills = memberSkills[selectedMemberId] || [];

    // Get the table body
    const tbody = document.querySelector('table tbody');

    // Clear the existing rows
    tbody.innerHTML = '';

    // If no skills, show a message
    if (skills.length === 0) {
        tbody.innerHTML = '<tr><td colspan="3">No Skill Recorded.</td></tr>';
        return;
    }

    // Populate the table with the skills
    skills.forEach(skill => {
        const row = `
            <tr>
                <td>${skill.skill_sub_category}</td>
                <td class="time">${skill.estimated_time}</td>
                <td class="cost">${skill.estimated_cost}</td>
            </tr>
        `;
        tbody.insertAdjacentHTML('beforeend', row);
    });
}

// Trigger the function on page load to display skills for the default selected member
document.addEventListener('DOMContentLoaded', updateSkillsTable);

</script>

@endsection
