<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_cliente extends Model
{
    use HasFactory;
	protected $guarded = [];
	public function tb_mascota ()
	{
		return $this->hasMany('App\Models\tb_mascota','id', 'cliente_id');
	}
}