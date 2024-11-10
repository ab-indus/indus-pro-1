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
            onclick="window.location.href='{{ URL::TO('accounting/create') }}';" >
                      <i class="mdi mdi-plus-circle-outline"></i>
                      Add New Journal </button>
          </ol>
        </nav>
      </div>
      <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Journal List</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <div class="table-responsive">
                    <table class="table table-bordered">
    <thead>
        <tr>
            <th><h6>Date</h6></th>
            <th><h6>Description</h6></th>
            <!-- <th><h6>Account Type</h6></th> -->
            <th><h6>Account (Dr)</h6></th>
            <th><h6>Debit</h6></th>
            <!-- <th><h6>Account Type</h6></th> -->
            <th><h6>Account (Cr)</h6></th>
            <th><h6>Credit</h6></th>

            <!-- <th><h6>Name</h6></th>
            <th><h6>Accounts Number</h6></th>
            <th><h6>Type of Account</h6></th>
            <th><h6>Sub Type</h6></th>
            <th><h6>Category</h6></th>
            <th><h6>Starting Date</h6></th>
            <th><h6>Balance</h6></th>
            <th><h6>Date (Account)</h6></th>
            <th><h6>Description (Account)</h6></th>
            <th><h6>Debit (Account)</h6></th>
            <th><h6>Credit (Account)</h6></th> -->

            <th><h6>Action</h6></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $data)
        <tr>
            <td>{{ $data->date }}</td>
            <td>{{ $data->Description }}</td>
            <!-- <td>{{ $data->adr_main }}</td> -->
            <td>{{ $data->AccountDr }}</td>
            <td>{{ $data->Debit }}</td>
            <!-- <td>{{ $data->acr_main }}</td> -->
            <td>{{ $data->AccountCr }}</td>
            <td>{{ $data->Credit }}</td>

            <!-- <td>{{ $data->name_acc }}</td>
            <td>{{ $data->AccountsNumber_acc }}</td>
            <td>{{ $data->TypeOfAccount_acc }}</td>
            <td>{{ $data->SubType_acc }}</td>
            <td>{{ $data->Category_acc }}</td>
            <td>{{ $data->StartingDate_acc }}</td>
            <td>{{ $data->Balance_acc }}</td>
            <td>{{ $data->Date_acc }}</td>
            <td>{{ $data->Description_acc }}</td>
            <td>{{ $data->Debit_acc }}</td>
            <td>{{ $data->Credit_acc }}</td> -->
            
            <!-- added -->
            <td>
                <i class="btn btn-sm btn-danger px-2" onclick="showForm('{{ route('accounting.destroy', $data->id) }}')">Delete</i>
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
