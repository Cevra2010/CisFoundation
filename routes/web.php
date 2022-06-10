<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Modules\ModulesController;
use CisFoundation\MenuManager\MenuManager;

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

Route::get('/Auth',[AuthController::class,'auth'])->name("auth");
Route::get('/Auth/Methods',[AuthController::class,'chooseAuthMethod'])->name("auth.choose");

/** Routes for Sign-in & Sign-Out */
Route::get('/Sign-in-form',[Auth\AuthController::class,'loginForm'])->name("auth.login.form");
Route::post('/Sign-out',[Auth\AuthController::class,'signOut'])->name("auth.logout");

/** Modules-Controller */
Route::middleware("auth")->group(function() {
    Route::get('/Modules',[ModulesController::class,'index'])->name("modules.index");
    Route::get('/Module/{name}',[ModulesController::class,'show'])->name("modules.show");
});

Route::middleware("auth")->group(function() {
    Route::get('/', function () {
        return view('layouts.app.app');
    })->name("home");
});


/** DEV
 * Routes dienen nur der Menüverlinkung und können nach tests gelöscht werden.
 */
Route::get('/Auth/Options', function () {
    return view('layouts.app.app');
})->name("auth.options.default");

Route::get('/Auth/Options/{option_num}/show', function () {
    return view('layouts.app.app');
})->name("auth.options.ldap");

Route::get('/Paramer-Rroute/{user}',function() {

})->name("test.parameter");
/** DEV-ENDE */
