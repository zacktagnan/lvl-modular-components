<?php

namespace App\Models;

use App\Models\Builders\ItemCollectionBuilder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemCollection extends Base\ItemCollection
{
    public function newEloquentBuilder($query): ItemCollectionBuilder
    {
        return new ItemCollectionBuilder($query);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
