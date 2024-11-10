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
            onclick="window.location.href='{{ URL::TO('Project/Add') }}';" >
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
                    <h4 class="card-title">Dashboard</h4>
                    <p class="card-description">  <code></code>
                    </p>

                    <!-- Project Type Filter -->
                    <div class="form-group">
                      <label for="projectTypeFilter">Filter by Project Type:</label>
                      <select id="projectTypeFilter" class="form-control">
                          <option value="">All</option>
                          <option value="Marketing">Marketing</option>
                          <option value="HR">HR</option>
                          <option value="Sales">Sales</option>
                          <option value="Benefits Management">Benefits Management</option>
                          <option value="IT-Website">IT-Website</option>
                          <option value="IT-Software">IT-Software</option>
                          <option value="Finance">Finance</option>
                          <option value="Legal">Legal</option>
                          <option value="Tax">Tax</option>
                          <option value="Other">Other</option>
                      </select>
                    </div>


                    <div class="table-responsive">
                    <table class="table table-bordered">
    <thead>


          <tr>
            <th class="card-title">Total Projects</th>
            {{-- <th class="card-title">Type </th> --}}
            <th class="card-title" colspan="2">Today Date</th>
            {{-- <th class="card-title"></th> --}}
            <th class="card-title" colspan="2">All Project Percent Done</th>
            {{-- <th>Actual EndDate</th> --}}
            <th class="card-title">Running Cost</th>
            <th class="card-title">Estimated Cost</th>
            <th class="card-title">Estimated Time</th>
            <th class="card-title" colspan="2"></th>



          
            {{-- <th class="card-title"><h6>Action</h6></th>  --}}
          </tr>

          <tr>
            <td id="totalProjects">0</td>
            {{-- <td id="projectType">All</td> --}}
            <td colspan="2">{{ \Carbon\Carbon::now()->format('m/d/Y') }}</td>
            <td colspan="2" id="avgPercentDone">0%</td>
            <td id="totalRunningCost">0</td>
            <td id="totalEstimatedCost">0</td>
            <td id="totalEstimatedTime">0</td>
            <td colspan="2"></td>
          </tr>

          <tr>
            <td colspan="10"></td>
          </tr>

            <tr>
              <th class="card-title">Project Name</th>
              <th class="card-title">Type </th>
              <th class="card-title">Today Date</th>
              <th class="card-title">Deadline</th>
              <th class="card-title">Percent Completed</th>
              {{-- <th>Actual EndDate</th> --}}
              <th class="card-title">Running Cost</th>
              <th class="card-title">Estimated Cost</th>
              <th class="card-title">Estimated Time</th>
              <th class="card-title">Task View</th>

 

            
              <th class="card-title">Action</th>
            </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr class="project-row">
          <td>{{ $item->project_name }}</td>
          <td>{{ $item->project_type }}</td>
          <td>{{ \Carbon\Carbon::now()->format('m/d/Y') }}</td>
          <td>{{ \Carbon\Carbon::parse($item->Deadline)->format('m/d/Y') }}</td>
          <td>{{ $item->averagePercentDone }}%</td>
          <td>{{ $item->totalRunning }}</td>
          <td>{{ $item->totalEstimatedCost }}</td>
          <td>{{ $item->totalEstimatedTime }}</td>
          <td><a href="{{ url('Project/all/task', $item->id) }}">View</a></td>
          <td>
              <a class="btn btn-sm btn-info px-2" href="{{ route('Project.edit', $item->id) }}">Edit</a>
              <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('Project.Delete', $item->id) }}')">Delete</button>
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


<script>
  $(document).ready(function() {
      // Filter projects by type
      $('#projectTypeFilter').on('change', function() {
          var selectedType = $(this).val().toLowerCase();
  
          var totalEstimatedCost = 0;
          var totalEstimatedTime = 0;
          var totalRunningCost = 0;
          var totalPercentDone = 0;
          var projectCount = 0;
  
          $('tbody tr.project-row').each(function() {
              var row = $(this);
              var projectType = row.find('td:eq(1)').text().toLowerCase();
  
              if (selectedType === '' || projectType === selectedType) {
                  row.show();
                  projectCount++;
  
                  totalEstimatedCost += parseFloat(row.find('td:eq(6)').text()) || 0;
                  totalEstimatedTime += parseFloat(row.find('td:eq(7)').text()) || 0;
                  totalRunningCost += parseFloat(row.find('td:eq(5)').text()) || 0;
                  totalPercentDone += parseFloat(row.find('td:eq(4)').text()) || 0;
              } else {
                  row.hide();
              }
          });
  
          // Calculate and display totals
          var avgPercentDone = (projectCount > 0) ? (totalPercentDone / projectCount).toFixed(2) : 0;
          
          // Update the totals in the summary row
          $('#totalProjects').text(projectCount);
          $('#totalEstimatedCost').text(totalEstimatedCost.toFixed(2));
          $('#totalEstimatedTime').text(totalEstimatedTime.toFixed(2));
          $('#totalRunningCost').text(totalRunningCost.toFixed(2));
          $('#avgPercentDone').text(avgPercentDone);
          // $('#projectType').text(selectedType);

          
      });
  
      // Trigger change event on page load to calculate totals for all projects
      $('#projectTypeFilter').trigger('change');
  });
  </script>
  
@endsection
