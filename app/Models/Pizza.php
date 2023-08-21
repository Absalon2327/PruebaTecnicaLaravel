<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pizza';
    public $timestamps = false;

    protected $fillable = [
        'id_pizza',
        'nombre_pizza',
        'descripcion_pizza',
        'costo_pizza',
    ];

    public function ingredientes(){
        return $this->belongsToMany(Ingrediente::class, 'detalle_pizzas', 'idpizza','idingrediente');
    }
}
