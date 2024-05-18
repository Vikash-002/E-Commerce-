<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> @yield('title','Admin')</title>

  <!-- Google Font: Source Sans Pro -->
@include('backend.common.css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->

@include('backend.common.header')


  <!-- /.navbar -->

  <!-- Main Sidebar Container -->



  @include('backend.common.left_sidebar')



  

  <!-- Content Wrapper. Contains page content -->
  @yield('content')






  <!-- /.content-wrapper -->
 @include('backend.common.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

@include('backend.common.footer_js')
</body>
</html>
