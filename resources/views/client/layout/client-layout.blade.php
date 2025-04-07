<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="author" content="Designed and Developed by Think Digital India - Rupesh Sutar">
    @yield('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title  -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('client/assets/imgs/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&amp;display=swap" rel="stylesheet">
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/satoshi.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/plugins.css') }}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/video.css') }}">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7FRKHLL');</script>
<!-- End Google Tag Manager -->




</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7FRKHLL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="cursor"></div>


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->


    <div id="smooth-wrapper">
        @include('client.inc.navbar')
        <div id="smooth-content">
            <main class="main-bg pt-80">
                @yield('content')
            </main>
            @include('client.inc.Footer')


        </div>
    </div>


    <!-- jQuery -->
    <script src="{{ asset('client/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/jquery-migrate-3.4.0.min.js') }}"></script>
    <!-- plugins -->
    <script src="{{ asset('client/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('client/assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/smoother-script.js') }}"></script>
    <script src="{{ asset('client/assets/js/videoscroll.js') }}"></script>
    <!-- custom scripts -->
    <script src="{{ asset('client/assets/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function form_error(select, error) {
            $(select).html(error).css("color", "red");
        }
    </script>

</body>
@yield('script')

</html>
