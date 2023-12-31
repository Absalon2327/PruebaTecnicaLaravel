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
        Schema::table('sucursales', function (Blueprint $table) {
            //
            //$table->bigInteger('sucursal_id')->unsigned();
            $table->foreign('sucursal_id')->references('id_pedido')->on('pedidos')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sucursales', function (Blueprint $table) {
            //
            // $table->dropColumn('sucursal_id');
            $table->dropForeign(['sucursal_id']);
        });
    }
};
