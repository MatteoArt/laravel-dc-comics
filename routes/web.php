<?php

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

use App\Http\Controllers\ComicController;

//READ
Route::get('/', [ComicController::class, 'index'])->name('home');
Route::get('/comic/{id}', [ComicController::class, 'show'])->name('comic');

//CREATE
Route::get('/create', [ComicController::class, 'create'])->name('comic.create');
Route::post('/', [ComicController::class, 'store'])->name('comic.store');