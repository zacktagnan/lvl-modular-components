<div class="bg-white shadow-lg rounded-lg h-full">
    <img src="{{ $product->image }}" class="w-full h-48 object-cover rounded-t-lg" alt="{{ $product->name }}" />

    <div class="p-4">
        <h5 class="text-lg font-bold">{{ $product->name }}</h5>
    </div>

    <!-- category, color, size, price, brand -->
    <ul class="divide-y divide-gray-200">
        <li class="py-2 px-4">
            <div class="flex justify-between">
                <div class="font-semibold">{{ __("Categoría") }}</div>
                <div>{{ $product->category->name }}</div>
            </div>
        </li>
        <li class="py-2 px-4">
            <div class="flex justify-between">
                <div class="font-semibold">{{ __("Color") }}</div>
                <div>{{ $product->color->name }}</div>
            </div>
        </li>
        <li class="py-2 px-4">
            <div class="flex justify-between">
                <div class="font-semibold">{{ __("Tamaño") }}</div>
                <div>{{ $product->size->name }}</div>
            </div>
        </li>
        <li class="py-2 px-4">
            <div class="flex justify-between">
                <div class="font-semibold">{{ __("Precio") }}</div>
                <div>{{ $product->price }} €</div>
            </div>
        </li>
        <li class="py-2 px-4">
            <div class="flex justify-between">
                <div class="font-semibold">{{ __("Marca") }}</div>
                <div>{{ $product->brand->name }}</div>
            </div>
        </li>
    </ul>

    <!-- rating -->
    <div class="p-4 border-t border-gray-200">
        <div class="flex justify-between">
            <div class="font-semibold">{{ __("Valoración") }}</div>
            <div>
                @for($i = 1; $i <= 5; $i++)
                    <i class="fas fa-star {{ $i <= $product->reviews->avg('rating') ? 'text-yellow-500' : 'text-gray-300' }}"></i>
                @endfor
            </div>
        </div>
    </div>
</div>
