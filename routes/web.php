<?php

use App\Http\Controllers\NovelController;
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

Route::get('/', [NovelController::class, 'index']);
Route::get('/create', [NovelController::class, '']);
Route::get('/update', [NovelController::class, '']);
Route::get('/delete', [NovelController::class, '']);
