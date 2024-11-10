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
                  onclick="window.location.href='{{ URL::TO('products/create') }}';" >
                            <i class="mdi mdi-plus-circle-outline"></i>
                            Add New product </button>
                </ol>
              </nav>
            </div>
            <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product List</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                          <h6 class="card-title">Display Name</h6>
                            </th>
                            <th> 
                          <h6 class="card-title">State </h6>
                            </th>
                            <th> 
                          <h6 class="card-title">Carrier </h6>
                                 </th>
                            <th> 
                          <h6 class="card-title">Product Name</h6>
                                 </th>
                            <th> 
                          <h6 class="card-title">Agent Type </h6>

                            </th>
                            <th> 
                          <h6 class="card-title">Agency</h6>
                            </th>
                            <th> 
                          <h6 class="card-title">In House </h6>
                            </th>
                            <th> 
                              <h6 class="card-title">Downline</h6>
                                </th>
                            <th>  
                          <h6 class="card-title">Action</h6>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as  $d)
                          <tr>
                            <td> {{ $d->display_name }} </td>
                            <td> {{ $d->state }} </td>
                            <td> {{ $d->carrier }} </td>
                            <td> {{ $d->product_name }} </td>
                            <td> {{ $d->agent_type }} </td>
                            <td> {{ $d->agency }} </td>
                            <td> {{ $d->in_house_agent }} </td>
                            <td> {{ $d->downline }} </td>
                            <!-- added -->
                            <td>
                              <a href="{{ route('products.edit',$d->id) }}">
                                <i class="mdi mdi-table-edit" style="color: yellow" title="Edit"></i>
                               </a>
                          <!-- Button trigger modal -->
                          @php
                          $url = 'products/'.$d->id;
                        @endphp
                          <i class="mdi mdi-delete" style="color:red" onclick="showForm('<?php echo $url; ?>')" ></i>   
                          <a href="{{ route('products.show',$d->id) }}">
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

            <!-- Modal Start -->
            <center>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <form method="POST" > 
                    @csrf
                    @method('delete')
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete Product Details</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete ?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </center>
<!-- Modal End-->
            </div>
            


<script>
function showForm(url){

$("#exampleModal form").attr('action', url);
$("#exampleModal").modal("show");
}

</script>
@endsection
