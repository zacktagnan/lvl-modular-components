<?php

namespace App\Transformers;

use App\Models\Article;

class ArticleTransformer extends DataTransformer
{
    /** @var Article */
    public function transformModel($model): array
    {
        return [
            'id' => $model->id,
            'title' => $model->title,
            'status' => $model->status,
            'status_text' => $model->getStatusTextAttribute(),
        ];
    }
}
