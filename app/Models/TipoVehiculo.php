<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    use HasFactory;
    //Nombre de la tabla
    protected $table = 'tipovehiculo';

    //Asignacion llave primaria
    protected $primaryKey = 'id_tipo_vehiculo';

    //Propiedades que recibe para ser modificadas
    protected $fillable = ['tipovehiculo'];

    //Relacion uno a uno con la tabla vehiculos
    public function vehiculos()
    {
        return $this->hasOne(Vehiculo::class, 'tipo_vehiculo_id');
    }
}
