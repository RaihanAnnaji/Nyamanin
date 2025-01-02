<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="Nyaman.in, cari kos di Nyaman.in, aplikasi pencari kos">
    <meta property="og:image" content="@yield('image') ">
    <meta name="author" content="Arfiyan Wahyu Pratama">
    <title>@yield('title')</title>

    <link rel="apple-touch-icon" href="{{asset('assets/images/logo/papikos_logo.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo/papikos_logo.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    {{-- CSS --}}
    @include('layouts.front.css')
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .btn-primary {
            background-color: #6AAFB3; /* Warna primer */
            border-color: #6AAFB3;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary.focus {
            background-color: #609699; /* Warna saat hover atau fokus */
            border-color: #609699;
            box-shadow: 0 0 0 0.2rem rgba(96, 150, 153, 0.5); /* Efek shadow untuk fokus */
        }
        @media screen and (max-width: 768px) {
        .container {
            width: 90%;
        }
  }
    </style>

</head >
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns navbar-floating footer-static" data-open="hover" data-menu="horizontal-menu" data-col="2-columns" style="overflow-x: hidden;" >

    <!-- BEGIN: Header-->
    @include('layouts.front.header')
    <!-- END: Header-->


    <!-- BEGIN: Content-->
    <div class="pt-3">
        @yield('content')
    </div>
    <!-- END: Content-->

    
    <div class="drag-target"></div>

    <div class="sidenav-overlay"></div>

    <!-- BEGIN: Footer-->
    @include('layouts.front.footer')
    <!-- END: Footer-->


    {{-- Scripts --}}
    @include('layouts.front.scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<!-- END: Body-->

</html>