<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('templates/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('templates/dist/css/adminlte.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}"> --}}
</head>
<body class="hold-transition sidebar-mini">
    {{-- <h1 class="text-center mt-3">Inventory Management System</h1> --}}

    <div class="wrapper">
        <!-- Navbar -->
        @include('components.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('components.sidebar')

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid">
                @yield('header')
              </div><!-- /.container-fluid -->
            </section>

            <section class="content">
             <div class = "container-fluid">
                @yield('contents')
             </div>
            </section>
            <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>

<!-- jQuery -->
<script src="{{ asset ('/templates/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('/templates/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('/templates/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
