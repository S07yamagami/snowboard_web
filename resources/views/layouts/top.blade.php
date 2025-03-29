<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- ヘッダー -->
        <header class="w-full bg-gray-800 text-white py-4 text-center">
            <h1 class="text-3xl font-semibold">SnowFolio</h1>
        </header>

        
        <div class="min-h-screen flex flex-col items-center bg-gray-100">
            @yield('contents')
        </div>
        <footer class="fixed bottom-0 w-full bg-gray-800 text-white py-4 text-center" style="bottom:0">
            <a href="/" class="px-4 py-2 bg-gray rounded">ホーム</a>
            <a href="/about" class="px-4 py-2 bg-gray rounded">WEBページ作成方法</a>
            <a href="/image" class="px-4 py-2 bg-gray rounded">HP完成イメージ</a>
            <a href="/admin" class="px-4 py-2 bg-gray rounded">ログイン</a>

        </footer>

    </body>
</html>
