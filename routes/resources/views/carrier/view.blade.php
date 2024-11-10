@extends('admin_frontend.master')
@section('content')


<div class="content-wrapper">

<div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Carrier Info </h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
        <table class="table table-bordered">
    <thead>
        <tr>

            <th><h6>ID</h6></th>
            <th><h6>Display Name</h6></th>
            <th><h6>Type</h6></th>
            <th><h6>Agent Code</h6></th>
            <th><h6>Agent URL</h6></th>
            <th><h6>User ID</h6></th>
            <th><h6>Email</h6></th>
            <th><h6>Phone</h6></th>
            <th><h6>Fax</h6></th>
            <th><h6>Main Email</h6></th>
            <th><h6>EO Date</h6></th>
            <th><h6>Created At</h6></th>
            <th><h6>Updated At</h6></th>
            <th><h6>Action</h6></th>
        </tr>
    </thead>
    <tbody>
        @if ($carrier)
            <tr>
                <td>{{ $carrier->id }}</td>
                <td>{{ $carrier->display_name }}</td>
                <td>{{ $carrier->type }}</td>
                <td>{{ $carrier->agent_code }}</td>
                <td>{{ $carrier->agent_url }}</td>
                <td>{{ $carrier->user_id }}</td>
                <td>{{ $carrier->email }}</td>
                <td>{{ $carrier->phone }}</td>
                <td>{{ $carrier->fax }}</td>
                <td>{{ $carrier->main_email }}</td>
                <td>{{ $carrier->eo_date }}</td>
                <td>{{ $carrier->created_at }}</td>
                <td>{{ $carrier->updated_at }}</td>
                <td>
                    <a href="{{ route('carrier.edit', $carrier->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                </td>
            </tr>
        @else
            <tr>
                <td colspan="14">No carrier details available.</td>
            </tr>
        @endif
    </tbody>
</table>

  </div></div></div></div>

  <div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Carrier Contact  </h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><h6>ID</h6></th>
                        <th><h6>Display Name</h6></th>
                        <th><h6>Type</h6></th>
                        <th><h6>Contact Name</h6></th>
                        <th><h6>Contact Email</h6></th>
                        <th><h6>Marketing Email</h6></th>
                        <th><h6>Marketing Phone</h6></th>
                        <th><h6>Underwriting Phone</h6></th>
                        <th><h6>Underwriting Email</h6></th>
                        <th><h6>Customer Phone</h6></th>
                        <th><h6>Customer Email</h6></th>
                        <th><h6>Agent Phone</h6></th>
                        <th><h6>Agent Email</h6></th>
                        <th><h6>Claims Phone</h6></th>
                        <th><h6>Claims Email</h6></th>
                        <th><h6>Accounting Phone</h6></th>
                        <th><h6>Accounting Email</h6></th>
                        <th><h6>EO Date</h6></th>
                        <th><h6>Created At</h6></th>
                        <th><h6>Updated At</h6></th>
                        <th><h6>Action</h6></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($carrierContacts->count() > 0)
                        @foreach ($carrierContacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $carrier->display_name }}</td>
                                <td>{{ $carrier->type }}</td>
                                <td>{{ $contact->contact_name }}</td>
                                <td>{{ $contact->contact_email }}</td>
                                <td>{{ $contact->marketing_email }}</td>
                                <td>{{ $contact->marketing_phone }}</td>
                                <td>{{ $contact->underwriting_phone }}</td>
                                <td>{{ $contact->underwriting_email }}</td>
                                <td>{{ $contact->customer_phone }}</td>
                                <td>{{ $contact->customer_email }}</td>
                                <td>{{ $contact->agent_phone }}</td>
                                <td>{{ $contact->agent_email }}</td>
                                <td>{{ $contact->claims_phone }}</td>
                                <td>{{ $contact->claims_email }}</td>
                                <td>{{ $contact->accounting_phone }}</td>
                                <td>{{ $contact->accounting_email }}</td>
                                <td>{{ $carrier->eo_date }}</td>
                                <td>{{ $carrier->created_at }}</td>
                                <td>{{ $carrier->updated_at }}</td>
                                <td>
                                    <a href="{{ route('carrier.edit', $carrier->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="20">No contact details available.</td>
                        </tr>
                    @endif
                </tbody>
            </table>


  </div></div></div></div>


