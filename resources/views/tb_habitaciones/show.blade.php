@extends("layouts.app2")

@section("content")
<h1>
	Habitacion: {{$tb_habitacion->habitacion}}
</h1>
<h1>
	Precio: {{$tb_habitacion->precio}}
</h1>



<a href="/tb_habitaciones" class="btn btn-success">Volver al listado </a>

@endsection