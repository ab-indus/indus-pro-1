@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

<form action="{{ route('carrier.store') }}" method="POST" enctype="multipart/form-data" id="myForm">
@csrf

<input type="hidden" name="product_data" id="product_data" value="">

<div class="col-12 grid-margin">
  <div class="card">
      <div class="card-body">
          <h4 class="card-title">Add Carrier Info</h4>

          <div class="row">

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Display Name</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="display_name" />         
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Type</label>
                      <div class="col-sm-9">
                      <select class="form-control" required name="type">
                              <option value="Carrier">Carrier</option>
                              <option value="MGA">MGA</option>
                              <option value="Agency">Agency</option>
                       </select>
                       </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Agent Code</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="agent_code" />         
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Agent URL </label>
                      <div class="col-sm-9">
                      <input type="url" class="form-control" name="agent_url" />         
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">User ID</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="user_id" />         
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="password" />         
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Upload Email</label>
                      <div class="col-sm-9">
                      <input type="email" class="form-control" name="email" />         
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Main Phone</label>
                      <div class="col-sm-9">
                      <input type="tel" class="form-control" name="phone" />         
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Fax</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="fax" />         
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Main Email</label>
                      <div class="col-sm-9">
                      <input type="email" class="form-control" name="main_email" />         
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">E&O Submission Date</label>
                      <div class="col-sm-9">
                      <input type="date" class="form-control" name="eo_date" />         
                      </div>
                  </div>
              </div>


            
          </div>
          <!-- row end -->


      </div></div></div>
      <!-- card end -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Add Notes</h4>

<div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Details</label>
                      <div class="col-sm-12">
                          <textarea class="form-control" name="note_content" rows="8"></textarea>
                      </div>
                  </div>
              </div>

</div></div></div>

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">upload contract</h4>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Upload Contract</label>
        <div class="col-sm-9">
        <input type="file" class="form-control" name="contract_content" />         
        </div>
    </div>
</div>

</div></div></div>
<!-- contract card -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Add Contact Info</h4>

<div class="row">

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
        <label class="col-sm-3 col-form-label">Contact Email</label>
        <div class="col-sm-9">
        <input type="email" class="form-control" name="contact_email" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Marketing Email</label>
        <div class="col-sm-9">
        <input type="email" class="form-control" name="marketing_email" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Marketing Phone</label>
        <div class="col-sm-9">
        <input type="tel" class="form-control" name="marketing_phone" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Underwriting Phone</label>
        <div class="col-sm-9">
        <input type="tel" class="form-control" name="underwriting_phone" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Underwriting Email</label>
        <div class="col-sm-9">
        <input type="email" class="form-control" name="underwriting_email" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Customer Service Phone</label>
        <div class="col-sm-9">
        <input type="tel" class="form-control" name="customer_phone" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Customer Service Email</label>
        <div class="col-sm-9">
        <input type="email" class="form-control" name="customer_email" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Agent Service Phone</label>
        <div class="col-sm-9">
        <input type="tel" class="form-control" name="agent_phone" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Agent Service Email</label>
        <div class="col-sm-9">
        <input type="email" class="form-control" name="agent_email" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Claims Phone</label>
        <div class="col-sm-9">
        <input type="tel" class="form-control" name="claims_phone" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Claims Email</label>
        <div class="col-sm-9">
        <input type="email" class="form-control" name="claims_email" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Accounting Phone</label>
        <div class="col-sm-9">
        <input type="tel" class="form-control" name="accounting_phone" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Accounting Email</label>
        <div class="col-sm-9">
        <input type="email" class="form-control" name="accounting_email" />         
        </div>
    </div>
</div>

</div>
<!-- row end -->

</div></div></div>
<!-- contact info -->

<!-- product card start -->
<div class="col-12 grid-margin" id="product-cards">
<div class="card">
<div class="card-body">
<h4 class="card-title">Product</h4>

<div class="row">

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Product Name</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" name="product_name" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Base Premium</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="base_premium" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Crime Prevention Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="crime_fee" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Policy Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="policy_fee" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Late Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="late_fee" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Reinstatement Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="reinstatement_fee" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Installment Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="Installment_fee" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Credit Card Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="credit_fee" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Misc Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="misc_fee" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Other Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="other_fee" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Total Premium</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="total_premium" />         
        </div>
    </div>
</div>



<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">New Business Comission %</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="business_comission" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Renewal Comission %</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="renewal_comission" />         
        </div>
    </div>
</div>

    <div class="col-md-6">
    <div class="form-group row">
             <div class="col-sm-9" id="values-container">
           <button type="button" class="btn btn-sm btn-success p-2 my-2" id="addProductBtn" onclick="moreProduct()">Add More product</button>
       </div>
    </div>
  </div>

  
</div>

</div></div></div>
<!-- product card end -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Add Policies</h4>

