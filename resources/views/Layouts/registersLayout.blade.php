<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!--Bootstrap-->
    @include('Includes.Links.boostrap')

    @yield('reg_css')

    @yield('js')

    <title>@yield('title')</title>

</head>

<body>
@include('Includes.Navigation.reg_nav')

@yield('body')

@include('Includes.Footer.footer')

</body>

</html>
