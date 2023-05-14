<?php

use App\Http\Controllers\FollowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
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
    Route::resource('/blog', PostsController::class);
    Route::get('/my', [UserController::class, 'home'])->name('my');
    Route::get('/my/edit', [UserController::class, 'edit'])->name("profile.edit");
    Route::post('/search', [SearchController::class, 'index'])->name('search');
    Route::get('/search/{search}/{type?}', [SearchController::class, 'search'])->name('search.search');
    Route::put('/profile/update/{id}', [UserController::class, 'update'])->name('profile.update');
    Route::post('/profile/{id}/follow', [FollowController::class, 'store'])->name('follow');
    Route::post('/profile/{id}/unfollow', [FollowController::class, 'destroy'])->name('unfollow');
    Route::post('my/delete',[UserController::class,'delete'])->name('profile.delete');

    Route::get('/profile/{id}', [UserController::class,'show'])->name('profile');
    Route::put('/profile/update/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('profile.update');


    Route::resource('/blog', PostsController::class);
    Route::post('/blog/{blog}/like',[\App\Http\Controllers\LikeController::class,'store'])->name('like');
    Route::post('/blog/{blog}/unlike',[\App\Http\Controllers\LikeController::class,'destroy'])->name('unlike');
    Route::post('/blog/{blog}/publish',[PostsController::class,'publish'])->name('publish');

    Route::get('/', [PagesController::class, 'index'])->name('home');
    Route::get('/messages', [MessageController::class, 'index'])->name('messages');
    Route::get('/messages/show/{user_id}', [MessageController::class, 'show'])->name('messages.show');
    Route::post('/messages/showName/', [MessageController::class, 'showName'])->name('messages.showName');
    Route::get('/explorer', [PagesController::class, 'explorer'])->name('explorer');

    Route::post('/messages/store/{user_id}', [MessageController::class, 'store'])->name('messages.store');

});
