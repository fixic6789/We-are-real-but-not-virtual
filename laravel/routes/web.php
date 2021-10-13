<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewStoriesController;
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
})->name('posts.create');
Route::post('/admin/posts/post', [PostController::class, 'store'])->name('posts.store');
Route::delete('/admin/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.delete');
Route::get('/admin/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/admin/posts/update/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/admin/posts/deleteimage/{id}', [PostController::class, 'deleteImage'])->name('posts.deleteImage');
Route::delete('/admin/posts/deletecover/{id}', [PostController::class, 'deleteCover'])->name('posts.deleteCover');

Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/stories', [ViewStoriesController::class, 'StoriesList'])->name('stories');