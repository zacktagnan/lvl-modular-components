@props(['subtitle', 'actions'])

<div {{ $attributes->merge([
    'class' => 'flex justify-between items-center bg-white dark:bg-gray-800 dark:text-white shadow-sm p-4 rounded'
]) }}>
    <h3 class="text-lg">{{ $subtitle }}</h3>

    <div>
        @foreach ($actions as $action)
            <a href="{{ data_get($action, 'url') }}" title="{{ data_get($action, 'title') }}" class="{{ data_get($action, 'class') }}">
                {{ data_get($action, 'text') }}
            </a>
        @endforeach
    </div>
</div>
