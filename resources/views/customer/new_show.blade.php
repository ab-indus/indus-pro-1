@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

<!-- buttons -->
<div class="template-demo">
  <a href="{{url('policy/create')}}" class="btn btn-primary mb-2 mb-md-0 mr-2">Add Task</a>


  <a href="{{url('customer-documents/'.$customer->cus_id)}}" class="btn btn-success">Document Management</a>
  <a href="{{url('new/customer/')}}" class="btn btn-success">New Customer</a>

</div>
<br>
<!-- buttons div end -->

<!-- buttons -->
<div class="template-demo">
    <a href="tel:{{$customer->Phone}}" class="btn btn-info mb-2 mb-md-0 mr-2">Call</a>
    <a href="" class="btn btn-info mb-2 mb-md-0 mr-2">Text</a>
    <a href="mailto:{{$customer->email}}" class="btn btn-info mb-2 mb-md-0 mr-2">Email</a>

    {{-- <a href="{{url('new/payment/'.$customer->cus_id)}}" class="btn btn-success">Payment</a> --}}
    
  </div>
  <br>
  <!-- buttons div end -->






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
<form class="form-sample" action="{{ route('new-update',$customer->cus_id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

<!-- form start  -->

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Client Info</h4>
            <div class="row">
   <p class="card-description col-md-10">Client Details</p>
                <div class="col-2 grid-margin">
   <button type="submit" class="btn btn-primary mr-2" >Save Changes </button> 
</div>
            </div>
         
{{-- active --}}

            <div class="col-md-6">
                <div class="form-group row">
                {{-- <label class="col-sm-3 col-form-label">Membership</label> --}}
                <div class="col-sm-4">
                    <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="Active" id="Active" value="1" {{ $customer->Active ? 'checked' : '' }}> Active </label>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="Active" id="Active2" value="0" {{ !$customer->Active ? 'checked' : '' }}> Inactive </label>
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
                            <td><div id=""><input class="typeahead" type="text" value="{{$customer->FIRSTNAME}}" name="FIRSTNAME"></div></td>
                            <td><div id=""><input class="typeahead" type="text" value="{{$customer->sp_FIRSTNAME}}" name="sp_FIRSTNAME"></div></td>
                          
                            <td><div id=""><input class="typeahead" type="text" value="{{$customer->BusinessName}}" name="BusinessName"></div></td>
                            <td><div id=""><input class="typeahead" type="text" value="{{$customer->BusinessForm}}" name="BusinessForm"></div></td>

                            <!-- <td><div id="">
                            <select class="typeahead form-control"  name="BusinessForm">
                                        <option value="Individual">Individual</option>
                                        <option value="Sole Proprietor">Sole Proprietor</option>
                                        <option value="LLC">LLC</option>
                                        <option value="S CORP">S CORP</option>
                                        <option value="C CORP">C CORP</option>
                                        <option value="Non Profit">Non Profit</option>


                                </select>
                          </div></td> -->
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>MIDDLE</label></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->MIDDLE}}" type="text" name="MIDDLE"></div></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->sp_MIDDLE}}" type="text" name="sp_MIDDLE"></div></td>
                           
                            <td><br><label>Business Phone</label></td>
                            <td><br><label>Type of Busines</label></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>LAST NAME</label></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->LASTNAME}}" type="text" name="LASTNAME"></div></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->sp_LASTNAME}}" type="text" name="sp_LASTNAME"></div></td>
                          
                            <td><div id=""><input class="typeahead" value="{{$customer->BusinessPhone}}" type="text" name="BusinessPhone"></div></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->TypeofBusines}}" type="text" name="TypeofBusines"></div></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>DOB</label></td>
                            <td><div id=""><input class="typeahead form-control" type="date" value="{{$customer->DOB}}" name="DOB"></div></td>
                            <td><div id=""><input class="typeahead form-control" type="date" value="{{$customer->sp_DOB}}" name="sp_DOB"></div></td>
                          
                            <td><br><label>Business Email</label></td>
                            <td><br><label>Ann. Revenues</label></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>SSN</label></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->SSN}}" type="text" name="SSN"></div></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->sp_SSN}}" type="text" name="sp_SSN"></div></td>
                          
                            <td><div id=""><input class="typeahead" value="{{$customer->BusinessEmail}}" type="email" name="BusinessEmail"></div></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->AnnRevenues}}" type="number" name="AnnRevenues"></div></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>Type of ID</label></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->TypeofID}}" type="text" name="TypeofID"></div></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->sp_TypeofID}}" type="text" name="sp_TypeofID"></div></td>
                          
                            <td><br><label>Contact Name</label></td>
                            <td><br><label>No of Employees</label></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>Phone</label></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->Phone}}" type="text" name="Phone"></div></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->sp_Phone}}" type="text" name="sp_Phone"></div></td>
                           
                            <td><div id=""><input class="typeahead" value="{{$customer->ContactName}}" type="text" name="ContactName"></div></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->NoofEmployees}}" type="number" name="NoofEmployees"></div></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>Cell Phone</label></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->CellPhone}}" type="text" name="CellPhone"></div></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->sp_CellPhone}}" type="text" name="sp_CellPhone"></div></td>
                           
                            <td><br><label>Contact #</label></td>
                            <td><br><label>EIN</label></td>
                        </tr>
                        <!-- row end -->

                        <!-- row -->
                        <tr>
                            <td><br><label>Email</label></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->email}}" type="email" name="email"></div></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->sp_Email}}" type="email" name="sp_Email"></div></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->{'Contact#'} }}" type="text" name="Contact#"></div></td>
                            <td><div id=""><input class="typeahead" value="{{$customer->EIN}}" type="number" name="EIN"></div></td>
                        </tr>
                        <!-- row end -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


