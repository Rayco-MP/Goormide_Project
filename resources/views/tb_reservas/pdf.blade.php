@extends("layouts.app2")

@section("content")
<table id="tabla_tb_reservas" class="table table-bordered table-striped">
		
		<thead>
			<tr><th>Id</th><th>Dia de la reserva</th><th>Entrada</th><th>Salida</th><th>Mascota</th><th>Habitacion</th><th>Dieta</th></tr>
		</thead>
		<tbody>
			@foreach($tb_reservas as $tb_reserva)
				<tr><td>{{$tb_reserva->id}}</td><td>{{$tb_reserva->pide_reserva}}</td><td>{{$tb_reserva->entrada}}</td><td>{{$tb_reserva->salida}}</td><td>{{$tb_reserva->tb_mascota->nombre}}</td><td>{{$tb_reserva->tb_habitacion->habitacion}}</td><td>{{$tb_reserva->tb_dieta->tipo_dieta}}</td></tr>
			@endforeach
		</tbody>
	</table>
@endsection