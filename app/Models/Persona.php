<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Persona extends Model
{
    use HasFactory;

    //Nombre de la tabla
    protected $table = 'personas';

    //Asignacion llave primaria
    protected $primaryKey = 'id_persona';

    //Propiedades que recibe para ser modificadas
    protected $fillable = [
        'Cedula',
        'Primer_nombre',
        'Segundo_nombre',
        'Apellidos',
        'Direccion',
        'Telefono',
        'Ciudad',
        'Correo'
    ];


    //Relacion entre vehiculo y Propietario (muchos a muchos)
    public function vehiculos():BelongsToMany
    {
        return $this->belongsToMany(Vehiculo::class, 'persona_vehiculos', 'id_persona', 'id_vehiculo');
    }

    //Relacion entre Persona y usuario
    public function usuarios():BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
