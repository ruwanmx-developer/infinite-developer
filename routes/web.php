<?php

use App\Helpers\AppHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/' . AppHelper::instance()->get_admin_prefix(), [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
});

Route::group(['prefix' => AppHelper::instance()->get_admin_prefix()], function () {
    Auth::routes();
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/learn', [App\Http\Controllers\HomeController::class, 'learn'])->name('learn');

// laravel card 1
Route::get('/laravel', [App\Http\Controllers\PostController::class, 'laravel'])->name('laravel');




Route::get('/{slug}', [App\Http\Controllers\PostController::class, 'handle_slug']);
