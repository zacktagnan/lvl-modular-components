<?php

namespace App\ViewModels\ItemCollections;

use App\Models\ItemCollection;
use App\ViewModels\ViewModel;

final class UpsertItemCollectionViewModel extends ViewModel
{
    public function __construct(protected ?ItemCollection $itemCollection = null)
    {}

    public function title(): string
    {
        return $this->itemCollection
            ? __('Editar colección: :name', ['name' => $this->itemCollection->name])
            : __('Crear nueva colección');
    }

    public function formFields(): array
    {
        return [
            'name' => [
                'type' => 'text',
                'label' => __('Nombre'),
                'placeholder' => __('Teclear un nombre de colección'),
                'value' => $this->itemCollection?->name,
                'required' => true,
                'maxlength' => 255,
                'hint' => __('Insertar el nombre de la colección'),
            ],
            'description' => [
                'label' => __('Descripción'),
                'placeholder' => __('Teclear una descripción'),
                'value' => $this->itemCollection?->description,
                'required' => true,
                'rows' => 3,
                'maxlength' => 1000,
                'hint' => __('Insertar la descripción de la colección'),
            ],
        ];
    }

    public function formAction(): array
    {
        return [
            'url' => $this->itemCollection
                ? route('collections.update', $this->itemCollection)
                : route('collections.store'),
            'method' => $this->itemCollection ? 'PUT' : 'POST',
        ];
    }

    public function submitButton(): array
    {
        return [
            [
                'type' => 'submit',
                'text' => $this->itemCollection
                    ? __('Actualizar')
                    : __('Crear'),
                'title' => $this->itemCollection
                    ? __('Actualizar registro')
                    : __('Crear el nuevo registro'),
                'class' => 'ml-2 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600',
            ],
        ];
    }

    public function actions(): array
    {
        return [
            'cancel' => [
                'text' => __('Cancelar'),
                'title' => __('Cancelar el proceso'),
                'method' => 'GET',
                'url' => route('collections.index'),
                'class' => 'bg-gray-500 text-white',
            ],
        ];
    }
}
