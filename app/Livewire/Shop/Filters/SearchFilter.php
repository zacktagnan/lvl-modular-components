<?php

namespace App\Livewire\Shop\Filters;

use App\Traits\Livewire\WithSingleFilter;
use Illuminate\View\View;

class SearchFilter extends Filter
{
    use WithSingleFilter;

    public array $filter = [
        'search' => '',
    ];

    public string $placeholder;

    public function mount()
    {
        $this->placeholder = __('Teclear el término de búsqueda...');
    }

    public function render(): View
    {
        return view('livewire.shop.filters.search-filter');
    }
}
