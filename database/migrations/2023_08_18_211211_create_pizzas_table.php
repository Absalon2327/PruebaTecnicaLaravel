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
        Schema::create('pizzas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_pizza');
            $table->string('nombre_pizza', 50);
            $table->string('descripcion_pizza', 100);
            $table->double('costo_pizza', 8, 2);
            $table->bigInteger('idingrediente')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzas');
    }
};
