<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grayscale - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('front_files/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('front_files/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('front_files/css/grayscale.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">
{{--   header --}}
@include('layouts.header')
{{-- Content--}}
@yield('content')
{{--   Footer --}}
@include('layouts.footer')
<!-- Bootstrap core JavaScript -->
<script  src="{{asset('front_files/vendor/jquery/jquery.min.js')}}"></script>
<script  src="{{asset('front_files/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugin JavaScript -->
<script  src="{{asset('front_files/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script  src="{{asset('front_files/js/grayscale.min.js')}}"></script>

</body>

</html>
