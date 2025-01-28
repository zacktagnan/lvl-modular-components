<?php

namespace App\Transformers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

abstract class DataTransformer
{
    abstract protected function transformModel($model): array;

    public function transform($data): array
    {
        if ($data instanceof LengthAwarePaginator) {
            return $this->transformPaginator($data);
        }

        if (is_array($data) || $data instanceof Collection) {
            return $this->transformCollection($data);
        }

        return $this->transformModel($data);
    }

    protected function transformCollection($data): array
    {
        // $data puede ser de tipo Array o Collection ... si es Array, se convertirá a Collection
        return collect($data)
            ->map(fn ($item) => $this->transformModel($item))
            ->toArray();
    }

    protected function transformPaginator(LengthAwarePaginator $paginator): array
    {
        return [
            'data' => $this->transformCollection($paginator->items()),
            'links' => $paginator->links()->toHtml(),
        ];
    }
}
