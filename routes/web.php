<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/login', function () {

    return view('login');
});

Route::post('/login',[UserController::class ,'login']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts',PostsController::class);

// Route::get('/posts',[PostsController::class ,'index'])->name('posts.index');
// Route::get('/posts/{id}',[PostsController::class ,'show'])->name('posts.show');
// Route::get('/posts/{id}',[PostsController::class ,'delete'])->name('posts.delete');
// Route::get('/posts/{id}',[PostsController::class ,'delete'])->name('posts.delete');
