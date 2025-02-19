<?php

namespace App\ViewModels\Tasks;

use App\Transformers\TaskTransformer;
use App\ViewModels\ViewModel;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

final class GetTaskViewModel extends ViewModel
{
    public function __construct(protected TaskTransformer $transformer)
    {}

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     *
     * @return string
     */
    public function title(): string
    {
        return __('Tareas');
    }

    public function subtitle(): string
    {
        return __('Listado');
    }

    // public function tasks(): array
    // {
    //     return $this->transformer->transform(
    //         Task::forLoggedUser()->paginate(1)
    //     );
    // }

    public function actions(): array
    {
        return [
            [
                'title' => __('Crear una nueva tarea'),
                'url' => route('tasks.create'),
                'text' => __('Crear'),
                'class' => 'ml-2 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600',
            ],
        ];
    }
}
