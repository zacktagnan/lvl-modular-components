<x-filter-card :title="$title">
    <div class="flex items-center justify-between w-full">
        <div class="relative flex">
            <div class="px-2.5 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center text-slate-800 dark:text-slate-400"> € </div>
            <input wire:model.debounce.1000.live="filter.price.min" id="min-price" type="number" class="block box-border text-sm leading-4.5 px-2.5 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all w-24 placeholder:text-gray-400" placeholder="Mín." autocomplete="off">
        </div>

        <div class="relative flex">
            <div class="px-2.5 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center text-slate-800 dark:text-slate-400">€</div>
            <input wire:model.debounce.1000.live="filter.price.max" id="max-price" type="number" class="block box-border text-sm leading-4.5 px-2.5 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all w-24 placeholder:text-gray-400" placeholder="Máx." autocomplete="off">
        </div>
    </div>
</x-filter-card>
