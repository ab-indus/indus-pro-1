@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form class="form-sample" action={{ url('customer/new') }} method="post">
@csrf
<!-- form start  -->

<!-- header buttons  -->
<!-- show error -->
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
   
<!-- client info -->
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Client Info</h4>
            <p class="card-description">Client Details</p>


{{-- active --}}
<div class="col-md-6">
    <div class="form-group row">
    {{-- <label class="col-sm-3 col-form-label">Membership</label> --}}
    <div class="col-sm-4">
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="Active" id="Active" value="1" checked> Active </label>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="Active" id="Active2" value="0"> Inactive </label>
        </div>
    </div>
    </div>
</div>

            <!-- for headings -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="card-title">Client Info</th>
                            <th class="card-title">Insured</th>
                            <th class="card-title">Partner/Spouse</th>
                            <th class="card-title">Business Name</th>
                            <th class="card-title">Business Form</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row -->
                        <tr>
                            <td><br><label>FIRST NAME</label></td>
                            <td><div id=""><input class="typeahead" type="text" name="FIRSTNAME"></div></td>
                            <td><div id=""><input class="typeahead" type="text" name="sp_FIRSTNAME"></div></td>
                          
                            <td><div id=""><input class="typeahead" type="text" name="BusinessName"></div></td>
                            <td><div id="">
                            <select class="typeahead form-control"  name="BusinessForm">
                                        <option value="Individual">Individual</option>
                                        <option value="Sole Proprietor">Sole Proprietor</option>
                                        <option value="LLC">LLC</option>
                                        <option value="S CORP">S CORP</option>
                                        <option value="C CORP">C CORP</option>
                                        <option value="Non Profit">Non Profit</option>


                                </select>
                          
                          </div></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        
                        <tr>
                            <td><br><label>MIDDLE</label></td>
                            <td><div id=""><input class="typeahead" type="text" name="MIDDLE"></div></td>
                            <td><div id=""><input class="typeahead" type="text" name="sp_MIDDLE"></div></td>
                           
                            <td><br><label>Business Phone</label></td>
                            <td><br><label>Type of Busines</label></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>LAST NAME</label></td>
                            <td><div id=""><input class="typeahead" type="text" name="LASTNAME"></div></td>
                            <td><div id=""><input class="typeahead" type="text" name="sp_LASTNAME"></div></td>
                          
                            <td><div id=""><input class="typeahead" type="text" name="BusinessPhone"></div></td>
                            <td><div id=""><input class="typeahead" type="text" name="TypeofBusines"></div></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>DOB</label></td>
                            <td><div id=""><input class="typeahead form-control" type="date" name="DOB"></div></td>
                            <td><div id=""><input class="typeahead form-control" type="date" name="sp_DOB"></div></td>
                          
                            <td><br><label>Business Email</label></td>
                            <td><br><label>Ann. Revenues</label></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>SSN</label></td>
                            <td><div id=""><input class="typeahead" type="text" name="SSN"></div></td>
                            <td><div id=""><input class="typeahead" type="text" name="sp_SSN"></div></td>
                          
                            <td><div id=""><input class="typeahead" type="email" name="BusinessEmail"></div></td>
                            <td><div id=""><input class="typeahead" type="number" name="AnnRevenues"></div></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>Type of ID</label></td>
                            <td><div id=""><input class="typeahead" type="text" name="TypeofID"></div></td>
                            <td><div id=""><input class="typeahead" type="text" name="sp_TypeofID"></div></td>
                          
                            <td><br><label>Contact Name</label></td>
                            <td><br><label>No of Employees</label></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>Phone</label></td>
                            <td><div id=""><input class="typeahead" type="text" name="Phone"></div></td>
                            <td><div id=""><input class="typeahead" type="text" name="sp_Phone"></div></td>
                           
                            <td><div id=""><input class="typeahead" type="text" name="ContactName"></div></td>
                            <td><div id=""><input class="typeahead" type="number" name="NoofEmployees"></div></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>Cell Phone</label></td>
                            <td><div id=""><input class="typeahead" type="text" name="CellPhone"></div></td>
                            <td><div id=""><input class="typeahead" type="text" name="sp_CellPhone"></div></td>
                           
                            <td><br><label>Contact #</label></td>
                            <td><br><label>EIN</label></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>Email</label></td>
                            <td><div id=""><input class="typeahead" type="email" name="email"></div></td>
                            <td><div id=""><input class="typeahead" type="email" name="sp_Email"></div></td>
                            <td><div id=""><input class="typeahead" type="text" name="Contact#"></div></td>
                            <td><div id=""><input class="typeahead" type="number" name="EIN"></div></td>
                        </tr>
                        <!-- row end -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- client info end -->


    

 <!-- address card -->
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Address</h4>
            <p class="card-description"> Address Details</p>
            <input type="hidden" name="total_address" value="3">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>
                                <h6 class="card-title">Address</h6>
                                <div id=""></div>
                            </td>
                            <td>
                                <h6 class="card-title">Street & No</h6>
                                <div id=""></div>
                            </td>
                            <td>
                                <h6 class="card-title">City  </h6>
                                <div id=""></div>
                            </td>
                            <td>
                                <h6 class="card-title">State  </h6>
                                <div id=""></div>
                            </td>
                            <td>
                                <h6 class="card-title">Zip   </h6>
                                <div id=""></div>
                            </td>
                            <td>
                                <h6 class="card-title">Own   </h6>
                                <div id=""></div>
                            </td>
                        </tr>
                        <!-- row the end -->

                        <!-- row -->
                        <tr>
                            <td>
                                <br><h6 >Physical</h6>
                                <input type="hidden" name="type_of_address" value="Physical">
                              
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_street_address">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_city">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_country">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_zip_code">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <!-- <input class="typeahead" type="text" name="own"> -->
                                    <select class="typeahead form-control"  name="pa_rent_or_own">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                </select>
                                </div>
                            </td>
                        </tr>
                        <!-- row end -->

                         <!-- row -->
                         <tr>
                            <td>
                                <br><h6 >Mail</h6>
                                <input type="hidden" name="type_of_address1" value="Mail">
                              
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_street_address1">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_city1">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_country1">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_zip_code1">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <!-- <input class="typeahead" type="text" name="own"> -->
                                    <select class="typeahead form-control"  name="pa_rent_or_own1">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                </select>
                                </div>
                            </td>
                        </tr>
                        <!-- row end -->

                         <!-- row -->
                         <tr>
                            <td>
                                <br><h6 >Garage</h6>
                                <input type="hidden" name="type_of_address2" value="Garage">
                              
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_street_address2">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_city2">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_country2">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_zip_code2">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <!-- <input class="typeahead" type="text" name="own"> -->
                                    <select class="typeahead form-control"  name="pa_rent_or_own2">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                </select>
                                </div>
                            </td>
                        </tr>
                        <!-- row end -->

                         <!-- row -->
                         <tr>
                            <td>
                                <br><h6 >Business</h6>
                                <input type="hidden" name="type_of_address3" value="Business">
                              
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_street_address3">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_city3">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_country3">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <input class="typeahead" type="text" name="pa_zip_code3">
                                </div>
                            </td>
                            <td>
                                <div id="">
                                    <!-- <input class="typeahead" type="text" name="own"> -->
                                    <select class="typeahead form-control"  name="pa_rent_or_own3">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                </select>
                                </div>
                            </td>
                        </tr>
                        <!-- row end -->

                            

                                   
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- address card end -->

