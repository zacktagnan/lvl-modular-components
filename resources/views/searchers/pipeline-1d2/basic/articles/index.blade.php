<x-app-other-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $viewData->title() }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $viewData->introMessage() }}
                </div>
            </div>

            <div class="mt-6 p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-5/6 mx-auto">
                    @foreach ($viewData->articles() as $article)
                        @php
                            $bgColor = $loop->odd ? 'bg-slate-300' : 'bg-slate-500';
                            $contentBgColor = $loop->odd ? 'bg-slate-700 shadow_light_for_text' : 'bg-slate-400 shadow_dark_for_text';
                        @endphp
                        <div class="flex justify-between items-center gap-4 p-2 rounded-md {{ !$loop->first ? 'mt-2' : '' }} {{ $bgColor }}">
                            <div class="{{ $contentBgColor }} text-white px-3 py-1.5 w-9 rounded text-center"><span class="shadow_for_text">{{ $article->id }}</span></div>
                            <div class="{{ $contentBgColor }} text-white w-1/2 px-3 py-1.5 rounded"><span class="shadow_for_text">{{ $article->title }}</span></div>
                            <div class="{{ $contentBgColor }} text-white px-3 py-1.5 rounded text-center"><span class="shadow_for_text">{{ $article->status }} - {{ $article->status_text }}</span></div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-4">{{ $viewData->articles()->links() }}</div>
        </div>
    </div>
</x-app-other-layout>
