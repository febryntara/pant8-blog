<?php

use App\Http\Controllers\AuthController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

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
    return view('home.index', [
        "title" => "Home",
        "where" => "home"
    ]);
});
Route::get('/categories', function () {
    return view('categories.index', [
        "title" => "Categories",
        "where" => "categories",
        "categories" => Category::latest()->get()
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'single']);

Route::get('/sign-in', [AuthController::class, 'signinView'])->name('login')->middleware('guest');
Route::post('/sign-in', [AuthController::class, 'authenticate']);
Route::get('/sign-out', [AuthController::class, 'signout'])->middleware('auth');

Route::get('/sign-up', [AuthController::class, 'signupView'])->middleware('guest');
Route::post('/sign-up', [AuthController::class, 'signupData']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Dashboard"
    ]);
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
