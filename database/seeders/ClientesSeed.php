<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("clientes")->insert([
            'nombre_cliente' => "Fabrcio",
            "apellido_cliente" => "Corvera",
            "correo" => 'fabricio@gmail.com'
        ]);
        DB::table("clientes")->insert([
            'nombre_cliente' => "Hernán",
            "apellido_cliente" => "Barahona",
            "correo" => 'hernan@gmail.com'
        ]);
        DB::table("clientes")->insert([
            'nombre_cliente' => "Allan",
            "apellido_cliente" => "Orellana",
            "correo" => 'allam@gmail.com'
        ]);
    }
}
