@props(['button'])

<button
    type="{{ data_get($button, 'type') }}"
    title="{{ data_get($button, 'title') }}"
    class="{{ data_get($button, 'class') }}"
>
    {{ data_get($button, 'text', 'Enviar') }}
</button>
