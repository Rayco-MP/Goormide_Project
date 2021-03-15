<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taxi extends Model
{
    use HasFactory;
	const CREATED_AT = 'f_creacion';
    const UPDATED_AT = 'f_actualizacion';
	protected $guarded=[];
	public function carrera ()
	{
		return $this->hasMany('App\Models\Carrera');
	}
}