<!-- product card -->
 <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Products</h4>
            <p class="card-description"> Add Products</p>
            <input type="hidden" name="productMax" value="4">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                            <th class="card-title">Products</th>

                            <th>  <select class="typeahead form-control"  name="Product_type">
                                        <option value="Vehicle" selected>Vehicle</option>
                                        <option value="Property">Property</option>
                                        <option value="Business Policy">Business Policy</option>
                                        <option value="Life">Life</option>
                                        <option value="ACA">ACA</option>
                                        <option value="Medicare">Medicare</option>
                                        <option value="Tax">Tax</option>
                                        <option value="Bookkeeping">Bookkeeping</option>
                                        <option value="Payroll">Payroll</option>
                                        <option value="IT">IT</option>
                                        <option value="Web App">Web App</option>
                                        <option value="SEO">SEO</option>
                                        <option value="PBX">PBX</option>
                                </select>
                              </th>
                              <th>  <select class="typeahead form-control"  name="Product_type1">
                                        <option value="Property" selected>Property</option>
                                        <option value="Vehicle">Vehicle</option>
                                        <option value="Business Policy">Business Policy</option>
                                        <option value="Life">Life</option>
                                        <option value="ACA">ACA</option>
                                        <option value="Medicare">Medicare</option>
                                        <option value="Tax">Tax</option>
                                        <option value="Bookkeeping">Bookkeeping</option>
                                        <option value="Payroll">Payroll</option>
                                        <option value="IT">IT</option>
                                        <option value="Web App">Web App</option>
                                        <option value="SEO">SEO</option>
                                        <option value="PBX">PBX</option>
                                </select>
                              </th>
                              <th>  <select class="typeahead form-control"  name="Product_type2">
                                        <option value="Business" selected>Business</option>
                                        <option value="Vehicle">Vehicle</option>
                                        <option value="Property">Property</option>
                                        <option value="Business Policy">Business Policy</option>
                                        <option value="Life">Life</option>
                                        <option value="ACA">ACA</option>
                                        <option value="Medicare">Medicare</option>
                                        <option value="Tax">Tax</option>
                                        <option value="Bookkeeping">Bookkeeping</option>
                                        <option value="Payroll">Payroll</option>
                                        <option value="IT">IT</option>
                                        <option value="Web App">Web App</option>
                                        <option value="SEO">SEO</option>
                                        <option value="PBX">PBX</option>
                                </select>
                              </th>

                              <th>  <select class="typeahead form-control"  name="Product_type3">
                                        <option value="Business" selected>Business</option>
                                        <option value="Vehicle" >Vehicle</option>
                                        <option value="Property">Property</option>
                                        <option value="Business Policy">Business Policy</option>
                                        <option value="Life">Life</option>
                                        <option value="ACA">ACA</option>
                                        <option value="Medicare">Medicare</option>
                                        <option value="Tax">Tax</option>
                                        <option value="Bookkeeping">Bookkeeping</option>
                                        <option value="Payroll">Payroll</option>
                                        <option value="IT">IT</option>
                                        <option value="Web App">Web App</option>
                                        <option value="SEO">SEO</option>
                                        <option value="PBX">PBX</option>
                                </select>
                              </th>

                              <th>  <select class="typeahead form-control"  name="Product_type4">
                                        <option value="Business" selected>Business</option>
                                        <option value="Vehicle">Vehicle</option>                                        <option value="Property">Property</option>
                                        <option value="Business Policy">Business Policy</option>
                                        <option value="Life">Life</option>
                                        <option value="ACA">ACA</option>
                                        <option value="Medicare">Medicare</option>
                                        <option value="Tax">Tax</option>
                                        <option value="Bookkeeping">Bookkeeping</option>
                                        <option value="Payroll">Payroll</option>
                                        <option value="IT">IT</option>
                                        <option value="Web App">Web App</option>
                                        <option value="SEO">SEO</option>
                                        <option value="PBX">PBX</option>
                                </select>
                              </th>
                        

                        </tr>
                       
                        <!-- row the end -->

                        <!-- table body -->
                          <tr>
                            <td><br>Carrier/Vendor</td>
                            
                            <td><input class="typeahead" type="text" name="CarrierVendor"></td>
                            <td><input class="typeahead" type="text" name="CarrierVendor1"></td>
                            <td><input class="typeahead" type="text" name="CarrierVendor2"></td>
                            <td><input class="typeahead" type="text" name="CarrierVendor3"></td>
                            <td><input class="typeahead" type="text" name="CarrierVendor4"></td>
                        </tr>
                        <tr>
                            <td><br>Policy Number</td>
                            
                            <td><input class="typeahead" type="text" name="PolicyNumber_product"></td>
                            <td><input class="typeahead" type="text" name="PolicyNumber_product1"></td>
                            <td><input class="typeahead" type="text" name="PolicyNumber_product2"></td>
                            <td><input class="typeahead" type="text" name="PolicyNumber_product3"></td>
                            <td><input class="typeahead" type="text" name="PolicyNumber_product4"></td>
                        </tr>
                        <tr>
                            <td><br>Product</td>
                            
                            <td><input class="typeahead" type="text" name="Product"></td>
                            <td><input class="typeahead" type="text" name="Product1"></td>
                            <td><input class="typeahead" type="text" name="Product2"></td>
                            <td><input class="typeahead" type="text" name="Product3"></td>
                            <td><input class="typeahead" type="text" name="Product4"></td>
                        </tr>

                        <tr>
                            <td><br>Effective Date</td>
                            
                            <td><input class="typeahead" type="date" name="EffectiveDate"></td>
                            <td><input class="typeahead" type="date" name="EffectiveDate1"></td>
                            <td><input class="typeahead" type="date" name="EffectiveDate2"></td>
                            <td><input class="typeahead" type="date" name="EffectiveDate3"></td>
                            <td><input class="typeahead" type="date" name="EffectiveDate4"></td>
                        </tr>

                        <tr>
                            <td><br>EFT Date</td>
                            
                            <td><input class="typeahead" type="date" name="EFTDate"></td>
                            <td><input class="typeahead" type="date" name="EFTDate1"></td>
                            <td><input class="typeahead" type="date" name="EFTDate2"></td>
                            <td><input class="typeahead" type="date" name="EFTDate3"></td>
                            <td><input class="typeahead" type="date" name="EFTDate4"></td>
                        </tr>

                        <tr>
                            <td><br># of Insureds</td>
                            
                            <td><input class="typeahead" type="number" name="#ofInsureds"></td>
                            <td><input class="typeahead" type="number" name="#ofInsureds1"></td>
                            <td><input class="typeahead" type="number" name="#ofInsureds2"></td>
                            <td><input class="typeahead" type="number" name="#ofInsureds3"></td>
                            <td><input class="typeahead" type="number" name="#ofInsureds4"></td>
                        </tr>

                        <tr>
                            <td><br>Insured Items</td>
                            
                            <td><input class="typeahead" type="number" name="InsuredItems"></td>
                            <td><input class="typeahead" type="number" name="InsuredItems1"></td>
                            <td><input class="typeahead" type="number" name="InsuredItems2"></td>
                            <td><input class="typeahead" type="number" name="InsuredItems3"></td>
                            <td><input class="typeahead" type="number" name="InsuredItems4"></td>
                        </tr>

                        <tr>
                            <td><br>Lien</td>
                            
                            <td><input class="typeahead" type="number" name="Lien"></td>
                            <td><input class="typeahead" type="number" name="Lien1"></td>
                            <td><input class="typeahead" type="number" name="Lien2"></td>
                            <td><input class="typeahead" type="number" name="Lien3"></td>
                            <td><input class="typeahead" type="number" name="Lien4"></td>
                        </tr>

                        <tr>
                            <td><br>Base Premium</td>
                            
                            <td><input class="typeahead" type="number" name="BasePremium"></td>
                            <td><input class="typeahead" type="number" name="BasePremium1"></td>
                            <td><input class="typeahead" type="number" name="BasePremium2"></td>
                            <td><input class="typeahead" type="number" name="BasePremium3"></td>
                            <td><input class="typeahead" type="number" name="BasePremium4"></td>
                        </tr>

                        <tr>
                            <td><br>Total fees</td>
                            
                            <td><input class="typeahead" type="number" name="Totalfees"></td>
                            <td><input class="typeahead" type="number" name="Totalfees1"></td>
                            <td><input class="typeahead" type="number" name="Totalfees2"></td>
                            <td><input class="typeahead" type="number" name="Totalfees3"></td>
                            <td><input class="typeahead" type="number" name="Totalfees4"></td>
                        </tr>

                        <tr>
                            <td><br>Term Premium</td>
                            
                            <td><input class="typeahead" type="number" name="TermPremium"></td>
                            <td><input class="typeahead" type="number" name="TermPremium1"></td>
                            <td><input class="typeahead" type="number" name="TermPremium2"></td>
                            <td><input class="typeahead" type="number" name="TermPremium3"></td>
                            <td><input class="typeahead" type="number" name="TermPremium4"></td>
                        </tr>

                        <tr>
                            <td><br>Term</td>
                            
                            <td><input class="typeahead" type="number" name="Term"></td>
                            <td><input class="typeahead" type="number" name="Term1"></td>
                            <td><input class="typeahead" type="number" name="Term2"></td>
                            <td><input class="typeahead" type="number" name="Term3"></td>
                            <td><input class="typeahead" type="number" name="Term4"></td>
                        </tr>

                        <tr>
                            <td><br>Annual Premium</td>
                            
                            <td><input class="typeahead" type="number" name="AnnualPremium"></td>
                            <td><input class="typeahead" type="number" name="AnnualPremium1"></td>
                            <td><input class="typeahead" type="number" name="AnnualPremium2"></td>
                            <td><input class="typeahead" type="number" name="AnnualPremium3"></td>
                            <td><input class="typeahead" type="number" name="AnnualPremium4"></td>
                        </tr>

                        <tr>
                            <td><br>Amount Due</td>
                            
                            <td><input class="typeahead" type="number" name="AmountDue"></td>
                            <td><input class="typeahead" type="number" name="AmountDue1"></td>
                            <td><input class="typeahead" type="number" name="AmountDue2"></td>
                            <td><input class="typeahead" type="number" name="AmountDue3"></td>
                            <td><input class="typeahead" type="number" name="AmountDue4"></td>
                        </tr>

                        <tr>
                            <td><br>Pymt. Base Prem.</td>
                            
                            <td><input class="typeahead" type="number" name="PymtBasePrem"></td>
                            <td><input class="typeahead" type="number" name="PymtBasePrem1"></td>
                            <td><input class="typeahead" type="number" name="PymtBasePrem2"></td>
                            <td><input class="typeahead" type="number" name="PymtBasePrem3"></td>
                            <td><input class="typeahead" type="number" name="PymtBasePrem4"></td>
                        </tr>

                        <tr>
                            <td><br>Due Date</td>
                            
                            <td><input class="typeahead" type="date" name="DueDate"></td>
                            <td><input class="typeahead" type="date" name="DueDate1"></td>
                            <td><input class="typeahead" type="date" name="DueDate2"></td>
                            <td><input class="typeahead" type="date" name="DueDate3"></td>
                            <td><input class="typeahead" type="date" name="DueDate4"></td>
                        </tr>

                        <tr>
                            <td><br>Paid Date</td>
                            
                            <td><input class="typeahead" type="date" name="PaidDate"></td>
                            <td><input class="typeahead" type="date" name="PaidDate1"></td>
                            <td><input class="typeahead" type="date" name="PaidDate2"></td>
                            <td><input class="typeahead" type="date" name="PaidDate3"></td>
                            <td><input class="typeahead" type="date" name="PaidDate4"></td>
                        </tr>

                        <tr>
                            <td><br>Next Amount</td>
                            
                            <td><input class="typeahead" type="number" name="NextAmount"></td>
                            <td><input class="typeahead" type="number" name="NextAmount1"></td>
                            <td><input class="typeahead" type="number" name="NextAmount2"></td>
                            <td><input class="typeahead" type="number" name="NextAmount3"></td>
                            <td><input class="typeahead" type="number" name="NextAmount4"></td>
                        </tr>

                        <tr>
                            <td><br>Due on</td>
                            
                            <td><input class="typeahead" type="date" name="Dueon"></td>
                            <td><input class="typeahead" type="date" name="Dueon1"></td>
                            <td><input class="typeahead" type="date" name="Dueon2"></td>
                            <td><input class="typeahead" type="date" name="Dueon3"></td>
                            <td><input class="typeahead" type="date" name="Dueon4"></td>
                        </tr>

                        <tr>
                            <td><br>Received By</td>
                            
                            <td><select class="typeahead form-control"  name="ReceivedBy">
                                        <option value="Done">Done</option>
                                </select></td>

                            <td><select class="typeahead form-control"  name="ReceivedBy1">
                                        <option value="Done">Done</option>
                                </select></td>

                                <td><select class="typeahead form-control"  name="ReceivedBy2">
                                        <option value="Done">Done</option>
                                </select></td>

                                 <td><select class="typeahead form-control"  name="ReceivedBy3">
                                        <option value="Done">Done</option>
                                </select></td> 

                                <td><select class="typeahead form-control"  name="ReceivedBy4">
                                        <option value="Done">Done</option>
                                </select></td>
                         </tr>
                        <!-- table body ends -->

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- product card end -->

