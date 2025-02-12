<?php

namespace App\Livewire\Shop\Pages;

use Livewire\Component;
use Illuminate\View\View;
use App\Livewire\Shop\Lists\ProductList;

class ShopPage extends Component
{
    public function resetFilters(): void
    {
        $this->dispatch('reset-filters')->to(ProductList::class);
    }

    public function render(): View
    {
        return view('livewire.shop.pages.shop-page');
    }
}
