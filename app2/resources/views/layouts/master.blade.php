<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Font Awesome Icons -->
    <link  href="{{asset('front_files/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link  href="{{asset('front_files/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link  href="{{asset('front_files/css/creative.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">
{{--    header--}}
@include('layouts.header')
{{--Content--}}
@yield('content')
{{-- footer--}}
@include('layouts.footer')
<!-- Bootstrap core JavaScript -->
<script  src="{{asset('front_files/vendor/jquery/jquery.min.js')}}"></script>
<script  src="{{asset('front_files/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugin JavaScript -->
<script  src="{{asset('front_files/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script  src="{{asset('front_files/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script  src="{{asset('front_files/js/creative.min.js')}}"></script>

</body>

</html>
