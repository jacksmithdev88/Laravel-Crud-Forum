<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/submit', [PostController::class, 'createSubmit']);
Route::get('/{post}/edit', [PostController::class, 'edit']);
Route::post('/{post}/submit', [PostController::class, 'editSubmit']);
Route::get('/{post}/delete', [PostController::class, 'delete']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/create-user', [LoginController::class, 'createIndex']);
Route::post('/create-submit', [LoginController::class, 'submitUser']);