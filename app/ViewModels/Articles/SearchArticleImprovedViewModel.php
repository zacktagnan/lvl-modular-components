<?php

namespace App\ViewModels\Articles;

use App\Models\Article;
use App\ViewModels\ViewModel;
use App\Transformers\ArticleTransformer;

class SearchArticleImprovedViewModel extends ViewModel
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
        return __('Resultado de refactorizar el buscador básico a mejorado.');
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
    }
}
