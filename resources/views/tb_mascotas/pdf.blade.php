@extends("layouts.app2")

@section("content")
<style>
	.table{
		font-size: 11px; 
	}
</style>
<table id="tabla_tb_mascotas" class="table table-bordered table-striped">
		
		<thead>
			<tr><th>Id</th><th>Propietario</th><th>Nombre</th><th>Sexo</th><th>Raza</th><th>Color</th><th>Peso</th><th>Fecha de Nacimiento</th><th>Microchip</th><th>Esterilizado</th></tr>
		</thead>
		<tbody>
			@foreach($tb_mascotas as $tb_mascota)
				<tr><td>{{$tb_mascota->id}}</td><td>{{$tb_mascota->tb_cliente->nombre}}</td><td>{{$tb_mascota->nombre}}</td><td>{{$tb_mascota->sexo}}</td><td>{{$tb_mascota->raza}}</td><td>{{$tb_mascota->color}}</td><td>{{$tb_mascota->peso}}</td><td>{{$tb_mascota->fecha_nacimiento}}</td><td>{{$tb_mascota->microchip}}</td><td>{{$tb_mascota->esterilizado}}</td></tr>
			@endforeach
		</tbody>
	</table>


@endsection