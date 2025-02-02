@props([
    'actions',
    'showText' => 'Ver',
    'editText' => 'Ver',
    'deleteText' => 'Ver',
    'deleteConfirmMessage' => '¿Está seguro de querer eliminar este elemento?',
])


<td class="px-6 py-4 whitespace-nowrap flex gap-2 items-center">
    @if (data_get($actions, 'view'))
        <a href="{{ data_get($actions, 'view') }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-200">
            {{ $showText }}
        </a>
    @endif

    @if (data_get($actions, 'edit'))
        <a href="{{ data_get($actions, 'edit') }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-200">
            {{ $editText }}
        </a>
    @endif

    @if (data_get($actions, 'delete'))
        <form action="{{ data_get($actions, 'delete') }}" method="POST" class="inline" onsubmit="return confirm({{ $deleteConfirmMessage }})">
            @csrf
            @method('DELETE')

            <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-200">
                {{ $deleteText }}
            </button>
        </form>
    @endif

    {{ $slot }}
</td>
