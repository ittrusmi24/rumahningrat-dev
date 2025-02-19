<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <title>@yield('title')</title>
    @yield('head')
</head>

<body>
    @include('about.header')


    @yield('content')

    @include('home.sidebar')

    @include('home.footer')

    @yield('javascript')

</body>

</html>
