<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_pedido',
        'fk_user',
        'telefono',
        'direccion',
    ];

    protected $casts = [
        'Fecha_pedido' => 'date',
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'fk_users');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'ventas', 'fk_pedido', 'fk_producto')
                    ->withPivot('cantidad', 'precio')
                    ->withTimestamps();
    }


}
