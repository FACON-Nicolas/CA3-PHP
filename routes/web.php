<?php

use App\Http\Controllers\FollowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::middleware(['auth', 'verified'])->group(function (){
    Route::resource('/blog', PostsController::class);
    Route::get('/my', [UserController::class, 'home'])->name('my');
    Route::get('/my/edit', [UserController::class, 'edit'])->name("profile.edit");
    Route::post('/search', [SearchController::class, 'index'])->name('search');
    Route::get('/search/{search}', [SearchController::class, 'search'])->name('search.search');
    Route::put('/profile/update/{id}', [UserController::class, 'update'])->name('profile.update');
    Route::post('/profile/{id}/follow', [FollowController::class, 'store'])->name('follow');
    Route::post('/profile/{id}/unfollow', [FollowController::class, 'destroy'])->name('unfollow');

});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile/{id}', [UserController::class,'show'])->name('profile');
