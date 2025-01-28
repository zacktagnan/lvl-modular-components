<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Base\User
{
    public function itemCollections(): HasMany
    {
        return $this->hasMany(ItemCollection::class);
    }
}
