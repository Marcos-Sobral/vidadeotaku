<?php
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ListaController;
use Illuminate\Support\Facades\Route;

//Tela principal do site
Route::get('/', [AnimeController::class, 'about'])->name('animes.about');

//Biblioteca de animes
Route::get('/animes', [AnimeController::class, 'index'])->name('animes.index');
Route::get('/animes/create', [AnimeController::class, 'create'])->name('animes.create');
Route::post('/animes', [AnimeController::class, 'store'])->name('animes.store');
Route::get('/animes/{id}', [AnimeController::class, 'show'])->name('animes.show');
Route::get('/animes/{id}/edit', [AnimeController::class, 'edit'])->name('animes.edit');
Route::put('/animes/{id}', [AnimeController::class, 'update'])->name('animes.update');
Route::delete('/animes/{id}', [AnimeController::class, 'destroy'])->name('animes.destroy');

// Lista de animes
Route::get('/listas', [ListaController::class, 'index'])->name('listas.index');
Route::get('/listas/criar', [ListaController::class, 'store'])->name('listas.create');
Route::post('/listas', [ListaController::class, 'index'])->name('listas.store');
Route::get('/listas/{id}', [ListaController::class, 'show'])->name('listas.show');
Route::get('/listas/{id}/edit', [ListaController::class, 'edit'])->name('listas.edit');
Route::put('/listas/{id}', [ListaController::class, 'update'])->name('listas.update');
Route::delete('/listas/{id}', [ListaController::class, 'destroy'])->name('listas.destroy');