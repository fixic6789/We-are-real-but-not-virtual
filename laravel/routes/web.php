<?php

use App\Http\Controllers\ContactController;
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
<<<<<<< HEAD
});

Route::post('posts/post', [PostController::class, 'store'])->name('posts.store');
Route::delete('posts/delete/{id}', [PostController::class, 'destroy']);
Route::get('posts/edit/{id}', [PostController::class, 'edit']);
Route::put('posts/update/{id}', [PostController::class, 'update'])->name('posts.update');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::delete('posts/deleteimage/{id}', [PostController::class, 'deleteImage'])->name('posts.deleteImage');

Route::delete('posts/deletecover/{id}', [PostController::class, 'deleteCover'])->name('posts.deleteCover');



Route::get('/forms',[ContactController::class, 'contact']);
Route::post('/',[ContactController::class, 'sendEmail'])->name('contact.store');





=======
})->name('posts.create');
>>>>>>> 0abe770a67a50859f007c01e1781e1f6f53fd59d

Route::post('/admin/posts/post', [PostController::class, 'store'])->name('posts.store');
Route::delete('/admin/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.delete');
Route::get('/admin/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/admin/posts/update/{id}', [PostController::class, 'update'])->name('posts.update');
Route::get('/logout', [LoginController::class, 'logout']);

Route::delete('/admin/posts/deleteimage/{id}', [PostController::class, 'deleteImage'])->name('posts.deleteImage');

<<<<<<< HEAD


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
=======
Route::delete('/admin/posts/deletecover/{id}', [PostController::class, 'deleteCover'])->name('posts.deleteCover');
>>>>>>> 0abe770a67a50859f007c01e1781e1f6f53fd59d

Route::get('/home', [HomeController::class, 'index'])->name('home');
