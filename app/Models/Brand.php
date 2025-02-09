<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Base\Brand
{
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
