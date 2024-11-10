@extends('admin_frontend.master')
@section('content')

    
 <div class="content-wrapper">
{{-- <form action="{{ url('Quotes/4')}}" method="Get" enctype="multipart/form-data">
@csrf --}}

    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title"> </h4>
         <p class="card-description"></p>

         {{-- Project  --}}
                  <h4 class="card-title">Dashboard</h4>
                  <p class="card-description">  <code></code>
                  </p>
                  <div class="table-responsive">
                  <table class="table table-bordered">
          <thead>
          <tr>
            <th class="card-title">Project Name</th>
            <th class="card-title">Estimated Cost</th>
            <th class="card-title">Running Cost</th>
            <th class="card-title">Estimated Time</th>

            <th class="card-title">Project Percent Done</th>
            <th class="card-title">Actual ProjectTime</th>
            <th class="card-title">Deadline</th>

            <th class="card-title">Assigned by</th>
            <th class="card-title">Assigned Date</th>
            <th class="card-title">Assigned To</th>
            <th class="card-title">Assignee notes</th>


            {{-- <th class="card-title">Today Date</th> --}}
        
            {{-- <th class="card-title">Task View</th> --}}



          
            <th class="card-title">Action</th>
          </tr>
          </thead>
          <tbody>
          {{-- @foreach($data as $item) --}}
          <tr>
              {{-- <td> <a href="{{ route('accounts.show',$item->id) }}"> {{ $item->name }}</a>  </td> --}}

              <td>
                <a href="{{ URL::TO('Project/page', $item->id) }}">{{ $item->project_name }}</a>
              </td>
              <td id="Total-ES-cost-result"></td>
              <td id="running-cost-result"></td>
              <td id="Total-ES-time-result"></td>
              <td id="percent-done-result">0</td>
              <td id="actual-time-result"></td>
              {{-- <td>{{ \Carbon\Carbon::now()->format('m/d/Y') }}</td> --}}

              <td> {{ \Carbon\Carbon::parse($item->Deadline)->format('m/d/Y') }}</td>
              {{-- <td>{{ $item->ActualEndDate }}</td> --}}

              {{-- <td>{{ $item->ActualCost }}</td>
              <td>{{ $item->totalEstimatedCost }}</td>
              <td>{{ $item->totalEstimatedTime }}</td> --}}

              {{-- <td><a href="{{ url('Project/all/task', $item->id) }}">View</a></td> --}}
              
              <td></td>
              <td>{{ $item->created_at->format('Y-m-d') }}</td>
              <td></td>
              <td></td>



              <td>
                  <!-- Button to trigger modal for account deletion -->
                  {{-- <a class="btn btn-sm btn-info px-2" href="{{ route('Project.edit', $item->id) }}">Edit</a> --}}
                  <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('Project.Delete', $item->id) }}')">Delete</button>
              </td>
              
          </tr>
          {{-- @endforeach --}}

          </tbody>
          </table>


         </div> <br>
         {{-- project card end --}}


         {{-- due task card --}}
    <div class="row ">
     
              
          
              <h4 class="card-title">Tasks </h4>
              <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                      
                      <th class="card-title">Task Name</th>
                      <th class="card-title">Estimated Cost</th>
                      <th class="card-title">Running Cost</th>
                      <th class="card-title">Estimated Time</th>
                      <th class="card-title">Task Percent Done</th>
                      <th class="card-title">Actual Task Time</th>
                      <th class="card-title">Deadline</th>


                      <th class="card-title">Assigned by</th>
                      <th class="card-title">Assigned Date</th>
                      <th class="card-title">Assigned To</th>
                      <th class="card-title">Assignee notes</th>
                      <th class="card-title">Action</th>


                     
                    </tr>
                  </thead>
                  <tbody>
                    @if($task->isEmpty())
                    <p>No task pending.</p>
                    @else

                    @foreach($task as $Task)
                    <tr>
                     


                      <td>{{ $Task->task_name }}</td>
                      <td class="estimate-cost">${{ $Task->EstimatedCost }}</td>
                      <td class="running-cost">${{ $Task->RunningCost }}</td>
                      <td class="estimate-time">{{ $Task->time_estimate }} Minutes</td>
                      <td class="percent-done">{{ $Task->percentDone }}%</td>
                      <td class="actual-time">{{ $Task->ActualTime }} Minutes</td>
                      <td>{{ $Task->DueDate }}</td>
                      <td>{{ $Task->assignBy->First_Name  ?? 'N/A'}}</td>
                      <td>{{ $Task->created_at->format('Y-m-d') }}</td>
                      <td>{{ $Task->user->First_Name ?? 'N/A'}}</td>
                      <td>{{ $Task->Notes }}</td>
                      {{-- <td>{{ $Task->ActualCost }}</td> --}}
                        
                      <td>
                        <!-- Button to trigger modal for account deletion -->
                        <a class="btn btn-sm btn-info px-2" href="{{ route('Task.Edit', $Task->id) }}">Edit</a>
                        <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('Task.Delete', $Task->id) }}')">Delete</button>
                    </td>
                       
                    </tr>
                    @endforeach
                    @endif
 
                     {{-- <td> {{ $Task->user->First_Name }}</td> --}}
                      {{-- <td>{{ $Task->project->project_name ?? 'N/A' }}</td> --}}
                        </tbody>
                    </table>
              </div>
            </div>   
        </div>
         
  
  {{-- due task card end  --}}
   
        


<br>
{{-- <div class="col-12 grid-margin">
    <button type="submit" class="btn btn-primary mr-2" >Submit </button> 
 
 </div> --}}



</div></div>

{{-- </form> --}}




<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
  $(document).ready(function() {
      // Function to calculate and display the total estimated time and cost
      function calculateTotals() {
          var totalEstimatedTime = 0;
          var totalEstimatedCost = 0;
          var totalActualTime = 0;
          var totalRunningCost = 0;
          var totalPercentDone = 0;
          var taskCount = 0;

          

          // Sum the percent done values
          $('.percent-done').each(function() {
              var percent = parseFloat($(this).text().replace('%', ''));
              totalPercentDone += isNaN(percent) ? 0 : percent;
              taskCount++;
          });

          var averagePercentDone = (taskCount > 0) ? totalPercentDone / taskCount : 0;

          // Sum the estimated times
          $('.estimate-time').each(function() {
              var time = parseFloat($(this).text().replace(' Minutes', ''));
              totalEstimatedTime += isNaN(time) ? 0 : time;
          });

          // Sum the actual time
          $('.actual-time').each(function() {
              var timeActual = parseFloat($(this).text().replace(' Minutes', ''));
              totalActualTime += isNaN(timeActual) ? 0 : timeActual;
          });

          // Sum the estimated costs
          $('.estimate-cost').each(function() {
              var cost = parseFloat($(this).text().replace('$', ''));
              totalEstimatedCost += isNaN(cost) ? 0 : cost;
          });
          
          // Sum the running costs
          $('.running-cost').each(function() {
              var costRunning = parseFloat($(this).text().replace('$', ''));
              totalRunningCost += isNaN(costRunning) ? 0 : costRunning;
          });

          // Display the results
          
          $('#actual-time-result').text(totalActualTime + ' Minutes');
          $('#Total-ES-time-result').text(totalEstimatedTime + ' Minutes');
          $('#Total-ES-cost-result').text('$' + totalEstimatedCost.toFixed(2));
          $('#running-cost-result').text('$' + totalRunningCost.toFixed(2));
          $('#percent-done-result').text(averagePercentDone.toFixed(2) + '%');
      }

      // Calculate totals on page load
      calculateTotals();
  });

</script>

@endsection
