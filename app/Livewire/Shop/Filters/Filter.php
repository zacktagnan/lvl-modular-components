<?php

namespace App\Livewire\Shop\Filters;

use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Livewire\Shop\Lists\ProductList;
use Illuminate\Database\Eloquent\Collection;

class Filter extends Component
{
    public string $title;

    protected string $eloquentModel;

    public function models(): Collection
    {
        return collect();
    }

    public function applyFilters(array $filters): void
    {
        $this->dispatch('filters-updated', filters: $filters)->to(ProductList::class);
    }

    public function render(): View
    {
        return view('livewire.shop.filters.filter', [
            'models' => $this->models(),
            'alias' => Str::of(class_basename($this->eloquentModel))->lower(),
        ]);
    }
}
