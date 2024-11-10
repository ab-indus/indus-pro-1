@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

      <!-- header -->

      {{-- <div class="page-header">
        <h3 class="page-title">  </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb"> 
            <button type="button" class="btn btn-info btn-icon-text" 
            onclick="window.location.href='{{ URL::TO('Team-Member/Time-Sheet/Add',$id) }}';" >
                      <i class="mdi mdi-plus-circle-outline"></i>
                      Add New Log </button>
          </ol>
        </nav>
      </div> --}}

      <!-- header end -->

     
      

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Time Sheet</h4>
                    <p class="card-description">  <code></code>
                    </p>

                    {{-- div rate --}}
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="hourly_rate">Hourly Rate</label>
                              <input type="text" value=" {{ $member->rate->Hourly_Rate}}" class="form-control" id="hourly_rate" name="hourly_rate">
                          </div>
                          <div class="form-group">
                              <label for="monthly_rate">Monthly Rate</label>
                              <input type="text" value=" {{ $member->rate->Monthly_Rate}}" class="form-control" id="monthly_rate" name="monthly_rate">
                          </div>
                          <div class="form-group">
                              <label for="annual_rate">Annual Rate</label>
                              <input type="text" value=" {{ $member->rate->Annual_Rate}}" class="form-control" id="annual_rate" name="annual_rate">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="hourly_overtime_rate">Hourly Over Time Rate</label>
                              <input type="text" value=" {{ $member->rate->Hourly_Over_Time_Rate}}" class="form-control" id="hourly_overtime_rate" name="hourly_overtime_rate">
                          </div>
                          <div class="form-group">
                              <label for="minimum_weekly_hours">Minimum Weekly Hours</label>
                              <input type="text" value=" {{ $member->rate->Minimum_Weekly_Hours}}" class="form-control" id="minimum_weekly_hours" name="minimum_weekly_hours">
                          </div>
                          <div class="form-group">
                              <label for="minimum_monthly_hours">Minimum Monthly Hours</label>
                              <input type="text" value=" {{ $member->rate->Minimum_Monthly_Hours}}" class="form-control" id="minimum_monthly_hours" name="minimum_monthly_hours">
                          </div>
                      </div>
                  </div>
                  
                    {{-- div rate end --}}

                    <div class="table-responsive">
                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th class="card-title">Date</th>
                                  <th class="card-title">Login</th>
                                  <th class="card-title">Logout</th>
                                  <th class="card-title">Total Minutes</th>
                                  <th class="card-title">Pay Value</th>
                                  {{-- <th class="card-title">Action</th> --}}
                              </tr>
                          </thead>
                          <tbody>
                              @php
                                  $totalPayValue = 0;
                              @endphp
                  
                              @foreach($data as $item)
                                  @php
                                      $payValue = ($item->Hours / 60) *$member->rate->Hourly_Rate;
                                      $totalPayValue += $payValue;
                                  @endphp
                                  <tr>
                                      <td>{{ $item->Date }}</td>
                                      <td>{{ $item->Login }}</td>
                                      <td>{{ $item->Logout }}</td>
                                      <td>{{ $item->Hours }}</td>
                                      <td>{{ $payValue }}</td>
                                      <td>
                                          {{-- <a class="btn btn-sm btn-info px-2" href="{{ route('TimeSheet.Edit', $item->id) }}">Edit</a> --}}
                                          {{-- <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('TimeSheetAdd.Delete', $item->id) }}')">Delete</button> --}}
                                      </td>
                                  </tr>
                              @endforeach
                  
                              <tr>
                                  <th colspan="4" class="text-right">Total Pay Value:</th>
                                  <th>{{ $totalPayValue }}</th>
                                  <th></th>
                              </tr>
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


