<?php

namespace App\Transformers;

use App\Models\ItemCollection;

class ItemCollectionTransformer extends DataTransformer
{
    /** @var ItemCollection */
    public function transformModel($model): array
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
            'description' => $model->description,
            'actions' => [
                'view' => route('collections.show', $model->id),
                'edit' => route('collections.edit', $model->id),
                'delete' => route('collections.destroy', $model->id),
            ],
        ];
    }
}
