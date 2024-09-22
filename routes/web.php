<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\Access\ListaController;
use App\Http\Controllers\Access\ItemController;
use App\Http\Controllers\Access\Status_itemController;
use App\Http\Controllers\Access\Status_listaController;
use App\Http\Controllers\Access\Autor_itemController;
use App\Http\Controllers\Access\Genero_itemController;
use App\Http\Controllers\Access\sub_itemController;
use App\Http\Controllers\Access\tipo_itemController;
use App\Http\Controllers\Access\tipo_listaController;
use Illuminate\Support\Facades\Route;

//Tela principal do site
Route::get('/', [Controller::class, 'index'])->name('vdo.sobre');
Route::get('/welcome', function () {
    return view('welcome');
});

//ADMIN
Route::middleware("auth",'admin')->prefix('/admin')->group(function(){
   
    //Lista
    Route::prefix('/lista')->group(function() {
        Route::get('/', [ListaController::class, 'index'])->name('admlista.index');
        Route::get('/criar', [ListaController::class, 'create'])->name('admin.lista.create');
        Route::post('/criar', [ListaController::class, 'store'])->name('admin.lista.store');
        Route::get('/editar/{id}', [ListaController::class, 'edit'])->name('admin.lista.edit');
        Route::put('editar/{id}', [ListaController::class, 'update'])->name('admin.lista.update');
        route::delete('/deletar/{id}', [ListaController::class, 'destroy'])->name('admin.lista.destroy');
    });

    //Conteudo
    Route::prefix('/item')->group(function(){
        Route::get('/',[ItemController::class, 'index'])->name('admin.item.index');
        Route::get('/criar',[ItemController::class, 'create'])->name('admin.item.create');
        Route::post('/criar',[ItemController::class, 'store'])->name('admin.item.store');
        Route::get('/processos/{id}', [ItemController::class, 'show'])->name('admin.item.show');
        Route::get('/editar/{id}',[ItemController::class, 'edit'])->name('admin.item.edit');
        Route::put('/editar/{id}',[ItemController::class, 'update'])->name('admin.item.update');
        Route::delete('/deletar/{id}',[ItemController::class, 'destroy'])->name('admin.item.destroy');
    });

    //sub item
    Route::prefix('/subitem')->group(function(){
        Route::get('/',[sub_itemController::class, 'index'])->name('admin.subitem.index');
        Route::get('/ver',[sub_itemController::class, 'show'])->name('admin.subitem.show');
        Route::get('/criar',[sub_itemController::class, 'create'])->name('admin.subitem.create');
        Route::post('/criar',[sub_itemController::class, 'store'])->name('admin.subitem.store');
        Route::get('/editar/{id}',[sub_itemController::class, 'edit'])->name('admin.subitem.edit');
        Route::put('/editar/{id}',[sub_itemController::class, 'update'])->name('admin.subitem.update');
        Route::delete('/deletar/{id}',[sub_itemController::class, 'destroy'])->name('admin.subitem.destroy');

    });
/*
    //Status do conteudo
    Route::prefix('/Statusitem')->group(function(){
        Route::get('/', [Status_itemController::class, 'index'])->name('admin.Statusitem.index');
        Route::get('/criar',[Status_itemController::class, 'create'])->name('admin.Statusitem.create');
        Route::post('/criar',[Status_itemController::class, 'store'])->name('admin.Statusitem.store');
        Route::get('/editar/{id}',[Status_itemController::class, 'edit'])->name('admin.Statusitem.edit');
        Route::put('/editar/{id}',[Status_itemController::class, 'update'])->name('admin.Statusitem.update');
        Route::delete('/deletar/{id}',[Status_itemController::class, 'destroy'])->name('admin.Statusitem.destroy');
    });

    //Status da lista
    Route::prefix('/Statuslista')->group(function(){
        Route::get('/', [Status_listaController::class, 'index'])->name('admin.Statuslista.index');
        Route::get('/criar',[Status_listaController::class, 'create'])->name('admin.Statuslista.create');
        Route::post('/criar',[Status_listaController::class, 'store'])->name('admin.Statuslista.store');
        Route::get('/editar/{id}',[Status_listaController::class, 'edit'])->name('admin.Statuslista.edit');
        Route::put('/editar/{id}',[Status_listaController::class, 'update'])->name('admin.Statuslista.update');
        Route::delete('/deletar/{id}',[Status_listaController::class, 'destroy'])->name('admin.Statuslista.destroy');
    });

    //Genero do conteudo
    Route::prefix('/Generoitem')->group(function(){
        Route::get('/', [Genero_itemController::class, 'index'])->name('admin.Generoitem.index');
        Route::get('/criar',[Genero_itemController::class, 'create'])->name('admin.Generoitem.create');
        Route::post('/criar',[Genero_itemController::class, 'store'])->name('admin.Generoitem.store');
        Route::get('/editar/{id}',[Genero_itemController::class, 'edit'])->name('admin.Generoitem.edit');
        Route::put('/editar/{id}',[Genero_itemController::class, 'update'])->name('admin.Generoitem.update');
        Route::delete('/deletar/{id}',[Genero_itemController::class, 'destroy'])->name('admin.Generoitem.destroy');
    });

    //Autor do conteudo
    Route::prefix('/Autoritem')->group(function(){
        Route::get('/', [Autor_itemController::class, 'index'])->name('admin.Autoritem.index');
        Route::get('/criar',[Autor_itemController::class, 'create'])->name('admin.Autoritem.create');
        Route::post('/criar',[Autor_itemController::class, 'store'])->name('admin.Autoritem.store');
        Route::get('/editar/{id}',[Autor_itemController::class, 'edit'])->name('admin.Autoritem.edit');
        Route::put('/editar/{id}',[Autor_itemController::class, 'update'])->name('admin.Autoritem.update');
        Route::delete('/deletar/{id}',[Autor_itemController::class, 'destroy'])->name('admin.Autoritem.destroy');
    });

    //tipo Conteudo
    Route::prefix('/tipoConteudo')->group(function(){
        Route::get('/', [tipo_itemController::class, 'index'])->name('admin.tipoConteudo.index');
        Route::get('/criar',[tipo_itemController::class, 'create'])->name('admin.tipoConteudo.create');
        Route::post('/criar',[tipo_itemController::class, 'store'])->name('admin.tipoConteudo.store');
        Route::get('/editar/{id}',[tipo_itemController::class, 'edit'])->name('admin.tipoConteudo.edit');
        Route::put('/editar/{id}',[tipo_itemController::class, 'update'])->name('admin.tipoConteudo.update');
        Route::delete('/deletar/{id}',[tipo_itemController::class, 'destroy'])->name('admin.tipoConteudo.destroy');
    });

    //tipo Lista
    Route::prefix('/tipoLista')->group(function(){
        Route::get('/', [tipo_listaController::class, 'index'])->name('admin.tipoLista.index');
        Route::get('/criar',[tipo_listaController::class, 'create'])->name('admin.tipoLista.create');
        Route::post('/criar',[tipo_listaController::class, 'store'])->name('admin.tipoLista.store');
        Route::get('/editar/{id}',[tipo_listaController::class, 'edit'])->name('admin.tipoLista.edit');
        Route::put('/editar/{id}',[tipo_listaController::class, 'update'])->name('admin.tipoLista.update');
        Route::delete('/deletar/{id}',[tipo_listaController::class, 'destroy'])->name('admin.tipoLista.destroy');
    });*/
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
