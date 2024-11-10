var count =1;
function add_more(){
    count+=1
    html=' <p class="card-description">Work History '+count+'   </p>\
    <div class="row">\
                  <div class="col-md-6">\
                    <div class="form-group row">\
                      <label class="col-sm-3 col-form-label">Previous Company </label>\
                      <div class="col-sm-9">\
                        <input type="text" name="previous_company'+count+'" class="form-control"  />\
                      </div></div></div>\
                  <div class="col-md-6">\
                    <div class="form-group row">\
                      <label class="col-sm-3 col-form-label">Job Title </label>\
                      <div class="col-sm-9">\
                        <input type="text" name="job_title'+count+'" class="form-control"  />\
                      </div>\
                    </div>\
                  </div>\
                </div>\
    <div class="row">\
                  <div class="col-md-6">\
                    <div class="form-group row">\
                      <label class="col-sm-3 col-form-label">Start Date </label>\
                      <div class="col-sm-9">\
                        <input type="date" name="start_date'+count+'" class="form-control"  />\
                      </div>\
                    </div>\
                  </div>   <div class="col-md-6">\
                    <div class="form-group row">\
                      <label class="col-sm-3 col-form-label">End Date</label>\
                      <div class="col-sm-9">\
                        <input type="date" name="end_date'+count+'" class="form-control" />\
                      </div>\
                    </div>\
                  </div>\
                </div>    <div class="row">\
                  <div class="col-md-6">\
                    <div class="form-group row">\
                      <label class="col-sm-3 col-form-label">Description </label>\
                      <div class="col-sm-9">\
                        <input type="date" name="description'+count+'" class="form-control" />\
                      </div>\
                    </div>\
                  </div>   <div class="col-md-6">\
                    <div class="form-group row">\
                    </div>\
                  </div>\
                </div>'
  var div= document.getElementById('work')
  div.innerHTML+=html
}
// educaion 
var degree=1;
function add_degree(){
  degree+=1
  html='<p class="card-description">Education History '+degree+'   </p>   <div class="row">\
                <div class="col-md-6">\
                  <div class="form-group row">\
                    <label class="col-sm-3 col-form-label">Degree</label>\
                    <div class="col-sm-9">\
                      <input type="text" name="degree'+degree+'" class="form-control"  />\
                    </div>\
                  </div>\
                </div>\
                <div class="col-md-6">\
                  <div class="form-group row">\
                    <label class="col-sm-3 col-form-label">Field of study</label>\
                    <div class="col-sm-9">\
                      <input type="text" name="field_of_study'+degree+'" class="form-control" />\
                    </div>\
                  </div>\
                </div>\
              </div>\
  <div class="row">\
                <div class="col-md-6">\
                  <div class="form-group row">\
                    <label class="col-sm-3 col-form-label">Year of completion</label>\
                    <div class="col-sm-9">\
                      <input type="date"  name="year_of_completion'+degree+'" class="form-control"  />\
                    </div>\
                  </div>\
                </div>\
                <div class="col-md-6">\
                  <div class="form-group row">\
                    <label class="col-sm-3 col-form-label">Notes</label>\
                    <div class="col-sm-9">\
                      <input type="text" name="notes'+degree+'" class="form-control" />\
                    </div>\
                  </div>\
                </div>\
              </div>'

  var div= document.getElementById('degree')
  div.innerHTML+=html
}
// add phone
var phone=1;
function add_phone(){
  phone+=1
  html='  <input type="tel" name="phone'+phone+'" class="form-control" placeholder="Phone '+phone+' " />'

  var div= document.getElementById('phone')
  div.innerHTML+=html
}
// add email
var email=1;
function add_email(){
  email+=1
  html='  <input type="email" name="email'+email+'" class="form-control" placeholder="email '+email+' " />'

  var div= document.getElementById('email')
  div.innerHTML+=html
}
// add address
var address=1;
function add_address(){
  address+=1
  html='  <input type="text" name="address'+address+'" class="form-control" placeholder="address '+address+' " />'

  var div= document.getElementById('address')
  div.innerHTML+=html
}
// payment method
var pay=1;
function add_pay(){
  pay+=1
  html='<input type="text" name="payment_method'+pay+'" class="form-control" placeholder="Payment Method '+pay+'" />  '

  var div= document.getElementById('pay')
  div.innerHTML+=html
}

// try to remove
var try1 = document.getElementById('try');

function remove(){
  var input_tags = try1.getElementsByTagName('input');
  if(input_tags.length > 1) {
    try1.removeChild(input_tags[(input_tags.length) - 1]);
  }
}

// youtube code
remove_fields.onclick = function(){
  var input_tags = survey_options.getElementsByTagName('input');
  if(input_tags.length > 2) {
    survey_options.removeChild(input_tags[(input_tags.length) - 1]);
  }
}
var survey_options = document.getElementById('survey_options');
var add_more_fields = document.getElementById('add_more_fields');
var remove_fields = document.getElementById('remove_fields');


// for payment js start ...............................

