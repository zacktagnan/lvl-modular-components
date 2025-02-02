<?php

namespace App\Http\Controllers;

use App\ViewModels\ItemCollections\GetItemCollectionViewModel;
use Illuminate\View\View;

class ItemCollectionController extends Controller
{
    public function index(GetItemCollectionViewModel $viewModel): View
    {
        // dd($viewModel->toArray());
        return view('collections.index', $viewModel);
    }
}
