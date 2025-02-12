<?php

namespace App\Livewire\Shop\Filters;

use App\Traits\Livewire\WithSingleFilter;
use Illuminate\View\View;

class PerPageFilter extends Filter
{
    use WithSingleFilter;

    public array $filter = [
        'perPage' => self::DEFAULT_PER_PAGE,
    ];

    const DEFAULT_PER_PAGE = 4;

    public function render(): View
    {
        return view('livewire.shop.filters.per-page-filter', [
            'options' => [2, 4, 8, 12, 16, 20, 24, 28],
        ]);
    }
}
