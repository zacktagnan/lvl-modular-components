<?php

namespace App\Models;

use App\Enums\ArticleStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    public function getStatusTextAttribute()
    {
        return match ((int) $this->status) {
            ArticleStatus::APPROVED->value => 'aprobado',
            ArticleStatus::PENDING->value => 'pendiente',
            ArticleStatus::REJECTED->value => 'rechazado',
            default => 'desconocido',
        };
    }

    public function scopeFiltered(Builder $builder): Builder
    {
        return $builder
            ->when(request()->query('status'), function ($query) {
                $query->where('status', request()->query('status'));
            })
            ->when(request()->query('sort'), function ($query) {
                $query->orderBy('id', request()->query('sort'));
            });
    }
}
