<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'Fecha_pedido',
        'Precio_Total',
        'Cantidad_producto',
        'fk_producto',
        'fk_usuario',
    ];

    protected $casts = [
        'Fecha_pedido' => 'date',
    ];


    public function producto()
    {
        return $this->belongsTo(Producto::class, 'fk_producto');
    }


    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'fk_usuario');
    }

}
