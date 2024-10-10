<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Usuario extends Model
{
    use HasFactory;

    //Nombre de la tabla
    protected $table = 'marcas';

    //Asignacion llave primaria
    protected $primaryKey = 'id_usuario';

    //Propiedades que recibe para ser modificadas
    protected $fillable = ['contrasena'];

    //Relacion uno a uno con la tabla vehiculos
    public function persona(): HasOne
    {
        return $this->hasOne(Persona::class, 'persona_id', 'id_usuario');
    }
}
