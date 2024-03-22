<html>
<title>App @yield('title')</title>

<body>

    @section('navbar')
        @include('includes.navbar')
    @show

    @yield('content')
</body>

</html>
