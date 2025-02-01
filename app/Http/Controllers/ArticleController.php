<?php

namespace App\Http\Controllers;

use App\ViewModels\GetArticleViewModel;
use Illuminate\View\View;

class ArticleController extends Controller
{
    // public function __invoke(): View
    // {
    //     $articles = Article::when(request()->query('status'), function ($query) {
    //             $query->where('status', request()->query('status'));
    //         })
    //         ->when(request()->query('sort'), function ($query) {
    //             $query->orderBy('id', request()->query('sort'));
    //         })
    //         ->paginate(5)
    //         // Para pasar las QUERY_STRINGs disponibles a lo largo de la paginación
    //         ->withQueryString();

    //     return view('searchers.pipeline-1d2.basic.articles.index', compact('articles'));
    // }
    public function __invoke(GetArticleViewModel $getArticleViewModel): View
    {
        // $articles = Article::when(request()->query('status'), function ($query) {
        //         $query->where('status', request()->query('status'));
        //     })
        //     ->when(request()->query('sort'), function ($query) {
        //         $query->orderBy('id', request()->query('sort'));
        //     })
        //     ->paginate(5)
        //     // Para pasar las QUERY_STRINGs disponibles a lo largo de la paginación
        //     ->withQueryString();

        return view('searchers.pipeline-1d2.basic.articles.index', [
            'viewData' =>  $getArticleViewModel,
        ]);
        // return view('searchers.pipeline-1d2.basic.articles.index', $getArticleViewModel);
    }
}
