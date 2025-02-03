<?php

namespace App\ViewModels\Articles;

use App\Models\Article;
use App\ViewModels\ViewModel;
use App\Transformers\ArticleTransformer;

class SearchArticleViewModel extends ViewModel
{
    public function __construct(protected ArticleTransformer $transformer)
    {}

    // public function allCount(): int
    // {
    //     return Snippet::count();
    // }

    // public function activeCount(): int
    // {
    //     return Snippet::where('active', true)->count();
    // }
    public function title(): string
    {
        return __('Buscadores-01');
    }

    public function introMessage(): string
    {
        return __('Resultado de implementar un buscador de forma básica.');
    }

    public function articles()
    {
        // Mejorado
        // -----------------------------------------------------------------------------------
        return $this->transformer->transform(
            // Article::where('title', 'xxx')->paginate(5)
            Article::filtered()
            ->paginate(5)
            ->withQueryString()
        );

        // Básico
        // -----------------------------------------------------------------------------------
        // return $this->transformer->transform(
        //     // Article::where('title', 'xxx')->paginate(5)
        //     Article::when(request()->query('status'), function ($query) {
        //         $query->where('status', request()->query('status'));
        //     })
        //     ->when(request()->query('sort'), function ($query) {
        //         $query->orderBy('id', request()->query('sort'));
        //     })
        //     ->paginate(5)
        //     ->withQueryString()
        // );

        // OK
        // return Article::when(request()->query('status'), function ($query) {
        //         $query->where('status', request()->query('status'));
        //     })
        //     ->when(request()->query('sort'), function ($query) {
        //         $query->orderBy('id', request()->query('sort'));
        //     })
        //     ->paginate(5)
        //     // Para pasar las QUERY_STRINGs disponibles a lo largo de la paginación
        //     ->withQueryString();
    }
}
