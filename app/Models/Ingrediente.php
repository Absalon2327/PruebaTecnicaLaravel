<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_ingrediente';

    protected $fillable = [
        'id_ingrediente',
        'nombre_ingrediente',
        'costo_ingrediente',
        'existencia'
    ];

    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class, 'detalle_pizzas', 'idingrediente', 'idpizza');
    }
}
