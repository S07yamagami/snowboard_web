<x-app-layout>

    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <!-- タイトルと新規作成ボタンを横並びに配置 -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">スタイルデータ 一覧</h2>
            <a href="{{ route('style_register') }}" class="bg-green-500 px-4 py-2 text-white rounded hover:bg-green-600">
                新規作成
            </a>
        </div>

        <table class="w-full border-collapse border border-gray-300 mt-3">
            <thead>
                <tr class="bg-gray-100">
                    <!-- <th class="border border-gray-300 px-4 py-2 text-left">画像</th> -->
                    <th class="border border-gray-300 px-4 py-2 text-left">スタイル名</th>
                    <!-- <th class="border border-gray-300 px-4 py-2 text-left">編集 削除</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach ($styles as $style)
                <tr class="border border-gray-300 hover:bg-gray-50">
                    <!-- 画像 -->
                    <!-- <td class="border border-gray-300 px-4 py-2">
                        @if (!empty($style->image))
                            <img src="{{ asset('storage/' . $style->image) }}" class="w-24 h-auto rounded">
                        @else
                            <span class="text-gray-500">画像なし</span>
                        @endif
                    </td> -->

                    <!-- スタイル名 -->
                    <td class="border border-gray-300 px-4 py-2">{{ $style->name }}</td>

                    <!-- 編集・削除 -->
                    <!-- <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                        <a href="#" class="bg-blue-500 px-4 py-2 text-white rounded hover:bg-blue-600">編集</a>
                        <form action="" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 px-4 py-2 text-white rounded hover:bg-red-600">削除</button>
                        </form>
                    </td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
