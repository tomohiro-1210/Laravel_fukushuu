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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
