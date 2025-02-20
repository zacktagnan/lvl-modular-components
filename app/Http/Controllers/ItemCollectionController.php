<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\ItemCollection;
use App\DTOs\ItemCollectionDTO;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpsertItemCollectionRequest;
use App\Actions\ItemCollection\UpsertItemCollectionAction;
use App\Actions\ItemCollection\DeleteItemCollectionAction;
use App\ViewModels\ItemCollections\GetItemCollectionViewModel;
use App\ViewModels\ItemCollections\UpsertItemCollectionViewModel;

class ItemCollectionController extends Controller
{
    public function __construct(
        private readonly UpsertItemCollectionAction $upsertItemCollectionAction,
        private readonly DeleteItemCollectionAction $deleteItemCollectionAction
    )
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
        // La forma simple sin DTO, Action, ViewModels...
        // $itemCollection = ItemCollection::create($request->validated());
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

    public function edit(ItemCollection $collection): View
    {
        Gate::authorize('update', $collection);

        $viewModel = app(UpsertItemCollectionViewModel::class, [
            'itemCollection' => $collection,
        ]);
        // dd($viewModel->toArray());
        return view('collections.upsert', $viewModel);
    }

    public function update(UpsertItemCollectionRequest $request, ItemCollection $collection): RedirectResponse
    {
        // La forma simple sin DTO, Action, ViewModels...
        // $itemCollection = ItemCollection::update($request->validated());
        // return redirect()->route('collections.index');

        $itemCollection = $this->upsertItemCollectionAction->execute(
            ItemCollectionDTO::fromRequest($request),
            $collection,
        );

        return redirect()
            ->route('collections.index')
            ->with('status', __('Colección ":name" actualizada satisfactoriamente.', [
                'name' => $itemCollection->name
            ]));
    }

    public function destroy(ItemCollection $collection): RedirectResponse
    {
        Gate::authorize('delete', $collection);

        $this->deleteItemCollectionAction->execute($collection);

        return redirect()
            ->route('collections.index')
            ->with('status', __('Colección ":name" eliminada satisfactoriamente.', [
                'name' => $collection->name
            ]));
    }
}
