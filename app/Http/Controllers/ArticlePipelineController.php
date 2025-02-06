<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\ViewModels\Articles\SearchArticlePipelineViewModel;

class ArticlePipelineController extends Controller
{
    public function __invoke(SearchArticlePipelineViewModel $viewModel): View
    {
        // Con un ViewModel y un Transformer
        return view('searchers.pipeline-1d2.improved.articles.index', $viewModel);
    }
}
