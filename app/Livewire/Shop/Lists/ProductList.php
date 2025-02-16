<?php

namespace App\Livewire\Shop\Lists;

use App\Models\Product;
use Livewire\Component;
use Illuminate\View\View;
use App\Enums\Filters\ShopFilters;
use App\Livewire\Shop\Filters\PerPageFilter;
use App\Livewire\Shop\Pages\ShopPage;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductList extends Component
{
    use WithPagination;

    private array $filters = [
        'category' => [],
        'price' => [],
        'color' => [],
        'search' => '',
        'rating' => null,
    ];

    public function mount(): void
    {
        $this->resetFilters();
    }

    #[On('filters-updated')]
    public function onFiltersUpdated(mixed $filters): void
    {
        $key = key($filters);
        $value = $filters[$key];
        // dd($value);
        session()->put("shop:{$key}", $value);
        $this->gotoPage(1);
    }

    #[On('reset-filters')]
    public function onResetFilters(): void
    {
        $this->resetFilters();

        $this->dispatch('shop-reset-filters');
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

        $total = $products->count();

        $this->dispatch('product-count-updated', total: $total)->to(ShopPage::class);

        return $products
            ->paginate(session(key: 'shop:perPage', default: PerPageFilter::DEFAULT_PER_PAGE));
    }

    public function render(): View
    {
        return view('livewire.shop.lists.product-list', [
            'products' => $this->getProducts(),
        ]);
    }
}
