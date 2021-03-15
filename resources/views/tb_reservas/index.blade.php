@extends("layouts.app4")

@section("content")

<div class="container">
	
<a class="btn btn-success" href="/tb_reservas/create">Nueva Reserva</a>
<a class="btn btn-warning pdf" href="/tb_reservas/pdf">Sacar PDF</a>
	
 	
	<table id="tabla_tb_reservas" class="table table-bordered table-striped">
		
		<thead>
			<tr><th>Id</th><th>Dia de la reserva</th><th>Entrada</th><th>Salida</th><th>Mascota</th><th>Habitacion</th><th>Dieta</th><th>Borrar</th><th>Ver</th><th>Editar</th></tr>
		</thead>
		<tbody>
			@foreach($tb_reservas as $tb_reserva)
				<tr><td>{{$tb_reserva->id}}</td><td>{{$tb_reserva->pide_reserva}}</td><td>{{$tb_reserva->entrada}}</td><td>{{$tb_reserva->salida}}</td><td>{{$tb_reserva->tb_mascota->nombre}}</td><td>{{$tb_reserva->tb_habitacion->habitacion}}</td><td>{{$tb_reserva->tb_dieta->tipo_dieta}}</td>

				<td>
					<form method="POST" action="/tb_reservas/{{$tb_reserva->id}}">
						<input class="btn btn-danger" type="submit" value="Borrar"> 
						<input type="hidden" name="_method" value="DELETE">
						@csrf
					</form>		
				</td>
				<td>
					<a href="/tb_reservas/{{$tb_reserva->id}}" class="btn btn-success">Ver</a>
				</td>
				<td>
					<a href="/tb_reservas/{{$tb_reserva->id}}/edit" class="btn btn-warning">Editar</a>
				</td>	

				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<script>
	$(document).ready(function(){
		var t=$("#tabla_tb_reservas").DataTable({
			"language": {
				"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
			}
		});
	
		t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();	
	});
</script>

@endsection