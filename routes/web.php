<?php

use App\Http\Controllers\userAjaxController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('userAjax', userAjaxController::class);
Route::get('/user', [userController::class, 'user'])->name('user');
