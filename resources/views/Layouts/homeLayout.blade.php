<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Job Portal</title>


    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <!-- <link href="img/favicon.png" rel="icon"> -->

    <link rel="apple-touch-icon" href="{{ URL::asset('img/apple-touch-icon.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="{{ URL::asset('lib/bootstrap/css/bootstrap.min.css') }}">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('lib/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('lib/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('lib/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('lib/ionicons/css/ionicons.min.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    @yield('css')


</head>

<body id="body">
@include('includes.Navigation.home_nav')
    @yield('body')
    @include('includes.Footer.footer')

    <script src="{{ URL::asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ URL::asset('lib/superfish/hoverIntent.js') }}"></script>
    <script src="{{ URL::asset('lib/superfish/superfish.min.js') }}"></script>
    <script src="{{ URL::asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ URL::asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('lib/magnific-popup/magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('lib/sticky/sticky.js') }}"></script>



    <!-- Contact Form JavaScript File -->
    <script src="{{ URL::asset('js/main.js') }}contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ URL::asset('js/main.js') }}"></script>

    <!-- JavaScript Libraries -->


</body>
</html>
