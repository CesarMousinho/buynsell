<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FeedController::class, 'welcome'])->name('welcome');

Route::get('/feed/categoria', [FeedController::class, 'categoria'])->name('feed.categoria');

Route::get('feed/categoria/{id}',  [FeedController::class, 'categoriaById'])->name('feed.categoriaById');

Auth::routes();


// ---- O AUTH SENDO USADO MEDIANTE AO DOCS DO LARAVEL -----
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::middleware(['can::admin'])->group(function () {


        // --------- CATEGORIAS --------------


        Route::get('/categoria', [CategoriaController::class, 'index'])->middleware('can:is_admin')->name('categoria.index');

        Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');


        Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');

        Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

        Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');

        Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');

        Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
    });


    // --------------------ANUNCIOS---------------------------
    Route::get('/anuncio', [AnuncioController::class, 'index'])->name('anuncio.index');

    Route::get('/anuncio/create', [AnuncioController::class, 'create'])->name('anuncio.create');


    Route::post('/anuncio', [AnuncioController::class, 'store'])->name('anuncio.store');

    Route::get('/anuncio/{id}', [AnuncioController::class, 'show'])->name('anuncio.show');

    Route::get('/anuncio/{id}/edit', [AnuncioController::class, 'edit'])->name('anuncio.edit');

    Route::put('/anuncio/{id}', [AnuncioController::class, 'update'])->name('anuncio.update');

    Route::delete('/anuncio/{id}', [AnuncioController::class, 'destroy'])->name('anuncio.destroy');

    //--------------------ANUNCIOS---------------------------\\



    //--------------------PERFIL---------------------------\\

    Route::get('/perfil', [UserController::class, 'index'])->name('perfil.index');

    Route::get('/perfil/create', [UserController::class, 'create'])->name('perfil.create');

    Route::get('/perfil/{user}', [UserController::class, 'show'])->name('perfil.show');

    Route::put('/perfil/{user}', [UserController::class, 'update'])->name('perfil.update');

    Route::delete('/perfil/{user}', [UserController::class, 'destroy'])->name('perfil.destroy');


    //--------------------PERFIL---------------------------\\

});
