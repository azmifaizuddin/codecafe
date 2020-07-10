<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CodeCofe | @yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/adminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/adminLTE/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    {{-- My Css --}}
    <link rel="stylesheet" href="{{ asset('/css/style.forum.css')}}">
</head>

<body class="hold-transition layout-top-nav bg-white">
    <div class="wrapper bg-white">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="{{ url('/')}}" class="navbar-brand">
                    <img src="{{ asset('/img/logo5.png')}}" alt="CodeCafe Logo" width="200" class=" mr-2 logo-nav"
                        style="opacity: .8">
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/')}}" class="nav-link btn-nav h-75">Beranda</a>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-0 ml-md-3">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Notifications Dropdown Menu -->
                    @guest
                    <li class="nav-item">
                        <a href="{{ url('/masuk')}}" class=" btn btn-primary btn-masuk mr-1">Masuk</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ url('/daftar')}}" class="btn btn-block btn-outline-primary btn-daftar">Daftar</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a href="{{ url('/dashboard')}}" class="btn-masuk" style="color: grey;"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>Hi, {{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/logout')}}"
                            class="btn btn-block btn-primary btn-daftar btn-sm ml-2 ">Keluar</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper bg-white">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Made with <i class="fa fa-heart pulse" style="color: red"></i> in <a href="https://www.berflower.com/"
                    target="_blank">Indonesia</a>
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2020 <a href="https://codecafe.id">CodeCafe.id</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('/adminLTE/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/adminLTE/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/adminLTE/dist/js/demo.js')}}"></script>
    @stack('scripts')
</body>

</html>
