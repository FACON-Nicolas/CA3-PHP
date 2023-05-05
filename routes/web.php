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

Auth::routes();

Route::middleware(['auth', 'verified'])->group(function (){
    Route::get('/my', [\App\Http\Controllers\UserController::class, 'home'])->name('my');
    Route::get('/my/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name("profile.edit");
    Route::post('my/delete',[UserController::class,'delete'])->name('profile.delete');
    Route::delete('my/delete',[UserController::class,'delete'])->name('profile.delete');

    Route::post('/search', [SearchController::class, 'index'])->name('search');
    Route::get('/search/{search}', [SearchController::class, 'search'])->name('search.search');

    Route::post('/profile/update/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('profile.update');
    Route::put('/profile/update/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('profile.update');
    Route::post('/profile/{id}/follow', [\App\Http\Controllers\FollowController::class, 'store'])->name('follow');
    Route::post('/profile/{id}/unfollow', [\App\Http\Controllers\FollowController::class, 'destroy'])->name('unfollow');

    Route::post('/blog/{blog}/like',[\App\Http\Controllers\LikeController::class,'store'])->name('like');
    Route::post('/blog/{blog}/unlike',[\App\Http\Controllers\LikeController::class,'destroy'])->name('unlike');
    Route::post('/blog/{blog}/publish',[PostsController::class,'publish'])->name('publish');

    Route::get('/', [PagesController::class, 'index'])->name('home');
    Route::resource('/blog', PostsController::class);
    Route::get('/profile/{id}', [UserController::class,'show'])->name('profile');
});

