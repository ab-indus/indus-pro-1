@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

{{--   
      <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
        <input type="text" class="form-control" placeholder="Search">

      </form> --}}
    

    <div class="row">
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{ $totalCustomers }}</h3>
                  {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> --}}
                </div>
              </div>
              <div class="col-3">
                <a href="{{url('customer')}}">   <div class="icon icon-box-success ">
                  <span class="mdi mdi-account-box"></span>
                </div> </a>
              
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Total Customer</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{$totalToDoTasks}}</h3>
                  {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> --}}
                </div>
              </div>
              <div class="col-3">
                <a href="{{url('record/todo')}}"> <div class="icon icon-box-success">
                  <span class="mdi mdi-checkbox-multiple-marked"></span>
                </div>  </a>
                
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">TO do Task Left</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{$totalRemainders}}</h3>
                  {{-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p> --}}
                </div>
              </div>
              <div class="col-3">
                {{-- <div class="icon icon-box-danger">
                  <span class="mdi mdi-arrow-bottom-left icon-item"></span> --}}
                  <a href="{{url('record/remainder')}}">  <div class="icon icon-box-success">
                    <span class="mdi mdi-alarm-light"></span>
                </div> </a>
                 
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Reminder</h6>
          </div>
        </div>
      </div>
      
      {{-- <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">$31.53</h3>
                  <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                </div>
              </div>
              
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            
            </div>
            <h6 class="text-muted font-weight-normal">Expense current</h6>
          </div>
        </div>
      </div> --}}



    </div>
   
    {{-- new card --}}
    <div class="row ">
      <div class="col-xl-9 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Task List</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    
                    <th> Client Name </th>
                    <th> Email </th>
                    {{-- <th> Assign To </th> --}}
                    <th> ToDo  </th>
                    <th> Reminder </th>
                    <th> Action </th>
                   
                  </tr>
                </thead>
                <tbody>
                  @foreach ($taskList as $task)
                  <tr>

                      {{-- <td>{{ $task->name }}</td> --}}
                      <td> <a href="{{ url('customer/'.$task->cus_id) }}"> {{ $task->account_name }}  </a> </td>
                      <td> <a href="{{ url('customer/'.$task->cus_id) }}"> {{ $task->email }}  </a> </td>
                      {{-- <td> <a href="{{ url('customer/'.$task->cus_id) }}"> {{ $task->employee->name }}  </a> </td> --}}
                  
                      <td> <a href="{{ url('customer/'.$task->cus_id) }}"> {{ $task->total_todo }}  </a> </td>
                      <td> <a href="{{ url('customer/'.$task->cus_id) }}"> {{ $task->total_remainders }}  </a> </td>


                      {{-- <td>{{ $task->email }}</td>
                      <td>{{ $task->total_todo }}</td>
                      <td>{{ $task->total_remainders }}</td> --}}
                      <td>
                        <a class="badge badge-outline-success" href="{{ url('customer/'.$task->cus_id) }}"> View </a>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

{{-- card end  --}}

{{-- task list card  --}}
<div class="row ">
  <div class="col-xl-9 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Reminder</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                
                {{-- <th> Client Name </th> --}}
                <th> Name </th>
                <th> Email </th>
                <th> Assign To </th>
                <th> Heading  </th>
                <th> Created At  </th>
                <th> Due Date </th>
                <th> Status </th>
                <th> Actions </th>

               
              </tr>
            </thead>
            <tbody>
              @foreach ($remainders as $remain)

              <tr>
                  {{-- <td>customer name</td> --}}
                  <!-- <td> <a href="{{ url('policy/'.$remain->id.'/edit') }}">  </a> </td> -->
                  <td> <a href="{{ url('policy/'.$remain->id.'/edit') }}"> name  </a> </td>


                  <td> <a href="{{ url('policy/'.$remain->id.'/edit') }}"> {{$remain->customer_email}}  </a> </td>

                  {{-- Check if employee relationship is not null --}}
                        <td>
                            @if ($remain->employee)
                                <a href="{{ url('policy/'.$remain->id.'/edit') }}"> {{ $remain->employee->name }}  </a>
                            @else
                                N/A
                            @endif
                        </td>


                  <td> <a href="{{ url('policy/'.$remain->id.'/edit') }}"> {{$remain->heading}}  </a> </td>

                  {{-- <td> {{ $remain->created_at->diffForHumans() }} </td> --}}
                  <td> <a href="{{ url('policy/'.$remain->id.'/edit') }}"> {{ $remain->created_at }}  </a> </td>
                  <td> <a href="{{ url('policy/'.$remain->id.'/edit') }}"> {{$remain->date}}  </a> </td>

                  {{-- <td> {{ $remain->created_at }} </td>
                  <td>{{$remain->date}}</td> --}}
                  <td>
                    @if ($remain->status === 'Process')
                    <div class="badge badge-outline-primary">{{$remain->status}}</div>
                @elseif ($remain->status === 'Pending')
                    <div class="badge badge-outline-warning">{{$remain->status}}</div>
                @elseif ($remain->status === 'Complete')
                    <div class="badge badge-outline-success">{{$remain->status}}</div>
                @else
                    <div class="badge badge-outline-secondary">Unknown</div>
                @endif
                  </td>

                  <td>
                    <a class="badge badge-outline-success" href="{{ url('policy/'.$remain->id.'/edit') }}"> Edit </a>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>


{{-- new card --}}






{{-- new card --}}



  </div>
@endsection