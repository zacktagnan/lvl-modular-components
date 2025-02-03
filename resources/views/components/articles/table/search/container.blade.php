@props(['items', 'empty' => 'Sin resultados actualmente.'])

<div class="mt-6 p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="w-5/6 mx-auto">
            @if (empty(data_get($items, 'data', [])))
                <x-articles.table.search.empty-row :message="$empty" />
            @else
                {{ $slot }}
            @endif
    </div>
</div>
