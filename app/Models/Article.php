<?php

namespace App\Models;

use App\Enums\ArticleStatus;
use App\Filters\Sort;
use App\Filters\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Pipeline\Pipeline;

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

    // :: Aplicando mejora sobre el básico ::
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

    // :: Aplicando Pipeline ::
    public function scopeFilteredWithPipeline(Builder $builder): Builder
    {
        return app(Pipeline::class)
            ->send($builder)
            ->through([
                Status::class,
                Sort::class,
            ])
            ->thenReturn();
    }
}