<!-- insured card -->
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Insured</h4>
            <p class="card-description"> </p>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <input type="hidden" name="vehicleMax" value="6" >
                        <tr>
                            
                            <th class="card-title">Insured Items</th>
                            <th class="card-title">Vin</th>
                            <th class="card-title">Yr-Make-Model</th>
                            <th class="card-title">Lien Holder</th>
                            <th class="card-title">Lien No</th>
                            <th class="card-title">Lienholder Phone</th>


                        </tr>
                        <!-- row the end -->

                        <!-- table body -->
                        <tr>
                            <td><br>Vehicle 1 </td>
                            <td><input class="typeahead" type="text" name="Vin"></td>
                            <td><input class="typeahead" type="number" name="YrMakeModel"></td>
                            <td><input class="typeahead" type="text" name="LienHolder"></td>
                            <td><input class="typeahead" type="text" name="LienNo"></td>
                            <td><input class="typeahead" type="text" name="LienholderPhone"></td>           
                        </tr>

                        <tr>
                            <td><br>Vehicle 2 </td>
                            <td><input class="typeahead" type="text" name="Vin2"></td>
                            <td><input class="typeahead" type="number" name="YrMakeModel2"></td>
                            <td><input class="typeahead" type="text" name="LienHolder2"></td>
                            <td><input class="typeahead" type="text" name="LienNo2"></td>
                            <td><input class="typeahead" type="text" name="LienholderPhone2"></td>           
                        </tr>

                        <tr>
                            <td><br>Vehicle 3 </td>
                            <td><input class="typeahead" type="text" name="Vin3"></td>
                            <td><input class="typeahead" type="number" name="YrMakeModel3"></td>
                            <td><input class="typeahead" type="text" name="LienHolder3"></td>
                            <td><input class="typeahead" type="text" name="LienNo3"></td>
                            <td><input class="typeahead" type="text" name="LienholderPhone3"></td>           
                        </tr>

                        <tr>
                            <td><br>Vehicle 4 </td>
                            <td><input class="typeahead" type="text" name="Vin4"></td>
                            <td><input class="typeahead" type="number" name="YrMakeModel4"></td>
                            <td><input class="typeahead" type="text" name="LienHolder4"></td>
                            <td><input class="typeahead" type="text" name="LienNo4"></td>
                            <td><input class="typeahead" type="text" name="LienholderPhone4"></td>           
                        </tr>

                        <tr>
                            <td><br>Vehicle 5 </td>
                            <td><input class="typeahead" type="text" name="Vin5"></td>
                            <td><input class="typeahead" type="number" name="YrMakeModel5"></td>
                            <td><input class="typeahead" type="text" name="LienHolder5"></td>
                            <td><input class="typeahead" type="text" name="LienNo5"></td>
                            <td><input class="typeahead" type="text" name="LienholderPhone5"></td>           
                        </tr>

                        <tr>
                            <td><br>Vehicle 6 </td>
                            <td><input class="typeahead" type="text" name="Vin6"></td>
                            <td><input class="typeahead" type="number" name="YrMakeModel6"></td>
                            <td><input class="typeahead" type="text" name="LienHolder6"></td>
                            <td><input class="typeahead" type="text" name="LienNo6"></td>
                            <td><input class="typeahead" type="text" name="LienholderPhone6"></td>           
                        </tr>
                        <!-- table body end -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- insured card end -->

