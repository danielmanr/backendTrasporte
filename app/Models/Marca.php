<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Marca extends Model
{
    use HasFactory;


    //Nombre de la tabla
    protected $table = 'usuarios';

    //Asignacion llave primaria
    protected $primaryKey = 'id_usuario';

    //Propiedades que recibe para ser modificadas
    protected $fillable = ['contrasena'];

    //Relacion uno a uno con la tabla Personas
    public function vehiculos(): HasMany
    {
        return $this->hasMany(Vehiculo::class, 'marca_id');
    }


}
