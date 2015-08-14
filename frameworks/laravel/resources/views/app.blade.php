<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel framework</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/vendor.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{asset('/js/vendor.js')}}"></script>
</head>
<body>

@yield('content')
</body>
</html>
