<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('記事管理') }}
        </h2>

        <a class="box-border text-center rounded-lg h-8 w-24
        bg-slate-50 text-sky-500 border-sky-600 border-2 leading-7 block">
            新規作成
        </a>
    </x-slot>


    <div class="py-12">
        <div class="container mx-auto px-4">
            <form action="{{ route('admin.blog.create') }}" method="post" class="flex flex-col justify-center">
                <div class="w-1/2">
                    <label class="block font-semibold" for="title-input">記事タイトル</label>
                    <input type="text" name="title" id="title-input" class="mt-4" />
                </div>

                <div class="mt-10 w-1/2">
                    <label class="block font-semibold" for="body-input">記事本文</label>
                    <textarea id="body-input" class="mt-4">
                    </textarea>
                </div>


                <button class="box-border text-center rounded-lg h-8 w-24
                    bg-slate-50 text-sky-500 border-sky-600 border-2 leading-7 block mt-4">
                    投稿
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
