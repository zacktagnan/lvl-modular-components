<?php

namespace App\Traits\Livewire;

use Illuminate\Support\Str;
use Livewire\Attributes\On;
use App\Livewire\Shop\Filters\Filter;

/**
 * @mixin Filter
 */
trait WithMultipleFilter
{
    public array $selectedModels = [];

    #[On('shop-reset-filters')]
    public function onResetFilters(): void
    {
        // dump('selectedModels antes de resetearlo', $this->selectedModels);
        $this->selectedModels = [];
        // dd($this->selectedModels);
        // -------------------------------------------------------------------
        // $this->dispatch('refresh')->self();
        $this->dispatch('reset-checkboxes');
    }

    public function updatedSelectedModels(): void
    {
        $filters = [
            Str::of(class_basename($this->eloquentModel))->lower()->toString() => $this->selectedModels,
        ];
        // por ejemplo, uno de los elementos de $filters podría ser:
        // ['category' => [1, 2, 3]]

        $this->applyFilters($filters);
    }
}
