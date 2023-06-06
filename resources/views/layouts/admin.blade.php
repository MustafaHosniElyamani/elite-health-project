 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Health Project</title>

     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
     <!-- Font Awesome -->

     <link rel="stylesheet" href=" {{ asset('plugins/fontawesome-free/css/all.min.css') }}">
     <!-- Theme style -->
     <link rel="stylesheet" href=" {{ asset('adminlte/css/adminlte.min.css') }}">
     <link rel="stylesheet" href=" {{ asset('adminlte/css/style.css') }}">

 </head>

 <body class="hold-transition sidebar-mini">
     <!-- Site wrapper -->
     <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
             <!-- Left navbar links -->
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                             class="fas fa-bars"></i></a>
                 </li>
                 <li class="nav-item d-none d-sm-inline-block">
                     <a href="{{ asset('index3.html') }}" class="nav-link">Home</a>
                 </li>
                 <li class="nav-item d-none d-sm-inline-block">
                     <a href="#" class="nav-link">Contact</a>
                 </li>
             </ul>

             <!-- Right navbar links -->
             <ul class="navbar-nav ml-auto">



                 <li class="nav-item">
                     <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                         <i class="fas fa-expand-arrows-alt"></i>
                     </a>
                 </li>

                 <li>
                     <div class="user-panel mt-1 pb-1 mb-1 d-flex">
                         <div class="image mr-2">
                             <img src="{{ asset('adminlte/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                                 alt="User Image">
                         </div>
                         <div class="info">
                             <a href="#" class="d-block">
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                     @csrf
                                     <button type="submit">logout</button>
                                 </form>
                             </a>

                         </div>
                 </li>
                 {{-- <li>
                     <div class="user-panel mt-1 pb-1 mb-1 d-flex">
                         <div class="info"><a class="d-block" href="{{ url(route('password.request')) }}">reset
                                 password</a></div>
                     </div>
                 </li> --}}

                 <li class="nav-item">
                     <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                         <i class="fas fa-th-large"></i>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.navbar -->

         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
             <!-- Brand Logo -->
             <a href="{{ asset('index3.html') }}" class="brand-link">
                 <img src="{{ asset('adminlte/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                     class="brand-image img-circle elevation-3" style="opacity: .8">
                 <span class="brand-text font-weight-light">Health Project </span>
             </a>

             <!-- Sidebar -->
             <div class="sidebar">
                 <!-- Sidebar user (optional) -->
                 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                     <div class="image">
                         <img src="{{ asset('adminlte/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                             alt="User Image">
                     </div>
                     <div class="info">
                         {{-- <a href="#" class="d-block">{{ auth()->user()->name }}</a> --}}
                     </div>
                 </div>

                 <!-- SidebarSearch Form -->


                 <!-- Sidebar Menu -->
                 <nav class="mt-2">
                     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                         data-accordion="false">
                         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                             <a href="{{ url(route('patient.index')) }}"
                                 class="nav-link {{ request()->is('admin/patients*') ? 'shining-link' : '' }}">
                                 <i class="fa fa-landmark nav-icon"></i>
                                 <p>
                                     Patients

                                 </p>
                             </a>
                         </li>
                       <li class="nav-item">
                             <a href="{{ url(route('doctor.index')) }}"
                                 class="nav-link {{ request()->is('admin/doctors*') ? 'shining-link' : '' }} ">
                                 <i class="fa fa-city nav-icon"></i>
                                 <p>
                                     Doctors

                                 </p>
                             </a>
                         </li>
                             <li class="nav-item">
                             <a href="{{ url(route('pharmacy.index')) }}"
                                 class="nav-link {{ request()->is('admin/pharmacies*') ? 'shining-link' : '' }}">
                                 <i class="fa fa-list-alt nav-icon"></i>
                                 <p>
                                     Pharamcies

                                 </p>
                             </a>
                         </li>
                       <li class="nav-item">
                             <a href="{{ url(route('hospital.index')) }}"
                                 class="nav-link {{ request()->is('admin/hospitals*') ? 'shining-link' : '' }}">
                                 <i class="fa fa-user nav-icon"></i>
                                 <p>
                                     Hospitals

                                 </p>
                             </a>
                         </li>
                       <li class="nav-item">
                             <a href="{{ url(route('followup.index')) }}"
                                 class="nav-link {{ request()->is('admin/followups*') ? 'shining-link' : '' }}">
                                 <i class="fa fa-user nav-icon"></i>
                                 <p>
                                     Followups

                                 </p>
                             </a>
                         </li>
                       <li class="nav-item">
                             <a href="{{ url(route('chat.index')) }}"
                                 class="nav-link {{ request()->is('admin/chats*') ? 'shining-link' : '' }}">
                                 <i class="fa fa-user nav-icon"></i>
                                 <p>
                                     Questions

                                 </p>
                             </a>
                         </li>
                       {{--    <li class="nav-item">
                             <a href="{{ url(route('followup.index')) }}"
                                 class="nav-link {{ request()->is('followup*') ? 'shining-link' : '' }}">
                                 <i class="fa fa-list nav-icon"></i>
                                 <p>
                                     Follow Ups

                                 </p>
                             </a>
                         </li> --}}


                     </ul>
                 </nav>
                 <!-- /.sidebar-menu -->
             </div>
             <!-- /.sidebar -->
         </aside>

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">

             @yield('content')
         </div>
         <!-- /.content-wrapper -->

         <footer class="main-footer">
             <div class="float-right d-none d-sm-block">
                 <b>Version</b> 3.2.0
             </div>
             <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
             reserved.
         </footer>

         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
             <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
     </div>
     <!-- ./wrapper -->

     <!-- jQuery -->
     <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
     <!-- Bootstrap 4 -->
     <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <!-- AdminLTE App -->
     <script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>
     <!-- AdminLTE for demo purposes -->
     {{-- <script src="{{ asset('adminlte/js/demo.js') }}"></script> --}}

 </body>

 </html>
