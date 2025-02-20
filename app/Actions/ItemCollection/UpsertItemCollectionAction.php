<?php

namespace App\Actions\ItemCollection;

use App\DTOs\ItemCollectionDTO;
use App\Models\ItemCollection;
use Illuminate\Support\Facades\Auth;

final class UpsertItemCollectionAction
{
    public function execute(ItemCollectionDTO $dto, ?ItemCollection $itemCollection = null): ItemCollection
    {
        /** @var User|null $user */
        // $user = auth()->user();
        // return $user->itemCollections()->updateOrCreate(
        //     ['id' => $itemCollection?->id],
        //     $dto->toArray()
        // );

        $user = Auth::user();
        return $user->itemCollections()->updateOrCreate(
            ['id' => $itemCollection?->id],
            $dto->toArray()
        );
    }
}
