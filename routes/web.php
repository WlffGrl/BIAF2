<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //slider
    Route::get('/crud-slider', [SliderController::class, 'index']);
    Route::get('/add-slider', [SliderController::class, 'create']);
    Route::post('/store-slider', [SliderController::class, 'store']);
    Route::get('/edit-slider/{id}', [SliderController::class, 'edit']);
    Route::put('/update-slider/{id}', [SliderController::class, 'update']);
    Route::get('/delete-slider/{id}', [SliderController::class, 'destroy']);

    //Post
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('post-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
});

// PagesController
Route::get('/', [PagesController::class, 'index']);
Route::get('/pengumuman', [PagesController::class, 'pengumuman']);
Route::get('/jadwal', [PagesController::class, 'jadwal']);
Route::get('/pengukuran', [PagesController::class, 'pengukuran']);
Route::get('/investasi', [PagesController::class, 'investasi']);


//PostsController
Route::resource('posts', PostsController::class);
Route::get('/create', [PostsController::class, 'create']);