</form>
<!-- client info end -->


    

<!-- address card -->
<form class="form-sample" action="{{ route('address-update', $customer->cus_id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Address</h4>
                <div class="row">
                    <p class="card-description col-md-10">Address Details</p>
                    <div class="col-2 grid-margin">
                        <button type="submit" class="btn btn-primary mr-2">Save Changes</button>
                    </div>
                </div>
                <input type="hidden" name="total_address" value="{{ count($address) }}">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>
                                    <h6 class="card-title">Address</h6>
                                </td>
                                <td>
                                    <h6 class="card-title">Street & No</h6>
                                </td>
                                <td>
                                    <h6 class="card-title">City</h6>
                                </td>
                                <td>
                                    <h6 class="card-title">State</h6>
                                </td>
                                <td>
                                    <h6 class="card-title">Zip</h6>
                                </td>
                                <td>
                                    <h6 class="card-title">Own</h6>
                                </td>
                            </tr>
                            <!-- row the end -->

                      

                            <!-- Loop through each address -->
                            @for ($i = 0; $i <= 3; $i++)
                                <tr>
                                    <td>
                                        <br><h6>{{ $address[$i]->type_of_address }}</h6>
                                        <input type="hidden" name="type_of_address[]" value="{{ $address[$i]->type_of_address }}">
                                    </td>

                                    <td><input class="typeahead" value="{{ $address[$i]->pa_street_address }}" type="text" name="pa_street_address[]"> </td>
                                    <td> <input class="typeahead" value="{{ $address[$i]->pa_city }}" type="text" name="pa_city[]">                                    </td>
                                    <td>
                                        <div id="">
                                            <input class="typeahead" value="{{ $address[$i]->pa_country }}" type="text" name="pa_country[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div id="">
                                            <input class="typeahead" value="{{ $address[$i]->pa_zip_code }}" type="text" name="pa_zip_code[]">
                                        </div>
                                    </td>
                                    <td>
                                        <div id="">
                                            <input class="typeahead" value="{{ $address[$i]->pa_rent_or_own }}" type="text" name="pa_rent_or_own[]">
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                            <!-- Loop end -->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- address card end -->


<!-- product card -->

