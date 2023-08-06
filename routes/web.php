<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/posts', [PostController::class,'index'] )->middleware('auth');
// Route::get('/posts/create', [PostController::class,'create'] );
// Route::get('/posts/{id}', [PostController::class,'show'] )->where('id','[0-9]+');
// Route::post('posts',[PostController::class,'store']);
// Route::get('posts/{id}/edit',[PostController::class,'edit'])->where('id','[0-9]+');;
// Route::put('posts/{id}',[PostController::class,'update'])->where('id','[0-9]+');
// Route::delete('/posts/{id}', [PostController::class,'destroy'] )->where('id','[0-9]+');
Route::resource('posts',PostController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