<!-- new table -->
<div class="col-lg-12 grid-margin stretch-card">

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Carrier Policy </h4>
    <p class="card-description">  <code></code>
    </p>
    <div class="table-responsive">
 
    <table class="table table-bordered">
                <thead>
                    <tr>
                    <th><h6>Status</h6></th>
                            <th><h6>Policy Number</h6></th>
                            <th><h6>Policy Type</h6></th>
                            <th><h6>Policy Term</h6></th>
                            <th><h6>Base Premium</h6></th>
                            <th><h6>Total Premium</h6></th>
                            <th><h6>Date Due</h6></th>
                            <th><h6>Amount Due</h6></th>
                            <th><h6>Date Paid</h6></th>
                            <th><h6>Amount Paid</h6></th>
                            <th><h6>Commission Due</h6></th>
                            <th><h6>New Amount Due</h6></th>
                            <th><h6>New Due Date</h6></th>
                            <th><h6>Action</h6></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($CarrierPolicies->count() > 0)
                        @foreach ($CarrierPolicies as $policy)
                            <tr>
                            <td>{{ $policy->status }}</td>
                                <td>{{ $policy->policy_number }}</td>
                                <td>{{ $policy->policy_type }}</td>
                                <td>{{ $policy->policy_term }}</td>
                                <td>{{ $policy->base_premium }}</td>
                                <td>{{ $policy->total_premium }}</td>
                                <td>{{ $policy->date_due }}</td>
                                <td>{{ $policy->amount_due }}</td>
                                <td>{{ $policy->date_paid }}</td>
                                <td>{{ $policy->amount_paid }}</td>
                                <td>{{ $policy->commission_due }}</td>
                                <td>{{ $policy->new_amount_due }}</td>
                                <td>{{ $policy->new_due_date }}</td>
                                <td>
                                    <a href="{{ route('carrier.edit', $carrier->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="20">No contact details available.</td>
                        </tr>
                    @endif
                </tbody>
            </table>

</div></div></div></div>

<!-- new table -->
<div class="col-lg-12 grid-margin stretch-card">

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Carrier Notes </h4>
    <p class="card-description">  <code></code>
    </p>
    <div class="table-responsive">
 
    <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Details</label>
                      <div class="col-sm-12">
                          <textarea class="form-control" name="note_content" rows="8">{{ $CarrierNotes->first()->note_content }}</textarea>
                      </div>
                  </div>
              </div>

</div></div></div></div>

<!-- new table -->
<div class="col-lg-12 grid-margin stretch-card">

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Carrier Contracts </h4>
    <p class="card-description">  <code></code>
    </p>
    <div class="table-responsive">
 
    <div class="col-md-6">
    <div class="form-group row">
        <!-- <label class="col-sm-3 col-form-label">Upload Contract</label> -->
        <div class="col-sm-12">
            @if($CarrierContract->count() > 0)
                @foreach($CarrierContract as $contract)
                    <!-- <a class="btn btn-info btn-icon-text" href="{{ asset('storage/' . $contract->contract_content) }}" target="_blank">View Contract</a> -->
                    <a class="btn btn-info btn-icon-text" href="{{url('storage/'.$contract->contract_content)}}"> View Contract  </a>
                @endforeach
            @else
                <p>No contract uploaded.</p>
            @endif
        </div>
    </div>
</div>


</div></div></div></div>

<!-- new table -->

<ol class="breadcrumb">
    <a href="{{ route('carrier-product.create', $carrier->id) }}" class="btn btn-info btn-icon-text">
        <i class="mdi mdi-plus-circle-outline"></i>
        Add Product
    </a>
</ol>


<div class="col-lg-12 grid-margin stretch-card">

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Carrier Products </h4>
    <p class="card-description">  <code></code>
    </p>
    <div class="table-responsive">
 
    <div class="table-responsive">
 
    <table class="table table-bordered">
                <thead>
                    <tr>
                    <th><h6>Product Name</h6></th>
                            <th><h6>Base Premium</h6></th>
                            <th><h6>Crime Fee</h6></th>
                            <th><h6>Policy Fee</h6></th>
                            <th><h6>Late Fee</h6></th>
                            <th><h6>Reinstatement Fee</h6></th>
                            <th><h6>Installment Fee</h6></th>
                            <th><h6>Credit Fee</h6></th>
                            <th><h6>Misc Fee</h6></th>
                            <th><h6>Other Fee</h6></th>
                            <th><h6>Total Premium</h6></th>
                            <th><h6>Commission</h6></th>
                            <th><h6>Business Commission</h6></th>
                            <th><h6>Renewal Commission</h6></th>
                            <th><h6>Action</h6></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($CarrierProducts->count() > 0)
                        @foreach ($CarrierProducts as $product)
                            <tr>
                            <td>{{ $product->product_name }}</td>
                                <td>{{ $product->base_premium }}</td>
                                <td>{{ $product->crime_fee }}</td>
                                <td>{{ $product->policy_fee }}</td>
                                <td>{{ $product->late_fee }}</td>
                                <td>{{ $product->reinstatement_fee }}</td>
                                <td>{{ $product->Installment_fee }}</td>
                                <td>{{ $product->credit_fee }}</td>
                                <td>{{ $product->misc_fee }}</td>
                                <td>{{ $product->other_fee }}</td>
                                <td>{{ $product->total_premium }}</td>
                                <td>{{ $product->comission }}</td>
                                <td>{{ $product->business_comission }}</td>
                                <td>{{ $product->renewal_comission }}</td>
                                <td>
                                    <a href="{{ route('carrier-product.edit', $product->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                            <!-- Delete Form -->
                            <form method="POST" action="{{ route('carrier-product.destroy', $product->id) }}" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger px-2" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="20">No contact details available.</td>
                        </tr>
                    @endif
                </tbody>
            </table>

</div></div></div></div>



  </div>
@endsection