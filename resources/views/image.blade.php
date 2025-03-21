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
                                画像
                                <br><br>
                                スノーボード、ビンディング、ブーツが同時に選択できます！
                                <br><br>
                                画像
                                <br><br>
                                気になる商品が比較できます！
                                <br><br>
                                画像
                                <br><br>
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
