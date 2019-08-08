<!DOCTYPE html>
<html lang="zh-tw">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
        <link href="{{asset('css/half-slider.css')}}" rel="stylesheet">

    </head>

    <body>
        @include('demo.layout.frontend.navbar')

        @include('demo.layout.frontend.header')

        @yield('content')

        @include('demo.layout.frontend.footer')

      <!-- Bootstrap core JavaScript -->
        <script src="{{asset('jquery/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    </body>

</html>