<!-- property card -->
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Insured Property</h4>
            <p class="card-description"> </p>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <input type="hidden" name="propertymax" value="2">
                    <tbody>
                        <tr>
                            <th class="card-title">Property</th>
                            <th class="card-title">Street & No</th>
                            <th class="card-title">City</th>
                            <th class="card-title">State</th>
                            <th class="card-title">Zip</th>
                            <th class="card-title">Lien Holder Info</th>


                        </tr>
                        <!-- row the end -->

                        <!-- table body -->
 

                        <tr>
                            <td><br>Property 1</td>
                            <td><input class="typeahead" type="text" name="Street&No"></td>
                            <td><input class="typeahead" type="text" name="City"></td>
                            <td><input class="typeahead" type="text" name="State"></td>
                            <td><input class="typeahead" type="text" name="Zip"></td>
                            <td><input class="typeahead" type="text" name="LienHolderInfo"></td>           
                        </tr>

                        <tr>
                            <td><br>Property 2</td>
                            <td><input class="typeahead" type="text" name="Street&No2"></td>
                            <td><input class="typeahead" type="text" name="City2"></td>
                            <td><input class="typeahead" type="text" name="State2"></td>
                            <td><input class="typeahead" type="text" name="Zip2"></td>
                            <td><input class="typeahead" type="text" name="LienHolderInfo2"></td>           
                        </tr>
                        <!-- table body end -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- property card end -->

