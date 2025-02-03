<?php

namespace App\ViewModels\Articles;

use App\ViewModels\ViewModel;

final class PipelineSearcherViewModel extends ViewModel
{
    public function title(): string
    {
        return __('Buscadores');
    }

    public function welcomeMessage(): string
    {
        return __('Serie de buscadores implementados, o no, bajo el patrón de diseño Pipeline.');
    }

    public function actions(): array
    {
        return [
            [
                'title' => __('Buscadores-01'),
                'description' => __('Varias formas de implementar un buscador.'),
                'options' => [
                    [
                        'title' => __('Básico'),
                        'url' => route('searchers.pipeline-1d2.basic.articles'),
                    ],
                    [
                        'title' => __('Mejorado'),
                        'url' => route('profile.edit'),
                    ],
                    [
                        'title' => __('Patrón Pipeline'),
                        'url' => route('profile.edit'),
                    ],
                ],
            ],
            [
                'title' => __('Buscadores-02'),
                'description' => __('Implementando un buscador.'),
                'options' => [
                    [
                        'title' => __('Básico'),
                        'url' => route('profile.edit'),
                    ],
                    [
                        'title' => __('Mejorado'),
                        'url' => route('profile.edit'),
                    ],
                    [
                        'title' => __('Patrón Pipeline'),
                        'url' => route('profile.edit'),
                    ],
                ],
            ],
            [
                'title' => __('Buscadores-03'),
                'description' => __('Buscador con Livewire y Pipeline.'),
                'options' => [
                    // __('Básico'),
                    // __('Mejorado'),
                    // __('Patrón Pipeline'),
                ],
            ],
        ];
    }
}
