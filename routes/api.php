<?php

use App\Http\Controllers\AssignController;
use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;

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

Route::prefix('/computer')->group(function () {
    Route::post('/create', [ComputerController::class, 'create']);
    Route::get('/', [ComputerController::class, 'getAll']);
});

Route::prefix('/clients')->group(function () {
    Route::get('/search', [ClientController::class, 'search']);
});

Route::prefix('/assign')->group(function () {
    Route::post('/create', [AssignController::class, 'create']);
});
