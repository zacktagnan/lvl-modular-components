@props(['text', 'class' => 'mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md'])

<button
    type="{{ data_get($button, 'type') }}"
    title="{{ data_get($button, 'title') }}"
    class="{{ data_get($button, 'class') }}"
>
    {{ data_get($button, 'text', 'Enviar') }}
</button>
