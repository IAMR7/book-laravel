<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('v_login');
// });

// Route::get('/', [HomeController::class,'index']);

Route::get('/', [AdminController::class,'index'])->name('dashboard');

Route::get('/admin/book', [BookController::class,'index'])->name('book');

Route::get('/admin/book/detail/{id}', [BookController::class,'getbook']);

Route::post('/admin/book/add', [BookController::class,'addbook']);

Route::get('/admin/book/edit/{id}', [BookController::class,'editbook']);

Route::post('/admin/book/edit/update/{id}', [BookController::class,'updatebook']);

Route::get('/admin/book/delete/{id}', [BookController::class,'deletebook']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
