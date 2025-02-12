<?php

namespace App\Traits\Livewire;

use Livewire\Attributes\On;
use App\Livewire\Shop\Filters\Filter;

/**
 * @mixin Filter
 * @property array $filter
 */
trait WithSingleFilter
{
    #[On('shop-reset-filters')]
    public function onResetFilters(): void
    {
        $this->filter = [];

        $this->dispatch('reset-select-per-page');

        $this->dispatch('reset-search');
    }

    public function updatedFilter(): void
    {
        $this->applyFilters($this->filter);
    }
}
