<?php
namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable, Notifiable;

    protected $fillable = [
        'usuario',
        'Fecha_ingreso',
        'contraseña',
        'Activo',
        'fk_rol',
        'fk_datos_usuario',
    ];

    protected $casts = [
        'Fecha_ingreso' => 'date',
    ];

    protected $hidden = [
        'contraseña',
    ];

    public function getAuthPassword()
    {
        return $this->contraseña;
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'fk_rol');
    }

    public function datosUsuario()
    {
        return $this->belongsTo(Datousuario::class, 'fk_datos_usuario');
    }
}