//  additional policy 
var policy =1;
function add_policy(){
  policy+=1;
  html='<div class="col-12 grid-margin">\
  <div class="card">\
    <div class="card-body">\
    <p class="card-description">Add Additional Policy'+policy+' </p>\
        <!-- row -->\
        <div class="row">\
          <div class="col-md-6">\
            <div class="form-group row">\
              <label class="col-sm-3 col-form-label">Policy #</label>\
              <div class="col-sm-9">\
                <input type="text" class="form-control" required name="policy'+policy+'" />\
              </div>\
            </div>\
          </div>\
          <div class="col-md-6">\
            <div class="form-group row">\
              <label class="col-sm-3 col-form-label">Blind Date</label>\
              <div class="col-sm-9">\
                <input type="date" class="form-control"required name="blind_date'+policy+'" />\
              </div>\
            </div>\
          </div>\
        </div>\
        <div class="row">\
          <div class="col-md-6">\
            <div class="form-group row">\
              <label class="col-sm-3 col-form-label">Effective Date</label>\
              <div class="col-sm-9">\
                <input type="date" class="form-control"required name="effective_date'+policy+'" />\
              </div>\
            </div>\
          </div>\
          <div class="col-md-6">\
            <div class="form-group row">\
              <label class="col-sm-3 col-form-label">Expiration Date</label>\
              <div class="col-sm-9">\
                <input type="date" class="form-control" required name="expiration_date'+policy+'" />\
              </div>\
            </div>\
          </div>\
        </div>\
        <div class="row">\
          <div class="col-md-6">\
              <div class="form-group row">\
              <label class="col-sm-3 col-form-label">Policy Period</label>\
              <div class="col-sm-9">\
                <select class="form-control" required name="policy_period'+policy+'">\
                  <option>Monthly</option>\
                  <option>Quarterly</option>\
                  <option>Semi-Annual</option>\
                  <option>Annually</option>\
                  <option>Variable</option>\
                </select>\
              </div>\
            </div>\
          </div>\
          <div class="col-md-6">\
            <div class="form-group row">\
              <label class="col-sm-3 col-form-label">EFT</label>\
              <div class="col-sm-9">\
                <select class="form-control"required name="eft'+policy+'">\
                  <option>Yes</option>\
                  <option>No</option>\
                </select>\
              </div>\
            </div>\
          </div>\
        </div> <!-- row new -->\
        <div class="row">\
          <div class="col-md-6">\
            <div class="form-group row">\
              <label class="col-sm-3 col-form-label">Policy Note</label>\
              <div class="col-sm-9">\
                <input type="text" class="form-control" required name="policy'+policy+'" />\
              </div>\
            </div>\
          </div>\
          <div class="col-md-6">\
            <div class="form-group row">\
              <label class="col-sm-3 col-form-label">EFT Date</label>\
              <div class="col-sm-9">\
                <input type="date" class="form-control" required name="eft_date'+policy+'" />\
              </div>\
            </div>\
          </div> \
        </div>\
<!-- row  -->\
<div class="row">\
          <div class="col-md-6">\
            <div class="form-group row">\
              <label class="col-sm-3 col-form-label">Status</label>\
              <div class="col-sm-9">\
              <select class="form-control"required name="status'+policy+'">\
                  <option>Active</option>\
                  <option>Inactive</option>\
                </select>\
              </div>\
            </div>\
          </div>\
          <div class="col-md-6">\
            <div class="form-group row">\
            </div>\
          </div> \
        </div>\
<!-- agency end  -->\
</div></div></div>\
<!-- card -->\
<div class="col-12 grid-margin">\
<div class="card">\
<div class="card-body">\
<p class="card-description">Type of Policy</p>\
<div class="row">\
          <div class="col-md-6">\
             <div class="form-group row">\
              <label class="col-sm-3 col-form-label">Carrier</label>\
              <div class="col-sm-9">\
                <select class="form-control"required name="carrier'+policy+'">\
                  <option>ex</option>\
                  <option>ex</option>\
                </select>\
              </div>\
            </div>\
          </div>\
          <div class="col-md-6">\
             <div class="form-group row">\
              <label class="col-sm-3 col-form-label">Product</label>\
              <div class="col-sm-9">\
                <select class="form-control"required name="product'+policy+'">\
                  <option>ex</option>\
                  <option>ex</option>\
                </select>\
              </div>\
            </div>\
          </div>\
        </div>\
        <!-- row new -->\
        <div class="row">\
          <div class="col-md-6">\
            <div class="form-group row">\
              <label class="col-sm-3 col-form-label">Total Premium</label>\
              <div class="col-sm-9">\
                <input type="text" class="form-control"required name="total_premium'+policy+'" />\
              </div>\
            </div>\
          </div>\
          <div class="col-md-6">\
             <div class="form-group row">\
              <label class="col-sm-3 col-form-label">Due Date</label>\
              <div class="col-sm-9">\
                <input type="date" class="form-control"required name="due_date'+policy+'" />\
              </div>\
            </div>\
          </div>\
        </div>\
        <!-- row new -->\
        <!-- row new -->\
        <div class="row">\
          <div class="col-md-6">\
            <div class="form-group row">\
              <label class="col-sm-3 col-form-label">Remaining Payment</label>\
              <div class="col-sm-9">\
                <input type="text" class="form-control"required name="remaining_payment'+policy+'" />\
              </div>\
            </div>\
          </div>\
          <div class="col-md-6">\
            <div class="form-group row">\
              <label class="col-sm-3 col-form-label">Type of Policy </label>\
              <div class="col-sm-9">\
              <select class="form-control"required name="type_of_policy'+policy+'">\
                  <option>Personal</option>\
                  <option>Commercial</option>\
                  <option onclick="auto()">Auto</option>\
                </select>\
              </div>\
            </div> \
          </div>\
        </div>\
        <!-- row new -->\
    </div></div></div>'

  var div= document.getElementById('additional_policy')
  div.innerHTML+=html
}

