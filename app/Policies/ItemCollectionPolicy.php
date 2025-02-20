<?php

namespace App\Policies;

use App\Models\ItemCollection;
use App\Models\User;

class ItemCollectionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ItemCollection $itemCollection): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models. XXXX
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ItemCollection $itemCollection): bool
    {
        return $user->id === $itemCollection->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ItemCollection $itemCollection): bool
    {
        return $user->id === $itemCollection->user_id;
    }

    // // Determine whether the user can restore the model.
    // public function restore(User $user, ItemCollection $itemCollection): bool
    // {
    //     return false;
    // }

    // // Determine whether the user can permanently delete the model.
    // public function forceDelete(User $user, ItemCollection $itemCollection): bool
    // {
    //     return false;
    // }
}
