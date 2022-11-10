<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" ></script>

    <link href="{{ asset('css/master.css') }}" rel="stylesheet">

    @yield('style')

</head>
<body>

    @yield('navbar')

    @yield('main')

</body>
</html>
