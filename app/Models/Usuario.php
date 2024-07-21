<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'Usuario',
        'Contraseña',
        'Fecha_ingreso',
        'Activo',
        'fk_rol',
        'fk_datos_usuario',
    ];

    protected $casts = [ 'fecha_ingreso' => 'date',];

    protected $hidden = [
       'contrasena',
    ];



    public function rol()
    {
        return $this->belongsTo(Rol::class, 'fk_rol');
    }


    public function datosUsuario()
    {
        return $this->belongsTo(Datousuario::class, 'fk_datos_usuario');
    }
}
