<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

// PagesController
Route::get('/', [PagesController::class, 'index']);
Route::get('/pengumuman', [PagesController::class, 'pengumuman']);
Route::get('/jadwal', [PagesController::class, 'jadwal']);
Route::get('/forum', [PagesController::class, 'forum']);

//PostsController
Route::resource('posts', PostsController::class);
