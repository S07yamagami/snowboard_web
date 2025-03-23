@extends('layouts.top')

@section('contents')
<!-- start -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col lg:flex-row items-center">
                        <div class="lg:w-1/2 text-center lg:text-left p-6">
                            <h1 class="text-3xl font-bold text-gray-900">HP作成イメージ</h1>
                            <p class="mt-4 text-gray-700">
                                <strong></strong><br>
                                <img src="{{ asset('images/home.image.png') }}" alt="トップ画面イメージ" class="my-4 rounded shadow-md"><br>
                                トップ画面に画像と説明が入れられます！
                                <br><br>

                                <strong></strong><br>
                                <img src="{{ asset('images/styles.image.png') }}" alt="スタイル画面" class="my-4 rounded shadow-md"><br>
                                スタイルの画像が入れられます！
                                <br><br>

                                <strong></strong><br>
                                <img src="{{ asset('images/allmountain.image.png') }}" alt="ギア選択" class="my-4 rounded shadow-md"><br>
                                スノーボード、ビンディング、ブーツが同時に選択できます！
                                <br><br>

                                <strong></strong><br>
                                <img src="{{ asset('images/compare.image.png') }}" alt="比較画面" class="my-4 rounded shadow-md"><br>
                                気になる商品が比較できます！
                                <br><br>

                                <strong></strong><br>
                                <img src="{{ asset('images/result.image.png') }}" alt="選択一覧" class="my-4 rounded shadow-md"><br>
                                選択したスノーボード、ビンディング、ブーツが一覧表示されます！
                            </p>

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
