@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

<!-- Body start  -->
<!-- header -->
<div class="page-header">
            <h3 class="page-title">  </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb"> 
                {{-- <button type="button" class="btn btn-info btn-icon-text" 
                onclick="window.location.href='client_form.php';" >
                          <i class="mdi mdi-plus-circle-outline"></i>
                          Add new user </button> --}}
              </ol>
            </nav>
          </div>
          <!-- header end -->

<!-- form start -->
<div class="col-md-6 grid-margin stretch-card">

<div class="card">
<div class="card-body">
  <h4 class="card-title">Make Client User</h4>
  <p class="card-description"> User Details </p>
  <form class="forms-sample" method="POST" action="{{ route('ClientPortal.ClientRegisterStore') }}">
    @csrf
    <div class="form-group">
      <label for="exampleInputUsername1">Name</label>
      <input type="text" name="name" class="form-control" id="" placeholder="Name">
      @if ($errors->has('name'))
      <span class="text-danger">{{ $errors->first('name') }}</span>
     @endif
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="" placeholder="Email">
      @if ($errors->has('email'))
      <span class="text-danger">{{ $errors->first('email') }}</span>
     @endif
    </div>
    <input type="hidden" name="type" value="random">
 
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="" placeholder="Password">
      @if ($errors->has('password'))
      <span class="text-danger">{{ $errors->first('password') }}</span>
     @endif
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1"> Confirm_Password</label>
      <input type="password" name="password_confirmation" class="form-control" id="" placeholder="Password">
      @if ($errors->has('password_confirmation'))
      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
     @endif
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1"> Assign Roles</label>
      <input type="text" value="client" class="form-control" name="roles" id="roles">
      {{-- {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
      @if ($errors->has('roles'))
      <span class="text-danger">{{ $errors->first('roles') }}</span>
     @endif --}}
    </div>

        <!-- Policy Div -->
        <div id="policyContainer">
            <div id="Policy" class="policy-clone">
                <div class="form-group">
                    <label for="policy_id">Select Policy</label>
                    <select name="policy_id[]" class="form-control policy-select">
                        <option value="">Choose a Policy</option>
                        @foreach($policy as $pol)
                            <option value="{{ $pol->id }}">{{ $pol->first_name }} {{ $pol->middle_name }} {{ $pol->last_name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('policy_id'))
                        <span class="text-danger">{{ $errors->first('policy_id') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <button type="button" id="policyBtn" class="btn btn-info mr-2">Add More Policy</button>

     

    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    {{-- <a href="{{ route('users.index') }}" class="btn btn-dark">Cancel</a> --}}
  </form>
</div>
</div>
</div>
</div>



<script>
    $(document).ready(function() {
    $('#policyBtn').on('click', function() {
        // Clone the Policy div
        let newPolicyDiv = $('#Policy').clone();
        
        // Clear the selected value in the cloned select box
        newPolicyDiv.find('.policy-select').val('');

        // Append the cloned div to the container
        $('#policyContainer').append(newPolicyDiv);
    });
});

</script>

@endsection
