<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capitan extends Model
{
    use HasFactory;
	public $table="capitanes"; 
	
	protected $guarded = [];
	public function getedadAttribute()
	{
		return Carbon::parse($this->attributes['f_nacimiento'])->age;
	}
}
