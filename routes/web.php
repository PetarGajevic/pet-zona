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
    $categories = Category::all();
    return view('welcome',compact('categories'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


/* Route::get('/blog/{id}', function () {
    $posts = Post::first();
    $categories = Category::all();
    return view('blog',compact('posts','categories'));
});

Route::get('/blog-cats', function () {
    $posts = Post::first();
    $categories = Category::all();

    return view('blog-cats',compact('posts','categories'));
});  */

Route::post('/email', 'App\Http\Controllers\EmailController@sendEmail')->name('send.email');


Route::get('/about', function () {
    $categories = Category::all();

    return view('about',compact('categories'));
});

Route::get('/category/{id}', [PostController::class, 'category'])->name('category.posts');
Route::resource('posts', PostController::class);

