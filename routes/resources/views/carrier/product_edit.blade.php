@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">
    <form class="form-sample" action="{{ route('carrier-product.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')
        <!-- form start -->
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
                                    <input type="text" class="form-control" name="product_name" value="{{ $data->product_name }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Base Premium</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="base_premium" value="{{ $data->base_premium }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Crime Prevention Fee</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="crime_fee" value="{{ $data->crime_fee }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Policy Fee</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="policy_fee" value="{{ $data->policy_fee }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Late Fee</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="late_fee" value="{{ $data->late_fee }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Reinstatement Fee</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="reinstatement_fee" value="{{ $data->reinstatement_fee }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Installment Fee</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="Installment_fee" value="{{ $data->Installment_fee }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Credit Card Fee</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="credit_fee" value="{{ $data->credit_fee }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Misc Fee</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="misc_fee" value="{{ $data->misc_fee }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Other Fee</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="other_fee" value="{{ $data->other_fee }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Total Premium</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="total_premium" value="{{ $data->total_premium }}" />
                                </div>
                            </div>
                        </div>

                        

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Business Commission %</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="business_comission" value="{{ $data->business_comission }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Renewal Commission %</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="renewal_comission" value="{{ $data->renewal_comission }}" />
                                </div>
                            </div>
                        </div>

                        <!-- Include other input fields as needed -->

                        <div class="col-12 grid-margin">
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product card end -->
    </form>
</div>
@endsection
