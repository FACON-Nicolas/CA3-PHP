<?php

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

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/{id}', [\App\Http\Controllers\UserController::class,'show'])->name('profile');


Route::middleware(['auth', 'verified'])->group(function (){
    Route::get('/my', [\App\Http\Controllers\UserController::class, 'home'])->name('my');
    Route::get('/my/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name("profile.edit");
    Route::post('/profile/update/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('profile.update');
    Route::put('/profile/update/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('profile.update');
    Route::post('/profile/{id}/follow', [\App\Http\Controllers\FollowController::class, 'store'])->name('follow');
    Route::post('/profile/{id}/unfollow', [\App\Http\Controllers\FollowController::class, 'destroy'])->name('unfollow');

});
