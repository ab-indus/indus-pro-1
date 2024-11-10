@extends('admin_frontend.master')
@section('content')

    
 <div class="content-wrapper">
<form action="{{ url('Project/Store')}}" method="POST" enctype="multipart/form-data">
@csrf

    <div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

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

        <h4 class="card-title">Add Project </h4>
         <p class="card-description">Project Info</p>

    <div class="row">

        <div class="col-6">
            <div class="form-group">
                <label for="project_name">Project Name</label>
                <input type="text" class="form-control" id="project_name" name="project_name">
            </div>
        </div>

        {{-- <div class="col-6">
            <div class="form-group">
                <label for="project_type">Project Catagory</label>
                <select class="form-control" id="project_type" name="project_type">
                    <option value="Marketing">Marketing</option>
                    <option value="Insurance">Insurance</option>
                    <option value="Tech">Tech</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div> --}}


        <div class="col-6">
            <div class="form-group">
                <label for="Deadline">Deadline</label>
                <input type="date" class="form-control" id="Deadline" name="Deadline">
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="">Category Main</label>
                <select class="form-control" name="project_type">
                    <option value="">Select Main Category</option>
                    <option value="Marketing">Marketing</option>
                    <option value="HR">HR</option>
                    <option value="Sales">Sales</option>
                    <option value="Benefits Management">Benefits Management</option>
                    <option value="Finance">Finance</option>
                    <option value="Legal">Legal</option>
                    <option value="Tax">Tax</option>
                    <option value="IT-Website">IT-Website</option>
                    <option value="IT-Software">IT-Software</option>
                    {{-- <option value="Other">Other</option> --}}
                    <option value="All">Other</option>
                    {{-- <option value="All">Jack Of All</option> --}}
                    
                </select>
            </div>
        </div>

        <div class="col-6">
        </div>




         {{-- <div class="col-6">
            <div class="form-group">
                <label for="ActualEndDate">Actual End Date </label>
                <input type="date" class="form-control" id="ActualEndDate" name="ActualEndDate">
            </div>
        </div> --}}

        <div class="col-6">
            <div class="form-group">
                {{-- <label for="EstimatedCost">Estimated Cost</label> --}}
                {{-- <input type="number" class="form-control"  name="EstimatedCost"> --}}
                <p>Estimated Cost: <span id="Es-cost-result"> </span></p>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                {{-- <label for="EstimatedTime">Estimated Time (in days)</label> --}}
                {{-- <input  type="number" class="form-control" id="Es-time-result" name="EstimatedTime"> --}}
                <p>Estimated Time: <span id="Es-time-result"> </span></p>

            </div>
        </div>


        {{-- <div class="col-6">
            <div class="form-group">
                <label for="ActualCost">Actual Cost</label>
                <input type="number" class="form-control" id="ActualCost" name="ActualCost">
            </div>
        </div> --}}

 
{{-- 
        <div class="col-6">
            <div class="form-group">
                <label for="category">Category Custom</label>
                <input type="text" class="form-control" id="category[]" name="category[]">
            </div>
        </div> --}}

  



    </div>


         <div class="row">

            <div class="col">
                {{-- <div class="form-group">
                    <label for="project_template">Project Template</label>
                    <select class="form-control" id="project_template" name="project_template">
                        <option value="Basic">Basic</option>
                        <option value="Tax">Tax</option>
                        <option value="Insurance">Insurance</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="Active">Active</option>
                        <option value="Not Active">Not Active</option>
                    </select>
                </div> --}}
            </div>

            <div class="col">

                {{-- <div class="form-group ">
                    <label for="phases">Phase</label>
                    <select class="form-control" id="phases" name="phases">
                        <option value="Initiation">Initiation</option>
                        <option value="Planning">Planning</option>
                        <option value="Execution">Execution</option>
                        <option value="Monitoring">Monitoring</option>
                        <option value="Closing">Closing</option>
                    </select>
                </div> --}}

            </div>

        </div>
        
        





</div></div>

