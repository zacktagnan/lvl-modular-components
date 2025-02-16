<?php

namespace App\Livewire\Shop\Pages;

use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\On;
use App\Livewire\Shop\Lists\ProductList;

class ShopPage extends Component
{
    private int $total = 0;

    public function resetFilters(): void
    {
        $this->dispatch('reset-filters')->to(ProductList::class);
    }

    #[On('product-count-updated')]
    public function onProductCountUpdated(int $total = 0): void
    {
        $this->total = $total;
    }

    public function render(): View
    {
        return view('livewire.shop.pages.shop-page', [
            'total' => $this->total,
        ]);
    }
}
