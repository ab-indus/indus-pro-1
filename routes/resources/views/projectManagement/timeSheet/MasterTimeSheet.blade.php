@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

   

     
      

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Master Time Sheet</h4>
                    <p class="card-description">  <code></code>
                    </p>

                    <div class="table-responsive">
                    <table class="table table-bordered">
    <thead>
            <tr>
            
              <th class="card-title">Name</th>
              <th class="card-title">Date</th>
              <th class="card-title">Login</th>
              <th class="card-title">Logout</th>
              <th class="card-title">Total Hours</th>
              <th class="card-title">Pay Value</th>
              <th class="card-title">Action</th>
            </tr>
    </thead>
    <tbody>

        @foreach($data as $item)
        <tr>
            {{-- <td> <a href="{{ route('accounts.show',$item->id) }}"> {{ $item->name }}</a>  </td> --}}
  
            {{-- <td>
              <a href="{{ URL::TO('Project/page', $item->id) }}">{{ $item->project_name }}</a>
            </td> --}}
            <td>
              {{ $item->teamMember->First_Name }}
              {{$item->teamMember->Middle_Name}}
              {{$item->teamMember->Surname}}
            
            </td>

            <td>{{ $item->Date }}</td>
            <td>{{ $item->Login }}</td>
            <td>{{ $item->Logout }}</td>
            <td>{{ $item->Hours }}</td>
            <td> {{ $item->Hours * $item->teamMember->rate->Hourly_Rate }} </td>
            <td>
                <!-- Button to trigger modal for account deletion -->
                {{-- <a class="btn btn-sm btn-info px-2" href="{{ route('Task.Edit', $item->id) }}">Edit</a> --}}
                <a class="btn btn-sm btn-info px-2" href="{{ route('TimeSheet.Edit', $item->id) }}">Edit</a>
                <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('TimeSheetAdd.Delete', $item->id) }}')">Delete</button>
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


