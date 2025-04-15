<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\site\HomeController;
use App\Models\Panier;

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

Route::get('/', [HomeController::class, 'home'])->name('site');
Route::get('/homme', [HomeController::class, 'homme'])->name('site.homme');
Route::get('/femme', [HomeController::class, 'femme'])->name('site.femme');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
   Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
   Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
   Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
   Route::get('/article/show', [ArticleController::class, 'show'])->name('article.show');
   Route::get('/article/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');
   Route::put('/article/{id}/update', [ArticleController::class, 'update'])->name('article.update');
   Route::delete('/article/{id}/destroy', [ArticleController::class, 'destroy'])->name('article.destroy');

   Route::get('/categorie', [CategorieController::class, 'index'])->name('categorie.index');
   Route::get('/categorie/create', [CategorieController::class, 'create'])->name('categorie.create');
   Route::post('/categorie/store', [CategorieController::class, 'store'])->name('categorie.store');
   Route::put('/categorie/{id}/update', [CategorieController::class, 'update'])->name('categorie.update');
   Route::get('/categorie/show', [CategorieController::class, 'show'])->name('categorie.show');
   Route::get('/categorie/{id}/edit', [CategorieController::class,'edit'])->name('categorie.edit');
   Route::delete('/categorie/{id}/destroy', [CategorieController::class, 'destroy'])->name('categorie.destroy');

   Route::get('/marque', [MarqueController::class, 'index'])->name('marque.index');
   Route::get('/marque/create', [MarqueController::class, 'create'])->name('marque.create');
   Route::post('/marque/store', [MarqueController::class, 'store'])->name('marque.store');
   Route::put('/marque/{id}/update', [MarqueController::class, 'update'])->name('marque.update');
   Route::get('/marque/show', [MarqueController::class, 'show'])->name('marque.show');
   Route::get('/marque/{id}/edit', [MarqueController::class, 'edit'])->name('marque.edit');
   Route::delete('/marque/{id}/destroy', [MarqueController::class, 'destroy'])->name('marque.destroy');

   Route::get('/panier', [PanierController::class, 'index'])->name('panier.index');
   Route::get('/panier/create', [PanierController::class, 'create'])->name('panier.create');
   Route::post('/panier/store', [PanierController::class, 'store'])->name('panier.store');
   Route::put('/panier/{id}/update', [PanierController::class, 'update'])->name('panier.update');
   Route::get('/panier/show', [PanierController::class, 'show'])->name('panier.show');
   Route::get('/panier/{id}/edit', [PanierController::class, 'edit'])->name('panier.edit');
   Route::delete('/panier/{id}/destroy', [PanierController::class, 'destroy'])->name('panier.destroy');
    // les routes de creation d'un panier par js

   Route::get('/panier/index',[PanierController::class, 'index'])->name('panier.index');
   Route::post('panier/add', [PanierController::class, 'add'])->name('add_to_panier');
   Route::get('panier/{id}/paye', [PanierController::class, 'paye'])->name('panier.paye');
   Route::get('panier/{id}/annule', [PanierController::class, 'annule'])->name('panier.annule');
   Route::get('/panier/create',[PanierController::class, 'create'])->name('panier.create');

   


});


require __DIR__.'/auth.php';