<!-- driver card -->
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Drivers</h4>
            <p class="card-description"> </p>
            <input type="hidden" name="diverMax" value="6">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="card-title">Other Drivers</th>
                            <th class="card-title">First Name</th>
                            <th class="card-title">Last Name</th>
                            <th class="card-title">DOB</th>
                            <th class="card-title">ID Type</th>
                            <th class="card-title">ID/DL No</th>


                        </tr>
                        <!-- row the end -->

                        <!-- table body -->
 

                        <tr>
                            <td>
                            <select class="typeahead form-control"  name="Excluded">
                                        <option value="Yes">Yes</option>
                                        <option value="No" selected>No</option>
                                </select></td>
                            <td><input class="typeahead" type="text" name="FirstName1"></td>
                            <td><input class="typeahead" type="text" name="LastName1"></td>
                            <td><input class="typeahead" type="date" name="DOB1"></td>
                            <td><input class="typeahead" type="text" name="IDType"></td>
                            <td><input class="typeahead" type="text" name="ID/DLNo"></td>           
                        </tr>

                        <tr>
                            <td>
                            <select class="typeahead form-control"  name="Excluded2">
                                        <option value="Yes">Yes</option>
                                        <option value="No" selected>No</option>
                                </select></td>
                            <td><input class="typeahead" type="text" name="FirstName2"></td>
                            <td><input class="typeahead" type="text" name="LastName2"></td>
                            <td><input class="typeahead" type="date" name="DOB2"></td>
                            <td><input class="typeahead" type="text" name="IDType2"></td>
                            <td><input class="typeahead" type="text" name="ID/DLNo2"></td>           
                        </tr>

                        <tr>
                            <td>
                            <select class="typeahead form-control"  name="Excluded3">
                                        <option value="Yes">Yes</option>
                                        <option value="No" selected>No</option>
                                </select></td>
                            <td><input class="typeahead" type="text" name="FirstName3"></td>
                            <td><input class="typeahead" type="text" name="LastName3"></td>
                            <td><input class="typeahead" type="date" name="DOB3"></td>
                            <td><input class="typeahead" type="text" name="IDType3"></td>
                            <td><input class="typeahead" type="text" name="ID/DLNo3"></td>           
                        </tr>

                        <tr>
                            <td>
                            <select class="typeahead form-control"  name="Excluded4">
                                        <option value="Yes">Yes</option>
                                        <option value="No" selected>No</option>
                                </select></td>
                            <td><input class="typeahead" type="text" name="FirstName4"></td>
                            <td><input class="typeahead" type="text" name="LastName4"></td>
                            <td><input class="typeahead" type="date" name="DOB4"></td>
                            <td><input class="typeahead" type="text" name="IDType4"></td>
                            <td><input class="typeahead" type="text" name="ID/DLNo4"></td>           
                        </tr>

                        <tr>
                            <td>
                            <select class="typeahead form-control"  name="Excluded5">
                                        <option value="Yes">Yes</option>
                                        <option value="No" selected>No</option>
                                </select></td>
                            <td><input class="typeahead" type="text" name="FirstName5"></td>
                            <td><input class="typeahead" type="text" name="LastName5"></td>
                            <td><input class="typeahead" type="date" name="DOB5"></td>
                            <td><input class="typeahead" type="text" name="IDType5"></td>
                            <td><input class="typeahead" type="text" name="ID/DLNo5"></td>           
                        </tr>

                        <tr>
                            <td>
                            <select class="typeahead form-control"  name="Excluded6">
                                        <option value="Yes">Yes</option>
                                        <option value="No" selected>No</option>
                                </select></td>
                            <td><input class="typeahead" type="text" name="FirstName6"></td>
                            <td><input class="typeahead" type="text" name="LastName6"></td>
                            <td><input class="typeahead" type="date" name="DOB6"></td>
                            <td><input class="typeahead" type="text" name="IDType6"></td>
                            <td><input class="typeahead" type="text" name="ID/DLNo6"></td>           
                        </tr>


                     
                        <!-- table body end -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- driver card end -->

