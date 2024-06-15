<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ListaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Tela principal do site
Route::get('/', [AnimeController::class, 'about'])->name('animes.about');
Route::get('/welcome', function () {
    return view('welcome');
});

//Biblioteca de animes
Route::get('/animes', [AnimeController::class, 'index'])->name('animes.index');
Route::get('/animes/create', [AnimeController::class, 'create'])->name('animes.create');
Route::post('/animes/create', [AnimeController::class, 'store'])->name('animes.store');
Route::get('/animes/{id}/edit', [AnimeController::class, 'edit'])->name('animes.edit');
Route::put('/animes/{id}', [AnimeController::class, 'update'])->name('animes.update');
Route::delete('/animes/deletar/{id}', [AnimeController::class, 'destroy'])->name('animes.destroy');

// Lista de animes
Route::get('/listas', [ListaController::class, 'index'])->name('listas.index');
Route::get('/listas/criar', [ListaController::class, 'create'])->name('listas.create');
Route::post('/listas', [ListaController::class, 'store'])->name('listas.store');
Route::get('/listas/{id}', [ListaController::class, 'show'])->name('listas.show');
Route::get('/listas/{id}/edit', [ListaController::class, 'edit'])->name('listas.edit');
Route::put('/listas/{id}', [ListaController::class, 'update'])->name('listas.update');
Route::delete('/listas/{id}', [ListaController::class, 'destroy'])->name('listas.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
