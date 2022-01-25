<?php

use App\Http\Controllers\ContenidoSinopticoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MallaCurricularController;
use App\Http\Controllers\NucleoController;
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


Route::middleware('auth:sanctum')->get('/nucleo', [NucleoController::class, 'index']);
Route::middleware('auth:sanctum')->post('/nucleo', [NucleoController::class, 'store']);
Route::middleware('auth:sanctum')->put('/nucleo/{id}', [NucleoController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/nucleo/{id}', [NucleoController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/malla', [MallaCurricularController::class, 'index']);
Route::middleware('auth:sanctum')->post('/malla', [MallaCurricularController::class, 'store']);
Route::middleware('auth:sanctum')->put('/malla/{id}', [MallaCurricularController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/malla/{id}', [MallaCurricularController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/contenido', [ContenidoSinopticoController::class, 'index']);
Route::middleware('auth:sanctum')->post('/contenido', [ContenidoSinopticoController::class, 'store']);
Route::middleware('auth:sanctum')->put('/contenido/{id}', [ContenidoSinopticoController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/contenido/{id}', [ContenidoSinopticoController::class, 'destroy']);

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/error_auth', function (Request $request) {
    return response()->json(['error' => 'error auth', 'code' => 0], 401);
});
