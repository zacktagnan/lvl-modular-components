<div>
    <select name="" id="per-page-select" class="ml-2.5 py-1.5 form-select text-sm text-end rounded" wire:model.live="filter.perPage">
        @foreach ($options as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>
    <span>registros por página</span>
</div>

@script
<script>
    $wire.on('reset-select-per-page', () => {
        const defaultPerPage = {{ \App\Livewire\Shop\Filters\PerPageFilter::DEFAULT_PER_PAGE }};
        document.getElementById('per-page-select').value = defaultPerPage;
    });
</script>
@endscript
