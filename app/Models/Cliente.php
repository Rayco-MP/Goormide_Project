<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
	public $incrementing = false;
	public $timestamps = false;
	
	
	public function carrera ()
	{
		return $this->hasMany('App\Models\Carrera');
	}
}
