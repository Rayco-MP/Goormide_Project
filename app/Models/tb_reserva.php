<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_reserva extends Model
{
    use HasFactory;
	protected $guarded = [];
	
	public function tb_mascota()
    {
        return $this->belongsTo('App\Models\tb_mascota', 'mascota_id');
    }
	
	public function tb_habitacion()
    {
        return $this->belongsTo('App\Models\tb_habitacion', 'habitacion_id');
    }
	
	public function tb_dieta()
    {
        return $this->belongsTo('App\Models\tb_dieta', 'dieta_id');
    }
}
