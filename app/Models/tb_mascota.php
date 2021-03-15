<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_mascota extends Model
{
    use HasFactory;
	protected $guarded = [];
	public function tb_cliente()
    {
        return $this->belongsTo('App\Models\tb_cliente', 'cliente_id');
    }
	
	public function tb_reserva()
	{
		return $this->hasMany('App\Models\tb_reserva','id', 'mascota_id');
	}
}
