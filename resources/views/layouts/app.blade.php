<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
        <style>
            * {
                font-family: "Noto Serif JP", serif;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        </div>
        <footer class="fixed bottom-0 w-full bg-gray-800 text-white py-4 text-center" style="bottom:0">
            <a href="/home" class="px-4 py-2 bg-blue-500 rounded">ホーム</a>
            <a href="/about" class="px-4 py-2 bg-blue-500 rounded">ホームページについて</a>
            <a href="/image" class="px-4 py-2 bg-blue-500 rounded">イメージ</a>


        </footer>
    </body>
</html>
