<?php

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

use Modules\User\Http\Controllers\UserController;

Route::prefix('user')->group(function() {
    Route::get('/Overview', 'UserController@index')->name("user::index");

    Route::get('/Overview/User/Base/{user}',[UserController::class,'editBase'])->name("user::edit.base");
    Route::get('/Overview/User/Password/{user}',[UserController::class,'editPassword'])->name("user::edit.password");

    Route::post('/Overview/User/Base/Store',[UserController::class,'storeBase'])->name("user::edit.base.store");
    Route::post('/Overview/User/Password/Store',[UserController::class,'storePassword'])->name("user::edit.password.store");
});
