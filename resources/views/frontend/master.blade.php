<!DOCTYPE html>
<html lang="{{Lang::locale()}}">

<head>
    <meta charset="utf-8">
    <title>My Secret Map</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @yield('content')
</body>

</html>