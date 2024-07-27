<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;


    protected $fillable = [
        'fk_pedido',
        'fk_producto',
        'cantidad',
        'precio',
    ];


    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'fk_pedido');
    }


    public function producto()
    {
        return $this->belongsTo(Producto::class, 'fk_producto');
    }
}
