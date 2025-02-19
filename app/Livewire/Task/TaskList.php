<?php

namespace App\Livewire\Task;

use App\Models\User;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class TaskList extends Component
{
    use WithPagination;

    public ?int $taskToDelete = null;

    public function edit(int $id): void
    {
        //
    }

    public function toggle(int $id): void
    {
        //
    }

    public function preDelete(int $id): void
    {
        //
    }

    public function delete(): void
    {
        //
    }

    public function render(): View
    {
        /** @var User|null $user */
        $user = Auth::user();
        $tasks = $user->tasks()->paginate(10);
        return view('livewire.task.task-list', compact('tasks'));
    }
}
