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

use Modules\Roles\Http\Controllers\RolesController;

Route::prefix('roles')->group(function() {
    Route::get('/', [RolesController::class,'showRoles'])
    ->name("cis::roles::show-roles");
    Route::get('/Benutzerrolle/Verwalten/{user}', [RolesController::class,'editUserRoles'])
    ->name("roles::user.edit.roles");
});
