<div class="container-fluid p-5">
    <div class="flex flex-wrap">
        <!-- Sidebar Filters -->
        <div
            style="height: 90vh !important;"
            class="w-full md:w-1/3 lg:w-1/3 xl:w-1/4 2xl:w-1/6 overflow-auto"
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
        <div class="w-full md:w-2/3 lg:w-2/3 xl:w-3/4 2xl:w-5/6">
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

            <div class="flex flex-wrap">
                <div class="w-full">
                    <livewire:shop.lists.products-list />
                </div>
            </div>
        </div>
        <!-- ./Products -->
    </div>
</div>
