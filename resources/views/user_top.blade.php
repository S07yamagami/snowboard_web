@extends('layouts.preview')

@section('contents')
<div class="relative"
    style="height: 100vh; background-size: cover; background-position: center; background-image: url('https://images.unsplash.com/photo-1529669851596-ba9a5549af95?q=80&w=1200&auto=format&fit=crop');">

    <!-- 🔴 背景にだけオーバーレイをかける -->
    <div class="absolute inset-0 bg-black opacity-30 z-0"></div>

    <!-- 🔵 コンテンツ（前面） -->
    <div class="relative z-10 flex flex-col justify-center items-center h-full text-white text-center">
        <h1 class="text-3xl md:text-5xl font-bold mb-4">雪上で最高の自分へ。</h1>
        <p class="max-w-2xl text-lg md:text-xl mb-4">
            Salomonは、革新的なギアであなたの可能性を解き放ちます。<br>
            限界を超え、新たな自分へ。<br>
            情熱をともにする”仲間”と、忘れられない瞬間を。
        </p>
        <a href="">
            <button class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-6 rounded-lg text-lg">
                ホームページについて
            </button>
        </a>
    </div>
</div>
@endsection