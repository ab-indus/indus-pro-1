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
            onclick="window.location.href='{{ URL::TO('accounts/create') }}';" >
                      <i class="mdi mdi-plus-circle-outline"></i>
                      Add New Account </button>
          </ol>
        </nav>
      </div>
      <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ledger List</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <div class="table-responsive">
                    <table class="table table-bordered">
    <thead>
        <tr>
            <th><h6>Name</h6></th>
            <th><h6>Code</h6></th>
            <th><h6>Account</h6></th>
            <th><h6>Type</h6></th>
            <!-- <th><h6>Description</h6></th> -->
            <th><h6>Category</h6></th>
            <th><h6>Starting Date</h6></th>
            <th><h6>Balance</h6></th>
            <!-- <th><h6>Closing Balance</h6></th> -->
            <!-- <th><h6>Date</h6></th> -->
            <!-- <th><h6>Debit</h6></th>
            <th><h6>Credit</h6></th> -->
            <!-- <th><h6>Enabled</h6></th> -->
            <th><h6>Action</h6></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $account)
            <tr>
                <td> <a href="{{ route('accounts.show',$account->id) }}"> {{ $account->name }}</a>  </td>

                <td>{{ $account->Code }}</td>
                <td>{{ $account->Account }}</td>
                <td>{{ $account->Type }}</td>
                <!-- <td>{{ $account->Description }}</td> -->
                <td>{{ $account->Category }}</td>
                <td>{{ $account->StartingDate }}</td>
                <td>{{ $account->Balance }}</td>
                <!-- <td>{{ $account->ClosingBalance }}</td> -->
                <!-- <td>{{ $account->Date }}</td>
                <td>{{ $account->Debit }}</td>
                <td>{{ $account->Credit }}</td> -->
                <!-- <td>{{ $account->Enabled }}</td> -->
                <td>
                    <!-- Button to trigger modal for account deletion -->
                    <button class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounts.destroy', $account->id) }}')">Delete</button>
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
                      <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete Journal Details</h1>
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
