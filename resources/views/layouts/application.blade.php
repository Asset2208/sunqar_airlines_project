<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">
    <link rel="stylesheet" href="{{ url('css/reset.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-grid.min.css') }}">
    
    @yield('styles')
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <title>Document</title>
</head>
<body @yield('body_style')>
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
    @yield('scripts')
</body>
</html>