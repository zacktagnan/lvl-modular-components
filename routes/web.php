<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemCollectionController;
use App\Http\Controllers\PipelineSearcherController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
            Route::get('/articles', ArticleController::class)->name('articles');
        });
    });
});
