@props(['hint'])

@if ($hint)
    <p class="ml-1 italic text-sm text-gray-400 dark:text-gray-200">
        {{ $hint }}
    </p>
@endif