<form class="form-sample" id="form_product"
action="{{ route('product-update', ['id' => $customer->cus_id]) }}"
  method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

 <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Products</h4>

             <div class="row">
                <p class="card-description col-md-10">Products Details</p>
                    <div class="col-2 grid-margin">
                        <button type="submit" class="btn btn-primary mr-2">Save Changes</button>
                    </div>
                </div> 
            <input type="hidden" name="productMax" value="4">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                            <th class="card-title">Products</th>

                            <th> 
                                <!-- <p>{{$product[0]->Product_type }}</p> -->
                                <input class="typeahead" type="text" name="Product_type0" value="{{$product[0]->Product_type }}" id="">
                              
                              </th>
                              <th>
                              <input class="typeahead" type="text" name="Product_type1" value="{{$product[1]->Product_type }}" id="">
                                
                              </th>
                              <th>  
                              <input class="typeahead" type="text" name="Product_type2" value="{{$product[2]->Product_type }}" id="">
                           
                              </th>

                              <th> 
                              <input class="typeahead" type="text" name="Product_type3" value="{{$product[3]->Product_type }}" id="">
                       
                              </th>

                              <th>  
                              <input class="typeahead" type="text" name="Product_type4" value="{{$product[4]->Product_type }}" id="">
                               
                              </th>
                        

                        </tr>
                       
                        <!-- row the end -->

                        <!-- table body -->
                          <tr>
                            <td><br>Carrier/Vendor</td>
                            
                            <td><input class="typeahead" type="text" value="{{$product[0]->CarrierVendor }}" name="CarrierVendor0"></td>
                            <td><input class="typeahead" type="text" value="{{$product[1]->CarrierVendor }}" name="CarrierVendor1"></td>
                            <td><input class="typeahead" type="text" value="{{$product[2]->CarrierVendor }}" name="CarrierVendor2"></td>
                            <td><input class="typeahead" type="text" value="{{$product[3]->CarrierVendor }}" name="CarrierVendor3"></td>
                            <td><input class="typeahead" type="text" value="{{$product[4]->CarrierVendor }}" name="CarrierVendor4"></td>
                        </tr>
                        <tr>
                            <td><br>Policy Number</td>
                            
                            <td><input class="typeahead" type="text" value="{{$product[0]->PolicyNumber_product }}" name="PolicyNumber_product0"></td>
                            <td><input class="typeahead" type="text" value="{{$product[1]->PolicyNumber_product }}" name="PolicyNumber_product1"></td>
                            <td><input class="typeahead" type="text" value="{{$product[2]->PolicyNumber_product }}" name="PolicyNumber_product2"></td>
                            <td><input class="typeahead" type="text" value="{{$product[3]->PolicyNumber_product }}" name="PolicyNumber_product3"></td>
                            <td><input class="typeahead" type="text" value="{{$product[4]->PolicyNumber_product }}" name="PolicyNumber_product4"></td>
                        </tr>
                        <tr>
                            <td><br>Product</td>
                            
                            <td><input class="typeahead" type="text" value="{{$product[0]->Product }}" name="Product0"></td>
                            <td><input class="typeahead" type="text" value="{{$product[1]->Product }}" name="Product1"></td>
                            <td><input class="typeahead" type="text" value="{{$product[2]->Product }}" name="Product2"></td>
                            <td><input class="typeahead" type="text" value="{{$product[3]->Product }}" name="Product3"></td>
                            <td><input class="typeahead" type="text" value="{{$product[4]->Product }}" name="Product4"></td>
                        </tr>

                        <tr>
                            <td><br>Effective Date</td>
                            
                            <td><input class="typeahead" type="date" value="{{$product[0]->EffectiveDate }}" name="EffectiveDate0"></td>
                            <td><input class="typeahead" type="date" value="{{$product[1]->EffectiveDate }}" name="EffectiveDate1"></td>
                            <td><input class="typeahead" type="date" value="{{$product[2]->EffectiveDate }}" name="EffectiveDate2"></td>
                            <td><input class="typeahead" type="date" value="{{$product[3]->EffectiveDate }}" name="EffectiveDate3"></td>
                            <td><input class="typeahead" type="date" value="{{$product[4]->EffectiveDate }}" name="EffectiveDate4"></td>
                        </tr>

                        <tr>
                            <td><br>EFT Date</td>
                            
                            <td><input class="typeahead" type="date" value="{{$product[0]->EFTDate }}" name="EFTDate0"></td>
                            <td><input class="typeahead" type="date" value="{{$product[1]->EFTDate }}" name="EFTDate1"></td>
                            <td><input class="typeahead" type="date" value="{{$product[2]->EFTDate }}" name="EFTDate2"></td>
                            <td><input class="typeahead" type="date" value="{{$product[3]->EFTDate }}" name="EFTDate3"></td>
                            <td><input class="typeahead" type="date" value="{{$product[4]->EFTDate }}" name="EFTDate4"></td>
                        </tr>

                        <tr>
                            <td><br># of Insureds</td>
                            
                            <td><input class="typeahead" type="number" value="{{$product[0]->{'#ofInsureds'} }}" name="#ofInsureds0"></td>
                            <td><input class="typeahead" type="number" value="{{$product[1]->{'#ofInsureds'} }}" name="#ofInsureds1"></td>
                            <td><input class="typeahead" type="number" value="{{$product[2]->{'#ofInsureds'} }}" name="#ofInsureds2"></td>
                            <td><input class="typeahead" type="number" value="{{$product[3]->{'#ofInsureds'} }}" name="#ofInsureds3"></td>
                            <td><input class="typeahead" type="number" value="{{$product[4]->{'#ofInsureds'} }}" name="#ofInsureds4"></td>
                        </tr>

                        <tr>
                            <td><br>Insured Items</td>
                            
                            <td><input class="typeahead" type="number" value="{{$product[0]->InsuredItems }}" name="InsuredItems0"></td>
                            <td><input class="typeahead" type="number" value="{{$product[1]->InsuredItems }}" name="InsuredItems1"></td>
                            <td><input class="typeahead" type="number" value="{{$product[2]->InsuredItems }}" name="InsuredItems2"></td>
                            <td><input class="typeahead" type="number" value="{{$product[3]->InsuredItems }}" name="InsuredItems3"></td>
                            <td><input class="typeahead" type="number" value="{{$product[4]->InsuredItems }}" name="InsuredItems4"></td>
                        </tr>

                        <tr>
                            <td><br>Lien</td>
                            
                            <td><input class="typeahead" type="number" value="{{$product[0]->Lien }}" name="Lien0"></td>
                            <td><input class="typeahead" type="number" value="{{$product[1]->Lien }}" name="Lien1"></td>
                            <td><input class="typeahead" type="number" value="{{$product[2]->Lien }}" name="Lien2"></td>
                            <td><input class="typeahead" type="number" value="{{$product[3]->Lien }}" name="Lien3"></td>
                            <td><input class="typeahead" type="number" value="{{$product[4]->Lien }}" name="Lien4"></td>
                        </tr>

                        <tr>
                            <td><br>Base Premium</td>
                            
                            <td><input class="typeahead" type="number" value="{{$product[0]->BasePremium }}" name="BasePremium0"></td>
                            <td><input class="typeahead" type="number" value="{{$product[1]->BasePremium }}" name="BasePremium1"></td>
                            <td><input class="typeahead" type="number" value="{{$product[2]->BasePremium }}" name="BasePremium2"></td>
                            <td><input class="typeahead" type="number" value="{{$product[3]->BasePremium }}" name="BasePremium3"></td>
                            <td><input class="typeahead" type="number" value="{{$product[4]->BasePremium }}" name="BasePremium4"></td>
                        </tr>

                        <tr>
                            <td><br>Total fees</td>
                            
                            <td><input class="typeahead" type="number" value="{{$product[0]->Totalfees }}" name="Totalfees0"></td>
                            <td><input class="typeahead" type="number" value="{{$product[1]->Totalfees }}" name="Totalfees1"></td>
                            <td><input class="typeahead" type="number" value="{{$product[2]->Totalfees }}" name="Totalfees2"></td>
                            <td><input class="typeahead" type="number" value="{{$product[3]->Totalfees }}" name="Totalfees3"></td>
                            <td><input class="typeahead" type="number" value="{{$product[4]->Totalfees }}" name="Totalfees4"></td>
                        </tr>

                        <tr>
                            <td><br>Term Premium</td>
                            
                            <td><input class="typeahead" type="number" value="{{$product[0]->TermPremium }}" name="TermPremium0"></td>
                            <td><input class="typeahead" type="number" value="{{$product[1]->TermPremium }}" name="TermPremium1"></td>
                            <td><input class="typeahead" type="number" value="{{$product[2]->TermPremium }}" name="TermPremium2"></td>
                            <td><input class="typeahead" type="number" value="{{$product[3]->TermPremium }}" name="TermPremium3"></td>
                            <td><input class="typeahead" type="number" value="{{$product[4]->TermPremium }}" name="TermPremium4"></td>
                        </tr>

                        <tr>
                            <td><br>Term</td>
                            
                            <td><input class="typeahead" type="number" value="{{$product[0]->Term }}" name="Term0"></td>
                            <td><input class="typeahead" type="number" value="{{$product[1]->Term }}" name="Term1"></td>
                            <td><input class="typeahead" type="number" value="{{$product[2]->Term }}" name="Term2"></td>
                            <td><input class="typeahead" type="number" value="{{$product[3]->Term }}" name="Term3"></td>
                            <td><input class="typeahead" type="number" value="{{$product[4]->Term }}" name="Term4"></td>
                        </tr>

                        <tr>
                            <td><br>Annual Premium</td>
                            
                            <td><input class="typeahead" type="number" value="{{$product[0]->AnnualPremium }}" name="AnnualPremium0"></td>
                            <td><input class="typeahead" type="number" value="{{$product[1]->AnnualPremium }}" name="AnnualPremium1"></td>
                            <td><input class="typeahead" type="number" value="{{$product[2]->AnnualPremium }}" name="AnnualPremium2"></td>
                            <td><input class="typeahead" type="number" value="{{$product[3]->AnnualPremium }}" name="AnnualPremium3"></td>
                            <td><input class="typeahead" type="number" value="{{$product[4]->AnnualPremium }}" name="AnnualPremium4"></td>
                        </tr>

                        <tr>
                            <td><br>Amount Due</td>
                            
                            <td><input class="typeahead" type="number" value="{{$product[0]->AmountDue }}" name="AmountDue0"></td>
                            <td><input class="typeahead" type="number" value="{{$product[1]->AmountDue }}" name="AmountDue1"></td>
                            <td><input class="typeahead" type="number" value="{{$product[2]->AmountDue }}" name="AmountDue2"></td>
                            <td><input class="typeahead" type="number" value="{{$product[3]->AmountDue }}" name="AmountDue3"></td>
                            <td><input class="typeahead" type="number" value="{{$product[4]->AmountDue }}" name="AmountDue4"></td>
                        </tr>

                        <tr>
                            <td><br>Pymt. Base Prem.</td>
                            
                            <td><input class="typeahead" type="number" value="{{$product[0]->PymtBasePrem }}" name="PymtBasePrem0"></td>
                            <td><input class="typeahead" type="number" value="{{$product[1]->PymtBasePrem }}" name="PymtBasePrem1"></td>
                            <td><input class="typeahead" type="number" value="{{$product[2]->PymtBasePrem }}" name="PymtBasePrem2"></td>
                            <td><input class="typeahead" type="number" value="{{$product[3]->PymtBasePrem }}" name="PymtBasePrem3"></td>
                            <td><input class="typeahead" type="number" value="{{$product[4]->PymtBasePrem }}" name="PymtBasePrem4"></td>
                        </tr>

                        <tr>
                            <td><br>Due Date</td>
                            
                            <td><input class="typeahead" type="date" value="{{$product[0]->DueDate }}" name="DueDate0"></td>
                            <td><input class="typeahead" type="date" value="{{$product[1]->DueDate }}" name="DueDate1"></td>
                            <td><input class="typeahead" type="date" value="{{$product[2]->DueDate }}" name="DueDate2"></td>
                            <td><input class="typeahead" type="date" value="{{$product[3]->DueDate }}" name="DueDate3"></td>
                            <td><input class="typeahead" type="date" value="{{$product[4]->DueDate }}" name="DueDate4"></td>
                        </tr>

                        <tr>
                            <td><br>Paid Date</td>
                            
                            <td><input class="typeahead" type="date" value="{{$product[0]->PaidDate }}" name="PaidDate0"></td>
                            <td><input class="typeahead" type="date" value="{{$product[1]->PaidDate }}" name="PaidDate1"></td>
                            <td><input class="typeahead" type="date" value="{{$product[2]->PaidDate }}" name="PaidDate2"></td>
                            <td><input class="typeahead" type="date" value="{{$product[3]->PaidDate }}" name="PaidDate3"></td>
                            <td><input class="typeahead" type="date" value="{{$product[4]->PaidDate }}" name="PaidDate4"></td>
                        </tr>

                        <tr>
                            <td><br>Next Amount</td>
                            
                            <td><input class="typeahead" type="number" value="{{$product[0]->NextAmount }}" name="NextAmount0"></td>
                            <td><input class="typeahead" type="number" value="{{$product[1]->NextAmount }}" name="NextAmount1"></td>
                            <td><input class="typeahead" type="number" value="{{$product[2]->NextAmount }}" name="NextAmount2"></td>
                            <td><input class="typeahead" type="number" value="{{$product[3]->NextAmount }}" name="NextAmount3"></td>
                            <td><input class="typeahead" type="number" value="{{$product[4]->NextAmount }}" name="NextAmount4"></td>
                        </tr>

                        <tr>
                            <td><br>Due on</td>
                            
                            <td><input class="typeahead" type="date" value="{{$product[0]->Dueon }}" name="Dueon0"></td>
                            <td><input class="typeahead" type="date" value="{{$product[1]->Dueon }}" name="Dueon1"></td>
                            <td><input class="typeahead" type="date" value="{{$product[2]->Dueon }}" name="Dueon2"></td>
                            <td><input class="typeahead" type="date" value="{{$product[3]->Dueon }}" name="Dueon3"></td>
                            <td><input class="typeahead" type="date" value="{{$product[4]->Dueon }}" name="Dueon4"></td>
                        </tr>

                        <tr>
                            <td><br>Received By</td>
                            
                            <td><input class="typeahead" type="text" value="{{$product[0]->ReceivedBy }}" name="ReceivedBy0">
                               
                            </td>

                            <td><input class="typeahead" type="text" value="{{$product[1]->ReceivedBy }}" name="ReceivedBy1">
                               
                            </td>

                                <td><input class="typeahead" type="text" value="{{$product[2]->ReceivedBy }}" name="ReceivedBy2">
                                   
                            </td>

                                 <td><input class="typeahead" type="text" value="{{$product[3]->ReceivedBy }}" name="ReceivedBy3">
                                 
                            </td> 

                                <td><input class="typeahead" type="text" value="{{$product[4]->ReceivedBy }}" name="ReceivedBy4">
                                
                            </td>
                         </tr>

                         <!-- for update button -->
                         {{-- <tr>

                         <input type="hidden" id="columnInput" name="column" value="{{ $column }}">
                            <td><br>Update Changes</td>
                           
                            <td> <button type="button" onclick="setColumn(0)" class="btn btn-primary mr-2">Update changes</button></td>
                            <td> <button type="button" onclick="setColumn(1)" class="btn btn-primary mr-2">Update changes</button></td>
                            <td> <button type="button" onclick="setColumn(2)" class="btn btn-primary mr-2">Update changes</button></td>
                            <td> <button type="button" onclick="setColumn(3)" class="btn btn-primary mr-2">Update changes</button></td>
                            <td> <button type="button" onclick="setColumn(4)" class="btn btn-primary mr-2">Update changes</button></td>
                        </tr> --}}
                        <!-- table body ends -->

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</form>
<!-- product card end -->

