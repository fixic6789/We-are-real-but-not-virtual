<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', function () {
    return view('posts.create');
});

Route::post('posts/post', [PostController::class, 'store'])->name('posts.store');
Route::delete('posts/delete/{id}', [PostController::class, 'destroy']);
Route::get('posts/edit/{id}', [PostController::class, 'edit']);

Route::delete('posts/deleteimage/{id}', [PostController::class, 'deleteImage']);
Route::delete('posts/deletecover/{id}', [PostController::class, 'deleteCover']);

Route::put('posts/update/{id}', [PostController::class, 'update']);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');







