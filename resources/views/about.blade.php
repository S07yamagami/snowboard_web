@extends('layouts.top')

@section('contents')
<!-- start -->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="flex flex-col lg:flex-row items-center">
                    <!-- テキストとステップ -->
                    <div class="lg:w-1/2 p-6">
                        <h1 class="text-3xl font-bold text-gray-900 mb-6 text-center lg:text-left">4つのステップ</h1>
                        <div class="space-y-6">
                            <!-- ステップ1 -->
                            <div class="bg-gray-100 border-l-4 border-blue-500 rounded-lg p-4 shadow-md">
                                <h2 class="font-bold text-lg text-gray-800">ステップ 1</h2>
                                <p class="mt-2 text-gray-700">御社の世界観を表現する画像と説明文を入れてください</p>
                            </div>
                            <!-- ステップ2 -->
                            <div class="bg-gray-100 border-l-4 border-blue-500 rounded-lg p-4 shadow-md">
                                <h2 class="font-bold text-lg text-gray-800">ステップ 2</h2>
                                <p class="mt-2 text-gray-700">スタイル名と画像を入れてください</p>
                            </div>
                            <!-- ステップ3 -->
                            <div class="bg-gray-100 border-l-4 border-blue-500 rounded-lg p-4 shadow-md">
                                <h2 class="font-bold text-lg text-gray-800">ステップ 3</h2>
                                <p class="mt-2 text-gray-700">商品情報を入れてください</p>
                            </div>
                            <!-- ステップ4 -->
                            <div class="bg-gray-100 border-l-4 border-blue-500 rounded-lg p-4 shadow-md">
                                <h2 class="font-bold text-lg text-gray-800">ステップ 4</h2>
                                <p class="mt-2 text-gray-700">プレビューで確認してください</p>
                            </div>
                        </div>
                    </div>

                    <!-- 画像 -->
                    <div class="lg:w-1/2 flex justify-center p-6">
                        <img src="https://images.unsplash.com/photo-1600765282606-cddb34613aa2?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                            alt="Snowboard Landscape" 
                            class="rounded-lg shadow-lg w-full h-auto object-cover">
                    </div>
                </div>
            </div>

            <!-- ボタン -->
            <div class="p-6 text-center">
                <a href="{{ route('image') }}">
                    <button class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-6 rounded-lg text-lg">
                        HP完成イメージ
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection
