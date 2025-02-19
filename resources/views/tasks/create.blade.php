<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <x-page-wrapper>
        <x-action-buttons-subtitle :subtitle="'Crear'" :actions="$actions" />

        <div class="mt-4 bg-white dark:bg-gray-800 dark:text-white shadow-sm p-4 rounded">
            <livewire:task.create-task />
        </div>

        {{-- <x-table.container :headers="$tableHeaders" :items="$itemCollections">
            @foreach (data_get($itemCollections, 'data', []) as $collection)
                <x-table.row>
                    <x-table.column :item="$collection" field="name" />
                    <x-table.column :item="$collection" field="description" />
                    <x-table.row-actions
                        :actions="data_get($collection, 'actions')"
                        delete-confirm-message="¿Seguro de eliminar esta colección?"
                    />
                </x-table.row>
            @endforeach

            @if (data_get($itemCollections, 'links'))
                <x-slot name="footer">
                    <x-table.pagination
                        :links="data_get($itemCollections, 'links')"
                        :colspan="count($tableHeaders)"
                    />
                </x-slot>
            @endif
        </x-table.container> --}}
    </x-page-wrapper>
</x-app-layout>
