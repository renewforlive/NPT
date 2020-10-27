<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get_room/{id}', [\App\Http\Controllers\api\RoomController::class, 'show']);

Route::get('/get_room', [\App\Http\Controllers\api\RoomController::class, 'index']);

Route::post('/get_room', [\App\Http\Controllers\api\RoomController::class, 'store']);

Route::put('/get_room/{id}', [\App\Http\Controllers\api\RoomController::class, 'update']);

Route::delete('/get_room/{id}', [\App\Http\Controllers\api\RoomController::class, 'destroy']);
