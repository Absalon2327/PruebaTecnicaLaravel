<?php
namespace App\Http\Controllers;


use App\Models\Ingrediente;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IngredienteController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ingrediente::all();
    }

    public function obtenerIngredientes()
    {

        $ingredientes = Ingrediente::where('existencia','>',0)->get();

        return response()->json($ingredientes);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ingrediente = new Ingrediente();
        $ingrediente->nombre_ingrediente = $request->nombre;
        $ingrediente->costo_ingrediente = $request->costo;
        $ingrediente->save();

        return response()->json([
            "message" => "Ingrediente creado correctamente",
            "ingrediente" => $ingrediente
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingrediente $ingrediente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingrediente $ingrediente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingrediente $ingrediente)
    {
        //
    }
}