<!-- insured card -->
<form class="form-sample" action="{{ route('vechile-update', $customer->cus_id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Insured</h4>
                <div class="row">
                    <p class="card-description col-md-10">Vehicle Details</p>
                    <div class="col-2 grid-margin">
                        <button type="submit" class="btn btn-primary mr-2">Save Changes</button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <input type="hidden" name="vehicleMax" value="{{ count($vechile) }}">

                            <tr>
                                <th class="card-title">Insured Items</th>
                                <th class="card-title">Vin</th>
                                <th class="card-title">Yr-Make-Model</th>
                                <th class="card-title">Lien Holder</th>
                                <th class="card-title">Lien No</th>
                                <th class="card-title">Lienholder Phone</th>
                            </tr>

                            <!-- Loop through each vehicle -->
                            @for ($i = 0; $i < count($vechile); $i++)
                                <tr>
                                    <td><br>Vehicle {{ $i + 1 }}</td>
                                    <td><input class="typeahead" type="text" value="{{ $vechile[$i]->Vin }}" name="Vin[]"></td>
                                    <td><input class="typeahead" type="number" value="{{ $vechile[$i]->YrMakeModel }}" name="YrMakeModel[]"></td>
                                    <td><input class="typeahead" type="text" value="{{ $vechile[$i]->LienHolder }}" name="LienHolder[]"></td>
                                    <td><input class="typeahead" type="text" value="{{ $vechile[$i]->LienNo }}" name="LienNo[]"></td>
                                    <td><input class="typeahead" type="text" value="{{ $vechile[$i]->LienholderPhone }}" name="LienholderPhone[]"></td>
                                </tr>
                            @endfor
                            <!-- Loop end -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- insured card end -->


