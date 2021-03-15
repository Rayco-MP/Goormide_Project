<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
	
	public function taxi()
    {
        return $this->belongsTo('App\Models\Taxi');
    }
	
	public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }
}