{{-- notes card --}}
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Note</h4>
        {{-- <p class="card-description">   </p> --}}

        <!-- row  -->
        <div class="form-group row">

          <div class="col-2">
            <label>Date</label>
            <div id="">
              <input class="typeahead" type="date" name="notes_date0">
            </div>
          </div>
          <div class="col-10">
            <label>Details</label>
            <div id="">
              <input class="typeahead" type="text" name="notes_Details0">
            </div>
          </div>

        </div>
        <!-- row end -->

      </div>
    </div>

  </div>
 
{{-- notes card end --}}

{{-- more notes button --}}
<div id="new"></div>

<div class="col-md-6">
  <div class="form-group row">
           <div class="col-sm-9" id="values-container">
         <button type="button" class="btn btn-sm btn-success p-2 my-2" id="addNotesBtn" onclick="moreNotes()">Add More Notes</button>
     </div>
  </div>
</div>
{{-- button end --}}


{{-- Reminder card --}}
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Reminder        </h4>
        {{-- <p class="card-description">   </p> --}}

        <!-- row  -->
        <div class="form-group row">

          <div class="col-2">
            <label>Date</label>
            <div id="">
              <input class="typeahead" type="date" name="Reminder_date0">
            </div>
          </div>
          <div class="col-10">
            <label>Details</label>
            <div id="">
              <input class="typeahead" type="text" name="Reminder_Details0">
            </div>
          </div>

        </div>
        <!-- row end -->

      </div>
    </div>

  </div>
{{-- Reminder card end --}}

