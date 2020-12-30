<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Auth;
use App\Models\Category;
use App\Models\Post;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/blog', function () {
    $posts = Post::first();
    return view('blog')->with('posts', $posts);
});

Route::get('/blog-cats', function () {
    $posts = Post::first();
    return view('blog-cats')->with('posts', $posts);
});

Route::post('/email', 'App\Http\Controllers\EmailController@sendEmail')->name('send.email');


Route::get('/about', function () {
    return view('about');
});







    Route::resource('posts', PostController::class);

