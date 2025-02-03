@props(['item', 'field', 'contentBgColor'])

@if ($field === 'id')
    <div class="{{ $contentBgColor }} text-white px-3 py-1.5 min-w-9 rounded text-center">
        <span class="shadow_for_text">{{ data_get($item, $field) }}</span>
    </div>
@endif
@if ($field === 'title')
    <div class="{{ $contentBgColor }} text-white w-1/2 px-3 py-1.5 rounded">
        <span class="shadow_for_text">{{ data_get($item, $field) }}</span>
    </div>
@endif
@if ($field === 'status')
    <div class="{{ $contentBgColor }} text-white px-3 py-1.5 rounded text-center">
        <span class="shadow_for_text">{{ data_get($item, $field) }} - {{ data_get($item, 'status_text') }}</span>
    </div>
@endif
