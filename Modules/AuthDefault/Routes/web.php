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

use Modules\AuthDefault\Http\Controllers\AuthDefaultController;

Route::post('/Auth/Default',[AuthDefaultController::class,'submit'])
    ->name("auth.default.submit");
