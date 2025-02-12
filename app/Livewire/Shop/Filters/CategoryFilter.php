<?php

namespace App\Livewire\Shop\Filters;

use App\Models\Category;
use App\Traits\Livewire\WithModelsFilter;
use App\Traits\Livewire\WithMultipleFilter;

class CategoryFilter extends Filter
{
    use WithModelsFilter, WithMultipleFilter;

    // public string $title = __('Categorías');
    // public string $title = 'Categorías';
    public string $title;

    protected string $eloquentModel = Category::class;

    // public function __construct()
    // {
    //     $this->title = __('Categorías');
    // }
    // o
    public function mount()
    {
        $this->title = __('Categorías');
    }
}