// make auto 

function add_auto(value){
  if(value=="Auto"){
    html='<div id="auto_card">\
    <div class="col-12 grid-margin">\
<div class="card">\
<div class="card-body">\
             <p class="card-description"> Auto </p> \
            <!-- row -->\
            <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Bodily Injury</label>\
                  <div class="col-sm-9">\
                  <select class="form-control"required name="bodily_injury">\
                      <option value="Yes">Yes</option>\
                      <option value="No">No</option>\
                    </select>\
                     </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Property Damage</label>\
                  <div class="col-sm-9">\
                  <select class="form-control"required name="property_damage">\
                      <option value="Yes">Yes</option>\
                      <option value="No">No</option></select>\ </div>\
                </div>\
              </div>\
            </div>\
            <!-- new row -->\
            <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">UM-BI</label>\
                  <div class="col-sm-9">\
                  <select class="form-control"required name="um_bi">\
                      <option value="Yes">Yes</option>\
                      <option value="No">No</option>\
                    </select>\
                     </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">UMPD</label>\
                  <div class="col-sm-9">\
                  <select class="form-control"required name="umpd">\
                      <option value="Yes">Yes</option>\
                      <option value="No">No</option>\
                    </select>                 \
                   </div>\
                </div>\
              </div>\
            </div>\
            <!-- new row -->\
            <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">UMPD deductible</label>\
                  <div class="col-sm-9">\
                  <select class="form-control"required name="umpd_deductible">\
                      <option value="Yes">Yes</option>\
                      <option value="No">No</option>\
                    </select>\
                     </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Medical Payment</label>\
                  <div class="col-sm-9">\
                  <select class="form-control"required name="medical_payment">\
                      <option value="Yes">Yes</option>\
                      <option value="No">No</option>\
                    </select>                 \
                   </div>\
                </div>\
              </div>\
            </div>\
            <!-- new row -->\
            <div class="row">\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">PIP</label>\
                  <div class="col-sm-9">\
                  <select class="form-control"required name="pip">\
                      <option value="Yes">yes</option>\
                      <option value="No">no</option>\
                    </select>\
                     </div>\
                </div>\
              </div>\
              <div class="col-md-6">\
                <div class="form-group row">\
                  <label class="col-sm-3 col-form-label">Accidental Death</label>\
                  <div class="col-sm-9">\
                  <select class="form-control"required name="accidental_death">\
                      <option value="No">No</option>\
                      <option value="Yes">Yes</option>\
                    </select>                </div>\
                </div>\
              </div>\
            </div>\
            <!-- new row -->\
</div></div></div>\
    </div>'
  
    var div= document.getElementById('autos_div')
    div.innerHTML+=html
  }
  else{
    // remove
    var auto_card =
    document.getElementById("auto_card");
    auto_card.parentNode.removeChild(auto_card);
  }
}
// payment pending js ...........................................
function jsFunction(value){
  if(value=="Yes"){
    html='<div id="slipt_card">\
    <div class="col-12 grid-margin">\
<div class="card">\
<div class="card-body">\
<p class="card-description"> Split Payment  </p>\
<div class="row">\
<div class="col-md-6">\
  <div class="form-group row">\
    <label class="col-sm-3 col-form-label">Payment amount</label>\
    <div class="col-sm-9">\
      <input type="text" class="form-control" name="payment_amount_Split" required />\
    </div>\
  </div>\
</div>\
              <div class="col-md-6">\
      <div class="form-group row">\
      <label class="col-sm-3 col-form-label">Payment method</label>\
      <div class="col-sm-9">\
          <select class="form-control" name="payment_method_Split" required>\
          <option value="Cash">Cash</option>\
          <option value="Card">Card</option>\
          <option value="cheque">cheque</option>\
          <option value="E-cheque">E-cheque</option>\
          <option value="EFT/Auto Pay">EFT/Auto Pay</option>\
          <option value="Money Order">Money Order</option>\
          </select>\
      </div>\
      </div>\
  </div>\
  </div>\
  <!-- row -->\
</div></div></div>\
    </div>'

    var div= document.getElementById('pay_card')
    div.innerHTML+=html
  }
  else{
    // remove
    var slipt_card =
    document.getElementById("slipt_card");
    slipt_card.parentNode.removeChild(slipt_card);
  }
}