<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datousuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'mail',
        'dni',
        'calle',
        'altura',
        'piso',
        'fk_provincia',
        'fk_localidad',
    ];


    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'fk_provincia');
    }


    public function localidad()
    {
        return $this->belongsTo(Localidad::class, 'fk_localidad');
    }

}
