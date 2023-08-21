<?php

namespace App\Http\Controllers;

use App\Models\DetallePizza;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DetallePizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DetallePizza::all();
    }

    public function detallePiza()
    {
        $pizza = Pizza::with('ingredientes')->get();
        return $pizza;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $detallePizza = new DetallePizza();
        $detallePizza->cantidad_ingrediente = $request->cantidad_ingrediente;
        $detallePizza->idpizza = $request->idpizza;
        $detallePizza->idingrediente = $request->idingrediente;
        $detallePizza->save();

        return response()->json([
            'resp' => true,
            'msg' => 'Detalle de la piza Registrado correctamente'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(DetallePizza $detallePizza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetallePizza $detallePizza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetallePizza $detallePizza)
    {
        //
    }
}
