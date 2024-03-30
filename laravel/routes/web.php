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

Route::get('/', function () {
    return view('home',[
        'title'=>'home',
    ]);
});
// Route::get('/posts', function () {
//     return view('posts');
// });
Route::get('/resep', function () {
    return view('resep');
});
Route::get('/tembahresep', function () {
    return view('tambahresep');
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'show'])->name('dashboard.posts.show');



Route::get('/dashboard',function(){
    return view("dashboard.index");
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
// Route::get('/posts/{post:slug}', [PostController::class, 'show']);