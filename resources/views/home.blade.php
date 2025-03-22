@extends('layouts.top')

@section('contents')
<!-- start -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col lg:flex-row items-center">
                        <div class="lg:w-1/2 text-center lg:text-left p-6">
                            <h1 class="text-3xl font-bold text-gray-900">SnowFilio</h1>
                            <p class="mt-4 text-gray-700 leading-relaxed">
                            SnowFolioは、スノーボード関連ビジネスのための<br>
                            専用Webサイトを、簡単かつスピーディに構築できるサービスです。<br><br>
                            デザイン性・操作性に優れたホームページを<br>
                            専門知識なく誰でも手軽に。<br><br>
                            御社の魅力やサービスを的確に伝え、<br>
                            見やすくわかりやすいホームページを作成できます。
                        </p>
                        </div>
                        <div class="lg:w-1/2 flex flex-col gap-4 p-6">
                            <img src="https://images.unsplash.com/photo-1529669851596-ba9a5549af95?q=80&w=3132&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                                alt="Snowboard Landscape" 
                                class="rounded-lg shadow-lg w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <a href="{{ route('about') }}">
                        <button class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-6 rounded-lg text-lg">
                            ホームページについて
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
