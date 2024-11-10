@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form action="{{ url('accounts')}}" method="POST" enctype="multipart/form-data">
@csrf

                    <!-- ========== lien info start =============== -->
                    <div class="card my-2" id="cloneILPContainer">
            <div class="card-body">

                    <h4 class="card-title">Legder Account</h4>
                    <p class="card-description">Legder Account Fields</p>
                    <!-- row -->
                    <div class="row">

                    @if ($errors->any())
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Account Code </label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="Code" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Account Type</label>
                                <div class="col-sm-9">
                                <!-- <select class="form-control" name="Account" id="accountSelect">
                                   
                                </select>    --> 
                                 <select class="form-control"  id="accountType" name="Account" onchange="populateSubTypes()">
                                 <option value="">Select Account Type</option>
                                 <option value="Assets">Assets</option>
                                    <option value="Liabilities">Liabilities</option>
                                    <option value="Equity">Equity</option>
                                    <option value="Income">Income</option>
                                    <option value="Expense">Expense</option>
                                </select>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" >Sub Type</label>
                            <div class="col-sm-9">
                                <select id="subType" class="form-control" name="Type" onchange="populateCategories()">
                                <option value="">Select Sub Type</option>
                                <!-- Sub types will be populated dynamically based on the selected account type -->
                            </select>
           

                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category </label>
                                <div class="col-sm-9">

                                <select class="form-control"  id="category" name="Category">
                                    <option value="">Select Category</option>
                                    <!-- Categories will be populated dynamically based on the selected sub type -->
                                </select>
                                </div>
                            </div>
                        </div>


                    <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Start Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="StartingDate" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Start Balance</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="StartingBalance" required />
                                </div>
                            </div>
                        </div>


                    {{-- <div class="col-md-6" >
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Balance</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="Balance" />
                                </div>
                            </div>
                        </div> --}}

                      
        <!-- row end -->
                  </div>

                             

                     


                       

                  <div class="row">



                     

                        <!-- <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Closing Balance </label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="ClosingBalance" />
                                </div>
                            </div>
                        </div> -->

                      

                    

                        <!-- <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Is Enabled</label>
                                <div class="col-sm-9">
                                    <select class="form-control"  name="Enabled">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>   
                                </div>
                            </div>
                        </div> -->
                    
                        
                       
                    </div>
                    <!-- row end -->



                    </div> {{-- card body --}}
            </div> {{-- card close --}}

                    <!-- ========== account end =============== -->


<!-- <div class="col-12 grid-margin"> -->
<br>
{{-- <div class="col-12 grid-margin">
   <button type="button" class="btn btn-sm btn-success p-2 my-2" id="addProductBtn" onclick="moreProduct()">Add More Entries</button>

</div> --}}

  <!-- for new enties -->

  {{-- <div id="product-cards"></div>


<div class="card my-2" id="entries">
            <div class="card-body" >

                   
                    <div class="row">

                    <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date </label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="Date" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="Description" rows="4"></textarea>
                                </div>
                            </div>
                        </div>

                    <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Debit </label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="Debit" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Credit </label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="Credit" />
                                </div>
                            </div>
                        </div>


                    </div>  

                </div></div> --}}

  <input type="hidden" name="num" value="">


<br>
<div class="col-12 grid-margin">
   <button type="submit" class="btn btn-primary mr-2" >Submit </button> 

</div>

</form>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
        function populateSubTypes() {
            var accountTypeSelect = document.getElementById("accountType");
            var subTypeSelect = document.getElementById("subType");

            // Clear existing options
            subTypeSelect.innerHTML = "<option value=''>Select Sub Type</option>";

            if (accountTypeSelect.value === "Assets") {
                // Sub types for Savings Account
                var subTypes = ["Cash/Bank","Fixed Assets","Other Assets","Current Assets"];

                // Populate the "subType" select field
                for (var i = 0; i < subTypes.length; i++) {
                    var option = document.createElement("option");
                    option.value = subTypes[i];
                    option.text = subTypes[i];
                    subTypeSelect.add(option);
                }
            } 
            else if (accountTypeSelect.value === "Expense") {
                // Sub types for Checking Account
                var subTypes = ["Expense"];

                // Populate the "subType" select field
                for (var i = 0; i < subTypes.length; i++) {
                    var option = document.createElement("option");
                    option.value = subTypes[i];
                    option.text = subTypes[i];
                    subTypeSelect.add(option);
                }
            }
            // Add more conditions for other account types as needed
            else if (accountTypeSelect.value === "Liabilities") {

                var subTypes = ["Current Liabilities","Long Term Liabilities"];

                // Populate the "subType" select field
                for (var i = 0; i < subTypes.length; i++) {
                    var option = document.createElement("option");
                    option.value = subTypes[i];
                    option.text = subTypes[i];
                    subTypeSelect.add(option);
                }
            }
            else if (accountTypeSelect.value === "Income") {
                // Sub types for Checking Account
                var subTypes = ["Income"];

                // Populate the "subType" select field
                for (var i = 0; i < subTypes.length; i++) {
                    var option = document.createElement("option");
                    option.value = subTypes[i];
                    option.text = subTypes[i];
                    subTypeSelect.add(option);
                }
            }
            else if (accountTypeSelect.value === "Equity") {
                // Sub types for Checking Account
                var subTypes = ["Capital","Retained Earning"];

                // Populate the "subType" select field
                for (var i = 0; i < subTypes.length; i++) {
                    var option = document.createElement("option");
                    option.value = subTypes[i];
                    option.text = subTypes[i];
                    subTypeSelect.add(option);
                }
            }
        }


        // for categories

        function populateCategories() {
            var subTypeSelect = document.getElementById("subType");
            var categorySelect = document.getElementById("category");

            // Clear existing options
            categorySelect.innerHTML = "<option value=''>Select Category</option>";
            // liability 
            if (subTypeSelect.value === "Accounts Payable") {
                // Categories for Regular Savings sub type
                var categories = ["Accounts Payable (A/P)"];

                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            } 

            else if (subTypeSelect.value === "Credit Cards") {
                // Categories for High-Interest Savings sub type
                var categories = ["Credit Card"];

                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            }

            else if (subTypeSelect.value === "Current Liabilities") {
                // Categories for High-Interest Savings sub type
                var categories = [
                    "Accounts Payable",
                    "Commissions Payable",
                    "Loans Payable"
                ];
                                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            }

            else if (subTypeSelect.value === "Long Term Liabilities") {
                // Categories for High-Interest Savings sub type
                var categories = ["Notes Payable"];

                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            }
            
            else if (subTypeSelect.value === "Expense") {
                // Categories for High-Interest Savings sub type
                var categories = [
                    'Car and truck',
                    'Legal and professional services',
                    'Vehicles, machinery, and equipment',
                    'Other business property',
                    'Deductible meals',
                    // 
                    "Officer's Compensation",
                    "Charitable Contributions",
                    "Bad Debts",
                    "Reserved for Future Use",
                    "Advertising",
                    "Vehicle",
                    "Commission & Fees",
                    "Contract Labor",
                    "Depletion",
                    "Depreciation",
                    "Employee Benefits",
                    "Insurance",
                    "Interest",
                    "Mortgage",
                    "Professional Fees",
                    "Office Expense",
                    "Pension & Profit Sharing",
                    "Rent / Lease: Equipment",
                    "Rent / Lease: Property",
                    "Repair / Maintenance",
                    "Supplies Non Inventory",
                    "Taxes / Licenses",
                    "Travel",
                    "Meals",
                    "Utilities",
                    "Salary & Wages",
                    "Other Expenses"
                ];


                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            }
// equity new
            else if (subTypeSelect.value === "Other Equity") {
                // Categories for High-Interest Savings sub type
                var categories = ["Accumulated Adjustment","Common Stock","Preferred Stock","Paid-In Capital or Surplus",
                "Treasury Stock","Opening Balance Equity","Owner's Equity","Partner's Equity","Shareholder's Equity",
                "Partner's Contributions","Shareholder's Contributions","Partner's Distributions","Shareholder's Distributions"
                ,"Estimated Taxes","Health Insurance Premium","Health Savings Account Contribution",
                "Personal Income","Personal Expense"
            ];

                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            }

            else if (subTypeSelect.value === "Capital") {
                // Categories for High-Interest Savings sub type
                var categories = ["Capital"];

                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            }
            else if (subTypeSelect.value === "Retained Earning") {
                // Categories for High-Interest Savings sub type
                var categories = ["Retained Earning"];

                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            }

           

            else if (subTypeSelect.value === "Income") {
                // Categories for High-Interest Savings sub type
                var categories = [
                    "Insurance Commission",
                    "Tax Prep/Filing Fee",
                    "EA Service Fee",
                    "Incorporating Fee",
                    "Payroll Fee",
                    "Bookkeeping Fee",
                    "Consultation Fee",
                    "Website/App Fee",
                    "Web Maintenance Fee",
                    "Domain Fee",
                    "Hosting Fee",
                    "IT Consult Fee",
                    "SEO Fees",
                    "SMM Fee",
                    "PPC FEE",
                    "Graphic Designing Fee",
                    "Content Fee",
                    "Dividends Received",
                    "Interest Earned",
                    "Rent Received",
                    "Royalties Received",
                    "Capital Gain",
                    "Other Income"
                ];


                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            }
            // for assets 
            else if (subTypeSelect.value === "Cash/Bank") {
                // Categories for High-Interest Savings sub type
                var categories = ["Cash","Checking","Trust Account"];

                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            }
            else if (subTypeSelect.value === "Accounts Receivable") {
                // Categories for High-Interest Savings sub type
                var categories = ["Accounts Receivable ","Commissions Receivable"];

                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            }

            else if (subTypeSelect.value === "Current Assets") {
                // Categories for High-Interest Savings sub type
                var categories = ["Account Receivable", "Pre-Payments",
            ];

                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            }

            else if (subTypeSelect.value === "Fixed Assets") {
                // Categories for High-Interest Savings sub type
                var categories = ["Computers & Equipment","Buildings","Furniture & Fixtures",
                "Leasehold Improvements","Property Plant Equipment","Vehicles","Accumulated Depreciation",
                "Accumulated Amortization","Other fixed assets"
            ];

                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            }

            else if (subTypeSelect.value === "Other Assets") {
                // Categories for High-Interest Savings sub type
                var categories = ["Agents Advances","Employee Cash Advances","Loans",
                "Investment","Brand","Goodwill","Digital Assets","Lease Buyout",
                "Security Deposits","Licenses"];
                // Populate the "category" select field
                for (var i = 0; i < categories.length; i++) {
                    var option = document.createElement("option");
                    option.value = categories[i];
                    option.text = categories[i];
                    categorySelect.add(option);
                }
            }
            // Add more conditions for other sub types as needed
        }
    </script>

<!-- for add more entires -->
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
    $('input[name="num"]').val(productCount);

    // Get the product card HTML
    const productCard = `
    <div class="card my-2" id="entries${productCount}">
            <div class="card-body" >
                                <div class="row">

                    <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date </label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="Date${productCount}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="Description${productCount}" rows="4"></textarea>
                                </div>
                            </div>
                        </div>

                    <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Debit </label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="Debit${productCount}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Credit </label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="Credit${productCount}" />
                                </div>
                            </div>
                        </div>


                    </div>  

                </div></div>
    `;

    // Append new product card
    document.querySelector('#product-cards').insertAdjacentHTML('afterend', productCard);

    // Create an object to represent product data from the current card


    // Add the product data to the array
    productData.push(product);
  });


</script>
<!-- end entires -->



@endsection
