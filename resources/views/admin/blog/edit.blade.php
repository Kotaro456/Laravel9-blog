<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('編集') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="container mx-auto px-4">
            <form action="{{ route('admin.blog.update', ['id' => $blog->id]) }}" method="post" class="flex flex-col items-center justify-center w-1/2 mx-auto">
                @csrf
                <div class="w-full">
                    <label class="block font-semibold" for="title-input">記事タイトル</label>
                    <input type="text" name="title" id="title-input" class="mt-4 w-full rounded-lg border-none"  value="{{ $blog->title }}" />
                </div>

                <div class="mt-10 w-full">
                    <label class="block font-semibold" for="body-input">記事本文</label>
                    <textarea id="body-input" name="body" class="mt-4 w-full rounded-lg border-none" rows="15" cols="60">{{ $blog->body }}</textarea>
                </div>


                <button class="box-border text-center rounded-lg h-12 w-32
                    bg-slate-50 text-sky-500 border-sky-600 border-2 leading-7 block mt-4 ml-auto
                    hover:bg-sky-500 hover:text-slate-50">
                    編集
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
