@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form action="{{ route('products.store') }}" method="POST">
  @csrf
<!-- 1st card -->
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Add Product</h4>
<!-- info -->
<!-- product -->
<p class="card-description"> Product Information </p>
<!-- row  -->
            <div class="row">

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DISPLAY NAME</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="display_name" required />
                  </div>
                </div>
              </div>

                            <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">State</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="state" required>
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>Arizona</option>
                      <option>Arkansas</option>
                      <option>California</option>
                      <option>Colorado</option>
                      <option>Connecticut</option>
                      <option>Delaware</option>
                      <option>Florida</option>
                      <option>Georgia</option>
                      <option>Hawaii</option>
                      <option>Idaho</option>
                      <option>Illinois</option>
                      <option>Indiana</option>
                      <option>Iowa</option>
                      <option>Kansas</option>
                      <option>Kentucky</option>
                      <option>Louisiana</option>
                      <option>Maine</option>
                      <option>Maryland</option>
                      <option>Massachusetts</option>
                      <option>Michigan</option>
                      <option>Minnesota</option>
                      <option>Mississippi</option>
                      <option>Missouri</option>
                      <option>Montana</option>
                      <option>Nebraska</option>
                      <option>Nevada</option>
                      <option>New Hampshire</option>
                      <option>New Jersey</option>
                      <option>New Mexico</option>
                      <option>New York</option>
                      <option>North Carolina</option>
                      <option>North Dakota</option>
                      <option>Ohio</option>
                      <option>Oklahoma</option>
                      <option>Oregon</option>
                      <option>Pennsylvania</option>
                      <option>Rhode Island</option>
                      <option>South Carolina</option>
                      <option>South Dakota</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Utah</option>
                      <option>Vermont</option>
                      <option>Virginia</option>
                      <option>Washington</option>
                      <option>West Virginia</option>
                      <option>Wisconsin</option>
                      <option>Wyoming</option>
                    </select>
                    </div>
                    </div>
                </div>

            </div>
<!-- row -->
<div class="row">

{{-- <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Status</label>
      <div class="col-sm-9">
          <select class="form-control" name="status" required>
          <option>Active</option>
          <option>Unactive</option>
          </select>
      </div>
      </div>
  </div> --}}
  <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">In House Agent</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="in_house_agent" required />

      </div>
      </div>
  </div>

              <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Carrier</label>
      <div class="col-sm-9">
          <select class="form-control" name="carrier" required>
          <option>ex</option>
          <option>ex</option>
          </select>
      </div>
      </div>
  </div>

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Product Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="product_name" required />
    </div>
  </div>
</div>

              <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Agent Type</label>
      <div class="col-sm-9">
          <select class="form-control" name="agent_type" required>
          <option>Agency</option>
          <option>Employee</option>
          <option>In-House Agent</option>
          <option>Downline</option>
          <option>Referral </option>

          </select>
      </div>
      </div>
  </div>

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Agent Level</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="agent_level" required />
    </div>
  </div>
</div>

              <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Line of Business</label>
      <div class="col-sm-9">
      <select class="form-control" name="line_of_business" required>
                        <option>Commercial Auto</option>
                        <option>Personal Auto</option>
                        <option>Home Owners</option>
                        <option>General Liability </option>
                        <option>Medicare</option>
                        <option>Business Owners</option>
                        <option>Worker's Compensation</option>
                        <option>Agriculture Liability</option>
                        <option>Agriculture Package</option>
                        <option>Agriculture Property</option>
                        <option>Agriculture Scheduled & Unscheduled Personal Property</option>
                        <option>Boiler Machinery</option>
                        <option>Bond</option>
                        <option>BOP Property</option>
                        <option>BOP Liability</option>
                        <option>Commercial Articles</option>
                        <option>Commercial Fire</option>
                        <option>Commercial Inland Marine</option>
                        <option>Commercial Package</option>
                        <option>Commercial Property</option>
                        <option>Commercial Umbrella</option>
                        <option>Computers</option>
                        <option>Comtractor's Equipment Floater</option>
                        <option>Crime</option>
                        <option>Dental</option>
                        <option>Directors Officers</option>
                        <option>Dwelling Fire</option>
                        <option>Earthquake</option>
                        <option>Employers Liability</option>
                        <option>Employment Practices Liability</option>
                        <option>Errors And Omission</option>
                        <option>Fiduciary</option>
                        <option>Fine Arts</option>
                        <option>Flood</option>
                        <option>Garage And Dealers</option>
                        <option>Glass</option>
                        <option>Hail</option>
                        <option>Health</option>
                        <option>Installation/Builders Risk</option>
                        <option>Internet Liability</option>
                        <option>Kidnap And Ransom</option>
                        <option>Life</option>
                        <option>Liquor Liability</option>
                        <option>Miscellaneous Professional Liability</option>
                        <option>Mobile Home Owners</option>
                        <option>Motor Carrier</option>
                        <option>Motor Truck Cargo</option>
                        <option>Ocean Marine Commercial</option>
                        <option>Personal Inland Marine</option>
                        <option>Personal Package</option>
                        <option>Personal Umbrella</option>
                        <option>Physicians And Surgeons</option>
                        <option>Recreational Vehicle</option>
                        <option>Renters</option>
                        <option>Scheduled Property</option>
                        <option>Small Farm/Ranch</option>
                        <option>Special Multi-peril</option>
                        <option>Surety</option>
                        <option>Transportation</option>
                        <option>Valuable Papers</option>
                        <option>Watercraft (Small Boat)</option>
                        <option>Wind Policies</option>
                        <option>Workplace Violence</option>
                        </select>
      </div>
      </div>
  </div>

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Agency </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="agency" required />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Downline </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="downline" required />
    </div>
  </div>
