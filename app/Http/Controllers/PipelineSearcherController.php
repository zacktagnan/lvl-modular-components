<?php

namespace App\Http\Controllers;

use App\ViewModels\PipelineSearcherViewModel;
use Illuminate\View\View;

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
