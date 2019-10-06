<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/grid.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
        <link rel="stylesheet" href="{{asset('css/camera.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/jquery-migrate-1.2.1.js')}}"></script>

    </head>
    <body>
        @yield('content')
    </body>
</html>