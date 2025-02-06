<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

final class Status extends QueryStringFilter
{
    protected function apply(Builder $builder): Builder
    {
        return $builder->where('status', request()->query($this->filterName()));
    }

    protected function filterName(): string
    {
        return 'status';
    }
}
