<?php

namespace App\Livewire\Shop\Filters;

use App\Traits\Livewire\WithSingleFilter;
use Illuminate\View\View;

class PriceFilter extends Filter
{
    use WithSingleFilter;

    public string $title;

    public array $filter = [
        'price' => [
            'min' => '',
            'max' => '',
        ],
    ];

    public function mount()
    {
        $this->title = __('Precio');
    }

    public function render(): View
    {
        return view('livewire.shop.filters.price-filter');
    }
}
