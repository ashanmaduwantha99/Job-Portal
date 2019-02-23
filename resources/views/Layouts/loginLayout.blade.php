<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!--Bootstrap-->
@include('Includes.Links.boostrap')

    @yield('login_css')

    @yield('js')

    <title>@yield('title')</title>

</head>

<body>
@include('Includes.Navigation.login_nav')

@yield('body')
<br><br><br><br><br><br><br><br><br><br><br><br><br>
@include('Includes.Footer.footer')

</body>

</html>
