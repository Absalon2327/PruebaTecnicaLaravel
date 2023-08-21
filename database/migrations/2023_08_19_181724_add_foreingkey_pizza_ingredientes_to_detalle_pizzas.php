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
        Schema::table('detalle_pizzas', function (Blueprint $table) {
            $table->foreign('idingrediente')->references('id_ingrediente')->on('ingredientes')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('idpizza')->references('id_pizza')->on('pizzas')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalle_pizzas', function (Blueprint $table) {
            $table->dropForeign(['idingrediente']);
            $table->dropForeign(['idpizza']);
        });
    }
};
