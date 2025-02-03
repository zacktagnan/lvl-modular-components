<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\ViewModels\Articles\SearchArticleBasicViewModel;

class ArticleBasicController extends Controller
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
    public function __invoke(SearchArticleBasicViewModel $viewModel): View
    {
        // OK
        // $articles = Article::when(request()->query('status'), function ($query) {
        //         $query->where('status', request()->query('status'));
        //     })
        //     ->when(request()->query('sort'), function ($query) {
        //         $query->orderBy('id', request()->query('sort'));
        //     })
        //     ->paginate(5)
        //     // Para pasar las QUERY_STRINGs disponibles a lo largo de la paginación
        //     ->withQueryString();

        // OK - pero no para todo lo que viene de su ViewModel
        // return view('searchers.pipeline-1d2.basic.articles.index', $viewModel);

        // OK
        // return view('searchers.pipeline-1d2.basic.articles.index', [
        //     'viewData' =>  $viewModel,
        // ]);

        // Con un ViewModel y un Transformer
        return view('searchers.pipeline-1d2.basic.articles.index', $viewModel);
    }
}
