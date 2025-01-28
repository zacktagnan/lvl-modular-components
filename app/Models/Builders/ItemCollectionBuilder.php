<?php

namespace App\Models\Builders;

use App\Models\ItemCollection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ItemCollectionBuilder extends Builder
{
    protected $model = ItemCollection::class;

    public function forLoggedUser(): self
    {
        // return $this->where('user_id', auth()->id());
        return $this->where('user_id', Auth::id());
    }
}
