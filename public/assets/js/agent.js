// cards
const dropdown = document.getElementById('dropdown');
const lhc_div = document.getElementById('lhc_div');
const aca_div = document.getElementById('aca_div');
const ce_div = document.getElementById('ce_div');
const downline = document.getElementById('downline');
const job = document.getElementById('job');
const work = document.getElementById('work');
const education = document.getElementById('education');
const family = document.getElementById('family');
const accounting_info = document.getElementById('accounting_info');
const eo = document.getElementById('eo');
const payment = document.getElementById('payment');
const payhistory = document.getElementById('payhistory_div');
const payment_mode = document.getElementById('payment_mode');
const upload_commission = document.getElementById('upload_commission');
const referral_fee = document.getElementById('referral_fee');
const commission = document.getElementById('commission');







dropdown.addEventListener('change', function() {
  if (this.value === "Referral") {

    lhc_div.style.display = "none";
    aca_div.style.display = "none";
    ce_div.style.display = "none";

    accounting_info.style.display = "block";
    eo.style.display = "block";
    payment.style.display = "block";

    downline.style.display = "none";

    job.style.display = "none";
    work.style.display = "none";
    education.style.display = "none";
    family.style.display = "none";

    payment_mode.style.display = "block";
    upload_commission.style.display = "none";
    referral_fee.style.display = "block";
    commission.style.display = "none";



  }
  else if(this.value == "Downline"){

    lhc_div.style.display = "block";
    aca_div.style.display = "block";
    ce_div.style.display = "block";

    accounting_info.style.display = "block";
    eo.style.display = "block";
    payment.style.display = "block";

    downline.style.display = "block";

    job.style.display = "none";
    work.style.display = "none";
    education.style.display = "none";
    family.style.display = "none";

// feilds 
    payment_mode.style.display = "block";
    upload_commission.style.display = "block";
    referral_fee.style.display = "none";
    commission.style.display = "block";

  }
  else if(this.value == "Inhouse"){

    lhc_div.style.display = "block";
    aca_div.style.display = "block";
    ce_div.style.display = "block";

    accounting_info.style.display = "none";
    eo.style.display = "none";
    payment.style.display = "none";

    downline.style.display = "none";

    job.style.display = "block";
    work.style.display = "block";
    education.style.display = "block";
    family.style.display = "block";

    upload_commission.style.display = "block";
    payment_mode.style.display = "none";
    referral_fee.style.display = "none";
    commission.style.display = "none";
  }
  else if(this.value == "Unactive"){

    lhc_div.style.display = "none";
    aca_div.style.display = "none";
    ce_div.style.display = "none";

    accounting_info.style.display = "none";
    eo.style.display = "none";
    payment.style.display = "none";

    downline.style.display = "none";

    job.style.display = "none";
    work.style.display = "none";
    education.style.display = "none";
    family.style.display = "none";

    // 
    upload_commission.style.display = "none";
    payment_mode.style.display = "none";
    referral_fee.style.display = "none";
    commission.style.display = "none";
  }
});

// var input = prompt("Enter your input:");
// var input = document.getElementById("inputField").value;

//  adding sections --------------------------------------------------------------------------

// add pay history 
var pay_count=1;
function add_pay(){
    pay_count+=1
  html='<div id="pay_card">\<p class="card-description">Pay History '+pay_count+'</p>\
  <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Payment Date</label>\
                  <div class="col-sm-9">\
                    <input type="date" class="form-control" name="payment_date'+pay_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Payment Amount</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="payment_amout'+pay_count+'" />\
                  </div>\
                </div>\
              </div>\
            </div>\
            <!-- row new -->\
            <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Description</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="descripion'+pay_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Confirmation #</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="confirmation'+pay_count+'" />\
                  </div>\
                </div>\
              </div>\
            </div>\
   </div>'

  var div= document.getElementById('pay_history')
  div.innerHTML+=html
}

