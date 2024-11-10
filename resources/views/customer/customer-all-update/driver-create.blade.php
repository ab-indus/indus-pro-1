@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
  <form action="{{ route('driverDetail.store', $customerid) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- 1st card -->
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Driver</h4>
          <!-- Driver Information -->
          <p class="card-description">Driver Information</p>
          <div class="row">
            <input type="hidden" name="customer_id" value="{{ $customerid }}">
            
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Named Driver</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="driver_name" required />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Relationship</label>
                <div class="col-sm-9">
                    <select class="form-control" name="relationship">
                        <option selected="selected" value="">Relationship...</option>
                        <option value="self">Self</option>
                        <option value="spouse/partner">Spouse / Partner</option>
                        <option value="child">Child</option>
                        <option value="sibling">Sibling</option>
                        <option value="parent">Parent</option>
                        <option value="other family">Other Family</option>
                        <option value="other than family">Other than Family</option>
                    </select>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="f_name" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div a class="form-group row">
                <label class="col-sm-3 col-form-label">Middle Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="m_name" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Last Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="l_name" />
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

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="phone" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-9">
                  
                  <select class="form-control" name="gender" >
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                    </select>  
               
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Date of Birth</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" name="dob" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Social Security Number</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="ss_no" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">ID Number</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="id_no" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">ID Type</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="id_type" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Employer/BSN Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="employer_or_bsn_name" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Type of BSN/Work</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="type_of_bsn_or_work" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">EIN</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="ein" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">BSN/Work Phone</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="bsn_or_work_phone" />
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
