<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("ingredientes")->insert([
            "nombre_ingrediente" => "JAMÓN",
            "costo_ingrediente" => 1.10,
            "existencia" => 10
        ]);
        DB::table("ingredientes")->insert([
            "nombre_ingrediente" => "PIÑA",
            "costo_ingrediente" => 0.75,
            "existencia" => 10
        ]);
        DB::table("ingredientes")->insert([
            "nombre_ingrediente" => "QUESO CHEDAR",
            "costo_ingrediente" => 1.50,
            "existencia" => 10
        ]);
        DB::table("ingredientes")->insert([
            "nombre_ingrediente" => "QUESO MOZARELLA",
            "costo_ingrediente" => 1.75,
            "existencia" => 10
        ]);
        DB::table("ingredientes")->insert([
            "nombre_ingrediente" => "MASA ITALIANA ",
            "costo_ingrediente" => 2.50,
            "existencia" => 10
        ]);
        DB::table("ingredientes")->insert([
            "nombre_ingrediente" => "MASA FRANCESA",
            "costo_ingrediente" => 2.25,
            "existencia" => 10
        ]);
        DB::table("ingredientes")->insert([
            "nombre_ingrediente" => "HONGOS",
            "costo_ingrediente" => 1.25,
            "existencia" => 10
        ]);
        DB::table("ingredientes")->insert([
            "nombre_ingrediente" => "CHAMPIÑONES",
            "costo_ingrediente" => 1.75,
            "existencia" => 10
        ]);
    }
}