// add Non-resident 
var resident_count=1;
function add_non_resident(){
    resident_count+=1
    html='<div name="resident_card">\
    <p class="card-description"> Non-resident '+resident_count+'   </p>\
<div class="row">\
<div class="col-md-6">\
                <div class="form-group row">\
                <label class="col-sm-3 col-form-label">State</label>\
                <div class="col-sm-9">\
                    <select class="form-control" name="state'+resident_count+'">\
                    <option>ex</option>\
                    <option>ex</option>\
                    </select>\
                </div>\
                </div>\
            </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">License #</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="license'+resident_count+'" />\
                  </div>\
                </div>\
              </div>\
        </div>\
<!-- row -->\
<div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">License Type </label>\
                  <div class="col-sm-9">\
                    <input type="date" class="form-control" name="license_type'+resident_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Expiration Date </label>\
                  <div class="col-sm-9">\
                    <input type="date" class="form-control" name="expiration_date'+resident_count+'" />\
                  </div>\
                </div>\
              </div>\
        </div>\
     </div>'
    var div= document.getElementById('resident_div')
    div.innerHTML+=html
  }

  // add appointed carriers + 
var appointed_count=1;
function add_appointed(){
    appointed_count+=1
    html='<div id="appointed_card">\
    <p class="card-description"> Appointed Carriers '+appointed_count+'   </p>\
<div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Company Name  </label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="company_name'+appointed_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Agent # </label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="agent'+appointed_count+'" />\
                  </div>\
                </div>\
              </div>\
        </div>\
<!-- row -->\
<div class="row">\
<div class="col-md-6">\
                <div class="form-group row">\
                <label class="col-sm-3 col-form-label">Certification Req: </label>\
                <div class="col-sm-9">\
                    <select class="form-control" name="certification_req'+appointed_count+'">\
                    <option>ex</option>\
                    <option>ex</option>\
                    </select>\
                </div>\
                </div>\
            </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Appointment Date</label>\
                  <div class="col-sm-9">\
                    <input type="date" class="form-control" name="appointment_date'+appointed_count+'" />\
                  </div>\
                </div>\
              </div>\
        </div>\
<!-- row -->\
<div class="row">\
<div class="col-md-6">\
                <div class="form-group row">\
                <label class="col-sm-3 col-form-label">Payments Made </label>\
                <div class="col-sm-9">\
                    <select class="form-control" name="payments_made'+appointed_count+'">\
                    <option>Carrier Direct</option>\
                    <option>Through Upline</option>\
                    </select>\
                </div>\
                </div>\
            </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Certification Status</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="certification_status'+appointed_count+'" />\
                  </div>\
                </div>\
              </div>\
        </div>\
    </div>'
    var div= document.getElementById('appointed_div')
    div.innerHTML+=html
  }

    // add product
var product_count=1;
function add_product(){
    product_count+=1
    html='<div id="product_card">\
    <p class="card-description"> Products '+product_count+'   </p>\
<div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Product Type  </label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="product_type'+product_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">State </label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="state_pro'+product_count+'" />\
                  </div>\
                </div>\
              </div>\
        </div>\
<!-- row -->\
<div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Level  </label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="level_pro'+product_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Commission  </label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="commission_pro'+product_count+'" />\
                  </div>\
                </div>\
              </div>\
        </div>\
<!-- row -->\
<div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Note  </label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="note_pro'+product_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <div class="col-sm-9">\
                  <button type="button" class="btn btn-primary mr-2">Upload Commission Schedule</button>\
                  </div>\
                </div>\
              </div>\
        </div>\
<!-- row -->\
<div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">  </label>\
                  <div class="col-sm-9">\
                  <button type="button" class="btn btn-primary mr-2">Upload Contract Files</button>\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                </div>\
              </div>\
        </div>\
    </div>'

    var div= document.getElementById('product_div')
    div.innerHTML+=html
  }

      // add logins
var logins_count=1;
function add_logins(){
    logins_count+=1
    html='<div id="logins_card">\
    <p class="card-description">Log In(s) Info '+logins_count+'</p>\
 <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Company</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" required name="Company_log'+logins_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Website</label>\
                  <div class="col-sm-9">\
                    <input type="url" class="form-control"required name="Website_log'+logins_count+'" />\
                  </div>\
                </div>\
              </div>\
            </div>\
            <!-- new row -->\
            <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">User Name</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" required name="user_name_log'+logins_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Password</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control"required name="Password_log'+logins_count+'" />\
                  </div>\
                </div>\
              </div>\
            </div>\
            <!-- new row -->\
             <!-- new row -->\
             <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">PIN</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" required name="PIN_log'+logins_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Notes</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control"required name="Notes_log'+logins_count+'" />\
                  </div>\
                </div>\
              </div>\
            </div>\
    </div>'
    var div= document.getElementById('logins_div')
    div.innerHTML+=html
  }

      // add downlines
