<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <x-page-wrapper>
        <x-action-buttons :actions="$actions" />

        <x-collections.table.container :headers="$tableHeaders" :items="$itemCollections">
            @foreach (data_get($itemCollections, 'data', []) as $collection)
                <x-collections.table.row>
                    <x-collections.table.column :item="$collection" field="name" />
                    <x-collections.table.column :item="$collection" field="description" />
                    <x-collections.table.row-actions
                        :actions="data_get($collection, 'actions')"
                        delete-confirm-message="¿Seguro de eliminar esta colección?"
                    />
                </x-collections.table.row>
            @endforeach

            @if (data_get($itemCollections, 'links'))
                <x-slot name="footer">
                    <x-collections.table.pagination
                        :links="data_get($itemCollections, 'links')"
                        :colspan="count($tableHeaders)"
                    />
                </x-slot>
            @endif
        </x-collections.table.container>
    </x-page-wrapper>
</x-app-layout>
