<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Landing Page - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('front_files/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('front_files/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('front_files/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{asset('front_files/css/landing-page.min.css')}}" rel="stylesheet">

</head>

<body>
    {{--  header --}}
    @include('layouts.header')
    {{-- Content --}}
    @yield('content')
    {{-- Footer --}}
    @include('layouts.footer')
  <!-- Bootstrap core JavaScript -->
  <script href="{{asset('front_files/vendor/jquery/jquery.min.js')}}"></script>
  <script href="{{asset('front_files/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
