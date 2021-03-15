@extends("layouts.app2")

@section("content")
<table id="tabla_tb_habitaciones" class="table table-bordered table-striped">
		
		<thead>
			<tr><th>Id</th><th>Habitacion</th><th>Precio</th></tr>
		</thead>
		<tbody>
			@foreach($tb_habitaciones as $tb_habitacion)
				<tr><td>{{$tb_habitacion->id}}</td><td>{{$tb_habitacion->habitacion}}</td><td>{{$tb_habitacion->precio}}</td></tr>
			@endforeach
		</tbody>
	</table>
@endsection