<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Laravel 9 - {{ $title ?? '' }}</title>
        <meta name="Description" content="{{ $metaDescription ?? 'Default description' }}">
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-slate-100 dark:bg-slate-900">

        @if (session('status'))
            {{ session('status') }}
        @endif

        {{-- @include('partials.navigation') --}}
        <x-layouts.navigation/>

        {{ $slot }}

    </body>
</html>
