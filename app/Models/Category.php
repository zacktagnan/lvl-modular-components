<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Base\Category
{
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
