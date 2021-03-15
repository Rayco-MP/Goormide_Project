<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_dieta extends Model
{
    use HasFactory;
	protected $guarded = [];
	public function tb_reserva()
	{
		return $this->hasMany('App\Models\tb_reserva','id', 'dieta_id');
	}
}
