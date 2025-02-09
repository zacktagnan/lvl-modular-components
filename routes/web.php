<?php

use App\Http\Controllers\ArticleBasicController;
use App\Http\Controllers\ArticleImprovedController;
use App\Http\Controllers\ArticlePipelineController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemCollectionController;
use App\Http\Controllers\PipelineSearcherController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Shop\Pages\ShopPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('collections', ItemCollectionController::class);
});

require __DIR__.'/auth.php';


Route::prefix('searchers')->as('searchers.')->group(function () {
    Route::get('/', PipelineSearcherController::class)->name('index');

    Route::prefix('pipeline-1d2')->as('pipeline-1d2.')->group(function () {
        Route::prefix('basic')->as('basic.')->group(function () {
            Route::get('/articles', ArticleBasicController::class)->name('articles');
        });
        Route::prefix('improved')->as('improved.')->group(function () {
            Route::get('/articles', ArticleImprovedController::class)->name('articles');
        });
        Route::prefix('pipeline')->as('pipeline.')->group(function () {
            Route::get('/articles', ArticlePipelineController::class)->name('articles');
        });
    });

    Route::prefix('pipeline-2d2')->as('pipeline-2d2.')->group(function () {
        Route::prefix('shop')->as('shop.')->group(function () {
            Route::get('/index', ShopPage::class)->name('index');
        });
    });
});
