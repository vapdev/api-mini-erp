<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\FornecedorController;

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

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    // Route::apiResource('fornecedores', FornecedorController::class);
    Route::apiResource('funcionarios', FuncionarioController::class);
    Route::get('/fornecedores/{id}', [FornecedorController::class, 'show']);
    Route::get('/fornecedores', [FornecedorController::class, 'index']);
});