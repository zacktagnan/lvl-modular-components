<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Size extends Base\Size
{
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
