<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Laravel 9 - @yield('title')</title>
        <meta name="Description" content="@yield('meta-description', 'Default description')">
    </head>
    <body class="antialiased">

        @include('partials.navigation')

        @yield('content')

    </body>
</html>
