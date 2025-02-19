<?php

namespace App\Http\Controllers;

use App\ViewModels\Tasks\GetTaskViewModel;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index(GetTaskViewModel $viewModel): View
    {
        return view('tasks.index', $viewModel);
    }

    public function create(GetTaskViewModel $viewModel): View
    {
        return view('tasks.create', $viewModel);
    }
}
