<div>
    <select name="" id="per-page-select" class="py-1.5 form-select text-sm text-end rounded shadow border-gray-300" wire:model.live="filter.perPage">
        @foreach ($options as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>
    <span>{{ $label }}</span>
</div>
