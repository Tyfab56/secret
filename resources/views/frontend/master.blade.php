<!DOCTYPE html>
<html lang="{{Lang::locale()}}">

<head>
    <meta charset="utf-8">
    <title>My Secret Map</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flat-ui.css') }}" rel="stylesheet">

</head>

<body>
    @yield('content')

    <script src="{{ asset('js/flat-ui.js') }}"></script>
    <script src="{{ asset('js/application.js') }}"></script>


</body>

</html>