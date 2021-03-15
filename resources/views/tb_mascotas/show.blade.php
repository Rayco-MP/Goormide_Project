@extends("layouts.app2")

@section("content")
<h1>
	Propietario: {{$tb_mascota->cliente_id}}
</h1>
<h1>
	Nombre: {{$tb_mascota->nombre}}
</h1>
<h1>
	Sexo: {{$tb_mascota->sexo}}
</h1>
<h1>
	Raza: {{$tb_mascota->raza}}
</h1>
<h1>
	Color: {{$tb_mascota->color}}
</h1>
<h1>
	Peso: {{$tb_mascota->peso}}
</h1>
<h1>
	Fecha de nacimiento: {{$tb_mascota->fecha_nacimiento}}
</h1>
<h1>
	Microchip: {{$tb_mascota->microchip}}
</h1>
<h1>
	Esterilizado: {{$tb_mascota->esterilizado}}
</h1>


<a href="/tb_mascotas" class="btn btn-success">Volver al listado </a>

@endsection