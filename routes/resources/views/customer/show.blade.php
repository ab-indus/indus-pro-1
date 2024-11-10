@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

<div class="template-demo">
  <a href="{{url('policy/create')}}" class="btn btn-primary mb-2 mb-md-0 mr-2">Add Record</a>
  {{-- <a href="{{url('payment/'.$customer->cus_id.'/edit/#payment')}}" class="btn btn-primary mb-2 mb-md-0 mr-2">Add Payment</a> --}}
  <!-- <a href="{{url('pay-history/'.$customer->cus_id)}}" class="btn btn-primary mr-2">Payment Management</a> -->

  <!-- <a href="{{url('product/create')}}" class="btn btn-primary mb-2 mb-md-0 mr-md-2">Add Vehicle</a> -->
  <a href="{{ route('driverDetail.create',$customer->cus_id) }}" class="btn btn-primary mb-2 mb-md-0 mr-md-2">Add Driver</a>
  <a href="{{ route('customerLien.create',$customer->cus_id) }}" class="btn btn-primary mb-2 mb-md-0">Add Lien</a>


  <a href="{{url('customer-documents/'.$customer->cus_id)}}" class="btn btn-success">Document Management</a>

  
</div>
<br>




<div class="mx-5">
@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Sucess!</strong> {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@elseif(session('failed'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Failed!</strong> {{ session('failed') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
</div>

<div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Customer Detail List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Customer/Lead</h6></th>
                    <th><h6>Account Name</h6></th>
                    <th><h6>EFT</h6></th>
                    <th><h6>Type</h6></th>
                    <th><h6>Referral Source</h6></th>
                    <th><h6>Status</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($customer)
                    <tr>
                        <td>{{ $customer->cus_or_lead }}</td>
                        <td>{{ $customer->account_name }}</td>
                        <td>{{ $customer->eft }}</td>
                        <td>{{ $customer->cus_type }}</td>
                        <td>{{ $customer->referral_src }}</td>
                        <td>{!! $customer->status == 1 ? '<span class="btn btn-success">Active</span>' : '<span class="btn btn-danger">Inactive</span>' !!}</td>
                        <td>
                          <a href="{{ route('customerUC.edit',$customer->cus_id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td colspan="13">No customer details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
  </div>

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Payment Detail List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Type of Payment</h6></th>
                    <th><h6>Carrier Name</h6></th>
                    <th><h6>Policy No.</h6></th>
                    <th><h6>Amount Due</h6></th>
                    <th><h6>Due Date</h6></th>
                    <th><h6>Date Paid</h6></th>
                    <th><h6>Mode of Payment</h6></th>
                    <th><h6>Received By</h6></th>
                    <th><h6>New Amount Due</h6></th>
                    <th><h6>New Due Date</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($paymentDetail)
                  @foreach ($paymentDetail as $paymentDetail)
                    <tr>
                        <td>{{ $paymentDetail->typ_of_pay }}</td>
                        <td>{{ $paymentDetail->carrier_name }}</td>
                        <td>{{ $paymentDetail->policy_num }}</td>
                        <td>{{ $paymentDetail->due_amount }}</td>
                        <td>{{ $paymentDetail->due_date }}</td>
                        <td>{{ $paymentDetail->paid_date }}</td>
                        <td>{{ $paymentDetail->mode_of_pay }}</td>
                        <td>{{ $paymentDetail->received_by }}</td>
                        <td>{{ $paymentDetail->new_due_amount }}</td>
                        <td>{{ $paymentDetail->new_due_date }}</td>
                        <td>{{ $paymentDetail->customer_id }}</td>
                        <td>
                          <a href="{{ route('paymentDetail.edit',$paymentDetail->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No payment details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Driver Details List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Named Driver</h6></th>
                    <th><h6>Relationship</h6></th>
                    <th><h6>First Name</h6></th>
                    <th><h6>Middle Name</h6></th>
                    <th><h6>Last Name</h6></th>
                    <th><h6>Email</h6></th>
                    <th><h6>Phone</h6></th>
                    <th><h6>Gender</h6></th>
                    <th><h6>DOB</h6></th>
                    <th><h6>SS #</h6></th>
                    <th><h6>ID #</h6></th>
                    <th><h6>ID Type</h6></th>
                    <th><h6>Employer or Business Name</h6></th>
                    <th><h6>Type of Business / Work</h6></th>
                    <th><h6>EIN (if applies):</h6></th>
                    <th><h6>Business / Work Phone</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($driverDetail)
                  @foreach ($driverDetail as $driverDetail)
                    <tr>
                        <td>{{ $driverDetail->driver_name }}</td>
                        <td>{{ $driverDetail->relationship }}</td>
                        <td>{{ $driverDetail->f_name }}</td>
                        <td>{{ $driverDetail->m_name }}</td>
                        <td>{{ $driverDetail->l_name }}</td>
                        <td>{{ $driverDetail->email }}</td>
                        <td>{{ $driverDetail->phone }}</td>
                        <td>{{ $driverDetail->gender }}</td>
                        <td>{{ $driverDetail->dob }}</td>
                        <td>{{ $driverDetail->ss_no }}</td>
                        <td>{{ $driverDetail->id_no }}</td>
                        <td>{{ $driverDetail->id_type }}</td>
                        <td>{{ $driverDetail->employer_or_bsn_name }}</td>
                        <td>{{ $driverDetail->type_of_bsn_or_work }}</td>
                        <td>{{ $driverDetail->ein }}</td>
                        <td>{{ $driverDetail->bsn_or_work_phone }}</td>
                        <td>{{ $driverDetail->customer_id }}</td>
                        <td>
                          <a href="{{ route('driverDetail.edit',$driverDetail->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="13">No driver details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Address Details</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Type of Adderss</h6></th>

                    <th><h6>Street Address</h6></th>
                    <th><h6>City</h6></th>
                    <th><h6>Country</h6></th>
                    <th><h6>State</h6></th>
                    <th><h6>Zip Code</h6></th>
                    <th><h6>Rent or Own</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($physicalAddress)
                  @foreach ($physicalAddress as $physicalAddress)
                    <tr>
                        <td>{{ $physicalAddress->type_of_address }}</td>

                        <td>{{ $physicalAddress->pa_street_address }}</td>
                        <td>{{ $physicalAddress->pa_city }}</td>
                        <td>{{ $physicalAddress->pa_country }}</td>
                        <td>{{ $physicalAddress->pa_state }}</td>
                        <td>{{ $physicalAddress->pa_zip_code }}</td>
                        <td>{{ $physicalAddress->pa_rent_or_own }}</td>
                        <td>{{ $physicalAddress->customer_id }}</td>
                        <td>
                          <a href="{{ route('physicalAddess.edit',$physicalAddress->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="13">No driver details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>





  <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
        <h4 class="card-title">Insured Item Details List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                   <th><h6>Item No</h6></th>

                    <th><h6>Insurance Company</h6></th>
                    <th><h6>Policy Number</h6></th>
                    <th><h6>Plan</h6></th>
                    <th><h6>Type</h6></th>
                    <th><h6>Year</h6></th>
                    <th><h6>Make</h6></th>
                    <th><h6>Model</h6></th>
                    <th><h6>VIN Number</h6></th>
                    <th><h6>Liability Limits</h6></th>
                    <th><h6>Comp (OTC) Deductible</h6></th>
                    <th><h6>Collision Deductible</h6></th>
                    <th><h6>UM/UIM BI Limit</h6></th>
                    <th><h6>UM/UIM PD</h6></th>
                    <th><h6>Rental Amount</h6></th>
                    <th><h6>Towing Amount</h6></th>
                    <th><h6>Gap Y/N</h6></th>
                    <th><h6>PIP Amount</h6></th>
                    <th><h6>Med Amount</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($insuredItem)
                  @foreach ($insuredItem as $insuredItem)
                    <tr>
                        <td>{{ $insuredItem->insured_item_no }}</td>

                        <td>{{ $insuredItem->ins_com }}</td>
                        <td>{{ $insuredItem->policy_no }}</td>
                        <td>{{ $insuredItem->plan }}</td>
                        <td>{{ $insuredItem->type }}</td>
                        <td>{{ $insuredItem->year }}</td>
                        <td>{{ $insuredItem->make }}</td>
                        <td>{{ $insuredItem->model }}</td>
                        <td>{{ $insuredItem->vin_no }}</td>
                        <td>{{ $insuredItem->liability_limit }}</td>
                        <td>{{ $insuredItem->comp_deductible }}</td>
                        <td>{{ $insuredItem->collison_deductible }}</td>
                        <td>{{ $insuredItem->um_uim_bi_limit }}</td>
                        <td>{{ $insuredItem->um_uim_pd }}</td>
                        <td>{{ $insuredItem->rent_amount }}</td>
                        <td>{{ $insuredItem->towing_amount }}</td>
                        <td>{{ $insuredItem->gap }}</td>
                        <td>{{ $insuredItem->pip_amount }}</td>
                        <td>{{ $insuredItem->med_amount }}</td>
                        <td>{{ $insuredItem->customer_id }}</td>
                        <td>
                          <a href="{{ route('customerInsured.edit',$insuredItem->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No insured item details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
        <h4 class="card-title">Lien / Mortgage Details List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                  
                    <th><h6>Item No.</h6></th>
                    <th><h6>Lien Account</h6></th>
                    <th><h6>Lien Holder Address</h6></th>
                    <th><h6>City</h6></th>
                    <th><h6>State</h6></th>
                    <th><h6>Zip</h6></th>
                    <th><h6>Lien Contact Name</h6></th>
                    <th><h6>Lien Holder Phone</h6></th>
                    <th><h6>Lien Holder Email</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($lienInfo)
                  @foreach ($lienInfo as $lienInfo)
                    <tr>
                        <td>{{ $lienInfo->item_no }}</td>
                        <td>{{ $lienInfo->account }}</td>
                        <td>{{ $lienInfo->address }}</td>
                        <td>{{ $lienInfo->city }}</td>
                        <td>{{ $lienInfo->state }}</td>
                        <td>{{ $lienInfo->zip }}</td>
                        <td>{{ $lienInfo->contact_name }}</td>
                        <td>{{ $lienInfo->phone_no }}</td>
                        <td>{{ $lienInfo->email }}</td>
                        <td>{{ $lienInfo->customer_id }}</td>
                        <td>
                          <a href="{{ route('customerLien.edit',$lienInfo->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No insured item details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Premium Calculation Details List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Base Premium</h6></th>
                    <th><h6>Crime Prevention Fee</h6></th>
                    <th><h6>Policy Fee</h6></th>
                    <th><h6>Agency Fee</h6></th>
                    <th><h6>Other Fees</h6></th>
                    <th><h6>Total Premium</h6></th>

                    <th><h6>Late Fee</h6></th>
                    <th><h6>Reinstatement Fee</h6></th>
                    <th><h6>Installment Fee</h6></th>
                    <th><h6>Credit Card Fee</h6></th>
                    <th><h6>Misc. Fee</h6></th>

                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($premiumCalculation)
                  @foreach ($premiumCalculation as $premiumCalculation)
                    <tr>
                        <td>{{ $premiumCalculation->base_premium }}</td>
                        <td>{{ $premiumCalculation->crime_prevention_fee }}</td>
                        <td>{{ $premiumCalculation->policy_fee }}</td>
                        <td>{{ $premiumCalculation->agency_fee }}</td>
                        <td>{{ $premiumCalculation->other_fees }}</td>
                        <td>{{ $premiumCalculation->total_premium }}</td>

                        <td>{{ $premiumCalculation->late_fee }}</td>
                        <td>{{ $premiumCalculation->reinstatement_fee }}</td>
                        <td>{{ $premiumCalculation->installment_fee }}</td>
                        <td>{{ $premiumCalculation->credit_card_fee }}</td>
                        <td>{{ $premiumCalculation->misc_fee }}</td>


                        <td>{{ $premiumCalculation->customer_id }}</td>
                        <td>
                          <a href="{{ route('customerPremium.edit',$premiumCalculation->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No premium calculation details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dates & AmountS Detail List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Effective Date</h6></th>
                    <th><h6>Exp Date</h6></th>
                    <th><h6>Reminder Date</h6></th>
                    <th><h6> Cancellation Date</h6></th>
                    <th><h6>Due Date</h6></th>
                    <th><h6>Date Paid</h6></th>
                    <th><h6>New Due Date</h6></th>
                    <th><h6>New Amount Due</h6></th>
                    <th><h6>EFT Date</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($datesAndAmount)
                  @foreach ($datesAndAmount as $datesAndAmount)
                    <tr>
                        <td>{{ $datesAndAmount->effective_date }}</td>
                        <td>{{ $datesAndAmount->expiry_date }}</td>
                        <td>{{ $datesAndAmount->reminder_date }}</td>
                        <td>{{ $datesAndAmount->canc_notice_date }}</td>
                        <td>{{ $datesAndAmount->due_date }}</td>
                        <td>{{ $datesAndAmount->date_paid }}</td>
                        <td>{{ $datesAndAmount->new_due_date }}</td>
                        <td>{{ $datesAndAmount->new_amount_due }}</td>
                        <td>{{ $datesAndAmount->eft_date }}</td>
                        <td>
                          <a href="{{ route('dateAmount.edit',$datesAndAmount->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No premium calculation details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- new table  -->
  

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Records </h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6 class="card-title">Email</h6></th>
                    <th><h6 class="card-title">Record Of</h6></th>
                    <th><h6 class="card-title">Date</h6></th>
                    <th><h6 class="card-title">Time</h6></th>
                    <th><h6 class="card-title">ToDo</h6></th>
                    <th><h6 class="card-title">Reminder</h6></th>
                    <th><h6 class="card-title">heading</h6></th>
                    <th><h6 class="card-title">Status</h6></th>
                    <th><h6 class="card-title">Employee</h6></th>
                    <th><h6 class="card-title">details</h6></th>

                            <th><h6 class="card-title">Start Time</h6></th>
                            <th><h6 class="card-title">End Time</h6></th>
                            <th><h6 class="card-title">Estimated Time</h6></th>
                            <th><h6 class="card-title">Actual Time</h6></th>
                    <th><h6 class="card-title">Action</h6></th>
                </tr>
            </thead>
            
            
            <tbody>
                @if ($notes)
                  @foreach ($notes as $note)
                    <tr>
                        <td>{{ $note->customer_email }}</td>
                        <td>{{ $note->record_of }}</td>
                        <td>{{ $note->date }}</td>
                        <td>{{ $note->time }}</td>
                        <!-- <td>{{ $note->todo_list }}</td> -->
                        <td> 
                              @if ($note->todo_list)
                              <i class="  mdi mdi-clipboard-check  text-success "></i>
                          @else
                              <i class=" mdi mdi-close-box  text-danger"></i>
                          @endif
                            </td>

                            <td> 
                              @if ($note->remainder)
                              <i class="mdi mdi-clipboard-check text-success"></i>
                          @else
                              <i class="mdi mdi-close-box text-danger"></i>
                          @endif
                            </td>

                        <td>{{ $note->heading }}</td>
                        <!-- <td>{{ $note->status }}</td> -->
                        <td>
                              
                              @if ($note->status === 'Process')
                              <div class="badge badge-outline-primary">{{$note->status}}</div>
                          @elseif ($note->status === 'Pending')
                              <div class="badge badge-outline-warning">{{$note->status}}</div>
                          @elseif ($note->status === 'Complete')
                              <div class="badge badge-outline-success">{{$note->status}}</div>
                          @else
                              <div class="badge badge-outline-secondary">Unknown</div>
                          @endif


                        </td>




                        {{-- Check if employee relationship is not null --}}
                                <td>
                                    @if ($note->employee)
                                        <a href="{{ url('policy/'.$note->id.'/edit') }}"> {{ $note->employee->name }}  </a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                        <td>{{ $note->details }}</td>

                            <td> {{ $note->Start_Time }} </td>
                            <td> {{ $note->End_Time }} </td>
                            <td> {{ $note->Estimated_Time }} </td>
                            <td> {{ $note->Actual_Time }} </td>



                       
                        <td>
                          <a href="{{ url('policy/'.$note->id.'/edit') }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No premium calculation details available.</td>
                    </tr>
                @endif
            </tbody>
            
            
          </table>
        </div>
      </div>
    </div>
  </div>


</div>
@endsection
