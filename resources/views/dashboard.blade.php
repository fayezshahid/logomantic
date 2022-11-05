<?php
    use App\Models\Admin;
    use App\Models\Display;

    $username = Admin::where('is_loggedIn', '=', 1)->value('username');
    $view = Display::find(1);
    if($view)
        $view = $view->view;
    else
        $view = 1;
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{url('css/product.css')}}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

{{-- <link rel="stylesheet" href="{{url('assets/css/fontawesome.css')}}"> --}}
{{-- <link rel="stylesheet" href="{{url('assets/css/owl.css')}}"> --}}

<style>
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }
    
    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    input:checked + .slider {
      background-color: #2196F3;
    }
    
    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
    
    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }
    
    .slider.round:before {
      border-radius: 50%;
    }
</style>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('sweetalert::alert')
<!-- Navbar -->
<nav class="main-header navbar navbar-inverse navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <div class="container-fluid">
    <ul class="nav navbar-nav">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item d-none d-sm-inline-block" style="float: right">
            <a href="{{ route('logoutAdmin', $username) }}" class="nav-link">Logout</a>
        </li>
    </ul>
    </div>
    <!-- Right navbar links -->
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    {{-- <img src="{{ asset('img/3.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
    <span class="brand-text font-weight-light pl-5">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ asset('img/2.jfif') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">{{ $username }}</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item ">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    User Management
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('addUser') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('editPassView', $username) }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit your credentials</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Logo
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('logos') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Logo</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('premiumLogos') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Premium Logo</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('addLogoType') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Logo Type</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Designs
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('designs') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Design Card</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('addDesignCategory') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Design Category</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Fonts
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('fonts') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Fonts</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Coupons
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('coupons') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Coupon</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Guide
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('guide') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>See Guide</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Users
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('users') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>See Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('wishlists') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>See Wishlists</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('carts') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>See Carts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('orders') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>See Orders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('premiumOrders') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>See Premium Orders</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item" style="margin-top: 15px">
            <ul class="d-flex justify-content-between">
                <label class="switch">
                    <input id="checkbox" type="checkbox" @if($view) checked @endif>
                    <span class="slider round"></span>
                </label>
                <p style="font-size: 15px; color: white; padding-top: 6px; padding-right: 6px">On/Off the fontend view</p>
            </ul>
        </li>

        </ul>
    </nav>
    </div>
</aside>

<div class="content-wrapper">
    @yield('content')
    {{-- @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if($message = Session::get('success')) --}}
    @if(!empty($message))
        {{-- <div class="alert alert-success">
            <p>{{$message}}</p>
        </div> --}}
        
    @endif
    {{-- @endif --}}
</div>


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
{{-- <script src="plugins/jquery/jquery.min.js"></script> --}}
<!-- Bootstrap 4 -->
{{-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
<!-- AdminLTE App -->
{{-- <script src="dist/js/adminlte.min.js"></script> --}}
<script src="{{ asset('js/app.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

<!-- Bootstrap core JavaScript -->
<script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });

    $('#checkbox').change(function(){
        $.get('changeDisplay', function(){

        })
    });

</script>

<!-- Additional Scripts -->
{{-- <script src="{{ url('assets/js/custom.js') }}"></script>
<script src="{{ url('assets/js/owl.js') }}"></script>
<script src="{{ url('assets/js/slick.js') }}"></script>
<script src="{{ url('assets/js/isotope.js') }}"></script>
<script src="{{ url('assets/js/accordions.js') }}"></script> --}}

@yield('scripts')

</body>
</html>

