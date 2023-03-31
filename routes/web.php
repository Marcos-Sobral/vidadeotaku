<?php
use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;

Route::get('/animes', [AnimeController::class, 'index'])->name('animes.index');
Route::get('/animes/create', [AnimeController::class, 'store'])->name('animes.create');
Route::post('/animes', [AnimeController::class, 'index'])->name('animes.store');
Route::get('/animes/{id}', [AnimeController::class, 'show'])->name('animes.show');
Route::get('/animes/{id}/edit', [AnimeController::class, 'edit'])->name('animes.edit');
Route::put('/animes/{id}', [AnimeController::class, 'update'])->name('animes.update');
Route::delete('/animes/{id}', [AnimeController::class, 'destroy'])->name('animes.destroy');