</div>

</div>
<!-- end -->
<!-- row -->
<div class="row">

  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Note</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="notes" required />
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Referral </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="referral" required />
                        </div>
                      </div>
                    </div>
  
  </div>
  <!-- end -->
</div></div></div>

    <!-- 2nd card -->
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<!-- agency commision -->
<p class="card-description"> Agency Commission  </p>

<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
    <label class="col-sm-3 col-form-label">Type of Payout</label>
    <div class="col-sm-9">
        <select class="form-control" name="type_of_payout" required>
        <option>ex</option>
        <option>ex</option>
        </select>
    </div>
    </div>
</div>
      <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Percentage</label>
      <div class="col-sm-9">
        <select class="form-control" name="percentage" required>
          <option>ex</option>
          <option>ex</option>
          </select>

      </div>
      </div>
  </div>

</div>
<!-- row -->
<div class="row">

{{-- <div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">amount</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="amount" required />
    </div>
  </div>
</div> --}}
<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Flat Free</label>
    <div class="col-sm-9">
      <select class="form-control" name="flat_free" required>
          <option>ex</option>
          <option>ex</option>
          </select>
    </div>
  </div>
</div>
<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Initial Commission</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="initial_commission" required />
    </div>
  </div>
</div>


</div>
<!-- row -->
<div class="row">


  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Company Fee</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="company_fee" required />
      </div>
    </div>
  </div>
   <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Renewal Commission different?</label>
      <div class="col-sm-9">
          <select class="form-control" name="renewal_commission_difference" required>
          <option>Percentage</option>
          <option>Flat fee</option>
          </select>
      </div>
      </div>
  </div>

  
  </div>
  <!-- row -->
<!-- agency end -->
</div></div></div>

    <!-- 3nd card -->
    <div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<!-- payout start -->
<p class="card-description"> Type of Payout  </p>

<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Add additional RN Commission</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="add_additional_RN_commission" required />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">RN Commission</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="RN_commission" required />
    </div>
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Note</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="notes" required />
      </div>
    </div>
  </div>
  
  </div>
<!-- row -->
{{-- <div class="row">

<div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Add additional RN Commission + </label>
                      <div class="col-sm-9">
                      <button type="button" name="add" class="btn btn-primary mr-2">Add</button>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group row">
                    </div>
                  </div>

</div> --}}
<!-- row -->
<!-- payout end -->
</div></div></div>

    <!-- 4th card -->
 {{-- <div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<!-- total start -->
<p class="card-description"> Total Payout for Agency  </p>
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Initial Commission</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" name="initial_commission" required />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Renewal Commission</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" name="renewal_commission" required />
    </div>
  </div>
</div>

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Renewal Commission 2</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" name="renewal_commission_2" required />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
  </div>
</div>

</div>
<!-- row -->
<!-- total end -->


</div></div></div> --}}

    <!-- 5th card -->
    <div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<!-- downline Start -->
<p class="card-description"> Downline Commision  </p>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
    <label class="col-sm-3 col-form-label">Type of Payout</label>
    <div class="col-sm-9">
        <select class="form-control" name="type_of_payout" required>
        <option>Percentage</option>
        <option>Flat fee</option>
        </select>
    </div>
    </div>
</div>
{{-- <div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Initial Commission</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="down_initial_commission" required />
    </div>
  </div>
</div> --}}

<div class="col-md-6">
  <div class="form-group row">
  <label class="col-sm-3 col-form-label">Percentage</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" name="percentage" required />

  </div>
  </div>
</div>

</div>
<!-- row -->

<div class="row">

  <div class="col-md-6">
    <div class="form-group row">
    <label class="col-sm-3 col-form-label">Flat Free</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="flat_free" required />
  
    </div>
    </div>
  </div>
<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Initial Commission</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="initial_commission" required />
    </div>
  </div>
</div>
</div>


<div class="row">

    <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Renewal Commission different?</label>
      <div class="col-sm-9">
          <select class="form-control" name="renewal_commission_difference" required>
          <option>yes</option>
          <option>No</option>
          </select>
      </div>
      </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Add additional RN Commission</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="add_additional_RN_commission" required />
      </div>
    </div>
  </div>

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">RN Commission</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" name="RN_commission" required />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Note</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="notes"  />
    </div>
  </div>
</div>

</div>
<!-- row -->
<!-- row -->
<div class="row">
{{-- 
<div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Add additional RN Commission + </label>
                      <div class="col-sm-9">
                      <button type="button" name="down_add" class="btn btn-primary mr-2">Add</button>
                      </div>
                    </div>
                  </div> --}}

                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"> </label>
                      <div class="col-sm-9">
                      <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                      </div>
                    </div>
                  </div>

</div>
<!-- row -->
<!-- downline end -->


</div></div></div>

</form>
</div>


@endsection
