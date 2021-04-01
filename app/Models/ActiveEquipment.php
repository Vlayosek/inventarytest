<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveEquipment extends Model
{
    use HasFactory;

    protected $table = "active_equipment";
    /* protected $primaryKey = 'id'; */
    protected $primaryKey = "id";

    protected $fillable = [
        'area_id',
        'equipo_host',
        'login_windows',
        'usuario_asignado',
        'tipo',
        'marca',
        'modelo',
        'serie',
        'nro_producto',
        'disco_duro',
        'ram',
        'procesador',
        'sistema_operativo',
        'mac',
        'ip',
        'mon_marca',
        'mon_modelo',
        'mon_serie',
        'mon_nro_producto',
        'ext_marca',
        'ext_modelo',
        'ext_serie',
        'ext_nro_producto',
        'has_ups'
    ];
}
