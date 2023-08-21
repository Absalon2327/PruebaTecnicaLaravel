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
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_detalle_pedido');
            $table->integer('cantidad');
            $table->double('costo_unitario', 8, 2);
            $table->bigInteger('idpizza_detalle')->unsigned();
            $table->bigInteger('idpedido')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedidos');
    }
};
