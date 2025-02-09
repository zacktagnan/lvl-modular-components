<x-filter-card :title="$title">
    <ul class="list-none border-0">
        @foreach ($models as $model)
            <li
                class="px-4 py-2 border-b border-gray-200"
                wire:key="{{ $alias }}-filter-{{ $model->id }}"
            >
                <input
                    class="form-checkbox me-1"
                    type="checkbox"
                    value="{{ $filter->id }}"
                    id="{{ $alias }}-filter-{{ $model->id }}"
                    wire:model.live="selectedModels"
                />
                <label
                    class="ml-2"
                    for="{{ alias }}-filter-{{ $model->id }}"
                >
                    {{ $model->name }}
                </label>
                <span class="inline-block px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded">
                    {{ $model->products_count }}
                </span>
            </li>
        @endforeach
    </ul>
</x-filter-card>
