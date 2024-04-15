<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>@yield('title')</title>
</head>
<body>
<div id="app">
    @include('includes.header')
    <div>
        @yield('content')
    </div>
    @include('includes.footer')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
