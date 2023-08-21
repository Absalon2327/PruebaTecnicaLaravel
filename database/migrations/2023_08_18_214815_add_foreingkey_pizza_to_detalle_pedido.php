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
        Schema::table('detalle_pedidos', function (Blueprint $table) {
            $table->foreign('idpedido')->references('id_pedido')->on('pedidos')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('idpizza_detalle')->references('id_pizza')->on('pizzas')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalle_pedidos', function (Blueprint $table) {
            $table->dropForeign(['idpedido']);
            $table->dropForeign(['idpizza_detalle']);
        });
    }
};
