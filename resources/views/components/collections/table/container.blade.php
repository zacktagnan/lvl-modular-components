@props(['headers', 'items', 'empty' => 'Sin registros disponibles actualmente.'])

<div class="relative overflow-x-auto">
    <table {{ $attributes->merge([
        'class' => 'w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400'
    ]) }}>
        <x-collections.table.header :headers="$headers" />

        <x-collections.table.body>
            @if (empty(data_get($items, 'data', [])))
                <x-collections.table.empty-row :colspan="count($headers)" :message="$empty" />
            @else
                {{ $slot }}
            @endif
        </x-collections.table.body>

        @if ($footer ?? false)
            <x-collections.table.footer>
                {{ $footer }}
            </x-collections.table.footer>
        @endif
    </table>
</div>
