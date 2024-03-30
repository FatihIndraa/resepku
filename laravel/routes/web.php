<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('home',[
//         'title'=>'home',
//     ]);
// });

Route::get('/resep', function () {
    return view('resep');
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post');
Route::get('/detail/{category}', [PostController::class, 'indexByCategory'])->name('detail');


// authentikasi folder dashboard
Route::get('/dashboard',function(){
    return view("dashboard.index");
})->middleware('auth');
// authentifikasi posts
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class,'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// dashboard post setelah di authentifikasi
Route::get('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'show'])->name('dashboard.posts.show');
Route::get('/dashboard/posts/create', [DashboardPostController::class, 'create'])->name('dashboard.posts.create');