var downline_count=1;
function add_downline(){
    downline_count+=1
    html='<div id="downlines_card">\
    <p class="card-description"> Downlines '+downline_count+'  </p>\
<div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Downline Name</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="downline_name'+downline_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Downline Level </label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="downline_level'+downline_count+'" />\
                  </div>\
                </div>\
              </div>\
        </div>\
    </div>'
    var div= document.getElementById('downlines_div')
    div.innerHTML+=html
  }

// add work
var work_count=1;
function add_work(){
    work_count+=1
    html='<div id="work_card"> \
    <p class="card-description">Work History '+work_count+'</p>\
<div class="row">\
            <div class="col-md-6">\
              <div class="form-group row">\
                <label class="col-sm-3 col-form-label">Previous Company</label>\
                <div class="col-sm-9">\
                  <input type="text" class="form-control" name="previous_company'+work_count+'" />\
                </div>\
              </div>\
            </div>\
            <div class="col-md-6">\
              <div class="form-group row">\
                <label class="col-sm-3 col-form-label">Job Title</label>\
                <div class="col-sm-9">\
                  <input type="text" class="form-control" name="job_title'+work_count+'" />\
                </div>\
              </div>\
            </div>\
          </div>\
          <!-- row new -->\
          <div class="row">\
            <div class="col-md-6">\
              <div class="form-group row">\
                <label class="col-sm-3 col-form-label">Start Date</label>\
                <div class="col-sm-9">\
                  <input type="date" class="form-control" name="start_date'+work_count+'" />\
                </div>\
              </div>\
            </div>\
            <div class="col-md-6">\
              <div class="form-group row">\
                <label class="col-sm-3 col-form-label">End Date</label>\
                <div class="col-sm-9">\
                  <input type="date" class="form-control" name="end_date'+work_count+'" />\
                </div>\
              </div>\
            </div>\
          </div>\
          <!-- row new -->\
          <div class="row">\
            <div class="col-md-6">\
              <div class="form-group row">\
                <label class="col-sm-3 col-form-label">Description</label>\
                <div class="col-sm-9">\
                  <input type="text"  class="form-control" name="description'+work_count+'" />\
                </div>\
              </div>\
            </div>\
            <div class="col-md-6">\
             <!--  <div class="form-group row">\
                <label class="col-sm-3 col-form-label">End Date</label>\
                <div class="col-sm-9">\
                  <input type="date" class="form-control" name="end_date'+work_count+'" />\
                </div>\
              </div> -->\
            </div>\
          </div>\
    </div>'
    var div= document.getElementById('work_div')
    div.innerHTML+=html
  }

  // add education
var education_count=1;
function add_education(){
    education_count+=1
    html='<div id="education_card">\
    <p class="card-description">Education History '+education_count+'</p>\
  <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Degree</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="degree'+education_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Field of study</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="field_of_study'+education_count+'" />\
                  </div>\
                </div>\
              </div>\
            </div>\
            <!-- row new -->\
            <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Year of completion</label>\
                  <div class="col-sm-9">\
                    <input type="date" class="form-control"name="year_of_completion'+education_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Notes</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control"name="notes'+education_count+'" />\
                  </div>\
                </div>\
              </div>\
            </div>\
    </div>'
    var div= document.getElementById('education_div')
    div.innerHTML+=html
  }

    // add family
var family_count=1;
function add_family(){
    family_count+=1
    html='<div id="family_card">\
    <p class="card-description">Family Information '+family_count+'</p>\
  <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Name</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="name_family'+family_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Type of Relationship</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="types_of_relationship_family'+family_count+'" />\
                  </div>\
                </div>\
              </div>\
            </div>\
            <!-- row new -->\
            <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">DOB</label>\
                  <div class="col-sm-9">\
                    <input type="date" class="form-control" name="dob_family'+family_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">text field</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="text_field_family'+family_count+'" />\
                  </div>\
                </div>\
              </div>\
            </div>\
            <!-- row new -->\
             <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Email</label>\
                  <div class="col-sm-9">\
                    <input type="email" class="form-control" name="email_family'+family_count+'" />\
                  </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
              <!--   <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">text field</label>\
                  <div class="col-sm-9">\
                    <input type="text" class="form-control" name="text_field_family'+family_count+'" />\
                  </div>\
                </div> -->\
              </div>\
            </div>\
    </div>'
    var div= document.getElementById('family_div')
    div.innerHTML+=html
  }