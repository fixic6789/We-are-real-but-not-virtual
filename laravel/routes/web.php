<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('main');
});

Auth::routes([
    'register' => false,
]);

Route::get('/admin', [HomeController::class, 'index'])->name('admin');

Route::get('/admin/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/admin/posts/create', function () {
    return view('posts.create');
});

Route::post('/admin/posts/post', [PostController::class, 'store'])->name('posts.store');
Route::delete('/admin/posts/delete/{id}', [PostController::class, 'destroy']);
Route::get('/admin/posts/edit/{id}', [PostController::class, 'edit']);
Route::put('/admin/posts/update/{id}', [PostController::class, 'update'])->name('posts.update');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout');

Route::delete('/admin/posts/deleteimage/{id}', [PostController::class, 'deleteImage'])->name('posts.deleteImage');

Route::delete('/admin/posts/deletecover/{id}', [PostController::class, 'deleteCover'])->name('posts.deleteCover');











Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
