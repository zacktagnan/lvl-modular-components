<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\ViewModels\Articles\PipelineSearcherViewModel;

class PipelineSearcherController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(PipelineSearcherViewModel $viewModel): View
    {
        return view('searchers.index', $viewModel);
    }
}
