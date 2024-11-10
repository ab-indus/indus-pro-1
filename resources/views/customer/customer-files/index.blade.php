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
            onclick="window.location.href='{{ URL::TO('customer-import/create') }}';" >
                      <i class="mdi mdi-plus-circle-outline"></i>
                      New Import </button>
          </ol>
        </nav>
      </div>
      <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Exports</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                          <th><h6>Name</h6></th>
                          <!-- <th><h6>Type</h6></th> -->
                          <th><h6>File</h6></th>
                          <th><h6>Action</h6></th>
                          </tr>

                        </thead>
                        <tbody>

                          @foreach($data as $item)
                          <tr>
                          <td>{{ $item->name }}</td>
                          <!-- <td>{{ $item->type }}</td> -->

                          <td>
                            <a href="{{ asset('storage/' . $item->file_path) }}">{{ $item->file_name }}</a>
                          </td>
                            <!-- added -->
                            <td>
                              {{-- <a href="{{ url('customer-import/'.$item->id.'/edit') }}">
                                <i class="mdi mdi-table-edit" style="color: yellow" title="Edit"></i>
                               </a> --}}
                          <!-- Button trigger modal -->
                          @php
                          $url = 'customer-import/'.$item->id;
                        @endphp

                        <!-- <a href="{{ route('customerLien.edit',$item->id) }}" class="btn btn-sm btn-info px-2">Edit</a> -->
                          <i  class="btn btn-sm btn-danger px-2"  onclick="showForm('<?php echo $url; ?>')" > Delete</i>  
                         
 
                          
                          {{-- <a href="{{ url('lienInfo/'.$lien->id) }}">
                          <i class="mdi mdi-eye" style="color:green" title="View"></i></td> </a> --}}
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
@endsection
