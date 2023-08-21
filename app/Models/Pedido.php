<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_pedido';
    use HasFactory;

    protected $fillable = [
        'id_pedido',
        'num_pedido',
        'total_pedido',
        'fecha_pedido',
        'idcliente',
        'sucursal_id',
    ];

    public function detallePizzas(){
        return $this->belongsToMany(DetallePizza::class, 'detalle_pedidos', 'idpedido','idpizza_detalle');
    }
}
