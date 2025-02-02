@props(['headers', 'items', 'empty' => 'Sin registros disponibles actualmente.'])

<div class="relative overflow-x-auto">
    <table {{ $attributes->merge([
        'class' => 'w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400'
    ]) }}>
        <x-table.header :headers="$headers" />

        <x-table.body>
            @if (empty(data_get($items, 'data', [])))
                <x-table.empty-row :colspan="count($headers)" :message="$empty" />
            @else
                {{ $slot }}
            @endif
        </x-table.body>

        @if ($footer ?? false)
            <x-table.footer>
                {{ $footer }}
            </x-table.footer>
        @endif
    </table>
</div>
