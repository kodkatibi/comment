<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('post')->group(function () {
    Route::get('/', [\App\Http\Controllers\PostController::class, 'index']);
});

Route::prefix('comment')->group(function () {
    Route::get('/', [\App\Http\Controllers\CommentsController::class, 'index']);
    Route::post('/save', [\App\Http\Controllers\CommentsController::class, 'store']);
});
