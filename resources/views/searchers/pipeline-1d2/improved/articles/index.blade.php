@props(['empty' => 'Sin resultados actualmente.'])

<x-app-other-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <x-page-wrapper>
        <x-articles.table.search.intro-bar :intro-message="$introMessage" />

        <x-articles.table.search.container :items="$articles">
            {{-- {{ dd($articles) }} --}}
            @forelse (data_get($articles, 'data', []) as $article)
            {{-- {{ dd($article) }} --}}
                @php
                    $bgColor = $loop->odd ? 'bg-slate-300' : 'bg-slate-500';
                    $contentBgColor = $loop->odd ? 'bg-slate-700 shadow_light_for_text' : 'bg-slate-400 shadow_dark_for_text';
                @endphp
                <x-articles.table.search.row :loop="$loop" :bg-color="$bgColor">
                    <x-articles.table.search.column :item="$article" field="id" :content-bg-color="$contentBgColor" />
                    <x-articles.table.search.column :item="$article" field="title" :content-bg-color="$contentBgColor" />
                    <x-articles.table.search.column :item="$article" field="status" :content-bg-color="$contentBgColor" />
                </x-articles.table.search.row>
            @empty
                <x-articles.table.search.empty-row :message="$empty" />
            @endforelse
        </x-articles.table.search.container>

        @if (data_get($articles, 'links'))
            <x-articles.table.search.pagination :links="data_get($articles, 'links')" />
        @endif
    </x-page-wrapper>
</x-app-other-layout>
