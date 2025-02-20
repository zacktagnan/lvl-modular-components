@props(['action'])

<a
    href="{{ data_get($action, 'url') }}" title="{{ data_get($action, 'title') }}"
    class="{{ data_get($action, 'class') }}"
>
    {{ data_get($action, 'text') }}
</a>
