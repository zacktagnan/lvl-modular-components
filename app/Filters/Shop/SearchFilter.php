<?php

namespace App\Filters\Shop;

use App\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Closure;

class SearchFilter extends Filter
{
    public function handle(Builder $items, Closure $next): Builder
    {
        if (! $this->filter) {
            return $next($items);
        }

        // $items
        //     ->where('name', 'like', "%{$this->filter}%")
        //     ->where('price', 'like', "%{$this->filter}%");

        $items
            ->where('name', 'like', "%{$this->filter}%")
            ->orWhere('price', 'like', "%{$this->filter}%");

        return $next($items);
    }
}
