<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_habitacion extends Model
{
    use HasFactory;
	public $table="tb_habitaciones"; 
	protected $guarded = [];
	public function tb_reserva()
	{
		return $this->hasMany('App\Models\tb_reserva','id', 'habitacion_id');
	}
}
