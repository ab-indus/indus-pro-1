@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form action="">
<!-- 1st card -->
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title"> Product Details</h4>
<!-- info -->
<!-- product -->
<p class="card-description"> Product Information </p>
<!-- row  -->
            <div class="row">

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DISPLAY NAME</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $product->display_name }}</p>
                  </div>
                </div>
              </div>

                            <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">State</label>
                    <div class="col-sm-9">
                    <p class="col-form-label text-muted">{{ $product->state }}</p>                    
                    </div>
                    </div>
                </div>

            </div>
<!-- row -->
<div class="row">

{{-- <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Status</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">name</p>
      </div>
      </div>
  </div> --}}

              <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Carrier</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $product->carrier }}</p>
      </div>
      </div>
  </div>

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Product Name</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $product->product_name }}</p>
    </div>
  </div>
</div>

              <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Agent Type</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $product->agent_type }}</p>
      </div>
      </div>
  </div>

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Agent Level</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $product->agent_level }}</p>
    </div>
  </div>
</div>

              <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Line of Business</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $product->line_of_business }}</p>
      </div>
      </div>
  </div>

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Note</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $product->notes }}</p>
    </div>
  </div>
</div>

<div class="col-md-6">
                    <div class="form-group row">
                    </div>
                  </div>

</div>
<!-- end -->
</div></div></div>

    <!-- 2nd card -->
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<!-- agency commision -->
<p class="card-description"> Agency Commission  </p>

<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Initial Commission</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $product->agencyComission->initial_commission }}</p>
    </div>
  </div>
</div>

              <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Type of Payout</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $product->agencyComission->type_of_payout }}</p>
      </div>
      </div>
  </div>

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Percentage</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $product->agencyComission->percentage }}</p>
    </div>
  </div>
</div>

              <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Renewal Commission different?</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $product->agencyComission->renewal_commission_difference }}</p>
      </div>
      </div>
  </div>

</div>
<!-- row -->
<!-- agency end -->
</div></div></div>

    <!-- 3nd card -->
    <div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<!-- payout start -->
<p class="card-description"> Type of Payout  </p>

<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">RN Commission</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $product->agencyComission->RN_commission }}</p>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Note</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $product->agencyComission->notes }}</p>
    </div>
  </div>
</div>

</div>
<!-- row -->

<!-- payout end -->
</div></div></div>

    {{-- <!-- 4th card -->
    <div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<!-- total start -->
<p class="card-description"> Total Payout for Agency  </p>
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Initial Commission</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">example</p>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Renewal Commission</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">example</p>
    </div>
  </div>
</div>

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Renewal Commission 2</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">example</p>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
  </div>
</div>

</div>
<!-- row -->
<!-- total end -->


</div></div></div> --}}

    <!-- 5th card -->
    <div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<!-- downline Start -->
<p class="card-description"> Downline Commision  </p>
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Initial Commission</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $product->downlineComission->initial_commission }}</p>
    </div>
  </div>
</div>

              <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Type of Payout</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $product->downlineComission->type_of_payout }}</p>
      </div>
      </div>
  </div>

</div>
<!-- row -->
<div class="row">

    <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Renewal Commission different?</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $product->downlineComission->renewal_commission_difference }}</p>
      </div>
      </div>
  </div>
  <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Type of Payout</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $product->downlineComission->type_of_payout }}</p>
      </div>
      </div>
  </div>

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">RN Commission</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $product->downlineComission->RN_commission }}</p>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Note</label>
    <div class="col-sm-9">
    <p class="col-form-label text-muted">{{ $product->downlineComission->notes }}</p>
    </div>
  </div>
</div>

</div>
<!-- row -->

<!-- downline end -->


</div></div></div>

</form>
</div>


@endsection
