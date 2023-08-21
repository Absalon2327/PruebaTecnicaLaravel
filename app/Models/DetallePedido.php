<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $primaryKey = 'id_detalle_pedido';

    protected $fillable = [
        'id_detalle_pedido',
        'cantidad',
        'costo_unitario',
        'idpizza_detalle',
        'idpedido',
    ];


}
