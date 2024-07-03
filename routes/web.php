<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [PostController::class,'index']);
// Route::get('/users',[PostController::class,'showUsers']);
// Route::get('/posts',[PostController::class,'show']);
// Route::resource('user',UserController::class);
//--------------------------------------------------------

// Home Page
Route::get('/',function(){
    return view('home');
});

// UserController
Route::controller(UserController::class)->group(function(){
    Route::get('users/create','create')->name('users.create');
    Route::post('users/insert','insert')->name('users.insert');
    Route::get('users', 'show')->name('users.show');
    Route::get('users/edit/{id}','edit')->name('users.edit');
    Route::put('users/update/{id}', 'update')->name('users.update');
    Route::get('users/delete/{id}', 'delete')->name('users.delete');    
    Route::get('users/truncate', 'truncate')->name('users.truncate');
});

// PostController
Route::controller(PostController::class)->group(function(){
    Route::get('posts/create','create')->name('posts.create');
    Route::post('posts/insert','insert')->name('posts.insert');
    Route::get('posts', 'show')->name('posts.show');
    Route::get('posts/edit/{id}','edit')->name('posts.edit');
    Route::put('posts/update/{id}', 'update')->name('posts.update');
    Route::get('posts/delete/{id}', 'delete')->name('posts.delete');    
    Route::get('posts/truncate', 'truncate')->name('posts.truncate');
});


// ProfileController
Route::controller(ProfileController::class)->group(function(){
Route::get('profiles/create','create')->name('profiles.create');
Route::post('profiles/insert','insert')->name('profiles.insert');
Route::get('profiles', 'show')->name('profiles.show');
Route::get('profiles/edit/{id}','edit')->name('profiles.edit');
Route::put('profiles/update/{id}', 'update')->name('profiles.update');
Route::get('profiles/delete/{id}', 'delete')->name('profiles.delete');
Route::get('profiles/truncate', 'truncate')->name('profiles.truncate');

});