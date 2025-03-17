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
                    {{ __("このページはホームページについてです！") }}
                </div>
                <div class="p-6 text-gray-900">
                    <a href="{{ route('image') }}">
                            <button class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-6 rounded-lg text-lg">
                                イメージについて
                            </button>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>