<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;


Route::get('/', [PublicController::class,'homepage'])->name('homepage');

Route::get('/chisiamo', [PublicController::class, 'chisiamo'])->name('chisiamo');

Route::get('/collaboraconnoi', [PublicController::class, 'collaboraconnoi'])->name('collaboraconnoi');

Route::get('/create/article', [ArticleController::class,'create'])->name('create.article');

Route::get('/article/index', [ArticleController::class,'index'])->name('article.index');

Route::get('/show/article/{article}', [ArticleController::class,'show'])->name('article.show');

Route::get('/service/{service}', [ArticleController::class,'byService'])->name('byService');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/revisor/index', [RevisorController::class,'index'])->name('revisor.index');
    Route::get('/revisor/edit/{id}', [RevisorController::class,'edit'])->name('revisor.edit');
    Route::post('/revisor/update/{id}', [RevisorController::class,'update'])->name('revisor.update');
    Route::delete('/revisor/destroy/{id}', [RevisorController::class,'destroy'])->name('revisor.destroy');
});

Route::post('/lingua/{lang}', [PublicController::class,'setLanguage'])->name('setLocale');

Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('article.search');

Route::get('/termini-condizioni', [PublicController::class, 'terms'])->name('terms');

