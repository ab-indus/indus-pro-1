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
                  onclick="window.location.href='{{ URL::TO('agency/create') }}'" >
                            <i class="mdi mdi-plus-circle-outline"></i>
                            Add New Agency </button>
                </ol>
              </nav>
            </div>
            <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Agency List</h4>
                    <p class="card-description"> All Agencies Details <code></code>
                    </p>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                      {{ session()->get('message') }}
                   </div>
                   @endif
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                          <th> <h6 class="card-title">Logo </h6> </th>
                            <th> <h6 class="card-title">Agency Name</h6> </th>
                            <th> <h6 class="card-title">Principal Agent </h6> </th>
                            <th> <h6 class="card-title">Address </h6> </th>
                            <th> <h6 class="card-title">Phone </h6> </th>
                            <th> <h6 class="card-title">Fax </h6> </th>
                            <th> <h6 class="card-title">Email </h6> </th>     
                            <th> <h6 class="card-title">Website </h6> </th>                         
                            <th> <h6 class="card-title">Action </h6> </th>                         
                            <th> <h6 class="card-title">View </h6> </th>                         
                          </tr>
                        </thead>
                        <tbody>
@foreach ($data as $agency )
                          <tr>
                          <td class="py-1">
                          <img  src="{{ asset('storage/'.$agency->logo) }}" height="100px" width="100px" alt="job image" title="job image">
                            </td>
                            <td> {{ $agency->name }} </td>
                            <td> {{$agency->principal_agent  }} </td>
                            <td> {{ $agency->address }} </td>
                            <td> {{ $agency->phone }} </td>
                            <td> {{ $agency->fax }} </td>
                            <td> {{ $agency->email }} </td>
                            <td> {{ $agency->webiste }} </td>
                            <td>
                              <div class="row">
                                <a href="{{ route('agency.edit',$agency->id) }}">
                                <button class="badge badge-info">Edit</button> 
                                </a> 
                                <form method="post" action="{{route('agency.destroy',$agency->id)}}">
                           @method('delete')
                                 @csrf
                                  <button class="badge badge-danger" >Delete</button> 
                                  </form>
                              </div>
                          </td>
                            <td><a href="{{ route('agency.show',$agency->id)}}"><button class="badge badge-info">View details</button></a></td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

@endsection