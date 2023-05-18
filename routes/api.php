<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\FileController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});   .........




Route::get('/facturas', [FacturaController::class, 'show']);
Route::get('/facturas/{id}', [FacturaController::class, 'find']);
Route::post('/facturas/insert', [FacturaController::class, 'create']);

Route::post('/upload', [FileController::class, 'upload']);
