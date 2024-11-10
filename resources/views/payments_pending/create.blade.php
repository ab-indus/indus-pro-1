@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">
<form action="{{ url('payment')}}" method="POST" enctype="multipart/form-data">
  @csrf
<!-- 1st card -->
<div class="col-12 grid-margin">

<div class="card">
<div class="card-body">
<h4 class="card-title">Add Customer</h4>
<!-- info -->
<!-- product -->
<p class="card-description"> Customer/Lead Info</p>
<!-- row  -->
            <div class="row">

              
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Status</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="status" required>
                      <option value="Active">Active</option>
                      <option value="Inactive">Inactive</option>
                      </select>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="f_name" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Middle Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="m_name"/>
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
                    <input type="text" class="form-control" name="email" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Business Phone</label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" name="bus_phone"  />
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
                      </select>
                  </div>
                </div>
              </div>

           

            </div>
<!-- row -->
<div class="row">

{{-- <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Policy</label>
      <div class="col-sm-9">
          <select class="form-control" name="policy" required>
          <option>ex</option>
          <option>ex</option>
          </select>
      </div>
      </div>
  </div> --}}

  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Phone</label>
      <div class="col-sm-9">
        <input type="tel" class="form-control" name="phone" required />
      </div>
    </div>
  </div>


  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">SS#</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="ss#" required />
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">ID#</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="id#"  />
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">ID Type</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="id_type"  />
      </div>
    </div>
  </div>


</div>

<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Date of Brith</label>
    <div class="col-sm-9">
      <input type="date" class="form-control" name="dob" required />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Address</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="address" />
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
    <label class="col-sm-3 col-form-label">Country</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="country"  />
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
    <label class="col-sm-3 col-form-label">Zip Code</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="zip_code" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Rent / Own</label>
    <div class="col-sm-9">
      <select class="form-control" name="bus_own" required>
        <option value="Rent">Rent</option>
        <option value="Own">Own</option>
        </select>
    </div>
  </div>
</div>


<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Business Type</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_type" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> Employer / Business Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_name" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> EIN (if applies)</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="ein" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> Business website</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_website" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> Business Address </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_address" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> Business City </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_city" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> Business Country </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_country" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> Business Zip code </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_zip" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Marital Status</label>
    <div class="col-sm-9">
      <select class="form-control" name="marital_status" id="maritalStatus" required>
        <option value="Single">Single</option>
        <option value="Married">Married</option>
        <option value="widow">Widow</option>
      </select>
    </div>
  </div>
</div>

</div>

  <!-- end -->
</div></div></div>

<div class="col-12 grid-margin">
<div class="card" id="newCustomerCard">
  <div class="card-body">
  <h4 class="card-title">Spouse Details</h4>

  <p class="card-description"> Add Spouse info </p>
<!-- row  -->
            <div class="row">

              
              {{-- <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Status</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="status" required>
                      <option value="Active">Active</option>
                      <option value="Inactive">Inactive</option>
                      </select>
                  </div>
                </div>
              </div> --}}

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="f_name_sp" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Middle Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="m_name_sp"/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="l_name_sp" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="email_sp" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Business Phone</label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" name="bus_phone_sp"  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Gender</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="gender_sp">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      </select>
                  </div>
                </div>
              </div>

           

            </div>
<!-- row -->
<div class="row">

{{-- <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Policy</label>
      <div class="col-sm-9">
          <select class="form-control" name="policy" required>
          <option>ex</option>
          <option>ex</option>
          </select>
      </div>
      </div>
  </div> --}}

  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Phone</label>
      <div class="col-sm-9">
        <input type="tel" class="form-control" name="phone_sp" />
      </div>
    </div>
  </div>


  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">SS#</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="ss#_sp" />
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">ID#</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="id#_sp"  />
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">ID Type</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="id_type_sp"  />
      </div>
    </div>
  </div>


</div>

<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Date of Brith</label>
    <div class="col-sm-9">
      <input type="date" class="form-control" name="dob_sp"  />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Address</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="address_sp" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">City</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="city_sp" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Country</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="country_sp"  />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">State</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="state_sp" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Zip Code</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="zip_code_sp" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Rent / Own</label>
    <div class="col-sm-9">
      <select class="form-control" name="bus_own_sp" >
        <option value="Rent">Rent</option>
        <option value="Own">Own</option>
        </select>
    </div>
  </div>
</div>


<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Business Type</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_type_sp" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> Employer / Business Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_name_sp" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> EIN (if applies)</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="ein_sp" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> Business website</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_website_sp" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> Business Address </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_address_sp" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> Business City </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_city_sp" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> Business Country </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_country_sp" />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"> Business Zip code </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="bus_zip_sp" />
    </div>
  </div>
</div>


</div>


</div></div></div>

{{-- new card --}}

<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
    <h4 class="card-title">More Info</h4>
  
    <p class="card-description"> Customer Info</p>
    

    <div class="row">

      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Referral Source</label>
          <div class="col-sm-9">
            <select class="form-control" name="referral">
              <option value="Customer">Customer</option>
              <option value="Agency">Agency</option>
              <option value="Agency"> Business</option>
              <option value="Agency"> Current customer</option>
              <option value="Agency"> Previous customer</option>
              <option value="Agency"> Google</option>
              <option value="Agency"> Facebook</option>
              </select>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Type of Customer</label>
          <div class="col-sm-9">
            <select class="form-control" name="customer_type">
              <option value="Personal">Personal</option>
              <option value="Commercial"> Commercial</option>
              <option value="Both"> Both</option>
              <option value="Lead"> Lead</option>
              </select>
          </div>
        </div>
      </div>

    </div>
  
  </div></div></div>

{{-- card end --}}


<div class="col-12 grid-margin">
   <button type="submit" class="btn btn-primary mr-2" >Add  </button> 

</div>

</form>
</div>
<script src="{{asset('assets/js/employee.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
          // Initial check on page load
    checkMaritalStatus();

// Function to check and show/hide the card
function checkMaritalStatus() {
  var maritalStatus = $("#maritalStatus").val();

  // Check if the selected status is "Married"
  if (maritalStatus === "Married") {
    $("#newCustomerCard").show();
  } else {
    $("#newCustomerCard").hide();
  }
}

// Attach the event handler to the select element
$("#maritalStatus").on("change", function () {
  checkMaritalStatus();
});

    });
</script>


@endsection
