<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <title>Webshop</title>
    </head>
    <body>
        <div class="container">
            @include('layouts/nav')
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
