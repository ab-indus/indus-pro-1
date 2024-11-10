@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
  
  {{-- <div class="col-12 col-md-6 grid-margin">
    <div class="d-flex justify-content-between flex-column flex-md-row">
        <div class="mb-2 mb-md-0">
            <a href="{{url('policy/create')}}" class="btn btn-primary mb-2 mb-md-0 mr-2">Add Record</a>
            <a href="{{url('payment/'.$payment->id.'/edit/#payment')}}" class="btn btn-primary mb-2 mb-md-0 mr-2">Add Payment</a>
            <a href="{{url('product/create')}}" class="btn btn-primary mb-2 mb-md-0 mr-md-2">Add Vehicle</a>
            <a href="{{url('product/create')}}" class="btn btn-primary mb-2 mb-md-0 mr-md-2">Add Driver</a>
            <a href="{{url('product/create')}}" class="btn btn-primary mb-2 mb-md-0">Add Lien</a>
        </div>
        <div class="ml-auto">
            <a href="{{url('customer-documents/'.$payment->id)}}" class="btn btn-success">Document Management</a>
        </div>
    </div>
</div> --}}

<div class="template-demo">
  <a href="{{url('policy/create')}}" class="btn btn-primary mb-2 mb-md-0 mr-2">Add Record</a>
  {{-- <a href="{{url('payment/'.$payment->id.'/edit/#payment')}}" class="btn btn-primary mb-2 mb-md-0 mr-2">Add Payment</a> --}}
  <a href="{{url('pay-history/'.$payment->id)}}" class="btn btn-primary mr-2">Payment Management</a>

  <a href="{{url('product/create')}}" class="btn btn-primary mb-2 mb-md-0 mr-md-2">Add Vehicle</a>
  <a href="{{url('drivers/create')}}" class="btn btn-primary mb-2 mb-md-0 mr-md-2">Add Driver</a>
  <a href="{{url('liens/create')}}" class="btn btn-primary mb-2 mb-md-0">Add Lien</a>


  <a href="{{url('customer-documents/'.$payment->id)}}" class="btn btn-success">Document Management</a>

  