<!-- property card -->

<form class="form-sample" action="{{ route('property-update', $customer->cus_id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Insured Property</h4>
                <div class="row">
                    <p class="card-description col-md-10">Property Details</p>
                    <div class="col-2 grid-margin">
                        <button type="submit" class="btn btn-primary mr-2">Save Changes</button>
                    </div>
                </div>

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

                            @for ($i = 0; $i < 2; $i++)
                                <tr>
                                    <td><br>Property {{ $i + 1 }}</td>
                                    <td><input class="typeahead" type="text" value="{{ $property[$i]->street_and_no }}" name="Street&No[]"></td>
                                    <td><input class="typeahead" type="text" value="{{ $property[$i]->city }}" name="City[]"></td>
                                    <td><input class="typeahead" type="text" value="{{ $property[$i]->state }}" name="State[]"></td>
                                    <td><input class="typeahead" type="text" value="{{ $property[$i]->zip }}" name="Zip[]"></td>
                                    <td><input class="typeahead" type="text" value="{{ $property[$i]->lien_holder_info }}" name="LienHolderInfo[]"></td>
                                </tr>
                            @endfor

                            <!-- table body end -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- property card end -->

<!-- driver card -->
<form class="form-sample" action="{{ route('driver-update', $customer->cus_id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Drivers</h4>
                <div class="row">
                    <p class="card-description col-md-10">Drivers Details</p>
                    <div class="col-2 grid-margin">
                        <button type="submit" class="btn btn-primary mr-2">Save Changes</button>
                    </div>
                </div>
                <input type="hidden" name="driverMax" value="6">

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

                            <!-- Loop through each driver -->
                            @for ($i = 0; $i < count($driver); $i++)
                                <tr>
                                    <td><input class="typeahead" type="text" value="{{ $driver[$i]->excluded }}" name="Excluded[]"></td>
                                    <td><input class="typeahead" type="text" value="{{ $driver[$i]->first_name }}" name="FirstName[]"></td>
                                    <td><input class="typeahead" type="text" value="{{ $driver[$i]->last_name }}" name="LastName[]"></td>
                                    <td><input class="typeahead" type="date" value="{{ $driver[$i]->dob }}" name="DOB[]"></td>
                                    <td><input class="typeahead" type="text" value="{{ $driver[$i]->id_type }}" name="IDType[]"></td>
                                    <td><input class="typeahead" type="text" value="{{ $driver[$i]->id_dl_no }}" name="ID/DLNo[]"></td>
                                </tr>
                            @endfor
                            <!-- Loop end -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- driver card end -->

