<!DOCTYPE html>
<html lang="en">
<head>
  <meta eharset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title >Admin</title>
  <link rel = "icon" href ="images/draw.png" type = "image/x-icon">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin-assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin-assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin-assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  @yield('css_script_bottom')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center" style="background-color: #CECDCD">
    <img class="animation__shake" src="{{asset('images/draw.png')}}" alt="logoGKJ" height="300" width="300">
  </div>
    @include('admin.partials.blank-nav')



    @yield('content-header')
    @yield('information')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        @yield('body')

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.partials.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
  <!-- /.control-sidebar -->
{{-- </div> --}}

<!-- jQuery -->
<script src="{{asset('admin-assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin-assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<!-- overlayScrollbars -->
<script src="{{asset('admin-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-assets/dist/js/adminlte.js')}}"></script>

@yield('js_script')

</body>
</html>
