<?php

namespace App\ViewModels\ItemCollections;

use App\Models\ItemCollection;
use App\Transformers\ItemCollectionTransformer;
use App\ViewModels\ViewModel;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

final class GetItemCollectionViewModel extends ViewModel
{
    public function __construct(protected ItemCollectionTransformer $transformer)
    {

    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     *
     * @return string
     */
    public function title(): string
    {
        return __('Colecciones (página :page)', ['page' => request()->get('page', 1)]);
    }

    public function itemCollections(): array
    {
        return $this->transformer->transform(
            ItemCollection::forLoggedUser()->paginate(1)
        );
    }

    public function actions(): array
    {
        return [
            [
                'title' => __('Crear un nuevo registro'),
                'url' => route('collections.create'),
                'text' => __('Crear'),
                'class' => 'ml-2 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600',
            ],
        ];
    }

    public function tableHeaders(): array
    {
        return [
            __('Nombre'),
            __('Descripción'),
            __('Acciones'),
        ];
    }
}
