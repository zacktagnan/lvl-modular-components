@props([
    'actions',
    'showText' => 'Ver',
    'showTitle' => 'Ver detalle',
    'editText' => 'Editar',
    'editTitle' => 'Editar este registro',
    'deleteText' => 'Borrar',
    'deleteTitle' => 'Borrar este registro',
    'deleteConfirmMessage' => '¿Está seguro de querer eliminar este elemento?',
])


<td class="px-6 py-4 whitespace-nowrap flex gap-2 items-center">
    @if (data_get($actions, 'view'))
        <a href="{{ data_get($actions, 'view') }}" title="{{ $showTitle }}" class="text-white bg-blue-900 hover:bg-blue-600 dark:bg-blue-400 dark:hover:bg-blue-200 p-2 rounded-md">
            {{ $showText }}
        </a>
    @endif

    @if (data_get($actions, 'edit'))
        <a href="{{ data_get($actions, 'edit') }}" title="{{ $editTitle }}" class="text-white bg-green-900 hover:bg-green-600 dark:bg-green-400 dark:hover:bg-green-200 p-2 rounded-md">
            {{ $editText }}
        </a>
    @endif

    @if (data_get($actions, 'delete'))
        <form action="{{ data_get($actions, 'delete') }}" method="POST" class="inline" onsubmit="return confirm('{{ $deleteConfirmMessage }}')">
            @csrf
            @method('DELETE')

            <button type="submit" title="{{ $deleteTitle }}" class="text-white bg-red-900 hover:bg-red-600 dark:bg-red-400 dark:hover:bg-red-200 p-2 rounded-md">
                {{ $deleteText }}
            </button>
        </form>
    @endif

    {{ $slot }}
</td>
