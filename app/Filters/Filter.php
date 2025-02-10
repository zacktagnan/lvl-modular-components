<?php

namespace App\Filters;

use Closure;
use Illuminate\Database\Eloquent\Builder;

abstract class Filter
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected readonly array|string|int|null $filter)
    {}

    abstract public function handle(Builder $items, Closure $next): Builder;
}
