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
  <h4 class="card-title">Edit User</h4>
  <p class="card-description"> User Details </p>
  <form class="forms-sample" method="POST" action="{{ route('users.update', $user->id) }}">
    @method('patch')
    @csrf
    <div class="form-group">
      <label for="exampleInputUsername1">Name</label>
      <input type="text" name="name" class="form-control"value="{{ $user->name }}" placeholder="Name">
      @if ($errors->has('name'))
      <span class="text-danger">{{ $errors->first('name') }}</span>
     @endif
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" value="{{ $user->email }}" placeholder="Email">
      @if ($errors->has('email'))
      <span class="text-danger">{{ $errors->first('email') }}</span>
     @endif
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Type</label>
      <select class="form-control"  name="type">
        <option value="Admin" {{ $user->type === 'Admin' ? 'selected' : '' }}>Admin</option>
        <option value="Customer" {{ $user->type === 'Customer' ? 'selected' : '' }}>Customer</option>
        <option value="Employee" {{ $user->type === 'Employee' ? 'selected' : '' }}>Employee</option>
      </select>
      @if ($errors->has('type'))
      <span class="text-danger">{{ $errors->first('type') }}</span>
     @endif
    </div>
 
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control"  placeholder="Password">
      @if ($errors->has('password'))
      <span class="text-danger">{{ $errors->first('password') }}</span>
     @endif
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1"> Confirm_Password</label>
      <input type="password" name="password_confirmation" class="form-control" value="{{ $user->password_confirmation }}" placeholder="Password">
      @if ($errors->has('password_confirmation'))
      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
     @endif
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1"> Assign Roles</label>
      {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
      @if ($errors->has('roles'))
      <span class="text-danger">{{ $errors->first('roles') }}</span>
     @endif
    </div>

    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <a href="{{ route('users.index') }}" class="btn btn-dark">Cancel</a>
  </form>
</div>
</div>




@endsection
