<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CaixaController;
use App\Http\Controllers\CaixaRegistroController;
use App\Http\Controllers\FormaPagamentoController;


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
    Route::apiResource('fornecedores', FornecedorController::class);
    Route::apiResource('funcionarios', FuncionarioController::class);
    Route::apiResource('clientes', ClienteController::class);
    Route::apiResource('produtos', ProdutoController::class);
    Route::apiResource('categorias', CategoriaController::class);
    Route::apiResource('caixas', CaixaController::class);
    Route::apiResource('caixa-registros', CaixaRegistroController::class);
    Route::apiResource('formas-pagamento', FormaPagamentoController::class);
});