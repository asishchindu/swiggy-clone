<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Order Food Online from India's Best Food Delivery Service | Swiggy</title>

        @vite('resources/css/app.css')
    </head>
    <body class="">
        @include('common.navbar')

        @yield('content')

        @include('common.footer')
    </body>
</html>
