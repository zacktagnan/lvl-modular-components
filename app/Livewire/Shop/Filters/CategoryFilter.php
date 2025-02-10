<?php

namespace App\Livewire\Shop\Filters;

use App\Models\Category;
use App\Traits\Livewire\WithModelsFilter;
use App\Traits\Livewire\WithMultipleFilter;

class CategoryFilter extends Filter
{
    use WithModelsFilter, WithMultipleFilter;

    // public string $title = __('Categorías');
    public string $title = 'Categorías';

    protected string $eloquentModel = Category::class;
}
