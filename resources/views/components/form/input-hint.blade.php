@props(['hint'])

@if ($hint)
    <p class="text-sm text-gray-500 dark:text-gray-300">
        {{ $hint }}
    </p>
@endif
