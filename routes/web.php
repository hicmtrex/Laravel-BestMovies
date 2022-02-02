<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\MovieController;

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

Route::get('/', [MovieController::class, "home"]);

Route::get('/movies', [MovieController::class, "index"]);

Route::get('/movies/create', [MovieController::class, "create"])->middleware('auth');

Route::get('/movies/edit/{id}', [MovieController::class, "edit"])->middleware('auth');

Route::get('/movies/{id}', [MovieController::class, "show"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
