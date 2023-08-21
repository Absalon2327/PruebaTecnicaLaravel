<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_pizzas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_detalle_pizza');
            $table->integer('cantidad_ingreditne');
            $table->bigInteger('idpizza')->unsigned();
            $table->bigInteger('idingrediente')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pizzas');
    }
};
