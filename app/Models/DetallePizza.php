<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePizza extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $primaryKey = 'id_detalle_pizza';

    protected $fillable = [
        'id_detalle_pizza',
        'costo_ingrediente',
        'idpizza',
        'idingrediente',
    ];

    public function Pedidos(){
        return $this->belongsToMany(Pedido::class, 'detalle_pedidos', 'idpizza_detalle','idpedido');
    }

}
