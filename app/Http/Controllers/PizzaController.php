<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function ultimoRegistro()
    {
        $pizza = Pizza::latest('id_pizza')->first();
        return $pizza;
    }
    public function pizzaEspecifica($id)
    {
        $pizza = Pizza::find($id);
        return $pizza;
    }
    public function combinacionesPizzasPre()
    {

        $pizza = Pizza::with('ingredientes')->get();
        return response()->json($pizza);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pizza $pizza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pizza $pizza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pizza $pizza)
    {
        //
    }
}
