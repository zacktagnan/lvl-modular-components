<?php

namespace App\Http\Controllers;

use App\ViewModels\DashboardViewModel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(DashboardViewModel $viewModel): View
    {
        return view('dashboard', $viewModel);
    }
}
