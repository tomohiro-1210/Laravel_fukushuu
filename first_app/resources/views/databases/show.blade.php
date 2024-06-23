<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            database詳細画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <section class="text-gray-600 body-font relative">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-col text-center w-full mb-12">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Databaseの詳細画面</h1>
                        </div>
                        <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">
                                <!-- 名前 -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="name" class="leading-7 text-sm text-gray-600">お名前</label>
                                        <p type="text" id="name" name="name" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $database->name }}</p>
                                    </div>
                                </div>
                                <!-- 件名 -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="title" class="leading-7 text-sm text-gray-600">件名</label>
                                        <p type="text" id="title" name="title" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $database->title }}</p>
                                    </div>
                                </div>
                                <!-- メール -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="email" class="leading-7 text-sm text-gray-600">メール</label>
                                        <p type="email" id="email" name="email" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $database->email }}</p>
                                    </div>
                                </div>
                                <!-- リンク -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="url" class="leading-7 text-sm text-gray-600">リンク</label>
                                        @if( !empty($database->url) )
                                        <p type="url" id="url" name="url" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $database->url }}</p>
                                        @else
                                        <p type="url" id="url" name="url" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">URLの記載は有りません</p>
                                        @endif
                                    </div>
                                </div>
                                <!-- 性別 -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="name" class="leading-7 text-sm text-gray-600">性別</label><br>
                                        <p type="url" id="url" name="url" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $gender }}</p>
                                    </div>
                                </div>
                                <!-- 年齢 -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="name" class="leading-7 text-sm text-gray-600">年齢</label><br>
                                        <p type="url" id="url" name="url" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $age }}</p>
                                    </div>
                                </div>
                                <!-- 書きたいこと -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="message" class="leading-7 text-sm text-gray-600 mb-2">書きたいこと</label>
                                        <p id="message" name="message" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $database->message }}</p>
                                    </div>
                                </div>

                                <form method="get" action="{{ route('databases.edit', ['id' => $database->id ]) }}" class="flex w-1/3">
                                    <div class="p-2 w-full">
                                    <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">変更する</button>
                                    </div>
                                </form>
                                <!-- 削除ボタン -->
                                <form id="delete_{{ $database->id }}" method="post" action="{{ route('databases.destroy', ['id' => $database->id ]) }}" class="flex w-1/3">
                                    @csrf
                                    <div class="p-2 w-full">
                                    <a href="#" data-id="{{ $database->id }}" onclick="deletePost(this)" class="inline-block mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">削除する</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- 削除するためのJS -->
     <script>
        function deletePost(e){
            'use strict'
            if(confirm('本当に削除していいですか？')){
                document.getElementById('delete_' + e.dataset.id).submit()
            }
        }
     </script>
</x-app-layout>
