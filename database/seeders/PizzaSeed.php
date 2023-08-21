<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pizzas')->insert(
            [
                'nombre_pizza' => 'PIZZA HAWAIANA',
                'costo_pizza' => 13.50,
                'descripcion_pizza' => 'PIZZA HAWAIANA DE 12 PORCIONES CON JAMÓN Y PIÑA'
            ]
        );
        DB::table('pizzas')->insert(
            [
                'nombre_pizza' => 'PIZZA DE JAMÓM',
                'costo_pizza' => 13.50,
                'descripcion_pizza' => 'PIZZA TRADICIONAL DE 12 PORCIONES CON JAMÓN'
            ]
        );
        DB::table('pizzas')->insert(
            [
                'nombre_pizza' => 'PIZZA DE PEPERONI',
                'costo_pizza' => 13.50,
                'descripcion_pizza' => 'PIZZA TRADICIONAL DE 12 PORCIONES CON PEPERONI'
            ]
        );
        DB::table('pizzas')->insert(
            [
                'nombre_pizza' => 'PIZZA 4 EN 1',
                'costo_pizza' => 18.00,
                'descripcion_pizza' => 'PIZZA DE 12 PORCIONES CON JAMÓN, HONGOS, PEPRONI Y PIÑA'
            ]
        );

        DB::table('pizzas')->insert(
            [
                'nombre_pizza' => 'PIZZA FAMILIAR',
                'costo_pizza' => 13.50,
                'descripcion_pizza' => 'PIZZA DE 12 PORCIONES CON JAMÓN'
            ]
        );
    }
}
