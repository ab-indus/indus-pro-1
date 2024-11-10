@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Customers</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <div class="table-responsive">

                      <form action="{{ route('payment.index') }}" method="GET">
                        <div class="form-group">
                            <label for="search">Search:</label>
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search by name, email, SSN, number">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form><br>
                    

                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                          <h6 class="card-title">Name</h6>

                            </th>
                            <th> 
                          <h6 class="card-title">Email</h6>
                                 </th>
                            <th> 
                          <h6 class="card-title">Number</h6>
                            </th>
                            <th> 
                          <h6 class="card-title">Marital Status</h6>
                                 </th>

                            <th><h6 class="card-title">SS#</h6></th>
                           
                            <th>  
                          <h6 class="card-title">Actions</h6>
                            </th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach($payments as $payment)
                          <tr>
                            <td> 
                              <a href="{{ url('payment/'.$payment->id) }}">
                                {{ $payment->f_name }}
                              </a>
                              </td>

                            {{-- <td> {{ $payment->name }} </td> --}}

                            
                            <td> {{ $payment->email }} </td>
                            <td> {{ $payment->phone }} </td>
                            <td> {{ $payment->marital_status }}  </td>
                            <td> {{ $payment->{'ss#'} }}  </td>

                            <td>
                              <a href="{{ url('payment/'.$payment->id.'/edit') }}">
                                <i class="mdi mdi-table-edit" style="color: yellow" title="Edit"></i>
                               </a>
                          <!-- Button trigger modal -->
                          @php
                          $url = 'payment/'.$payment->id;
                        @endphp

                          <i class="mdi mdi-delete" style="color:red" onclick="showForm('<?php echo $url; ?>')" ></i>   
                          <a href="{{ url('payment/'.$payment->id) }}">
                          <i class="mdi mdi-eye" style="color:green" title="View"></i></td> </a>
<!-- ended -->
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
                      <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete Payment Details</h1>
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
  <script src="{{ asset('js/search.js') }}"></script>

@endsection
