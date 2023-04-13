<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('accueil');
Route::get('/realisations', [App\Http\Controllers\HomeController::class, 'realisations'])->name('realisations');
// Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/a_propos', [App\Http\Controllers\HomeController::class, 'aPropos'])->name('a_propos');
Route::get('/technologies', [App\Http\Controllers\HomeController::class, 'technologies'])->name('technologies');
Route::get('/technologies_favorites', [App\Http\Controllers\HomeController::class, 'technologiesFavorites'])->name('technologies_favorites');

