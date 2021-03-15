<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //use HasFactory;
	public $table="proveedores"; //Tambien vale con protected $table="proveedores";
	protected $primaryKey="id"; //Le dice que la clave primaria no es id sino IdProveedor
	public $timestamps = false;  //No tiene campos create_at u update_at
	protected $guarded = [];	//Permite la asignacion masiva en todo los campos
}
