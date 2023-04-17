<?php

use App\Http\Controllers\Admin\Post\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\PostController;

//Auth::routes();
//Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);

Route::group(['namespace'=>'App\Http\Controllers\Post'], function(){
    //Route::get('/posts', 'IndexController' )->name('post.index');
    Route::get('/posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');
});

Route::prefix('admin')->namespace('App\Http\Controllers\Admin\Post')->name('admin.')->group(function() {
    Route::get('post',[IndexController::class,'__invoke'])->name('admin.post.index');
});



Route::get('about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
Route::get('main', [\App\Http\Controllers\MainController::class, 'index'])->name('main.index');


Route::get('posts/first_or_create', [PostController::class, 'firstOrCreate']);
Route::get('posts/update_or_create', [PostController::class, 'updateOrCreate']);

