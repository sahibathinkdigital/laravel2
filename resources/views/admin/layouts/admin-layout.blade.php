<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Think digital | @yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('client/assets/imgs/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('client/assets/imgs/favicon.png') }}">

    <!-- Boxicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Google Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=Satoshi@300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=Satoshi-Variable@300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- AdminLTE Theme Style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">

    <!-- SweetAlert -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/assets/style.css') }}">
    @yield('style_tag')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.inc.navbar') <!-- Navbar -->
        @include('admin.inc.sidebar') <!-- Sidebar -->

        <div class="content-wrapper">
            @yield('content') <!-- Main content -->
        </div>
        <footer class="main-footer">
            <strong>Copyright © 2016-2024.</strong>
            All rights reserved.
        </footer>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE JS -->
    <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
    <!-- Optional Scripts -->
    <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    @yield('script_tag')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Enable tooltips
        $('[data-toggle="tooltip"]').tooltip()

        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        // Function for notifications
        function notify(status = "success", title = "this is test notify") {
            Toast.fire({
                icon: status,
                title: title
            })
        }
    </script>

    @yield('script')
</body>

</html>
