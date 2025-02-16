<?php

namespace App\Livewire\Shop\Filters;

use App\Traits\Livewire\WithSingleFilter;
use Illuminate\View\View;

class RatingFilter extends Filter
{
    use WithSingleFilter;

    public string $title;

    public array $filter = [
        'rating' => null,
    ];

    public function mount()
    {
        $this->title = __('Valoraciones');
    }

    public function render(): View
    {
        return view('livewire.shop.filters.rating-filter', [
            'options' => [
                5 => '5 estrellas',
                4 => '4 estrellas o más',
                3 => '3 estrellas o más',
                2 => '2 estrellas o más',
                1 => '1 estrella o más',
            ],
        ]);
    }
}
