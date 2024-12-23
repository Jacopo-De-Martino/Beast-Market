<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//rotta per la creazione dell'articolo
Route::get('/create/article', [ArticleController::class, 'create'])->name('articles.create');

//rotta per la pagina con tutti gli articoli
Route::get('/article/index', [ArticleController::class, 'index'])->name('articles.index');

//rotta per la pagina di dettaglio articolo
Route::get('/show/article//{article}', [ArticleController::class, 'show'])->name('articles.show');
//rotta per articli by category
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

//Rotta per la pagina di revisione e accetazione degli articoli con middleware custom per i revisori
Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

//Rotta per la logica di accettazione dell'articolo da parte del revisor
Route::patch('/accepted/{article}', [RevisorController::class, 'accept'])->name('accept');
//rotta per per l'invio della mail per diventare revisor
Route::get('revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
//rotta che permette all'admin di accettare la richiesta di un user per diventare revisor
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
//Rotta per la logica di rifiuto dell'articolo da parte del revisor
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');
//Rotte per il login
Route::view('/login', 'auth.login')->name('login');
//Rotte per il register
Route::view('/register', 'auth.register')->name('register');
//rotta per serchbar(query) articoli
Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('articles.search');

//Rotta per il cambio di lingua
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');
