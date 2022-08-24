<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('記事詳細') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="container mx-auto px-4 max-w-lg">
            <h1 class="text-2xl text-center">{{ $blog->title }}</h1>
            <p class="text-base text-right">{{ $blog->user->name }}</p>
        </div>

        <div class="container mx-auto px-4 max-w-3xl text-center py-16 mt-16 bg-slate-50 rounded">
            {{ $blog->body }}
        </div>

        <div class="container mx-auto px-4 pt-16">
        </div>
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-4 gap-5 place-items-center">
                @foreach($blogsFromAuthor as $blogFromAuthor)
                <div class="box-border text-center rounded-lg h-32 w-32 bg-sky-500/100 text-slate-50">
                    <div class="h-full grid place-items-center">
                        <div>
                            <p>{{ $blogFromAuthor->title }}</p>
                            <p>{{ $blogFromAuthor->user->name }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