{{-- more Reminder button --}}
<div id="new2"></div>

<div class="col-md-6">
  <div class="form-group row">
           <div class="col-sm-9" id="values-container">
         <button type="button" class="btn btn-sm btn-success p-2 my-2" id="addReminderBtn" onclick="moreReminder()">Add More Reminders</button>
     </div>
  </div>
</div>
{{-- button end --}}



<!-- record card -->
<div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Record</h4>
                    <p class="card-description"> Add Record Or Just Notes/Remainder </p>

                    <!-- row  -->
                    <div class="form-group row">
                      <div class="col">
                        <label>Type</label>
                        <div id="">
                            <select class="typeahead form-control"  name="type_record0">
                                <option selected value="Payment">Payment</option>
                                <option value="Call">Call</option>
                                <option value="Text">Text</option>
                                <option value="Email">Email</option>
                                <option value="Walk In">Walk In</option>
                                <option value="Web">Web</option>
                                <option value="Reminder Sent">Reminder Sent</option>
                        </select>
                        </div>
                      </div>
                      <div class="col">
                        <label>Date</label>
                        <div id="">
                          <input class="typeahead" type="date" name="date_record0">
                        </div>
                      </div>

                      <div class="col">
                        <label>Details</label>
                        <div id="">
                          <input class="typeahead" type="text" name="details_record0">
                        </div>
                      </div>

                      <div class="col">
                        <label>Amount</label>
                        <div id="">
                          <input class="typeahead" type="number" name="amount_record0">
                        </div>
                      </div>

                      <div class="col">
                        <label>Assigned to</label>
                        <div id="">
                          <select class="form-control"  name="employee_id0" >
                            @foreach ($employee as $employee)
                            <option value="{{ $employee->id }}" >{{ $employee->email }}</option>
                        @endforeach
                        </select>
                        </div>
                      </div>

                      <div class="col">
                        <label>Posted by</label>
                        <div id="">
                          <input class="typeahead" type="text" name="Postedby">
                        </div>
                      </div>

                   

                    </div>
                    <!-- row end -->

                  </div>
                </div>

              </div>
