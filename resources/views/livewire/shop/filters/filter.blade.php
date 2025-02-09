<x-filter-card :title="$title">
    <ul class="list-none border-0">
        @foreach ($filters as $filter)
            <li
                class="px-4 py-2 border-b border-gray-200"
                wire:key="{{ $alias }}-filter-{{ $filter->id }}"
            >
                <input
                    class="form-checkbox me-1"
                    type="checkbox"
                    value="{{ $filter->id }}"
                    id="{{ $alias }}-filter-{{ $filter->id }}"
                    wire:model.live="selectedFilters"
                />
                <label
                    class="ml-2"
                    for="{{ alias }}-filter-{{ $filter->id }}"
                >
                    {{ $filter->name }}
                </label>
                <span class="inline-block px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded">
                    {{ $filter->products_count }}
                </span>
            </li>
        @endforeach
    </ul>
</x-filter-card>
