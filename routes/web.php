<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActorsController;


Route::get('/', [MoviesController::class,'index'])->name('movies.index');
Route::get('/movie/{id}', [MoviesController::class,'show'])->name('movies.show');

Route::get('/TvShows', [TvController::class,'index'])->name('tv.index');
Route::get('/TvShows/{id}',  [TvController::class,'show'])->name('tv.show');

Route::get('/actors', [ActorsController::class,'index'])->name('actors.index');
Route::get('/actors/page/{page?}',  [ActorsController::class,'index']);
Route::get('/actors/{id}', [ActorsController::class ,'show' ])->name('actors.show');

Route::get('/about', [HomeController::class,'index'])->name('about.index');
