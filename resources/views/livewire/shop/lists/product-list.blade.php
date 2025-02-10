<div class="w-full">
    <div class="grid grid-cols-4 gap-4">
        @forelse ($products as $product)
            <x-product-card :product="$product" />
        @empty
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Ups!</strong>
                <span class="block sm:inline">No hay productos para mostrar.</span>
                <button type="button" class="absolute top-0 right-0 mt-2 mr-2" aria-label="Close" onclick="this.parentElement.style.display='none';">
                    <span class="text-yellow-700">&times;</span>
                </button>
            </div>
        @endforelse
    </div>

    <div class="w-full mt-4">
        {{ $products->links() }}
    </div>
</div>
