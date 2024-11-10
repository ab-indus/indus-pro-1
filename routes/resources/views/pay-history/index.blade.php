@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <div class="col-12 col-md-6 grid-margin">
    <div class="d-flex justify-content-between flex-column flex-md-row">
        <div class="mb-2 mb-md-0">
            {{-- <a href="{{url('policy/create')}}" class="btn btn-primary mr-2">Add Payment</a> --}}
            {{-- <a href="{{url('payment/'.$payment->id.'/edit/#payment')}}" class="btn btn-primary mr-2">Add Payment</a> --}}
            <a href="{{url('pay-history/add/'.$customerId)}}" class="btn btn-primary mr-2">Add Payment</a>
        </div>
        <div>
            {{-- <a href="{{url('customer-documents/'.$payment->id)}}" class="btn btn-success">Document Management</a> --}}
        </div>
    </div>
    
</div>

  <!-- Body start  -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pay History</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th><h6 class="card-title">Heading</h6> </th>
                            <th><h6 class="card-title">Fee</h6> </th>
                            <th><h6 class="card-title">paid</h6> </th>
                            <th><h6 class="card-title">Left</h6> </th>
                            <th><h6 class="card-title">Date</h6> </th>
                            <th><h6 class="card-title">Next date</h6> </th>

                            <th><h6 class="card-title">Actions</h6> </th>

                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($pay as $p)
                            
                         
                          <tr>
                            
                            <td> <a href="{{ url('policy/'.$p->id.'/edit') }}">
                               {{ $p->heading }} </a> </td>
                            
                            

                            <td> {{ $p->total_fee }}  </td>
                            <td> {{ $p->paid_amount }}  </td>
                            <td>{{ $p->fee_remain }} </td>
                            <td> {{ $p->pay_date }} </td>
                            <td> {{ $p->next_pay }} </td>
                            <!-- added -->
                            <td>
                              {{-- <a href="{{ url('pay-history/'.$p->id.'/edit') }}">
                                <i class="mdi mdi-table-edit" style="color: yellow" title="Edit"></i>
                               </a> --}}

                          {{-- <!-- Button trigger modal -->
                          @php
                          $url = 'pay-history/'.$p->id;
                          // {{ route('pay-history.destroy', ['id' => $p->id]) }}
                        @endphp
                          <i class="mdi mdi-delete" style="color:red" onclick="showForm('<?php echo $url; ?>')"  ></i>    --}}

                          {{-- delete --}}
                        <!-- Form to delete the payment history record -->
                        <form method="POST" action="{{ route('pay-history.destroy', ['id' => $p->id]) }}" style="display: inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-link p-0" style="border: none; background: none; color: red;">
                              <i class="mdi mdi-delete" style="color:red" title="Delete"></i>
                          </button>
                        </form>
                          {{-- delete end --}}

                          
                          {{-- <a href="{{ url('pay-history/'.$p->id) }}">
                          <i class="mdi mdi-eye" style="color:green" title="View"></i></a> --}}
                        </td> 
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
        <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete Policy Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" >
        @method('delete')
        @csrf
      <div class="modal-body">
        Are you sure you want to delete?
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
