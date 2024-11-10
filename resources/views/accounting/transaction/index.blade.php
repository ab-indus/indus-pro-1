@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

  <!-- header -->
  <div class="page-header">
    <h3 class="page-title">Transaction List</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <button type="button" class="btn btn-info btn-icon-text" 
            onclick="window.location.href='{{ route('transaction.create') }}';">
            <i class="mdi mdi-plus-circle-outline"></i> Add New Transaction 
          </button>
        </li>
      </ol>
    </nav>
  </div>
  <!-- header end -->

  <!-- form start -->
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Transaction List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th><h6>Name</h6></th>
                <th><h6>Account</h6></th>
                <th><h6>Date</h6></th>
                <th><h6>Type</h6></th>
                <th><h6>Customer/Vendor</h6></th>
                <th><h6>Debit</h6></th>
                <th><h6>Credit</h6></th>
                {{-- <th><h6>Receipt/Invoice</h6></th> --}}
                <th><h6>Action</h6></th>
              </tr>
            </thead>
            <tbody>
              {{-- money in --}}
              @foreach($data as $transaction)
              <tr>
                <td><a href="{{ route('accounts.show',$transaction->id) }}">{{ $transaction->account_name }}  </a></td>
                <td>{{ $transaction->main}}</td>
                <td>{{ $transaction->Date }}</td>
                <td>{{$transaction->type}}</td>
                <td>{{ $transaction->customer ? $transaction->customer->email : ($transaction->vendor ? $transaction->vendor->email : 'No Email') }}</td>
                <td>{{ $transaction->Debit }}</td>
                <td>{{ $transaction->Credit}}</td>
                <td>
                  {{-- <a href="{{ route('transaction.edit', $transaction->id) }}" class="btn btn-sm btn-warning">Edit</a> --}}
                  <button type="button" class="btn btn-sm btn-danger" onclick="showForm('{{ route('transaction.destroy', $transaction->id) }}')">Delete</button>
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
          <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete Transaction</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST">
          @method('delete')
          @csrf
          <div class="modal-body">
            Are you sure you want to delete this transaction?
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
    function showForm(url) {
      $("#exampleModal form").attr('action', url);
      $("#exampleModal").modal("show");
    }
  </script>
</div>
@endsection
