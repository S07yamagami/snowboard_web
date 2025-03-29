@extends('layouts.top')

@section('contents')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="flex flex-col items-center text-center">
                    <h1 class="text-3xl font-bold text-gray-900 mb-8">WEBページ完成イメージ</h1>

                    <div class="w-full max-w-2xl">
                        <img src="{{ asset('images/home.image.png') }}" alt="トップ画面イメージ" class="my-4 rounded shadow-md">
                        <p class="mb-6">トップ画面に画像と説明が入れられます</p>

                        <img src="{{ asset('images/styles.image.png') }}" alt="スタイル画面" class="my-4 rounded shadow-md">
                        <p class="mb-6">スタイルの画像が入れられます</p>

                        <img src="{{ asset('images/allmountain.image.png') }}" alt="ギア選択" class="my-4 rounded shadow-md">
                        <p class="mb-6">スノーボード、ビンディング、ブーツが同時に選択できます</p>

                        <img src="{{ asset('images/compare.image.png') }}" alt="比較画面" class="my-4 rounded shadow-md">
                        <p class="mb-6">気になる商品が比較できます</p>

                        <img src="{{ asset('images/result.image.png') }}" alt="選択一覧" class="my-4 rounded shadow-md">
                        <p class="mb-6">選択したスノーボード、ビンディング、ブーツが一覧表示されます</p>
                    </div>
                </div>
            </div>

            <div class="p-6 text-center">
                <a href="{{ route('login') }}">
                    <button class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-6 rounded-lg text-lg">
                        ログイン
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
