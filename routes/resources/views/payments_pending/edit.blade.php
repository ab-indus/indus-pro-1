@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form action="{{ url('payment/'.$payment->id )}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
<!-- 1st card -->
<div class="col-12 grid-margin">
  <div class="card">
  <div class="card-body">
  <h4 class="card-title">Edit Customer</h4>
  <!-- info -->
  <!-- product -->
  <p class="card-description"> Customer Information Fields</p>
  <!-- row  -->
              <div class="row">
  
                
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="name" required value="{{ $payment->name }}" />
                    </div>
                  </div>
                </div>
  
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="email" required value="{{ $payment->email }}" />
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
          <input type="tel" class="form-control" name="phone" required value="{{ $payment->phone }}"/>
        </div>
      </div>
    </div>
  
  
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">SSN</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="ssn" required  value="{{ $payment->ssn }}"/>
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
        <input type="date" class="form-control" name="dob" required value="{{ $payment->dob }}" />
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Address</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="address" required value="{{ $payment->address }}"/>
      </div>
    </div>
  </div>
  
  </div>
  <!-- row -->
  <div class="row">
  
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Marital Status</label>
        <div class="col-sm-9">
          <select class="form-control" name="marital_status" required>

            <option @if($payment->marital_status == 'Single') selected @endif value="Single">Single</option>
            <option @if($payment->marital_status == 'Married') selected @endif value="Married">Married</option>
            <option @if($payment->marital_status == 'widow') selected @endif value="widow">Widow</option>
           
            </select>
        </div>
      </div>
    </div>
  
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Filling Status</label>
        <div class="col-sm-9">
          <select class="form-control" name="filing_status" required>
            <option @if($payment->filing_status == 'Single') selected @endif value="Single">Single</option>
            <option @if($payment->filing_status == 'Married') selected @endif value="Married">Married</option>
            <option @if($payment->filing_status == 'Married filing separately') selected @endif value="Married filing separately">Married filing separately</option>
            <option @if($payment->filing_status == 'Head of Household') selected @endif value="Head of Household">Head of Household</option>
            <option @if($payment->filing_status == 'Widower') selected @endif value="Widower">Widower</option>
          
            </select>
        </div>
      </div>
    </div>
            
  
  </div>
  
  <!-- row -->
  <div class="row">
  
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Spouse Name </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="name_sp" value="{{ $payment->name_sp }}"  />
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Spouse SSN </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="ssn_sp" value="{{ $payment->ssn_sp }}" />
      </div>
    </div>
  </div>
  
  </div>
  <!-- end -->
  <!-- row -->
  <div class="row">
  
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Spouse DOB</label>
        <div class="col-sm-9">
          <input type="date" class="form-control" name="dob_sp" value="{{ $payment->dob_sp }}" />
        </div>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Service Code</label>
        <div class="col-sm-9">
          <select class="form-control" name="service_code" required>
            <option @if($payment->service_code == 'State') selected @endif value="State">State</option>
            <option @if($payment->service_code == 'Federal') selected @endif  value="Federal">Federal</option>
            <option @if($payment->service_code == 'Audit Rep') selected @endif value="Audit Rep">Audit Rep</option>
            <option @if($payment->service_code == 'Balance Due') selected @endif value="Balance Due">Balance Due</option>
            <option @if($payment->service_code == 'Prep') selected @endif value="Prep">Prep</option>
            <option @if($payment->service_code == 'Bkkp') selected @endif value="Bkkp">Bkkp</option>
            <option @if($payment->service_code == 'FP') selected @endif value="FP">FP</option>
            </select>
        </div>
      </div>
    </div>
    
              {{-- <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fees</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="fees" required value="{{ $payment->fees }}" />
                  </div>
                </div>
              </div> --}}
  
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Type </label>
                    <div class="col-sm-9">
                    <select class="form-control" name="type_bu" >
                    <option @if($payment->type_bu == 'Sole Proprietor"') selected @endif value="Sole Proprietor">Sole Proprietor</option>
                    <option @if($payment->type_bu == 'LLC, Partnership') selected @endif value="LLC, Partnership">LLC, Partnership</option>
                    <option @if($payment->type_bu == 'S-corp') selected @endif value="S-corp">S-corp</option>
                    <option @if($payment->type_bu == 'C-corp') selected @endif value="C-corp">C-corp</option>
  
                    </select>
                    </div>
                  </div>
                </div>
  
               
                {{-- row new --}}
  
                              <!-- row -->
  
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Service CO </label>
                      <div class="col-sm-9">
                      <select class="form-control" name="service_co" >
                      <option @if($payment->service_code == 'Partner 1') selected @endif value="Partner 1">Partner 1</option>
                      <option @if($payment->service_code == 'Partner 2') selected @endif value="Partner 2">Partner 2</option>
                      </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Hire Date </label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="hire_date" value="{{ $payment->hire_date }}"  />
                      </div>
                    </div>
                  </div>
                               
              </div>   
              {{-- row end  --}}
  
                  <!-- row -->
                  <div class="row">
  
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Last Activity </label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" name="last_activity" value="{{ $payment->last_activity }}"  />
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Busines name </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="business_name" value="{{ $payment->business_name }}"/>
                        </div>
                      </div>
                    </div>
                    
                    </div>
                    <!-- end -->
  
                    {{-- row end  --}}
  
                  <!-- row -->
                  <div class="row">
  
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">EIN </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="ein" value="{{ $payment->ein }}" />
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Busines Address </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="address_bu" value="{{ $payment->address_bu }}"  />
                        </div>
                      </div>
                    </div>
                    
                    </div>
                    <!-- end -->

                    {{-- new fields --}}
                    <div class="row" id="payment">

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Total Fees</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="fees" required value="{{ $payment->fees }}" />
                          </div>
                        </div>
                      </div>
  
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Amount paid</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="amount_paid" required value="{{ $payment->amount_paid }}" />
                          </div>
                        </div>
                      </div>
  
                      </div>
                      <!-- end -->
  
                      <div class="row">
  
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Amount balance</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" name="balance" required value="{{ $payment->balance }}" />
                            </div>
                          </div>
                        </div>
    
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Paid Date</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="pay_date"  value="{{ $payment->pay_date }}" />
                            </div>
                          </div>
                        </div>
                          
                        </div>
                        <!-- end -->
  
                        <div class="row">
  
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Next payment</label>
                              <div class="col-sm-9">
                                <input type="date" class="form-control" name="next_pay" value="{{ $payment->next_pay }}"  />
                              </div>
                            </div>
                          </div>

                          {{-- <div class="col-md-6" id="files">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">File upload</label>
                              <div class="col-sm-9">

                                @if ($payment->file)
                                <p>Current File: <a href="{{ asset('storage/' . $payment->file) }}" target="_blank">{{ $payment->file }}</a></p>
                            @else
                                <p>No file uploaded.</p>
                            @endif
                            <input type="file" class="form-control" name="file" />
                              </div>
                            </div>
                          </div> --}}
      
                         
                            
                          </div>
                          <!-- end -->

                          {{-- <div class="row">

                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">File upload 2</label>
                                <div class="col-sm-9">
                                  @if ($payment->file2)
                                   <a href="{{ asset('storage/' . $payment->file2) }}" target="_blank">{{ $payment->file2 }}</a>
                              @else
                                  <p>No file uploaded.</p>
                              @endif
                              <input type="file" class="form-control" name="file2" />
                                </div>
                              </div>
                            </div>
    
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">File upload 3</label>
                                <div class="col-sm-9">
                                  @if ($payment->file3)
                                  <a href="{{ asset('storage/' . $payment->file3) }}" target="_blank">{{ $payment->file3 }}</a>
                             @else
                                 <p>No file uploaded.</p>
                             @endif
                             <input type="file" class="form-control" name="file3" />
                                </div>
                              </div>
                            </div>
        
                           
                              
                            </div> --}}
                            <!-- end -->
  
                            {{-- <div class="row">
  
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">File upload 4</label>
                                  <div class="col-sm-9">
                                    @if ($payment->file4)
                                    <a href="{{ asset('storage/' . $payment->file4) }}" target="_blank">{{ $payment->file4 }}</a>
                               @else
                                   <p>No file uploaded.</p>
                               @endif
                               <input type="file" class="form-control" name="file4" />
                                  </div>
                                </div>
                              </div>
      
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">File upload 5</label>
                                  <div class="col-sm-9">
                                    @if ($payment->file5)
                                    <a href="{{ asset('storage/' . $payment->file5) }}" target="_blank">{{ $payment->file5 }}</a>
                               @else
                                   <p>No file uploaded.</p>
                               @endif
                               <input type="file" class="form-control" name="file5" />
                                  </div>
                                </div>
                              </div>
          
                             
                                
                              </div> --}}
                              
                              <!-- end -->
  
    <!-- end -->
  </div></div></div>



<div class="col-12 grid-margin">
   <button type="submit" class="btn btn-primary mr-2" >Update </button> 

</div>

</form>
</div>
<script src="{{asset('assets/js/employee.js')}}"></script>

@endsection
