@include('admin_frontend.sidebar')
@include('admin_frontend.navbar')
@if(session()->has('message'))
<center>
<div class="alert alert-success" style="width: 50%">
  {{ session()->get('message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</center>
@endif
@yield('content')
@include('admin_frontend.footer')