</div>
<br>







 {{-- new row div --}}

 

 <div class="row">

  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">{{ $payment->fees }}</h3>
              {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success ">
              <span class="mdi mdi-arrow-top-right icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Total Pay</h6>
      </div>
    </div>
  </div>


  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">{{ $payment->amount_paid }}</h3>
              <p class="text-success ms-2 mb-0 font-weight-medium"> Date: {{ $payment->pay_date }} </p>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success">
              <span class="mdi mdi-arrow-top-right icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Amount Pay</h6>
        
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">{{ $payment->balance }}</h3>
              {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p> --}}
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success">
              <span class="mdi mdi-arrow-bottom-left icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Balance</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">{{ $payment->next_pay }}</h3>
              {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success ">
              <span class="mdi mdi-arrow-top-right icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Next payment</h6>
      </div>
    </div>
  </div>
</div>

 {{-- row div end --}}

   {{-- side bar card start --}}

 <div class="row">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Customer Details</h4>
       
        <!-- Full Name -->
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Full Name</h6>
            <p class="text-muted mb-0">{{ $payment->f_name }} {{ $payment->m_name }} {{ $payment->l_name }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <!-- Additional information if needed -->
          </div>
        </div>

        <!-- Email -->
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Email</h6>
            <p class="text-muted mb-0">{{ $payment->email }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <!-- Additional information if needed -->
          </div>
        </div>

        <!-- Phone -->
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Phone</h6>
            <p class="text-muted mb-0">{{ $payment->phone }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <!-- Additional information if needed -->
          </div>
        </div>

        <!-- SS# -->
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">SS#</h6>
            <p class="text-muted mb-0">{{ $payment->{'ss#'} }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <!-- Additional information if needed -->
          </div>
        </div>

        <!-- Date of birth -->
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Date of Birth</h6>
            <p class="text-muted mb-0">{{ $payment->dob }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <!-- Additional information if needed -->
          </div>
        </div>

        <!-- Address -->
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Address</h6>
            <p class="text-muted mb-0">{{ $payment->address }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <!-- Additional information if needed -->
          </div>
        </div>

        <!-- Marital Status -->
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Marital Status</h6>
            <p class="text-muted mb-0">{{ $payment->marital_status }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <!-- Additional information if needed -->
          </div>
        </div>

        <!-- ID# -->
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">ID#</h6>
            <p class="text-muted mb-0">{{ $payment->{'id#'} }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <!-- Additional information if needed -->
          </div>
        </div>

        <!-- ID Type -->
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">ID Type</h6>
            <p class="text-muted mb-0">{{ $payment->id_type }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <!-- Additional information if needed -->
          </div>
        </div>

        <!-- Zip Code -->
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Zip Code</h6>
            <p class="text-muted mb-0">{{ $payment->zip_code }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <!-- Additional information if needed -->
          </div>
        </div>

        <!-- Country -->
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Country</h6>
            <p class="text-muted mb-0">{{ $payment->country }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
          
  
          <!-- City -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">City</h6>
              <p class="text-muted mb-0">{{ $payment->city }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
  
          <!-- Business Name -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">Business Name</h6>
              <p class="text-muted mb-0">{{ $payment->bus_name }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
  
          <!-- EIN -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">EIN</h6>
              <p class="text-muted mb-0">{{ $payment->ein }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
  
          <!-- Business Address -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">Business Address</h6>
              <p class="text-muted mb-0">{{ $payment->bus_address }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
  
          <!-- Work Phone -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">Work Phone</h6>
              <p class="text-muted mb-0">{{ $payment->bus_phone }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
  
        </div>
    </div>
  </div>
  {{-- side bar card end --}}
   



 <div class="col-md-8 grid-margin stretch-card">
  <div class="card">
      <div class="card-body">
          <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title mb-1">Records</h4>
              <p class="text-muted mb-1">Customer Record</p>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="preview-list">
                      @if ($notes->count() > 0)
                          @foreach ($notes as $note)
                              <div class="preview-item border-bottom">
                                  <div class="preview-thumbnail">
                                    @php
                                    $iconClass = '';
                                    $iconBgColorClass = ''; // New variable for background color class
                                    
                                    switch ($note->record_of) {
                                        case 'Call':
                                            $iconClass = 'mdi mdi-phone';
                                            break;
                                        case 'Text':
                                            $iconClass = 'mdi mdi-message-text-outline';
                                            break;
                                        case 'Meeting':
                                            $iconClass = 'mdi mdi-calendar';
                                            break;
                                        case 'Mail':
                                            $iconClass = 'mdi mdi-email';
                                            break;
                                        case 'Email':
                                            $iconClass = 'mdi mdi-email-outline';
                                            break;
                                        case 'Fax':
                                            $iconClass = 'mdi mdi-fax';
                                            break;
                                        default:
                                            $iconClass = 'mdi mdi-file-document';
                                    }
                                    
                                    // Set background color class based on status
                                    switch ($note->status) {
                                        case 'Pending':
                                            $iconBgColorClass = 'bg-danger';
                                            break;
                                        case 'Process':
                                            $iconBgColorClass = 'bg-warning';
                                            break;
                                        case 'Complete':
                                            $iconBgColorClass = 'bg-primary';
                                            break;
                                        default:
                                            $iconBgColorClass = 'bg-secondary';
                                    }
                                @endphp
                                       <div class="preview-icon {{ $iconBgColorClass }}">
                                        <i class="{{ $iconClass }}"></i>
                                    </div>
                                  </div>
                                  <div class="preview-item-content d-sm-flex flex-grow">
                                      <div class="flex-grow">
                                        {{-- badge badge-outline-primary --}}
                                          <h6 class="preview-subject ">{{ $note->status }} | Create : {{ $note->created_at }}
                                          
                                          </h6>
                                          <a href="{{ url('policy/' .$note->id) }}">
                                            <p class="text-muted mb-0">{{ $note->heading }}</p>

                                          </a>

                                      </div>
                                      <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                          <p class="text-muted">Due: {{ $note->date }}</p>
                                          {{-- <p class="text-muted mb-0">Todo: {{ $note->todo_list ? 'Yes' : 'No' }}, Reminder: {{ $note->remainder ? 'Yes' : 'No' }}</p> --}}
                                          <p class="text-muted mb-0">
                                            <i class="mdi {{ $note->todo_list ? 'mdi-check-circle text-success' : 'mdi-close-circle text-danger' }}"></i>
                                            ToDo
                                            <i class="mdi {{ $note->remainder ? 'mdi-check-circle text-success' : 'mdi-close-circle text-danger' }}"></i>
                                            Reminder
                                        </p>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      @else
                          <p>No events found.</p>
                      @endif
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>



<div class="row">

  {{-- spouse card start --}}

  @if($payment->marital_status === 'Married')

    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Spouse Details</h4>
          
          <!-- Full Name -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">Full Name</h6>
              <p class="text-muted mb-0">{{ $payment->f_name_sp }} {{ $payment->m_name_sp }} {{ $payment->l_name_sp }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
          
          <!-- Email -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">Email</h6>
              <p class="text-muted mb-0">{{ $payment->email_sp }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
          
          <!-- Phone -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">Phone</h6>
              <p class="text-muted mb-0">{{ $payment->phone_sp }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
          
          <!-- SS# -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">SS#</h6>
              <p class="text-muted mb-0">{{ $payment->{'ss#_sp'} }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
          
          <!-- Date of birth -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">Date of Birth</h6>
              <p class="text-muted mb-0">{{ $payment->dob_sp }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
          
          <!-- Address -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">Address</h6>
              <p class="text-muted mb-0">{{ $payment->address_sp }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
          
       
          
          <!-- ID# -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">ID#</h6>
              <p class="text-muted mb-0">{{ $payment->{'id#_sp'} }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
          
          <!-- ID Type -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">ID Type</h6>
              <p class="text-muted mb-0">{{ $payment->id_type_sp }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
          
          <!-- Zip Code -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">Zip Code</h6>
              <p class="text-muted mb-0">{{ $payment->zip_sp }}</p>
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
              <!-- Additional information if needed -->
            </div>
          </div>
          
          <!-- Country -->
          <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
              <h6 class="mb-1">
                <h6 class="mb-1">Country</h6>
                <p class="text-muted mb-0">{{ $payment->country_sp }}</p>
              </div>
              <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <!-- Additional information if needed -->
              </div>
            </div>
  
            <!-- City -->
            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
              <div class="text-md-center text-xl-left">
                <h6 class="mb-1">City</h6>
                <p class="text-muted mb-0">{{ $payment->city_sp }}</p>
              </div>
              <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <!-- Additional information if needed -->
              </div>
            </div>
  
            <!-- Business Name -->
            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
              <div class="text-md-center text-xl-left">
                <h6 class="mb-1">Business Name</h6>
                <p class="text-muted mb-0">{{ $payment->bus_name_sp }}</p>
              </div>
              <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <!-- Additional information if needed -->
              </div>
            </div>
  
            <!-- EIN -->
            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
              <div class="text-md-center text-xl-left">
                <h6 class="mb-1">EIN</h6>
                <p class="text-muted mb-0">{{ $payment->ein_sp }}</p>
              </div>
              <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <!-- Additional information if needed -->
              </div>
            </div>
  
            <!-- Business Address -->
            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
              <div class="text-md-center text-xl-left">
                <h6 class="mb-1">Business Address</h6>
                <p class="text-muted mb-0">{{ $payment->bus_address_sp }}</p>
              </div>
              <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <!-- Additional information if needed -->
              </div>
            </div>
  
            <!-- Work Phone -->
            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
              <div class="text-md-center text-xl-left">
                <h6 class="mb-1">Work Phone</h6>
                <p class="text-muted mb-0">{{ $payment->bus_phone_sp }}</p>
              </div>
              <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <!-- Additional information if needed -->
              </div>
            </div>
  
          </div>
        </div>
      </div>
  @endif
  
  {{-- spouse card end --}}
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Customer Info Details</h4>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Customer type</h6>
            <p class="text-muted mb-0">{{ $payment->customer_type }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <!-- Additional information if needed -->
          </div>
        </div>


        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Referral</h6>
            <p class="text-muted mb-0">{{ $payment->referral }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <!-- Additional information if needed -->
          </div>
        </div>




      </div>
    </div>
  </div> 

</div> 


 
 {{-- notes div end  --}}

 {{-- <div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Default form</h4>
      <p class="card-description"> Basic form layout </p>
      <form class="forms-sample">
        <div class="form-group">
          <label for="exampleInputUsername1">Username</label>
          <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputConfirmPassword1">Confirm Password</label>
          <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
        </div>
        <div class="form-check form-check-flat form-check-primary">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input"> Remember me </label>
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div> --}}


</div>
</div>


@endsection
