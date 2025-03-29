<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="w-full max-w-2xl mx-auto text-center">
                        <img src="{{ asset('images/allmountain.image.png') }}" alt="ギア選択" class="my-4 rounded shadow-md inline-block">
                        <img src="{{ asset('images/compare.image.png') }}" alt="比較画面" class="my-4 rounded shadow-md inline-block">
                        <img src="{{ asset('images/result.image.png') }}" alt="選択一覧" class="my-4 rounded shadow-md inline-block">
                    </div>
               </div>
            </div>
        </div>
    </div>
</x-app-layout>
