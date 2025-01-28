<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class ItemCollection extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];
}
