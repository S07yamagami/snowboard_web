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
                    <p class="text-gray-600">ここにステップ1の説明を書きます。</p>
                </div>

                {{-- Step 2 --}}
                <div class="bg-white shadow-sm sm:rounded-lg p-6 w-full md:w-1/4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">ステップ2</h3>
                    <p class="text-gray-600">ここにステップ2の説明を書きます。</p>
                </div>

                {{-- Step 3 --}}
                <div class="bg-white shadow-sm sm:rounded-lg p-6 w-full md:w-1/4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">ステップ3</h3>
                    <p class="text-gray-600">ここにステップ3の説明を書きます。</p>
                </div>

                {{-- Step 4 --}}
                <div class="bg-white shadow-sm sm:rounded-lg p-6 w-full md:w-1/4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">ステップ4</h3>
                    <p class="text-gray-600">ここにステップ4の説明を書きます。</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
