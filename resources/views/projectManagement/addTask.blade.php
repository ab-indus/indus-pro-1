@extends('admin_frontend.master')
@section('content')

    
 <div class="content-wrapper">
<form action="{{ url('Project/task/add')}}" method="POST" enctype="multipart/form-data">
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

    {{-- @foreach ($test as $item)
    {{ $item->id }} show
     {{ $item->Autopay}}
    @endforeach --}}
    
        <h4 class="card-title">Add Task </h4>
         <p class="card-description">Task Info</p>

        
         <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="task_name">Task Name</label>
                    <input type="text" class="form-control" id="task_name" name="task_name">
                </div>
                <div class="form-group">
                    <label for="">Project</label>
                    <select class="form-control" id="project_id" name="project_id">
                        {{-- <option value="1">uncategorised</option> --}}
                        @foreach ($project as $Project)
                        <option value="{{ $Project->id }}" >{{ $Project->project_name}}</option>
                        @endforeach
                    </select>               
                 </div>
            
            
                <div class="form-group">
                    <label for="assign_to_person">Assign to Employee</label>
                    <select required class="form-control" id="user_id" name="user_id">
                        @foreach ($user as $User)
                        <option value="{{ $User->id }}" >{{ $User->First_Name}} {{ $User->Middle_Name}} {{ $User->Surname}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="percentDone">Percent Done  </label>
                    <input type="number" class="form-control" id="percentDone" name="percentDone">
                </div>

              

                <div class="form-group">
                    <label for="long_detail">Assignee Notes</label>
                    <textarea class="form-control" id="Notes" name="Notes"></textarea>
                </div>

                {{-- <button type="button" class="btn btn-primary">Add More Person</button> --}}
                
            </div>
            
            <div class="col">

                <div class="form-group">
                    <label for="time_estimate">Time Estimate (in minutes)</label>
                    <input type="number" class="form-control" id="time_estimate" name="time_estimate">
                </div>

                <div class="form-group">
                    <label for="EstimatedCost">Estimated Cost</label>
                    <input type="number" class="form-control" id="EstimatedCost" name="EstimatedCost">
                </div>

                @php
                $teamMemberId = \App\Models\AddTeam_Member::where('user_id', auth()->user()->id)->value('id');
                @endphp

               
                {{-- <div class="form-group">
                    <label for="assign_by">Assign By // backend</label>
                    <select class="form-control" id="assign_by" name="assign_by">
                        @foreach ($user as $User)
                        <option value="{{ $User->id }}" >{{ $User->First_Name}} {{ $User->Middle_Name}} {{ $User->Surname}}</option>
                        @endforeach
                    </select>
                </div> --}}
                <input hidden value=" {{$teamMemberId}}"  type="text" name="assign_by">



                <div class="form-group">
                    <label for="priority">Priority</label>
                    <select class="form-control" id="priority" name="priority">
                        @for ($i = 1; $i <= 20; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <div class="form-group">
                    <label for="DueDate">Deadline </label>
                    <input type="date" class="form-control" id="DueDate" name="DueDate">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="Pending">Pending</option>
                        <option value="Working">Working</option>
                        <option value="Done">Done</option>
                    </select>
                </div>

              

                {{-- <div class="form-group">
                    <label for="End_time">Employee End time </label>
                    <input type="text" class="form-control" id="End_time" name="End_time">
                </div> --}}

            

             

            </div>
        </div>
        
        


<br>
<div class="col-12 grid-margin">
    <button type="submit" class="btn btn-primary mr-2" >Submit </button> 
 
 </div>


</form></div></div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



@endsection
