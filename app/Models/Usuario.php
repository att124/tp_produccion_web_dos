<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;

    protected $fillable = [
        'usuario',
        'contrasena',
        'activo',
        'fecha_ingreso',
        'DatosUsuario_idDatosUsuario',
        'Rol_idRol'
    ];

    public function rol()
    {

        return $this->belongsTo(Rol::class, 'Rol_idRol', 'idRol');

    }





}