<div class="row">

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Status</label>
        <div class="col-sm-9">
        <select class="form-control" required name="status">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
          </select>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Policy Number</label>
        <div class="col-sm-9">
            <select class="form-control" required name="policy_number" id="policy_number">
                @foreach ($data as $item)
                <option value="{{ $item->policy_num }}">{{ $item->policy_num }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>


<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Policy Type</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" name="policy_type" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Policy Term</label>
        <div class="col-sm-9">
        <!-- <select class="form-control"  name="policy_term">
            <option value="1 Month">1 Month</option>
            <option value="3 Month">3 Month</option>
            <option value="6 Month">6 Month</option>
            <option value="12 Month">12 Month</option>
          </select> -->
          <input type="text" class="form-control" name="policy_term" />         

        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Base Premium</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" name="base_premium1" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Total Premium</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="total_premium" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Date Due</label>
        <div class="col-sm-9">
        <input type="date" class="form-control" name="date_due" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Amount Due</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="amount_due" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Date paid</label>
        <div class="col-sm-9">
        <input type="date" class="form-control" name="date_paid" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Amount paid</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="Amount_paid" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Commission Due</label>
        <div class="col-sm-9">
        <input type="date" class="form-control" name="commission_due" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">New Amount Due</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="new_amount_due" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">New Date Due</label>
        <div class="col-sm-9">
        <input type="date" class="form-control" name="new_due_date" />         
        </div>
    </div>
</div>

</div>
</div></div></div>
<!-- policies card end  -->

<div class="col-12 grid-margin">
   <button type="submit" class="btn btn-primary mr-2" >Submit  </button> 

</div>

<!-- form end -->
</form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  let productCount = 0;
  let productData = []; // Initialize an array to store product data

  // Select the add product button
  const addProductBtn = document.getElementById('addProductBtn');
  
  // Add click event listener
  addProductBtn.addEventListener('click', () => {
    productCount++;

    const btnId = 'addProductBtn-' + productCount;
    const cardId = 'productCard-' + productCount;

    addProductBtn.id = btnId;

    // Get the product card HTML
    const productCard = `
    <!-- ... (your product card HTML here) ... -->
    <div class="col-12 grid-margin" id="${cardId}">
<div class="card">
<div class="card-body">
<h4 class="card-title">Product</h4>

<div class="row">

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Product Name</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" name="product_name${cardId}" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Base Premium</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="base_premium${cardId}" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Crime Prevention Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="crime_fee${cardId}" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Policy Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="policy_fee${cardId}" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">late Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="late_fee${cardId}" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Reinstatement Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="reinstatement_fee${cardId}" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Installment Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="Installment_fee${cardId}" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Credit Card Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="credit_fee${cardId}" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Misc Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="misc_fee${cardId}" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Other Fee</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="other_fee${cardId}" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Total Premium</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="total_premium${cardId}" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">New Business Comission</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="comission${cardId}" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">New Business Comission</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="business_comission${cardId}" />         
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Renewal Comission</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="renewal_comission${cardId}" />         
        </div>
    </div>
</div>

   

</div>

</div></div></div>
    `;

    // Append new product card
    document.querySelector('#product-cards').insertAdjacentHTML('afterend', productCard);

    // Create an object to represent product data from the current card
    const product = {
    product_name: document.querySelector(`#${cardId} [name="product_name${cardId}"]`).value,
    base_premium: document.querySelector(`#${cardId} [name="base_premium${cardId}"]`).value,
    crime_fee: document.querySelector(`#${cardId} [name="crime_fee${cardId}"]`).value,
    policy_fee: document.querySelector(`#${cardId} [name="policy_fee${cardId}"]`).value,
    late_fee: document.querySelector(`#${cardId} [name="late_fee${cardId}"]`).value,
    reinstatement_fee: document.querySelector(`#${cardId} [name="reinstatement_fee${cardId}"]`).value,
    Installment_fee: document.querySelector(`#${cardId} [name="Installment_fee${cardId}"]`).value,
    credit_fee: document.querySelector(`#${cardId} [name="credit_fee${cardId}"]`).value,
    misc_fee: document.querySelector(`#${cardId} [name="misc_fee${cardId}"]`).value,
    other_fee: document.querySelector(`#${cardId} [name="other_fee${cardId}"]`).value,
    total_premium: document.querySelector(`#${cardId} [name="total_premium${cardId}"]`).value,
    comission: document.querySelector(`#${cardId} [name="comission${cardId}"]`).value,
    business_comission: document.querySelector(`#${cardId} [name="business_comission${cardId}"]`).value,
    renewal_comission: document.querySelector(`#${cardId} [name="renewal_comission${cardId}"]`).value,
};

    // Add the product data to the array
    productData.push(product);
  });

  // Function to submit the form with product data
  function submitForm() {
    // Assuming you have a form element with id 'myForm'
    const form = document.getElementById('myForm');

    // Create a hidden input field for product data
    const productDataInput = document.createElement('input');
    productDataInput.type = 'hidden';
    productDataInput.name = 'product_data'; // Use a suitable name for your use case
    productDataInput.value = JSON.stringify(productData);

    // Append the hidden input field to the form
    form.appendChild(productDataInput);

    // Submit the form
    form.submit();
}
</script>

<!-- for update the data by policy select -->
<script>
$(document).ready(function() {
    // Listen for changes in the select input
    $('#policy_number').on('change', function() {
        var selectedPolicyNumber = $(this).val();
        if (selectedPolicyNumber) {
            // Make an AJAX request to fetch data
            $.ajax({
                type: 'GET',
                url: '/public/get-policy-details/' + selectedPolicyNumber, // Replace with your route
                success: function(response) {
                    if (response) {
                        // Populate form fields with the retrieved data
                        $('input[name="status"]').val(response.status);
                        $('input[name="policy_type"]').val(response.typ_of_pay);
                        $('input[name="policy_term"]').val(response.type);
                        $('input[name="base_premium1"]').val(response.base_premium);
                        $('input[name="total_premium"]').val(response.total_premium);
                        $('input[name="date_due"]').val(response.due_date);
                        $('input[name="amount_due"]').val(response.due_amount);
                        $('input[name="date_paid"]').val(response.paid_date);
                        $('input[name="Amount_paid"]').val(response.Amount_Paid);
                        $('input[name="new_amount_due"]').val(response.new_due_amount);
                        $('input[name="new_due_date"]').val(response.new_due_date);
                    }
                }
            });
        }
    });
});
</script>




@endsection

