<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Chimerasite') }}</title>

        <link rel="icon" type="image/png" href="/assets/img/favicon.ico">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="/assets/fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="/assets/fontawesome/css/brands.css" rel="stylesheet">
        <link href="/assets/fontawesome/css/solid.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@400;600;700&family=Lexend:wght@400;600&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css'])
        @livewireStyles
    </head>
    <body class="antialiased bg-gray-100 overflow-x-hidden lg:overflow-hidden font-primary">
        <!-- Page Heading -->
        <header class="relative bg-gray-50 h-20 flex items-center lg:px-8 px-2">
            <x-application-logo class="absolute h-16 fill-current" />
            <h2 class="font-semibold text-xl text-center w-full">
                @if (isset($header))
                    {{ $header }}
                @endif
            </h2>
            @if (isset($options))
                <span class="absolute right-8 text-xl leading-tight">
                    {{ $options }}
                </span>
            @endif
        </header>

        <!-- Page Content -->
        <main class="h-extra lg:flex">
            @include('layouts.navigation')

            <div class="w-full lg:mx-auto px-12 relative overflow-x-auto">
                <div class="mx-16 my-12 mx-auto">
                    {{ $slot }}
                </div>
            </div>
        </main>

        @livewireScripts
    </body>
</html>
