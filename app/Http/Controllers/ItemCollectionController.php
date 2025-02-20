<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\ItemCollection;
use App\DTOs\ItemCollectionDTO;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpsertItemCollectionRequest;
use App\Actions\ItemCollection\UpsertItemCollectionAction;
use App\ViewModels\ItemCollections\GetItemCollectionViewModel;
use App\ViewModels\ItemCollections\UpsertItemCollectionViewModel;

class ItemCollectionController extends Controller
{
    public function __construct(private UpsertItemCollectionAction $upsertItemCollectionAction)
    {}

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

    public function store(UpsertItemCollectionRequest $request): RedirectResponse
    {
        // $itemCollection = ItemCollection::create($request->validated());
        // dd($itemCollection);
        // return redirect()->route('collections.index');

        $itemCollection = $this->upsertItemCollectionAction->execute(
            ItemCollectionDTO::fromRequest($request)
        );

        return redirect()
            ->route('collections.index')
            ->with('status', __('Colección ":name" creada satisfactoriamente.', [
                'name' => $itemCollection->name
            ]));
    }

    public function destroy()
    {
        echo 'Esto es el ItemCollectionController@destroy';
    }
}
