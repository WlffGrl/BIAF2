<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/pengumuman', [App\Http\Controllers\Frontend\FrontendController::class, 'pengumuman']);
Route::get('pengumuman/{post_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'showPost']);

Route::get('/jadwal', [App\Http\Controllers\Frontend\FrontendController::class, 'jadwal']);
Route::get('jadwal/{jadwal_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'showJadwal']);

Route::get('/pengukuran', [App\Http\Controllers\Frontend\FrontendController::class, 'pengukuran']);


Route::get('/investasi', [App\Http\Controllers\Frontend\FrontendController::class, 'investasi']);



Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //slider
    Route::get('crud-slider', [SliderController::class, 'index']);
    Route::get('add-slider', [SliderController::class, 'create']);
    Route::post('store-slider', [SliderController::class, 'store']);
    Route::get('edit-slider/{id}', [SliderController::class, 'edit']);
    Route::put('update-slider/{id}', [SliderController::class, 'update']);
    Route::get('delete-slider/{id}', [SliderController::class, 'destroy']);

    //Posts
    Route::get('posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('store-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('edit-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('update-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('delete-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'destroy']);

    //Users
    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('edit-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('update-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);

    //Embeds
    Route::get('embed', [App\Http\Controllers\Admin\EmbedController::class, 'index']);
    Route::get('add-embed', [App\Http\Controllers\Admin\EmbedController::class, 'create']);
    Route::post('store-embed', [App\Http\Controllers\Admin\EmbedController::class, 'store']);
    Route::get('edit-embed/{embed_id}', [App\Http\Controllers\Admin\EmbedController::class, 'edit']);
    Route::put('update-embed/{embed_id}', [App\Http\Controllers\Admin\EmbedController::class, 'update']);
    Route::get('delete-embed/{embed_id}', [App\Http\Controllers\Admin\EmbedController::class, 'destroy']);

    //Jadwal
    Route::get('jadwal', [App\Http\Controllers\Admin\JadwalController::class, 'index']);
    Route::get('add-jadwal', [App\Http\Controllers\Admin\JadwalController::class, 'create']);
    Route::post('store-jadwal', [App\Http\Controllers\Admin\JadwalController::class, 'store']);
});

/*
    //Category
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('post-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);
*/
