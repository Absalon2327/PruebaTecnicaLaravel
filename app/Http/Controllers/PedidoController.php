<?php

namespace App\Http\Controllers;

use App\Models\DetallePedido;
use App\Models\DetallePizza;
use App\Models\Ingrediente;
use App\Models\Pedido;
use App\Models\Pizza;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function crearPedido(Request $request)
    {
        $pedidoUltimo = Pedido::latest('id_pedido')->first();
        if ($pedidoUltimo == null) {
           $num_pedidio = 1;
        }else{
            $num_pedidio = $pedidoUltimo->num_pedido + 1;
        }
        // Validando y guardando los datos del pedido
        $pedido = Pedido::create([
            'idcliente' => $request->input('idcliente'),
            'sucursal_id' => $request->input('sucursal_id'),
            'num_pedido' => $num_pedidio,
            'fecha_pedido' => date('Y-m-d'),
            'total_pedido' => 0, // El total se calculará más adelante
        ]);

        //$pizzas = $request->input('pizzas');
        $pizzaFinal = new Pizza();
        $pedidoFinal = new Pedido();
        $exitenciaIngrediente = new Ingrediente();
        $nuevaExistencia = 1;
        $sub_total = 0;
        $granTotal = 0;

        //validando los datos de la pizza
        $pizza = Pizza::create([
            'nombre_pizza' => $request->input('nombre_pizza'),
            'descripcion_pizza' => $request->input('descripcion_pizza'),
            'costo_pizza' => 0, // Este se calculará mas adelante
        ]);

        // Obtenemos el id de la última pizza creada
        $ultimaPizza = Pizza::latest('id_pizza')->first();
        $ultimaPedido = Pedido::latest('id_pedido')->first();

        // Procesa las pizzas en el pedido
        $ingredientes = $request->input('ingredientes_pizza');

        // Este for recorre los ingredientes de la pizza para crear un detalle
        foreach ((array)$ingredientes as $ingredientesData) {

            // Busccamos el costo del ingrediente
            $idIngrediente = $ingredientesData['ingredientes_pizza'];
            $costo = Ingrediente::find($idIngrediente);

            //Hacemos un cálculo del costo de la pizza
            $sub_total = $costo->costo_ingrediente += $costo->costo_ingrediente;

            //Detalle de la pizza
            $detallePizza = DetallePizza::create([
                'id_pizza' => $ultimaPizza->id_pizza,
                'id_ingrediente' => $ingredientesData['ingredientes_pizza'],
                'costo' => $costo->costo_ingrediente,
            ]);

            // Actualizamos la existencia de los ingredientes
            $nuevaExistencia = $exitenciaIngrediente->existencia - 1;
            $exitenciaIngrediente->existencia = $nuevaExistencia;
            $exitenciaIngrediente->update();

            // Se calcula el gran total del pedido
            $granTotal += $sub_total * $request->input('cantidad_pizzas');

            // Se añade al detalle del pedido
            $detallePedido = DetallePedido::create([
                'cantidad' => $request->input('cantidad_pizzas'),
                'costo_unitario' =>  $sub_total * $request->input('cantidad_pizzas'),
                'idpizza_detalle' => $ingredientesData['id_detalle_pedido'],
                'idpedido' =>  $$ultimaPedido->id_pedido,
            ]);
        }

        //Actualizo el costo de la pizza
        $pizzaFinal->costo_pizza = $sub_total;
        $pizzaFinal->update();

        //Actualizo el  gran total del pedido
        $pedidoFinal->total_pedido = $granTotal;
        $pedidoFinal->update();

        return response()->json([
            'message' => 'Pedido creado correctamente',
            'pedido' => $pedido,
            'pizza' => $pizza,
            'detallePizza' => $detallePizza,
            'detallePedido' => $detallePedido,
        ], 200);


    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
