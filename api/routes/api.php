<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PnfController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/users', [UserController::class, 'index']);
// Route::get('/users', [UserController::class, 'index']);
Route::middleware('auth:sanctum')->post('/users', [UserController::class, 'store']);
Route::middleware('auth:sanctum')->put('/users/{id}', [UserController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/users/{id}', [UserController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/pnf', [PnfController::class, 'index']);
Route::middleware('auth:sanctum')->post('/pnf', [PnfController::class, 'store']);
Route::middleware('auth:sanctum')->put('/pnf/{id}', [PnfController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/pnf/{id}', [PnfController::class, 'destroy']);


Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/error_auth', function (Request $request) {
    return response()->json(['error' => 'error auth', 'code' => 0], 401);
});
