<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'Fecha_ingreso',
        'Activo',
        'fk_rol',
        'fk_datos_usuario',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'Fecha_ingreso' => 'date',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'fk_rol');
    }


    public function datosUsuario()
    {
        return $this->belongsTo(Datousuario::class, 'fk_datos_usuario');
    }

    public function contactos()
    {
        return $this->hasMany(Contacto::class, 'fk_user');
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'user_id');
    }

}
