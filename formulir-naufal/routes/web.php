<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ArticleController;
use App\Models\Category;
use App\Models\User;

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

Route::get('/input', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);

Route::get('/dashboard',function(){
    return redirect('/');
});

Route::get('/article', [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'content']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('article', [
        "name" => "Muhammad Naufaldillah",
        "email" => "mnaufaldillah@gmail.com",
        'title' => "Halaman Kategori : $category->name",
        'articles' => $category->articles->load('category', 'author'),
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('article', [
        "name" => "Muhammad Naufaldillah",
        "email" => "mnaufaldillah@gmail.com",
        'title' => "Halaman Author : $author->name",
        'articles' => $author->articles->load('category', 'author'),
    ]);
});
