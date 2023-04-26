<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'home'])->name('homepage');
Route::get('/create-album', [AlbumController::class, 'create'])->name('create-album');
Route::get('/index-album', [AlbumController::class, 'index'])->name('index-album');
Route::get('/show-album/{album}', [AlbumController::class, 'show'])->name('show-album');
Route::get('/edit-album/{album}', [AlbumController::class, 'edit'])->name('edit-album');
Route::put('/update-album/{album}', [AlbumController::class, 'update'])->name('update-album');
Route::delete('/delete-album/{album}', [AlbumController::class, 'destroy'])->name('delete-album');