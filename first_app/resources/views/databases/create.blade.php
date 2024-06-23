<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            database
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <section class="text-gray-600 body-font relative">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-col text-center w-full mb-12">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Add database</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">データベースに新しくデータを追加する画面</p>
                        </div>
                        <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <form method="post" action="{{ route('databases.store') }}">
                                @csrf
                            <div class="flex flex-wrap -m-2">
                                <!-- 名前 -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="name" class="leading-7 text-sm text-gray-600">お名前<span class="text-white bg-red-500 border-0 py-1 px-4 ml-2">必須</span></label>
                                        <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                                <!-- 件名 -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="title" class="leading-7 text-sm text-gray-600">件名<span class="text-white bg-red-500 border-0 py-1 px-4 ml-2">必須</span></label>
                                        <input type="text" id="title" name="title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                                <!-- メール -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="email" class="leading-7 text-sm text-gray-600">メール<span class="text-white bg-red-500 border-0 py-1 px-4 ml-2">必須</span></label>
                                        <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                                <!-- リンク -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="url" class="leading-7 text-sm text-gray-600">リンク<span class="text-white bg-red-500 border-0 py-1 px-4 ml-2">必須</span></label>
                                        <input type="url" id="url" name="url" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                </div>
                                <!-- 性別 -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="name" class="leading-7 text-sm text-gray-600">性別<span class="text-white bg-red-500 border-0 py-1 px-4 ml-2">必須</span></label><br>
                                        <input type="radio" id="gender" name="gender" value="0"><span class="ml-2 mr-4">男性</span>
                                        <input type="radio" id="gender" name="gender" value="1"><span class="ml-2">女性</span>
                                    </div>
                                </div>
                                <!-- 年齢 -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="name" class="leading-7 text-sm text-gray-600">年齢<span class="text-white bg-red-500 border-0 py-1 px-4 ml-2">必須</span></label><br>
                                        <select name="age" class="w-full bg-gray-100 bg-opacity-50 border-gray-300 border-20">
                                            <option value="">選択してください</option>
                                            <option value="1">～19歳</option>
                                            <option value="2">20歳～29歳</option>
                                            <option value="3">30歳～39歳</option>
                                            <option value="4">40歳～49歳</option>
                                            <option value="5">50歳～59歳</option>
                                            <option value="6">60歳～</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- 書きたいこと -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="message" class="leading-7 text-sm text-gray-600 mb-2">書きたいこと<span class="text-white bg-red-500 border-0 py-1 px-4 ml-2">必須</span></label>
                                        <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                    </div>
                                </div>
                                <!-- 性別 -->
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <input type="checkbox" id="caution" name="caution" value="0" class="mr-2"><label for="name" class="leading-7 text-sm text-gray-600">注意事項に同意する</label>
                                    </div>
                                </div>
                                <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録する</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
