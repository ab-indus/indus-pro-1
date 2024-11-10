@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form class="form-sample"  method="POST"  action="{{ route('agency.store') }}" enctype="multipart/form-data">
            @csrf

<!-- 1st card  -->

    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Agency Fields</h4>
         
            <p class="card-description"> Agency Info </p>

            <!-- row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Agency Name</label>
                  <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" />
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                   @endif
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">UPLOAD LOGO</label>
                  <div class="col-sm-9">
                    <input type="file" name="logo" class="form-control" />
                    @if ($errors->has('logo'))
                    <span class="text-danger">{{ $errors->first('logo') }}</span>
                   @endif
                  </div>
                </div>
              </div>
            </div>
            <!-- new row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Principal Agent</label>
                  <div class="col-sm-9">
                    <input type="text" name="principal_agent" class="form-control" />
                       @if ($errors->has('principal_agent'))
                    <span class="text-danger">{{ $errors->first('principal_agent') }}</span>
                   @endif
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address </label>
                  <div class="col-sm-9">
                    <input type="text" name="address" class="form-control" required />
                    @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                   @endif
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Phone </label>
                  <div class="col-sm-9">
                    <input type="tel" name="phone" class="form-control" required/>
                    @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                   @endif
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fax </label>
                  <div class="col-sm-9">
                    <input type="tel" name="fax" class="form-control" required />
                    @if ($errors->has('fax'))
                    <span class="text-danger">{{ $errors->first('fax') }}</span>
                   @endif
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" required />
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                   @endif
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website </label>
                  <div class="col-sm-9">
                    <input type="url" name="webiste" class="form-control" required />
                    @if ($errors->has('webiste'))
                    <span class="text-danger">{{ $errors->first('webiste') }}</span>
                   @endif
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes</label>
                  <div class="col-sm-9">
                    <input type="text" name="notes" class="form-control" required />
                    @if ($errors->has('notes'))
                    <span class="text-danger">{{ $errors->first('notes') }}</span>
                   @endif
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">UPLOAD FILE(S)</label>
                  <div class="col-sm-9">
                    <input type="file" name="file" class="form-control" required />
                     @if ($errors->has('file'))
                    <span class="text-danger">{{ $errors->first('file') }}</span>
                   @endif
                  </div>
                </div>
              </div>
            </div>
  <!-- agency end  -->
  </div></div></div>
<!-- 2nd card  -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

 <p class="card-description"> Accounting Info</p>

  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload EIN letter</label>
                  <div class="col-sm-9">
                    <input type="file" name="ein_letter" class="form-control" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload VOID Check (s)</label>
                  <div class="col-sm-9">
                    <input type="file" name="void_checks" class="form-control" required />
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tax ID #</label>
                  <div class="col-sm-9">
                    <input type="text" name="tax_id" class="form-control" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Business Type</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="business_type" required>
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
            <!-- row new -->

            <div class="row">
              
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fiscal Month Start</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="fiscal_month_start" required>
                      <option>ex</option>
                      <option>ex</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fiscal Month End</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="fiscal_month_end " required>
                      <option>ex</option>
                      <option>ex</option>
                    </select>
                  </div>
                </div>
              </div>

            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Income Tax Due</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="income_tax"required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Franchise Tax Due </label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="franchise_tax_due" required />
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Sales Tax Due</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="sales_tax_due" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Routing #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required  name="routing_no" required/>
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Type of account</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="type_of_account" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Account #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required name="account_no" required />
                  </div>
                </div>
              </div>
            </div>
            <!-- row new Accounting Info end -->
            </div></div></div>
<!-- 3rd card  -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

  <p class="card-description"> E&O Info</p>

  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload E&O</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control" name="file" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Policy #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="policy_no" required />
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Effective Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="effective_date" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Expiration Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="expiration_date" required />
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Policy Limits</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="policy_limits" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                </div> 
                </div>
               <!-- row new -->
               </div></div></div>
<!-- 4th card  -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">            

  <p class="card-description"> License Info</p>

  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload License(s)</label>
                  <div class="col-sm-9">
                    <input type="file" name="file" class="form-control" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Resident State:</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="resident_state" required>
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
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">NPN #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="npn_no" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">License # </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="license_no" required />
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->

             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">License Type</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="license_type" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Expiration Date </label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="expiration_date" required />
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->

             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">update date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="upload_date" required />
                  </div>
                </div>
              </div>

              {{-- <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Non-resident States </label>
                  <div class="col-sm-9">
                  <select class="form-control" required>
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
              </div> --}}

            </div>
             <!-- row new -->
             </div></div></div>
<!-- 5th card  -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

  <p class="card-description"> Non-resident 1</p>
<!-- Non-resident 1 -->

<div class="row">
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

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">License # </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="license_no" required />
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->

             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">License Type</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="license_type" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Expiration Date </label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="expiration_date" required />
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->
             </div></div></div>
<!-- 6th card  -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

  <p class="card-description"> Log In(s) Info</p>
<!-- Log In(s) Info -->
  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Company</label>
                  <div class="col-sm-9">
                    <input type="text" name="company" class="form-control" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website </label>
                  <div class="col-sm-9">
                    <input type="text" name="website" class="form-control" required />
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->

             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">User Name</label>
                  <div class="col-sm-9">
                    <input type="text" name="user_name" class="form-control" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Password </label>
                  <div class="col-sm-9">
                    <input type="text" name="password" class="form-control" required />
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->

             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">PIN</label>
                  <div class="col-sm-9">
                    <input type="text" name="pin" class="form-control" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes </label>
                  <div class="col-sm-9">
                    <input type="text" name="notes" class="form-control" required />
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->
             </div></div></div>
<!-- 7th card  -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

  <p class="card-description"> DBA 1</p>

  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DBA </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="dba" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DBA Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="dba_name"  required />
                  </div>
                </div>
              </div>

            </div>
            <!-- row new -->


            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DOI Registered State(s) </label>
                  <div class="col-sm-9">
                    <select class="form-control" name="doi_registered" required>
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

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Exp. Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control"  name="exp_date" required/>
                  </div>
                </div>
                </div> 
             
                </div>
               <!-- row new -->
               </div></div></div>
<!-- 8th card  -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

  <p class="card-description"> Additional Location </p>
  <!-- row new -->

  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Manager</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="manager" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="address"required />
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->
             <div class="row">
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
                  <label class="col-sm-3 col-form-label">Fax </label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" name="fax" required />
                  </div>
                </div>
              </div>

            </div>
             <!-- row new -->
             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" required />
                  </div>
                </div>
              </div>

              {{-- <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website </label>
                  <div class="col-sm-9">
                    <input type="url" class="form-control" nam />
                  </div>
                </div>
              </div> --}}

            </div>
             <!-- row new -->
             <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="notes" required />
                  </div>
                </div>
              </div>

           
              
            </div> 
            <!-- new row -->
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                  </div>
                </div>
              
            </div>
             <!-- row end -->
        </div></div> </div>
<!-- form end -->

    </form>

    <!-- form end -->
  </div>


@endsection