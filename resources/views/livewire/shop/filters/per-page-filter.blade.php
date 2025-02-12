<div>
    <select name="" id="" class="ml-2.5 py-1.5 form-select text-sm text-end rounded" wire:model.live="filter.perPage">
        @foreach ($options as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>
    <span>registros por página</span>
</div>
