<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Color extends Base\Color
{
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
