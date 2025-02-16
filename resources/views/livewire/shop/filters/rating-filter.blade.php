<x-filter-card :title="$title">
    <ul class="list-none border-0">
        @foreach ($options as $rating => $text)
            @php
                $classNotFirst = !$loop->first
                    ? ' pt-2 border-t border-gray-300'
                    : '';
                $classNotLast = !$loop->last
                    ? ' pb-2'
                    : '';
            @endphp
            <li
                class="flex items-center justify-between px-4{{ $classNotFirst }}{{ $classNotLast }}"
                wire:key="rating-filter-{{ $rating }}"
            >
                <div class="flex items-center">
                    <input
                        class="form-radio"
                        type="radio"
                        value="{{ $rating }}"
                        name="rating"
                        id="rating-filter-{{ $rating }}"
                        wire:model.live="filter.rating"
                    />
                    <label
                        class="ml-2"
                        for="rating-filter-{{ $rating }}"
                    >
                        {{ $text }}
                    </label>
                </div>
            </li>
        @endforeach
    </ul>
</x-filter-card>
