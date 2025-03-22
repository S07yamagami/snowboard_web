@extends('layouts.preview')

@section('contents')
<div class="relative"
    style="height: 100vh; background-size: cover; background-position: center; background-image: url('data:image/png;base64,{}');">

    <!-- 🔴 背景にだけオーバーレイをかける -->
    <div class="absolute inset-0 bg-black opacity-30 z-0"></div>

    <!-- 🔵 コンテンツ（前面） -->
    <div class="relative z-10 flex flex-col justify-center items-center h-full text-white text-center">
        <h1 class="text-3xl md:text-5xl font-bold mb-4">プレビュー　スタイルページ！</h1>
        <p class="max-w-2xl text-lg md:text-xl mb-4">
            スタイル名
        </p>
        <a href="user_style">
            <button class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-6 rounded-lg text-lg">
                商品情報について
            </button>
        </a>
    </div>
</div>
@endsection