<!-- notes card -->
  

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Notes </h4>
        {{-- <p class="card-description">  <code></code> --}}
            <div class="row">
                <div class="col-2 grid-margin">
                    <a class="btn btn-success mr-2" href="{{ url('notes/add/'.$customer->cus_id) }}">
                         Add New</a>
                </div>
            </div>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6 class="card-title">Date</h6></th>
                    <th><h6 class="card-title">Details</h6></th>
        

                    <th><h6 class="card-title">Action</h6></th>
                </tr>
            </thead>
            
            
            <tbody>
                @if ($notes)
                  @foreach ($notes as $note)
                    <tr>
                        <td>{{ $note->date }}</td>
                        <td>{{ $note->details }}</td>
                        <td>
                            <a href="{{ url('customer/notes/'.$note->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No records available.</td>
                    </tr>
                @endif
            </tbody>
            
          </table>
        </div>
      </div>
    </div>
  </div>
<!-- notes card end -->

<!-- reminder card -->
  

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Reminder </h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="row">
            <div class="col-2 grid-margin">
                <a class="btn btn-success mr-2" href="{{ url('reminder/add/'.$customer->cus_id) }}">
                     Add New</a>
            </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6 class="card-title">Date</h6></th>
                    <th><h6 class="card-title">Details</h6></th>
        

                    <th><h6 class="card-title">Action</h6></th>
                </tr>
            </thead>
            
            
            <tbody>
                @if ($reminders)
                  @foreach ($reminders as $reminder)
                    <tr>
                        <td>{{ $reminder->date }}</td>
                        <td>{{ $reminder->details }}</td>
                        <td>
                          <a href="{{ url('customer/reminder/'.$reminder->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No records available.</td>
                    </tr>
                @endif
            </tbody>
            
          </table>
        </div>
      </div>
    </div>
  </div>
