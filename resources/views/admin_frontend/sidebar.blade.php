<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Insurance Management System</title>
    
     <!-- boot css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/mystyle.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/ins_logo.jpg')}}" />
    {{-- jquery  --}}
    <!-- Add this before your </head> tag -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav style="display:block" class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{url('dashboard')}}"><img src="{{asset('assets/images/ins_logo.jpg')}}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="{{url('dashboard')}}"><img src="{{asset('assets/images/ins_logo.jpg')}}" alt="logo" /></a>
        </div>
        <ul style="display:block" id="navlist" class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{ asset('assets/images/faces/face15.jpg') }}" alt="">
                  
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  @if(auth()->check())
                <h5 class="mb-0 font-weight-normal">{{ auth()->user()->name }}</h5>
                <span>{{ auth()->user()->type }}</span>
            @else
                <!-- Handle the case where the user is not authenticated -->
                <p>Guest</p>
            @endif
                  {{-- <h5 class="mb-0 font-weight-normal">{{ auth()->user()->name }}</h5>
                  <span>{{ auth()->user()->type }}</span> --}}
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <!-- <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a> -->
                <div class="dropdown-divider"></div>
                <!-- <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a> -->
                <div class="dropdown-divider"></div>
                <a href="{{url('record/todo')}}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <!-- <span class="nav-link">Navigation</span> -->
          </li>
          
          
          {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li> --}}


                    <!-- check for admin -->

                    @if(Auth::check()) <!-- Check if a user is logged in -->
                    @if(Auth::user()->type == 'Admin')
                        <!-- User is an admin, hide the div -->
                       <!-- user management start -->
                  <li class="nav-item menu-items">
        
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                      <span class="menu-icon">
                        
                      
                      <i class="mdi mdi-laptop"></i>
                      </span>
                      <span class="menu-title">Users Management</span>
                      
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('permissions.create') }}">Add Module</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('permissions.index') }}">Module List</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('roles.create') }}">Add Roles</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('roles.index') }}">Roles List</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('users.create') }}">Add Users</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('users.index') }}">Users List</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('Client/Register') }}"> Register Client</a></li>

                        
                      </ul>
                    </div>
                    </li>
                    <!-- user management end -->
                    @else
                    <div id="new_div1" style="display: none;">
                            not admin
                        </div>
                    @endif
                @endif



        @can('client')
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#auth221" aria-expanded="false" aria-controls="auth221">
            <span class="menu-icon">
              <i class="mdi mdi-security"></i>
            </span>
            <span class="menu-title">Client Portal</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth221">
            <ul class="nav flex-column sub-menu">

              {{-- <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Client/Portal/Form') }}"> Client Portal</a></li> --}}
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Client/Change/History') }}"> Change History</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Client/Change/Request') }}"> Change Request</a></li>

              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Client/Pay/History') }}"> Payment History</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Client/Pay/Request') }}"> Payment Request</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Policy/Client/') }}"> My Policies</a></li>

              

            </ul>
          </div>
        </li>
        @endcan
   


        @can('policy')
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#auth3288" aria-expanded="false" aria-controls="auth3288">
            <span class="menu-icon">
              <i class="mdi mdi-security"></i>
            </span>
            <span class="menu-title">Policy</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth3288">
            <ul class="nav flex-column sub-menu">
              {{-- <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Policy/new/create') }}"> Add Policy  </a></li> --}}
              {{-- <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Policy/change') }}">  Policy Change  </a></li> --}}

              {{-- <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Policy/new') }}"> Search Policy/Client </a></li> --}}
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Payments/History') }}"> Payments History </a></li>
              {{-- <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Policy/History/New') }}"> Policy Change History </a></li> --}}
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Policy/Dashboard') }}"> Policy Dashboard </a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Policy/Reminders') }}"> Policy Reminders </a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Policy/Database') }}"> Policy Database </a></li>

             
             

              
              {{-- <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Payment/select') }}"> Add Payment</a></li> --}}
              

            </ul>
          </div>
        </li>
        @endcan




    


   

      
        @can('agent')
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#auth32433" aria-expanded="false" aria-controls="auth32433">
            <span class="menu-icon">
              <i class="mdi mdi-security"></i>
            </span>
            <span class="menu-title">Agent / CSR Portal</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth32433">
            <ul class="nav flex-column sub-menu">
              {{-- <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Agent/new') }}"> Log History </a></li> --}}
              {{-- <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Agent/new/create') }}"> Agent / CSR Portal</a></li> --}}
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Agent/new/add') }}"> Agent / CSR Portal</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Lead/history') }}"> Log History</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Lead/history/Sheet') }}"> Lead History</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Lead/Solid') }}"> Policy Sold</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Lead/Prospects') }}"> Future Prospects</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Agent/task') }}"> Agent / CSR ToDo</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('Agent/task/History') }}"> Agent / CSR ToDo History</a></li>


            </ul>
          </div>
        </li>
        @endcan

   
          
     

        

   


 





          @can('agency')
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Agency</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('agency/create') }}"> Add Agency </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('agency') }}"> Agency List </a></li>
              </ul>
            </div>
          </li>
          @endcan

          

          
 

        @can('products')
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic-3433" aria-expanded="false" aria-controls="ui-basic-3433">
            <span class="menu-icon">
              <i class="mdi mdi-archive"></i>
            </span>
            <span class="menu-title">Products</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic-3433">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('products/create') }}">Add Products</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('products') }}">Products List</a></li>
            </ul>
          </div>
        </li>
        @endcan
        
  
        @can('carrier')
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic-5" aria-expanded="false" aria-controls="ui-basic-5">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Carrier</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic-5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('carrier/create') }}">Add Carriers</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('carrier') }}">Carriers List</a></li>
              </ul>
            </div>
          </li>
        @endcan
        



    



     
          
     
          
          
        </ul>
      </nav>
      <!-- partial -->
