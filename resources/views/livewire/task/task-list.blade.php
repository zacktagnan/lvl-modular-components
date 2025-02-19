<div>
    @forelse ($tasks as $task)
        <div class="flex justify-between">
            <div>
                <h3 class="text-lg font-bold">{{ $task->title }}</h3>

                <p class="text-sm {{ $task->done ? 'line-through' : '' }}">
                    {{ $task->description }}
                </p>
            </div>

            <div>
                <button
                    wire:click="toggle({{ $task->id }})"
                    class="{{ $todo->done ? 'bg-red-500 hover:bg-red-700' : 'bg-green-500 hover:bg-green-700' }} text-white font-bold py-2 px-4 rounded"
                >
                    Marcar como {{ $task->done ? 'pendiente' : 'completada' }}
                </button>

                <button
                    wire:click="edit({{ $task->id }})"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                >
                    Editar
                </button>

                <button
                    wire:click="preDelete({{ $task->id }})"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                >
                    Eliminar
                </button>
            </div>
        </div>
    @empty
        <p>No hay TAREAS disponibles.</p>
    @endforelse

    {{-- Modal para el DELETE --}}

    {{ $tasks->links() }}
</div>
