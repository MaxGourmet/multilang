<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Multilang - @yield('title')</title>
        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/styles.css') }}" rel="stylesheet">
    </head>
    <body>
        @section('navbar')
        @include('layouts/header')
        @show

        <div class="container">
            @yield('content')
        </div>
        <script src="{{ url('js/jquery-2.2.2.min.js') }}"></script>
        <script src="{{ url('js/bootstrap.min.js') }}"></script>
    </body>
</html>