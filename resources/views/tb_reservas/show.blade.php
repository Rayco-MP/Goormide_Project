@extends("layouts.app2")

@section("content")
<h1>
	Dia de la reserva: {{$tb_reserva->pide_reserva}}
</h1>
<h1>
	Nombre: {{$tb_reserva->entrada}}
</h1>
<h1>
	Sexo: {{$tb_reserva->salida}}
</h1>
<h1>
	Raza: {{$tb_reserva->mascota_id}}
</h1>
<h1>
	Color: {{$tb_reserva->habitacion_id}}
</h1>
<h1>
	Peso: {{$tb_reserva->dieta_id}}
</h1>



<a href="/tb_reservas" class="btn btn-success">Volver al listado </a>

@endsection