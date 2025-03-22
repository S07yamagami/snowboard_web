<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-6">
                {{-- Step 1 --}}
                <div class="bg-white shadow-sm sm:rounded-lg p-6 w-full md:w-1/4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">ステップ1</h3>
                    <p class="text-gray-600">御社の世界観を表現する画像と説明文を入れてください</p>
                </div>

                {{-- Step 2 --}}
                <div class="bg-white shadow-sm sm:rounded-lg p-6 w-full md:w-1/4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">ステップ2</h3>
                    <p class="text-gray-600">スタイル名と画像を入れてください</p>
                </div>

                {{-- Step 3 --}}
                <div class="bg-white shadow-sm sm:rounded-lg p-6 w-full md:w-1/4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">ステップ3</h3>
                    <p class="text-gray-600">商品情報を入れてください</p>
                </div>

                {{-- Step 4 --}}
                <div class="bg-white shadow-sm sm:rounded-lg p-6 w-full md:w-1/4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">ステップ4</h3>
                    <p class="text-gray-600">プレビューで確認してください</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
