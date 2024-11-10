@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
  <form action="{{ route('customerLien.store', $customerid) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- 1st card -->
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Lien</h4>
          <!-- Lien Information -->
          <p class="card-description">Lien Information</p>
          <div class="row">
            <input type="hidden" name="customer_id" value="{{ $customerid }}">
            
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Item No</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="item_no" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Lien Account</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="account" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="address"></textarea>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">City</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="city" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">State</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="state" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">ZIP</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="zip" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Contact Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="contact_name" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Phone Number</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="phone_no" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" name="email" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 grid-margin">
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </div>
  </form>
</div>

@endsection
