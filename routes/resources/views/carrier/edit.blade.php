@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

<form action="{{ route('carrier.update',$carrier->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')




<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Carrier Info</h4>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Display Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="display_name" value="{{ $carrier->display_name }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Type</label>
                        <div class="col-sm-9">
                            <select class="form-control" required name="type">
                                <option value="Carrier" {{ $carrier->type === 'Carrier' ? 'selected' : '' }}>Carrier</option>
                                <option value="MGA" {{ $carrier->type === 'MGA' ? 'selected' : '' }}>MGA</option>
                                <option value="Agency" {{ $carrier->type === 'Agency' ? 'selected' : '' }}>Agency</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Agent Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="agent_code" value="{{ $carrier->agent_code }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Agent URL</label>
                        <div class="col-sm-9">
                            <input type="url" class="form-control" name="agent_url" value="{{ $carrier->agent_url }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">User ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="user_id" value="{{ $carrier->user_id }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="password" value="{{ $carrier->password }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Upload Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" value="{{ $carrier->email }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Main Phone</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" name="phone" value="{{ $carrier->phone }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Fax</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="fax" value="{{ $carrier->fax }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Main Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="main_email" value="{{ $carrier->main_email }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">E&O Submission Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="eo_date" value="{{ $carrier->eo_date }}" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
    </div>
</div>
<!-- card end -->






<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Contact Info</h4>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Contact Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="contact_name" value="{{ $carrierContacts->first()->contact_name }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Contact Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="contact_email" value="{{ $carrierContacts->first()->contact_email }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Marketing Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="marketing_email" value="{{ $carrierContacts->first()->marketing_email }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Marketing Phone</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" name="marketing_phone" value="{{ $carrierContacts->first()->marketing_phone }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Underwriting Phone</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" name="underwriting_phone" value="{{ $carrierContacts->first()->underwriting_phone }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Underwriting Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="underwriting_email" value="{{ $carrierContacts->first()->underwriting_email }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Customer Service Phone</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" name="customer_phone" value="{{ $carrierContacts->first()->customer_phone }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Customer Service Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="customer_email" value="{{ $carrierContacts->first()->customer_email }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Agent Service Phone</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" name="agent_phone" value="{{ $carrierContacts->first()->agent_phone }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Agent Service Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="agent_email" value="{{ $carrierContacts->first()->agent_email }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Claims Phone</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" name="claims_phone" value="{{ $carrierContacts->first()->claims_phone }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Claims Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="claims_email" value="{{ $carrierContacts->first()->claims_email }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Accounting Phone</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" name="accounting_phone" value="{{ $carrierContacts->first()->accounting_phone }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Accounting Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="accounting_email" value="{{ $carrierContacts->first()->accounting_email }}" />
                        </div>
                    </div>
                </div>

            </div>
            <!-- row end -->

        </div>
    </div>
</div>
<!-- contact info end -->




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
                                <option value="Active" {{ $CarrierPolicies->first()->status === 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="Inactive" {{ $CarrierPolicies->first()->status === 'Inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Policy Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="policy_number" value="{{ $CarrierPolicies->first()->policy_number }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Policy Type</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="policy_type" value="{{ $CarrierPolicies->first()->policy_type }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Policy Term</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="policy_term" value="{{ $CarrierPolicies->first()->policy_term }}" />
                            <select class="form-control"  name="policy_term">
                            <option value="1 Month" {{ $CarrierPolicies->first()->policy_term === '1 Month' ? 'selected' : '' }}>1 Month</option>
                            <option value="3 Month" {{ $CarrierPolicies->first()->policy_term === '3 Month' ? 'selected' : '' }}>3 Month</option>
                            <option value="6 Month" {{ $CarrierPolicies->first()->policy_term === '6 Month' ? 'selected' : '' }}>6 Month</option>
                            <option value="12 Month" {{ $CarrierPolicies->first()->policy_term === '12 Month' ? 'selected' : '' }}>12 Month</option>
      
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Base Premium</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="base_premium" value="{{ $CarrierPolicies->first()->base_premium }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Total Premium</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="total_premium" value="{{ $CarrierPolicies->first()->total_premium }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date Due</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="date_due" value="{{ $CarrierPolicies->first()->date_due }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Amount Due</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="amount_due" value="{{ $CarrierPolicies->first()->amount_due }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date paid</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="date_paid" value="{{ $CarrierPolicies->first()->date_paid }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Amount paid</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="Amount_paid" value="{{ $CarrierPolicies->first()->amount_paid }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Commission Due</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="commission_due" value="{{ $CarrierPolicies->first()->commission_due }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">New Amount Due</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="new_amount_due" value="{{ $CarrierPolicies->first()->new_amount_due }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">New Due Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="new_due_date" value="{{ $CarrierPolicies->first()->new_due_date }}" />
                        </div>
                    </div>
                </div>

            </div>
            <!-- row end -->

        </div>
    </div>
</div>
<!-- policies card end -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Add Notes</h4>

<div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Details</label>
                      <div class="col-sm-12">
                          <textarea class="form-control" name="note_content" rows="8">  {{ $CarrierNotes->first()->note_content }}</textarea>
                      </div>
                  </div>
              </div>

</div></div></div>

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Edit Contract</h4>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Upload Contract</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" name="contract_content">
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Current Contract</label>
        <div class="col-sm-9">

                @if ($CarrierContract && $CarrierContract->isNotEmpty() && $CarrierContract->first()->contract_content)
                <p>File Name: {{ $CarrierContract->first()->contract_content }}</p>

            <a href="{{ asset('storage/' . $CarrierContract->first()->contract_content) }}" target="_blank">View Contract</a>
        @else
            <p>No contract uploaded.</p>
        @endif



        </div>
    </div>
</div>


</div></div></div>


<div class="col-12 grid-margin">
   <button type="submit" class="btn btn-primary mr-2" >Submit  </button> 

</div>

<!-- form end -->
</form>
</div>
@endsection

