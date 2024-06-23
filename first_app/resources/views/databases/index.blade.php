<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Database
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p class="mb-4"> データベースから出力されたデータが表示されます。</p><br>
                    <a href="{{ route('databases.create') }}" class="text-white bg-yellow-500 border-0 py-2 px-8 mt-2 mb-2 focus:outline-none hover:bg-green-600 rounded text-lg">新規登録</a>
                    <section class="text-gray-600 body-font">
                        <div class="container px-1 py-24 mx-auto">
                            <div class="flex flex-col text-center w-full mb-2">
                            <h1 class="sm:text-4xl text-3xl font-medium title-fonttext-gray-900">Database一覧</h1></div>
                            <form method="get" action="{{ route('databases.index') }}">
                                <div class="mt-2 mb-2">
                                    <input type="text" name="search" placeholder="検索する" class="w-1/2 mx-auto block my-2">
                                    <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索する</button>
                                </div>
                            </form>
                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                                <thead>
                                <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">投稿ID</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ペンネーム</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">タイトル</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">追加日</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">詳細</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($databases as $database)
                                <tr>
                                    <td class="px-4 py-3 text-red-500">{{ $database->id }}</td>
                                    <td class="px-4 py-3 text-red-500">{{ $database->name }}</td>
                                    <td class="px-4 py-3 text-red-500">{{ $database->title }}</td>
                                    <td class="px-4 py-3 text-red-500">{{ $database->created_at }}</td>
                                    <td class="px-4 py-3 text-blue-500"><a href="{{ route('databases.show', ['id' => $database->id ]) }}">詳細を見る</a></td>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                            <div class="mt-6">{{ $databases->links() }}</div>
                        </div>
                        </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
