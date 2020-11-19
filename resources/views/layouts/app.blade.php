<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('page-title')</title>

        {{-- <link rel="shortcut icon" type="image/png" href="{{asset('logo.png')}}" /> --}}
      
        <link rel="stylesheet" href="{{asset('css/loader.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/templatemo-art-factory.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">    
        @stack('css')

    </head>
    <body >
        @yield('content')

        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('js/owl-carousel.js')}}"></script>
        <script src="{{asset('js/scrollreveal.min.js')}}"></script>
        <script src="{{asset('js/waypoints.min.js')}}"></script>
        <script src="{{asset('js/imgfix.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('js/loader.js')}}"></script>
        @stack('js')
    </body>
</html>
