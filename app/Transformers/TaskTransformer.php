<?php

namespace App\Transformers;

use App\Models\Task;

class TaskTransformer extends DataTransformer
{
    /** @var Task */
    public function transformModel($model): array
    {
        return [
            'id' => $model->id,
            'title' => $model->title,
            'description' => $model->description,
            'done' => $model->done,
            'actions' => [
                'view' => route('tasks.toggle', $model->id),
                'edit' => route('tasks.edit', $model->id),
                'delete' => route('tasks.destroy', $model->id),
            ],
        ];
    }
}
