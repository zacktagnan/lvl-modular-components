<?php

namespace App\Actions\ItemCollection;

use App\Models\ItemCollection;

final class DeleteItemCollectionAction
{
    public function execute(ItemCollection $collection): void
    {
        $collection->delete();
    }
}