<div class="card my-2" id="cloneILPContainer">
    <div class="card-body">

        <h4 class="card-title">Add Project Task </h4>
         <p class="card-description">Task Info</p>

         <div class="row" id="cat-option">

            <div class="col-6" >

                {{-- <div class="form-group">
                    <label for="categoryMain[]">Category Main</label>
                    <select class="form-control category-main" name="categoryMain[]">
                        <option value="">Select Main Category</option>
                        <option value="Marketing">Marketing</option>
                        <option value="HR">HR</option>
                        <option value="Sales">Sales</option>
                        <option value="Benefits Management">Benefits Management</option>
                        <option value="Finance">Finance</option>
                        <option value="Legal">Legal</option>
                        <option value="Tax">Tax</option>
                        <option value="IT-Website">IT-Website</option>
                        <option value="IT-Software">IT-Software</option>
                        <option value="Other">Other</option>
                        
                    </select>
                </div> --}}


                <div class="form-group">
                    <label for="category[]">Category Sub</label>
                    <select class="form-control category-sub" name="category[]">
                        <option value="">Select Subcategory</option>
                        <!-- Subcategories will be populated here -->
                    </select>
                </div>
                
              
            </div>
           
            <div class="col-6">
            </div>





            <div class="col-6">
                <div class="form-group">
                    <label for="EstimatedTime1">Estimated Time (in minutes)</label>
                    <input  type="number" class="form-control es-time" id="EstimatedTime1[]" name="EstimatedTime1[]">
                </div>

            </div>

            <div class="col-6">

                <div class="form-group">
                    <label for="EstimatedCost">Estimated Cost</label>
                    <input  type="number" class="form-control es-cost" id="EstimatedCost1[]" name="EstimatedCost1[]">
                </div>

            </div>

            {{-- <div class="col-6">
                <div class="form-group">
                    <label for="EstimatedCost">Estimated Cost</label>
                    <input type="number" class="form-control" id="EstimatedCost1[]" name="EstimatedCost1[]">
                </div>
            </div> --}}


        </div>

        <div id="content-push"></div>

            <div class="">
                <button type="button" id="AddMoreCat" class="btn btn-info mr-2" >Add More Task </button> 
                {{-- <button type="button" id="AddCustom" class="btn btn-info mr-2" >Add Custom Catagory </button>  --}}

             </div>



</div></div>


    <br>
<div class="col-12 grid-margin">
    <button type="submit" class="btn btn-primary mr-2" >Submit </button> 
 
 </div>

