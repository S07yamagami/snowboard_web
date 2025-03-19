<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-xl font-semibold mb-4">スタイルの登録</h2>

                    @if (session('success'))
                        <div class="border text-center py-2 text-green-700 bg-green-100 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- フォーム -->
                    <form method="POST" action="{{ route('style_register') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- スタイル名 -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">スタイル名</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                        </div>

                        <!-- 画像表示（編集時用） -->
                        @if (!empty(optional($style)->image))
                        <div class="mb-4">
                            <label for="current_img" class="block text-sm font-medium text-gray-700">現在の画像</label>
                            <img src="{{ asset('storage/' . $style->image) }}" class="mt-2 w-48 h-auto rounded">
                        </div>
                        @endif

                        <!-- 画像アップロード -->
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">画像アップロード</label>
                            <input type="file" id="image" name="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>

                        <!-- 送信ボタン -->
                        <div class="flex justify-end">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">登録</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
