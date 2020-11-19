<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Member login</title>

        {{-- <link rel="shortcut icon" type="image/png" href="{{asset('logo.png')}}" /> --}}
      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">    
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/auth.css')}}">
        @stack('css')

    </head>
    <body >
        @yield('content')

        <script src="{{asset('js/app.js')}}"></script>
        @stack('js')
    </body>
</html>
