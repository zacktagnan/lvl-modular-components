<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'done',
    ];
}
