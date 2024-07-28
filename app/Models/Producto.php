<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'precio',
        'stock',
        'marca',
        'descripcion',
        'especificacion',
        'visible',
        'imagen1',
        'imagen2',
        'imagen3',
        'imagen4',
        'fk_categoria',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'fk_categoria');
    }

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'ventas', 'fk_producto', 'fk_pedido')
                    ->withPivot('cantidad', 'precio')
                    ->withTimestamps();
    }



}
