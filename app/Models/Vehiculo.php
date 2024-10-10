<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehiculo extends Model
{
    use HasFactory;
    //Relacionado modelo con tabla de Vehiculos
    protected $table = 'vehiculos';

    //llave primaria
    protected $primaryKey = 'id_vehiculo';


    //propiedades para ser modificados en la tabla Vehiculos
    protected $fillable = [
        'conductor_id',
        'propietario_id',
        'tipo_vehiculo_id',
        'marca_id',
        'modelo_id',
        'placa'];

    //Relacion un vehiculo pertenece a un tipo_vehiculo
    public function tipoVehiculo(): BelongsTo
    {
        return $this->belongsTo(TipoVehiculo::class, 'tipo_vehiculo_id');
    }

    //Relacion un marca tiene muchos vehiculos
    public function marca():BelongsTo
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    //relacion vehiculo con propietario (muchos a muchos)
    public function persona():BelongsToMany
    {
        return $this->belongsToMany(Persona::class, 'persona_vehiculo', 'vehiculo_id', 'persona_id');
    }



}
