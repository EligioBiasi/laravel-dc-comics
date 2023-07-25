<?php

use App\Http\Controllers\Admin\ComicsController as AdminComicsController;
use App\Http\Controllers\Guest\PageController;
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

Route::get('/',[PageController::class, 'home']);

Route::get('admin/comics', [AdminComicsController::class, 'index']);
Route::get('admin/comics/create', [AdminComicsController::class, 'create'])->name('admin.comics.crate');
Route::get('admin/comics/{id}', [AdminComicsController::class, 'show'])->name('admin.comics.show');
