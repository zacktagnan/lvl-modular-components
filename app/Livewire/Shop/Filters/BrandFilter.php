<?php

namespace App\Livewire\Shop\Filters;

use App\Models\Brand;
use App\Traits\Livewire\WithModelsFilter;
use App\Traits\Livewire\WithMultipleFilter;

class BrandFilter extends Filter
{
    use WithModelsFilter, WithMultipleFilter;

    public string $title;
    protected string $eloquentModel = Brand::class;

    public function mount()
    {
        $this->title = __('Marcas');
    }
}
