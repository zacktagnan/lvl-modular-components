<?php

namespace App\Livewire\Shop\Lists;

use App\Enums\ShopFilters;
use App\Models\Product;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductList extends Component
{
    use WithPagination;

    private array $filters = [
        'category' => [1,2],
    ];

    public function mount(): void
    {
        $this->resetFilters();
    }

    private function resetFilters(): void
    {
        collect($this->filters)
            ->each(fn ($filter, $key) => session()->forget("shop:{$key}"));

        session()->forget('shop:perPage');

        $this->gotoPage(1);
    }

    private function filters(): array
    {
        return collect($this->filters)
            ->map(fn ($filter, $key) => session(key: "shop:{$key}", default: $filter))
            ->toArray();
    }

    private function getProducts(): LengthAwarePaginator
    {
        $products = app(Pipeline::class)
            ->send(Product::query()
                ->with([
                    'brand:id,name',
                    'category:id,name',
                    'color:id,name',
                    'size:id,name',
                    'reviews:id,product_id,rating',
                ])
            )
            ->through(
                collect($this->filters())
                    ->map(fn ($filter, $value) => ShopFilters::from($value)->create($filter))
                    ->values()
                    ->all(),
            )
            ->thenReturn();

        return $products
            ->paginate(session(key: 'shop:perPage', default: 4));
    }

    public function render(): View
    {
        return view('livewire.shop.lists.product-list', [
            'products' => $this->getProducts(),
        ]);
    }
}
