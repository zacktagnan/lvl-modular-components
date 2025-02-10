<?php

namespace App\Livewire\Shop\Pages;

use App\Models\Product;
use Livewire\Component;
use Illuminate\View\View;

class ShopPage extends Component
{
    public function resetFilters(): void
    {
        // Reset filters
    }

    public function render(): View
    {
        return view('livewire.shop.pages.shop-page');
    }
}
