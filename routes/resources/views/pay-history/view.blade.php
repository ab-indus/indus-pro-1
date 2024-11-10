@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form class="form-sample">



{{-- new view --}}

<div class="col-12 grid-margin">
  <div class="card">
      <div class="card-body">
          <h4 class="card-title">Record Details</h4>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Customer Email</label>
                      <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $policy->customer_email }}</p>
                      
                      </div>
                  </div>
              </div>

            <!-- Add this hidden field to store the selected customer_id -->
<input type="hidden" id="custom_payment_id" name="custom_payment_id" value="">

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Record Type</label>
                      <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $policy->record_of }}</p>
                         
                      </div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Due Date</label>
                      <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $policy->date }}</p>

                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Due Time</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{ $policy->time }}</p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Details</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{ $policy->details }}</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Todo List</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{ $policy->todo_list }}</p>

                      </div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Remainder</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{ $policy->remainder }}</p>

                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Heading</label>
                    <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{ $policy->heading }}</p>
                    </div>
                </div>
            </div>
              <!-- Add a field for customer_id here if needed -->
          </div>

          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{ $policy->status }}</p>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Created At</label>
                    <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{ $policy->created_at->diffForHumans() }}</p>
                       
                    </div>
                </div>
            </div>

        </div>

           

      </div>
  </div>
</div>




<!-- form start  -->




    <!-- form end -->
  </div>


@endsection
