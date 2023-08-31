<?php

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

$dt = Carbon::now();
$x = $dt->toDateString() . "-admin";

Route::get('/' . $x, [App\Http\Controllers\AdminController::class, 'index'])->name('admin');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/learn', [App\Http\Controllers\HomeController::class, 'learn'])->name('learn');

// laravel card 1
Route::get('/laravel', [App\Http\Controllers\PostController::class, 'laravel'])->name('laravel');




Route::get('/{slug}', [App\Http\Controllers\PostController::class, 'handle_slug']);
