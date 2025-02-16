<?php

namespace App\Livewire\Shop\Filters;

use App\Models\Size;
use App\Traits\Livewire\WithModelsFilter;
use App\Traits\Livewire\WithMultipleFilter;

class SizeFilter extends Filter
{
    use WithModelsFilter, WithMultipleFilter;

    public string $title;
    protected string $eloquentModel = Size::class;

    public function mount()
    {
        $this->title = __('Tamaños');
    }
}
