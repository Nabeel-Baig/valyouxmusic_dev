<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title> @yield('title') | {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <meta content="Nabeel Baig" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/valyou_x_emblem.svg') }}">
    @include('layouts.head')
    <script src="{{ URL::asset('assets/libs/jquery/jquery.min.js')}}"></script>
</head>
<style>
    .header-item{
        height: auto;
    }
    .topbar-new{
        align-items: center;
    }
    .topbar-new .dropdown.d-inline-block a{
        margin-top: 0 !important;
    }
    .topbar-new .noti-icon .badge{
            right: 16px;
            top: 7px;
    }
    @media (max-width: 575px){
        .deposit_box .deposit {
            align-items: center;
        }
        .deposit_box .deposit button, .deposit_box .deposit input{
            margin: 0;   
        }
    }
</style>
@section('body')
<body data-sidebar="dark" class="" id="dashBody">
    <!-- Stage Start -->
    <div class="stage">
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
                    @yield('top-content')
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Right Sidebar -->
    @include('layouts.right-sidebar')
    <!-- /Right-bar -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
   </div>
    <!-- Gear Player Start -->
    <div class="gearWrap">
        <div id="gearContainer" class="gear" data-gear="{{ asset('assets/gear_app/json/setup.json') }}"></div>
    </div>
    
    <script>
    if ($(window).width() > 767) {
       var bbbb = document.getElementById('dashBody');
        bbbb.classList.add("sidebar-enable");
        bbbb.classList.add("vertical-collpsed");
    }
</script>
    @include('layouts.footer-script')
</body>
</html>
