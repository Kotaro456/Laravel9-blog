<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('記事一覧') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-4 gap-5 place-items-center">
                @foreach($blogs as $blog)
                    <a href="{{ route('blog.detail', ['id' => $blog->id]) }}">
                        <div class="box-border text-center rounded-lg h-32 w-32 bg-sky-500/100 text-slate-50">
                            <div class="h-full grid place-items-center">
                                <div>
                                    <p>{{ $blog->title  }}</p>
                                    <p>{{ $blog->user->name }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </a>
            </div>
        </div>
    </div>
</x-app-layout>