</form>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
 
     // Mapping of main categories to subcategories
     var categoryMap = {
         'Marketing': [
             'Comp. Analysis', 'Keywords', 'Meta Data', 'Content Outline', 'PPC Ad Copy', 
             'Media Ad Copy', 'Media Post', 'Blogs', 'Page Content', 'Landing Page', 
             'PPC', 'Media Paid Ads', 'Posts', 'Blogs', 'Add New Sub-Category', 'Reports'
         ],
         'HR': [
             'Content for Posting Ads', 'Posting Jobs-Making Post', 'Online Application',
             'Schedule Interview', 'Interview Notes', 'Appointment Letter', 'Onboarding',
             'Training', 'Evaluation', 'Payroll Management', 'Tax Compliance', 'Legal Compliance',
             'Benefits Management'
         ],
         'Sales': [
             'Online', 'Field', 'Phone', 
         ],
         'Benefits Management': [
              'Life', 'Health', 'Non-Life', 'Pension', 'Gratuity'
         ],
         'IT-Website': [
             'Website-Sheet/Doc', 'Website-Content w images on Docs', 'Website-Template & Theme',
             'Website-Docs to WP', 'Website-Audit', 
         ],
         'IT-Software': [
              'Software-BPMN', 'Software-UML', 'Software-ERD',
             'Software-SRS', 'Software-Front-end -HTML', 'Software-Backend', 'Software-Deployment', 
             'Software-Testing', 'Software-Bugs & Errors', 'Software-Update Tech Set'
         ],
         'Finance': [
             'Banking', 'Accounting-Monthly', 'Accounting-Quarterly', 'Accounting-Semi Annual', 'Accounting-Annual'
         ],
         'Legal': [
             'Contracts', 'Warnings', 'Litigation', 'Compliance', 'Business Registration'
         ],
         'Other': [
             'Other-Task',
         ],
         'Tax': [
             'Sales Tax', 'Payroll Tax', 'Registration Individual', 'Password Recovery', 'Income No Income',
             'Income Pension', 'Income Tax Salary', 'Income Tax Commission New', 'Income Tax Commission Old',
             'Income Tax Freelancer', 'Income Tax Real Estate', 'Income Tax Business Individual', 'Income Tax Company'
         ]
     };
 
     // Populate subcategories based on main category selection
     $(document).on('change', 'select[name="project_type"]', function() {
         var mainCategory = $(this).val();
         var subCategorySelect = $('.category-sub');
 
         subCategorySelect.empty().append('<option value="">Select Subcategory</option>');
 
         if (mainCategory === 'All') {
             $.each(categoryMap, function(category, subCategories) {
                 var optgroup = $('<optgroup>').attr('label', category);
                 $.each(subCategories, function(index, value) {
                     optgroup.append('<option value="' + category + '-' + value + '">' + value + '</option>');
                 });
                 subCategorySelect.append(optgroup);
             });
         } else if (mainCategory && categoryMap[mainCategory]) {
             $.each(categoryMap[mainCategory], function(index, value) {
                 subCategorySelect.append('<option value="' + mainCategory + '-' + value + '">' + value + '</option>');
             });
         }
     });
 
     // Add more categories
     $("#AddMoreCat").click(function() {
         var clonedDiv = $("#cat-option").clone();
         clonedDiv.find('input').val('');
         clonedDiv.insertBefore("#content-push");
     });
 
     });
 
 </script>
 

{{-- <script>
    $(document).ready(function() {
             $("#AddCustom").click(function() {
                // var selectedValue = $(this).val();
                
                // Check if the selected value is "Add Custom"
                    // Clone the custom input field and append it after the select element
                    var customField = `
                    <div class="row" id="cat-option">
                        <div class="col-6 custom-category">
                            <div class="form-group">
                                <label for="category">Type Category Name </label>
                                <input type="text" class="form-control" id="category[]" name="category[]">
                            </div>
                        </div> 
                                    <div class="col-6">
                            <div class="form-group">
                                <label for="EstimatedTime">Estimated Time</label>
                                <input type="text" class="form-control" id="EstimatedTime[]" name="EstimatedTime1[]">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="EstimatedCost">Estimated Cost</label>
                                <input type="text" class="form-control" id="EstimatedCost[]" name="EstimatedCost1[]">
                            </div>
                        </div>
                    </div> `;
                    
                    // Append the custom field after the current div
                    $('#content-push').before(customField);
                
            });
        });

</script> --}}

<script>
    $(document).ready(function() {
        // Function to calculate the sum of Estimated Time
        function calculateTotalTime() {
            let totalTime = 0;
            $('input[name="EstimatedTime1[]"]').each(function() {
                let time = parseFloat($(this).val());
                totalTime += isNaN(time) ? 0 : time;
            });
            $('#Es-time-result').text(totalTime);
        }

        // Function to calculate the sum of Estimated Cost
        function calculateTotalCost() {
            let totalCost = 0;
            $('input[name="EstimatedCost1[]"]').each(function() {
                let cost = parseFloat($(this).val());
                totalCost += isNaN(cost) ? 0 : cost;
            });
            $('#Es-cost-result').text(totalCost);
        }

        // Delegate event listener to dynamically calculate time and cost
        $(document).on('input', 'input[name="EstimatedTime1[]"], input[name="EstimatedCost1[]"]', function() {
            calculateTotalTime();
            calculateTotalCost();
        });

        // Initial calculation
        calculateTotalTime();
        calculateTotalCost();
    });
</script>


@endsection
