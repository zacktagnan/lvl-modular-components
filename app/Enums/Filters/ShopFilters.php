<?php

namespace App\Enums\Filters;

use App\Filters\Filter;
use App\Filters\Shop\PriceFilter;
use App\Filters\Shop\SearchFilter;
use App\Filters\Shop\CategoryFilter;
use App\Filters\Shop\ColorFilter;
use App\Filters\Shop\RatingFilter;

enum ShopFilters: string
{
    case CATEGORY = 'category';
    case PRICE = 'price';
    case COLOR = 'color';
    // case SIZE = 'size';
    // case BRAND = 'brand';
    case RATING = 'rating';
    // case SORT = 'sort';
    case SEARCH = 'search';

    public function create(array|string|int|null $filter): Filter
    {
        return match($this) {
            self::CATEGORY => new CategoryFilter($filter),
            self::PRICE => new PriceFilter($filter),
            self::COLOR => new ColorFilter($filter),
            // self::SIZE => new SizeFilter($filter),
            // self::BRAND => new BrandFilter($filter),
            self::RATING => new RatingFilter($filter),
            // self::SORT => new SortFilter($filter),
            self::SEARCH => new SearchFilter($filter),
        };
    }
}