<!-- record end -->
{{-- more record button --}}
{{-- <div id="new3"></div>

<div class="col-md-6">
  <div class="form-group row">
           <div class="col-sm-9" id="values-container">
         <button type="button" class="btn btn-sm btn-success p-2 my-2" id="addRecordBtn" onclick="moreRecord()">Add More Record</button>
     </div>
  </div>
</div> --}}
{{-- button end --}}




        <div class="col-12 grid-margin">
   <button type="submit" class="btn btn-primary mr-2" >Submit Form </button> 

</div>




    </form>

    <!-- form end -->
  </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->

{{-- for add notes card --}}
<script>
    let Count = 0;
  
    // Select the add product button
    const addBtn = document.getElementById('addNotesBtn');
    
    // Add click event listener
    addBtn.addEventListener('click', () => {
        Count++;  
      // Get the product card HTML
      const Card = `
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
        <h4 class="card-title">Add Note</h4>
        <div class="form-group row">
          <div class="col-2">
            <label>Date</label>
            <div id="">
              <input class="typeahead" type="date" name="notes_date${Count}">
            </div>
          </div>
          <div class="col-10">
            <label>Details</label>
            <div id="">
              <input class="typeahead" type="text" name="notes_Details${Count}">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
      `;

      // Append new product card
      document.querySelector('#new').insertAdjacentHTML('afterend', Card);
    });
  </script>

{{-- for reminder card --}}
<script>
    let Count1 = 0;
  
    // Select the add product button
    const addBtn1 = document.getElementById('addReminderBtn');
    
    // Add click event listener
    addBtn1.addEventListener('click', () => {
        // alert('nice');
        Count1++;  
      // Get the product card HTML
      const Card1 = `
      <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Reminder        </h4>
        <div class="form-group row">
          <div class="col-2">
            <label>Date</label>
            <div id="">
              <input class="typeahead" type="date" name="Reminder_date${Count1}">
            </div>
          </div>
          <div class="col-10">
            <label>Details</label>
            <div id="">
              <input class="typeahead" type="text" name="Reminder_Details${Count1}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      `;

      // Append new product card
      document.querySelector('#new2').insertAdjacentHTML('afterend', Card1);
    });
  </script>

  {{-- for record card --}}
<script>
    let Count2 = 0;
  
    // Select the add product button
    const addBtn2 = document.getElementById('addRecordBtn');
    
    // Add click event listener
    addBtn2.addEventListener('click', () => {
        // alert('nice');
        Count2++;  
      // Get the product card HTML
      const Card2 = `
      <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Record</h4>
                    <p class="card-description"> Add Record Or Just Notes/Remainder </p>

                    <!-- row  -->
                    <div class="form-group row">
                      <div class="col">
                        <label>Type</label>
                        <div id="">
                          <input class="typeahead" type="text" name="type_record${Count2}">
                        </div>
                      </div>

                      <div class="col">
                        <label>Date</label>
                        <div id="">
                          <input class="typeahead" type="date" name="date_record${Count2}">
                        </div>
                      </div>

                      <div class="col">
                        <label>Details</label>
                        <div id="">
                          <input class="typeahead" type="text" name="details_record${Count2}">
                        </div>
                      </div>

                      <div class="col">
                        <label>Amount</label>
                        <div id="">
                          <input class="typeahead" type="number" name="amount_record${Count2}">
                        </div>
                      </div>

                    

                      <div class="col">
                        <label>Posted by</label>
                        <div id="">
                          <input class="typeahead" type="text" name="Postedby${Count2}">
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
      `;

      // Append new product card
      document.querySelector('#new3').insertAdjacentHTML('afterend', Card2);
    });
  </script>

@endsection