<?php

use Illuminate\Support\Facades\Route;
// use Modules\Blog\Http\Controllers\Admin\PostController;
// use Modules\Blog\Http\Controllers\PostController;

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

Route::prefix('blog')->group(function() {

    Route::get('/', 'BlogController@index')->name('blog');
    Route::get('/show/{post}', 'BlogController@show')->name('show');

    Route::resource('Admin/post',Admin\PostController::class);
    Route::resource('Admin/user',Admin\UserController::class);

});
