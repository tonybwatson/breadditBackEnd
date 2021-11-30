<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SubreadditController;
use App\Http\Controllers\PostController;

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

    // requires token
    Route::middleware('auth:api')->group(function () {

        Route::resource('/posts', PostController::class)->only([
            'create', 'store', 'update', 'destroy'
        ]);

        Route::get('/user', function (Request $request) {
            return $request->user();
        });
        Route::apiResource('/users', UsersController::class);
        Route::apiResource('/subreaddits', SubreadditController::class);
        // Route::apiResource('/posts', PostController::class);
    });
});
