<?php

use App\Http\Controllers\IngredienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\DetallePizzaController;
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
//ENDPOINTS DE PIZZAS
//Route::apiResource("pizzas", PizzaController::class);

Route::get("pizzas/preestablecidas", [PizzaController::class, "combinacionesPizzasPre"]);
Route::get("pizzas/ultima", [PizzaController::class, "ultimoRegistro"]);
Route::get("pizzas/especifica/{id}", [PizzaController::class, "pizzaEspecifica"]);

/******************* */

//ENDPOINTS DE INGREDIENTES
//Route::apiResource("ingredientes", IngredienteController::class);
Route::get("ingredientes", [IngredienteController::class, "obtenerIngredientes"]);
Route::get("ingredientes/disponibles", [IngredienteController::class, "obtenerIngredientes"]);
/* Route::get("ingredientes", [IngredienteController::class, "obtenerIngredientes"]);
Route::post("ingredientes", [IngredienteController::class, "guardar"]);
 */

 //ENDSPOINTS DE PIZZAS PREPARADAS
Route::apiResource("pizzas_detalle", DetallePizzaController::class);

//ENDPOINTS DE PEDIDOS
Route::post("pedido", [PedidoController::class, "crearPedido"]);
