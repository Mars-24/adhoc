<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layouts.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('backend/dist/img/loading.gif')}}" alt="" height="180"
                width="180">
        </div>

        <!-- Navbar -->
        @include('backend.layouts.nav')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.layouts.sidebar')
        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('backend.layouts.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    @yield('script')
</body>

</html>
