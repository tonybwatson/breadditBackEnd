<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubreadditController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostVoteController;


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

Route::prefix('v1')->group(function () {
    Route::resource('/posts', PostController::class)->only([
        'index', 'show'
    ]);

    Route::get('/postvotes', [PostVoteController::class, 'index']);

    Route::get('/posts_by_sub/{name}', [PostController::class, 'getPostsBySub']);

    Route::resource('/users', UserController::class)->only([
        'create', 'store', 'register', 'show'
    ]);

    Route::resource('/comments', CommentController::class)->only([
        'index', 'show'
    ]);

    Route::get('/comments_by_post/{id}', [CommentController::class, 'getCommentsByPost']);

    // requires token
    Route::middleware('auth:api')->group(function () {

        Route::get('/logout', [UserController::class, 'logout']);

        Route::put('/posts', [PostController::class, 'update']);
        Route::post('/posts', [PostController::class, 'store']);
        Route::delete('/posts', [PostController::class, 'destroy']);

        Route::resource('/users', UserController::class)->only([
             'update', 'destroy', 'index'
        ]);

        Route::resource('/comments', CommentController::class)->only([
            'create', 'store', 'update', 'destroy'
        ]);

        Route::post('/postvotes', [PostVoteController::class, 'store']);

        Route::apiResource('/subreaddits', SubreadditController::class);
    });
});
