<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('記事管理') }}
        </h2>

        <a href="{{ route('admin.blog.new') }}" class="box-border text-center rounded-lg h-8 w-24
        bg-slate-50 text-sky-500 border-sky-600 border-2 leading-7 block">
            新規作成
        </a>
    </x-slot>


    <div class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-4 gap-5 place-items-center">
                <div class="box-border text-center rounded-lg h-32 w-32 bg-sky-500/100 text-slate-50">
                    <div class="h-full grid place-items-center">
                        <div>
                            <p>ブログタイトル</p>
                            <p>著者</p>
                        </div>

                        <div class="flex justify-between w-10/12">
                            <a class="box-border block text-center rounded-lg h-8 w-12
                            bg-slate-50 text-indigo-600 border-indigo-500 border-2 leading-7">
                                編集
                            </a>
                            <a class="box-border block text-center rounded-lg h-8 w-12
                            bg-slate-50 border-rose-700 text-rose-600 border-2 leading-7">
                                削除
                            </a>
                        </div>
                    </div>
                </div>

                <div class="box-border text-center rounded-lg h-32 w-32 bg-sky-500/100 text-slate-50">
                    <div class="h-full grid place-items-center">
                        <div>
                            <p>ブログタイトル</p>
                            <p>著者</p>
                        </div>

                        <div class="flex justify-between w-10/12">
                            <a class="box-border block text-center rounded-lg h-8 w-12
                            bg-slate-50 text-indigo-600 border-indigo-500 border-2 leading-7">
                                編集
                            </a>
                            <a class="box-border block text-center rounded-lg h-8 w-12
                            bg-slate-50 border-rose-700 text-rose-600 border-2 leading-7">
                                削除
                            </a>
                        </div>
                    </div>
                </div>

                <div class="box-border text-center rounded-lg h-32 w-32 bg-sky-500/100 text-slate-50">
                    <div class="h-full grid place-items-center">
                        <div>
                            <p>ブログタイトル</p>
                            <p>著者</p>
                        </div>

                        <div class="flex justify-between w-10/12">
                            <a class="box-border block text-center rounded-lg h-8 w-12
                            bg-slate-50 text-indigo-600 border-indigo-500 border-2 leading-7">
                                編集
                            </a>
                            <a class="box-border block text-center rounded-lg h-8 w-12
                            bg-slate-50 border-rose-700 text-rose-600 border-2 leading-7">
                                削除
                            </a>
                        </div>
                    </div>
                </div>

                <div class="box-border text-center rounded-lg h-32 w-32 bg-sky-500/100 text-slate-50">
                    <div class="h-full grid place-items-center">
                        <div>
                            <p>ブログタイトル</p>
                            <p>著者</p>
                        </div>

                        <div class="flex justify-between w-10/12">
                            <a class="box-border block text-center rounded-lg h-8 w-12
                            bg-slate-50 text-indigo-600 border-indigo-500 border-2 leading-7">
                                編集
                            </a>
                            <a class="box-border block text-center rounded-lg h-8 w-12
                            bg-slate-50 border-rose-700 text-rose-600 border-2 leading-7">
                                削除
                            </a>
                        </div>
                    </div>
                </div>

                <div class="box-border text-center rounded-lg h-32 w-32 bg-sky-500/100 text-slate-50">
                    <div class="h-full grid place-items-center">
                        <div>
                            <p>ブログタイトル</p>
                            <p>著者</p>
                        </div>

                        <div class="flex justify-between w-10/12">
                            <a class="box-border block text-center rounded-lg h-8 w-12
                            bg-slate-50 text-indigo-600 border-indigo-500 border-2 leading-7">
                                編集
                            </a>
                            <a class="box-border block text-center rounded-lg h-8 w-12
                            bg-slate-50 border-rose-700 text-rose-600 border-2 leading-7">
                                削除
                            </a>
                        </div>
                    </div>
                </div>

                <div class="box-border text-center rounded-lg h-32 w-32 bg-sky-500/100 text-slate-50">
                    <div class="h-full grid place-items-center">
                        <div>
                            <p>ブログタイトル</p>
                            <p>著者</p>
                        </div>

                        <div class="flex justify-between w-10/12">
                            <a class="box-border block text-center rounded-lg h-8 w-12
                            bg-slate-50 text-indigo-600 border-indigo-500 border-2 leading-7">
                                編集
                            </a>
                            <a class="box-border block text-center rounded-lg h-8 w-12
                            bg-slate-50 border-rose-700 text-rose-600 border-2 leading-7">
                                削除
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