<!-- reminder card end -->

<!-- record card -->
  

 <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Records </h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="row">
            <div class="col-2 grid-margin">
                <a class="btn btn-success mr-2" href="{{ url('record/add/'.$customer->cus_id) }}">
                     Add New</a>
            </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6 class="card-title">Type</h6></th>
                    <th><h6 class="card-title">Date</h6></th>
                    <th><h6 class="card-title">Details</h6></th>
                    <th><h6 class="card-title">Amount</h6></th>
                    <th><h6 class="card-title">Assigned to</h6></th>
                    <th><h6 class="card-title">Posted by</h6></th>

                    <th><h6 class="card-title">Action</h6></th>
                </tr>
            </thead>
            
            
            <tbody>
                @if ($records)
                  @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->Type }}</td>
                        <td>{{ $record->date }}</td>
                        <td>{{ $record->details }}</td>
                        <td>{{ $record->Amount }}</td>
                        <td>{{ $record->employee ? $record->employee->email : 'N/A' }}</td>
                        <td> {{ $record->Posted_by }} </td>
                        <td>
                          <a href="{{ url('customer/record/'.$record->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No records available.</td>
                    </tr>
                @endif
            </tbody>
            
          </table>
        </div>
      </div>
    </div>
  </div>
<!-- record card end -->









        <!-- <div class="col-12 grid-margin">
   <button type="submit" class="btn btn-primary mr-2" >Submit Form </button> 

</div> -->





    <!-- form end -->
  </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->

<script>
    function setColumn(column) {
        // Set the value of the hidden input field
        $('#columnInput').val(column);
        // alert('form hit');
        
        // Submit the form
        $('#form_product').submit();
    }
</script>

@endsection