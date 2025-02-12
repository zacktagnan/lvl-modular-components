<x-filter-card :title="$title">
    <ul class="list-none border-0">
        @foreach ($models as $model)
            @php
                $classNotFirst = !$loop->first
                    ? ' pt-2 border-t border-gray-200'
                    : '';
                $classNotLast = !$loop->last
                    ? ' pb-2'
                    : '';
            @endphp
            <li
                class="flex items-center justify-between px-4{{ $classNotFirst }}{{ $classNotLast }}"
                wire:key="{{ $alias }}-filter-{{ $model->id }}"
            >
                <div class="flex items-center">
                    <input
                        class="form-checkbox"
                        type="checkbox"
                        value="{{ $model->id }}"
                        id="{{ $alias }}-filter-{{ $model->id }}"
                        wire:model.live="selectedModels"
                    />
                    {{-- @json($selectedModels)
                    @json($model->id) --}}
                    <label
                        class="ml-2"
                        for="{{ $alias }}-filter-{{ $model->id }}"
                    >
                        {{ $model->name }}
                    </label>
                </div>
                <span class="inline-block px-2 pt-0.5 pb-1 text-xs font-semibold text-white bg-blue-500 rounded-full">
                    {{ $model->products_count }}
                </span>
            </li>
        @endforeach
        {{-- @json($selectedModels) --}}
    </ul>
</x-filter-card>


@script
<script>
    $wire.on('clean-checkboxes', () => {
        // console.log('clean-checkboxes...');
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.checked = false;  // Forzar los checkboxes a no estar marcados
        });
    });
</script>
@endscript
