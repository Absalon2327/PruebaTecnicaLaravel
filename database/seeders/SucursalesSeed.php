<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("sucursales")->insert([
            "nombre_sucursal" => "Plaza mundo, Soyapango",
            "direccion" => "Blv. los Ejercitos, Soyapango, San Salvador"
        ]);
        DB::table("sucursales")->insert([
            "nombre_sucursal" => "Metrocentro",
            "direccion" => "Calle Constirución, San Salvador, San Salvador"
        ]);
    }
}
