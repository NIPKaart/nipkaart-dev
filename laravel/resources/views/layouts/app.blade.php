<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <!-- Meta -->
        @include("layouts.partials.meta")
        @include("layouts.partials.head")

        <!-- Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <!-- Header -->
        @include("layouts.navbar.nav")

        <!-- Content -->
        @yield("content")

        <!-- Footer -->

        <!-- Scripts -->
        @livewireScripts
        @include("layouts.partials.vendor-scripts")
    </body>
</html>
