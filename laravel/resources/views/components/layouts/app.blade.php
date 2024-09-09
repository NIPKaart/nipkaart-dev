<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta -->
        <x-layouts.partials.meta :$title :$keywords />
        <x-layouts.partials.head />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <!-- Header navigation -->
        <x-navigation.navbar />

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Scripts -->
        @livewireScripts
        <x-layouts.partials.vendor-scripts />
    </body>
</html>
