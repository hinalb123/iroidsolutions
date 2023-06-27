<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>iRoid Solutions</title>
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css?1.3')}}">

  <!-- <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css?1.3')}}"> -->
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css?1.3')}}"> -->
  <!-- JQVMap -->
  <!-- <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css?1.3')}}"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?1.3')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css?1.3')}}">
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css?1.3')}}"> -->
  <!-- summernote -->
  <!-- <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css?1.3')}}"> -->

  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
  </link>

  <link rel="icon" href="{{asset('assets/favicon/favicon-16x16.png')}}" type="image/gif" sizes="16x16">

</head>
<style>
  .swal2-confirm {
    background-color: #337AB7 !important;
  }

  #example3_filter {
    float: right;

  }

  #example1_filter {
    float: right;

  }

  .naactive {
    color: black !important;
    border: 1px solid;
    /* background: oldlace; */
  }

  .page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #337AB7;
    background-color: #fff;
    border: 1px solid #dee2e6;
  }

  .dataTables_paginate {
    float: right;

  }

  .page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #337AB7 !important;
    border-color: #337AB7 !important;
  }

  .main-header {
    border-bottom: none;
    z-index: 1034;
  }
  nav ul li:hover{
    background: repeating-linear-gradient(45deg, black, transparent 100px);
  }
  p{
    font-size: .85rem !important;
    display: inline;
  }
  /* hr.sidebar-divider {
    border-top: 1px solid black !important;
} */
/* hr{
    margin: 0 1rem 1rem !important;
} */
</style>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('assets/favicon/favicon-96x96.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div> -->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color:#337AB7 ;    margin-bottom: -44px;
"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto " style="    margin-bottom: -44px;
">
        <!-- Navbar Search -->
        <li class="nav-item">
          <!-- <i class="fas fa-search"></i> -->

          <div class="dropdown mt-3">
            <button class="btn dropdown-toggle" style="    background: #337AB7 !important;
    color: white;" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

              {{Auth::user()->name}}

            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button" onclick="confirm()">Sign Out</button>
              <a href="{{route('changepassword')}}" class="pl-3" type="button">Change Password</button>

            </div>
          </div>


          <!-- <a href="javascript:void(0)" class="menu-link px-5"></a> -->
          <!-- <form id="logout-form" action="{{ route('admin.logout') }}" method="GET" class="d-none">
            @csrf
          </form> -->


        </li>



      </ul>
    </nav>

    <aside class="main-sidebar sidebar-primary elevation-4" style="background-color: #337AB7;">
      <!-- Brand Logo -->
      <a href="{{route('admin.showportfolio')}}" class="" style="font-size: 1.25rem;
    line-height: 1.5;
    padding: 0.8125rem 0.5rem;
    transition: width .3s ease-in-out;
    white-space: nowrap;">

        <img src="{{ asset('assets/favicon/iroid.svg')}}" alt="AdminLTE Logo" class="brand" style="
   float: center !important;
    line-height: 0.8 !important;
    max-height: 96px !important;
    width: auto !important;margin-top: 12px;">
      </a>



      <div class="sidebar" id="navigationText">

        <nav class="mt-5">



          <ul class="nav nav-pills nav-sidebar flex-column" style="font-family: Work Sans, sans-serif" data-widget="treeview" role="menu" data-accordion="false">


            <li class="nav-item menu-open">

              <a href="{{route('admin.getportfoliodata')}}" style="color:#fff;" class="nav-link {{ isset($page) && in_array($page, ['adminportfolio']) ? 'naactive' : '' }} ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-easel2" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .447.276L8.81 1h4.69A1.5 1.5 0 0 1 15 2.5V11h.5a.5.5 0 0 1 0 1h-2.86l.845 3.379a.5.5 0 0 1-.97.242L12.11 14H3.89l-.405 1.621a.5.5 0 0 1-.97-.242L3.36 12H.5a.5.5 0 0 1 0-1H1V2.5A1.5 1.5 0 0 1 2.5 1h4.691l.362-.724A.5.5 0 0 1 8 0ZM2 11h12V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5V11Zm9.61 1H4.39l-.25 1h7.72l-.25-1Z" />
                </svg>
                <p class="ml-2">
                  Portfolio
                </p>
              </a>

            </li>


           

            <li class="nav-item navtime">
            <hr class="sidebar-divider my-0">

              <a href="#" style="color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['adminvideotestimonial']) ? 'naactive' : '' }} {{ isset($page) && in_array($page, ['adminclient']) ? 'naactive' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
                </svg>
                <p class="ml-2">
                  Testimonial
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              
              <ul class="nav nav-treeview ">
                <li class="nav-item ">
                  <a href="{{route('admin.gettestimonialdata')}}" style="color: #fff;" class=" nav-link {{ isset($page) && in_array($page, ['adminvideotestimonial']) ? 'naactive' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
                    </svg>
                    <p class="ml-2">Video Testimonial</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="{{route('admin.getclienttestimonialdata')}}" style="color: #fff;" class=" nav-link {{ isset($page) && in_array($page, ['adminclient']) ? 'naactive' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
                    </svg>
                    <p class="ml-2">Client Testimonial</p>
                  </a>
                </li>

              </ul>
            </li>


            <li class="nav-item">
            <hr class="sidebar-divider my-0">

              <a href="#" style="
    color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['admincareer']) ? 'naactive' : '' }} {{ isset($page) && in_array($page, ['admincareerapplication']) ? 'naactive' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                </svg>
                <p class="ml-2">
                  Career
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('admin.getcareerdata')}}" style="color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['admincareer']) ? 'naactive' : '' }}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                      <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                    </svg>
                    <p class="ml-2">New Opening</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin.career')}}" style="color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['admincareerapplication']) ? 'naactive' : '' }}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                      <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                    </svg>
                    <p class="ml-2">Career Application</p>
                  </a>
                </li>

              </ul>
            </li>
            <!-- <hr class="sidebar-divider my-0"> -->

            <li class="nav-item ">
            <hr class="sidebar-divider my-0">

              <a href="{{route('admin.getofficedata')}}" style="  color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['adminofficevideo']) ? 'naactive' : '' }}">
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
                </svg>
                <p class="ml-2">
                  Office Video

                </p>
              </a>

            </li>

            <li class="nav-item ">
            <hr class="sidebar-divider my-0">

              <a href="{{route('admin.getclientdata')}}" style="color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['adminawsomeclient']) ? 'naactive' : '' }}">
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-easel2" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .447.276L8.81 1h4.69A1.5 1.5 0 0 1 15 2.5V11h.5a.5.5 0 0 1 0 1h-2.86l.845 3.379a.5.5 0 0 1-.97.242L12.11 14H3.89l-.405 1.621a.5.5 0 0 1-.97-.242L3.36 12H.5a.5.5 0 0 1 0-1H1V2.5A1.5 1.5 0 0 1 2.5 1h4.691l.362-.724A.5.5 0 0 1 8 0ZM2 11h12V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5V11Zm9.61 1H4.39l-.25 1h7.72l-.25-1Z" />
                </svg>
                <p class="ml-2">
                  Awesome Clients

                </p>
              </a>

            </li>

            <li class="nav-item ">
            <hr class="sidebar-divider my-0">

              <a href="{{route('admin.contactusdetail')}}" style=" color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['admincontactus']) ? 'naactive' : '' }}">
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                </svg>
                <p class="ml-2">
                  Contact-Us

                </p>
              </a>

            </li>

            <li class="nav-item">
            <hr class="sidebar-divider my-0">

              <a href="#" style="
                  color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['adminblog']) ? 'naactive' : '' }} {{ isset($page) && in_array($page, ['adminblogcategory']) ? 'naactive' : '' }} {{ isset($page) && in_array($page, ['adminbloguser']) ? 'naactive' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                </svg>
                <p class="ml-2">
                  Blog
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin.blogs')}}" style="color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['blogs']) ? 'naactive' : '' }}">

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                      </svg>
                      <p class="ml-2">All Blog</p>
                    </a>
                  </li>
                  <hr class="sidebar-divider my-0">

                <li class="nav-item">
                  <a href="{{route('admin.showblogcategory')}}" style="color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['showblogcategory']) ? 'naactive' : '' }}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                      <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                    </svg>
                    <p class="ml-2">Blog Category</p>
                  </a>
                </li>

                {{-- <li class="nav-item ">
                  <a href="{{route('admin.blog')}}" style=" color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['adminblog']) ? 'naactive' : '' }}">
                    <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                      <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                    </svg>
                    <p class="ml-2">
                      Create Blog
                    </p>
                  </a>

                </li> --}}
                <hr class="sidebar-divider my-0">

                <li class="nav-item ">
                  <a href="{{route('admin.showbloguser')}}" style=" color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['showbloguser']) ? 'naactive' : '' }}">
                    <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                      <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                    </svg>
                    <p class="ml-2">
                      Blog User
                    </p>
                  </a>

                </li>
                <hr class="sidebar-divider my-0">

                <li class="nav-item ">
                  <a href="{{route('admin.showcomment')}}" style=" color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['showblogcomment']) ? 'naactive' : '' }}">
                    <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                      <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                    </svg>
                    <p class="ml-2">
                      Blog Comment
                    </p>
                  </a>

                </li>
              </ul>
            </li>

            <li class="nav-item ">
            <hr class="sidebar-divider my-0">

              <a href="{{route('clear')}}" style=" color: #fff;" class="nav-link">
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                </svg>
                <p class="ml-2">
                  Clear-Cache

                </p>
              </a>

            </li>

            <li class="nav-item ">
            <hr class="sidebar-divider my-0">

              <a href="{{route('version')}}" style=" color: #fff;" class="nav-link {{ isset($page) && in_array($page, ['version']) ? 'naactive' : '' }}">
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                </svg>
                <p class="ml-2">
                  Update Version

                </p>
              </a>

            </li>

          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">

            @yield('title')

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">



          @yield('content')


        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="#" style="color: #337AB7 !important;">iRoidSolutions</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">

      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


  <script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>

  <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>


  <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>

  <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

  <script src="{{ asset('/dist/js/adminlte.min.js')}}"></script>

  <script src="{{ asset('dist/js/demo.js')}}"></script>

  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>


  <script>
    $(document).ready(function() {

      var nav = document.getElementById('navigationText');

// var navItems = nav.getElementsByTagName('li');

// for (var i = 0; i < navItems.length; i++) {
//     navItems[i].addEventListener('click', function() {
//         this.style.fontWeight = 'bold';
//     }, false);
// }
$('li').width(function(){
    return $(this).outerWidth() + 20;
}).click(function() {
    $(this).css('font-weight', 'bold').siblings().css('font-weight', 'normal');
});

      var datatable = $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "sort": false,
        "rowReorder": true,
        "paging": true,
        "info": true,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-9:eq(0)');

      datatable.on('row-reorder', function(e, diff, edit) {
        var result = 'Reorder started on row: ' + edit.triggerRow.data()[1] + '<br>';
        // console.log(result);
        for (var i = 0, ien = diff.length; i < ien; i++) {
          var rowData = datatable.row(diff[i].node).data();
          // console.log(rowData);
          result += rowData[1] + ' updated to be in position ' +
            diff[i].newData + ' (was ' + diff[i].oldData + ')<br>';
        }

        $('#result').html('Event result:<br>' + result);
      });


      // $('#example2').DataTable({

      //   "lengthChange": false,
      //   "searching": false,
      //   "ordering": false,

      //   "autoWidth": false,
      //   "responsive": true,
      // });

    });

    function confirm() {
      swal({
        title: "Sign Out?",
        text: "Are you sure? want to Sign Out?",
        type: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, Do it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: !0
      }).then(function(e) {

        if (e.value === true) {
          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

          $.ajax({
            type: 'POST',
            url: route('logout'),
            data: {
              _token: CSRF_TOKEN
            },
            dataType: 'JSON',
            success: function(results) {
              window.location.reload();

            }
          });

        } else {
          e.dismiss;
        }

      }, function(dismiss) {
        return false;
      })
    }
  </script>
</body>

</html>
