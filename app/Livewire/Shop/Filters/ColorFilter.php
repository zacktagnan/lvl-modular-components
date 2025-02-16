<?php

namespace App\Livewire\Shop\Filters;

use App\Models\Color;
use App\Traits\Livewire\WithModelsFilter;
use App\Traits\Livewire\WithMultipleFilter;

class ColorFilter extends Filter
{
    use WithModelsFilter, WithMultipleFilter;

    public string $title;
    protected string $eloquentModel = Color::class;

    public function mount()
    {
        $this->title = __('Colores');
    }
}
