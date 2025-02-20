<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\ItemCollection;
use Illuminate\Support\Facades\Gate;
use App\ViewModels\ItemCollections\GetItemCollectionViewModel;
use App\ViewModels\ItemCollections\UpsertItemCollectionViewModel;

class ItemCollectionController extends Controller
{
    public function index(GetItemCollectionViewModel $viewModel): View
    {
        Gate::authorize('viewAny', ItemCollection::class);

        // dd($viewModel->toArray());
        return view('collections.index', $viewModel);
    }

    public function create(): View
    {
        Gate::authorize('create', ItemCollection::class);

        $viewModel = app(UpsertItemCollectionViewModel::class, [
            'itemCollection' => null,
        ]);
        // dd($viewModel->toArray());
        return view('collections.upsert', $viewModel);
    }

    public function destroy()
    {
        echo 'Esto es el ItemCollectionController@destroy';
    }
}
