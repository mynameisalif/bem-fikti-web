<?php

use App\Http\Controllers\DashboardNewsController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;

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
    return view('index',[
        "title" => "Home",

    ]);
});

Route::get('/news',[NewsController::class, 'index']);

Route::get('/news/{news:slug}',[NewsController::class,'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title'=>'News Categories',
        'categories'=>Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('news',[
        'title'=>"Kategori Berita $category->name",
        'news'=>$category->news->load('category','author'),
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('news',[
        'title'=>"Berita dari $author->name",
        'news'=>$author->news->load('category','author'),
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/news/checkSlug',[DashboardNewsController::class,'checkSlug'])->middleware('auth');
Route::resource('/dashboard/news', DashboardNewsController::class)->middleware('auth');
