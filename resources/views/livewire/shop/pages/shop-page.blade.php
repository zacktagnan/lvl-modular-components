<div class="w-full mx-auto p-5">
    <div class="grid grid-cols-12 gap-4">
        <!-- Sidebar Filters -->
        <div
            style="height: 90vh !important;"
            class="col-span-12 md:col-span-4 lg:col-span-4 xl:col-span-3 2xl:col-span-2 overflow-auto"
        >
            <livewire:shop.filters.category-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.price-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.color-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.size-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.brand-filter />

            <div class="my-4"></div>

            <livewire:shop.filters.rating-filter />
        </div>
        <!-- ./Sidebar Filters -->

        <!-- Products -->
        <div class="col-span-12 md:col-span-8 lg:col-span-8 xl:col-span-9 2xl:col-span-10">
            <div class="flex flex-wrap mb-3">
                <div class="flex-shrink-0">
                    <button class="px-2 pt-0.5 pb-1 text-white bg-red-400 hover:bg-red-500 rounded transition-colors duration-150" wire:click="resetFilters">
                        <i class="fas fa-undo"></i>
                    </button>
                </div>
                <div class="flex-shrink-0">
                    <livewire:shop.filters.per-page-filter />
                </div>
                <div class="flex-grow">
                    <livewire:shop.filters.search-filter />
                </div>
            </div>

            <livewire:shop.lists.product-list />
        </div>
        <!-- ./Products -->
    </div>
</div>
