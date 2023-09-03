<?php

use App\Helpers\AppHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/' . AppHelper::instance()->get_admin_prefix(), [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
});

Route::group(['prefix' => AppHelper::instance()->get_admin_prefix()], function () {
    Auth::routes();
    // cards
    Route::get('/cards', [App\Http\Controllers\AdminController::class, 'cards'])->name('cards.index');
    Route::get('/cards-add', [App\Http\Controllers\AdminController::class, 'cards_add'])->name('cards.add');
    Route::post('/cards-create', [App\Http\Controllers\AdminController::class, 'cards_create'])->name('cards.create');
    Route::get('/cards-edit/{id}', [App\Http\Controllers\AdminController::class, 'cards_edit'])->name('cards.edit');
    Route::post('/cards-update', [App\Http\Controllers\AdminController::class, 'cards_update'])->name('cards.update');
    // posts
    Route::get('/posts', [App\Http\Controllers\AdminController::class, 'posts'])->name('posts.index');
    Route::get('/posts-add', [App\Http\Controllers\AdminController::class, 'posts_add'])->name('posts.add');
    Route::post('/posts-create', [App\Http\Controllers\AdminController::class, 'posts_create'])->name('posts.create');
    Route::get('/posts-edit/{id}', [App\Http\Controllers\AdminController::class, 'posts_edit'])->name('posts.edit');
    Route::post('/posts-update', [App\Http\Controllers\AdminController::class, 'posts_update'])->name('posts.update');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/learn', [App\Http\Controllers\HomeController::class, 'learn'])->name('learn');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/infinite/d/sitemap.xml', [App\Http\Controllers\HomeController::class, 'sitemap']);

Route::get('/{slug}', [App\Http\Controllers\PostController::class, 'handle_slug']);
