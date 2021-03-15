@extends("layouts.app4")

@section("content")

<div class="container">
	
<a class="btn btn-success" href="/tb_habitaciones/create">Nueva Habitacion</a>
<a class="btn btn-warning pdf" href="/tb_habitaciones/pdf">Sacar PDF</a>
	
 	
	<table id="tabla_tb_habitaciones" class="table table-bordered table-striped">
		
		<thead>
			<tr><th>Id</th><th>Habitacion</th><th>Precio</th><th>Borrar</th><th>Ver</th><th>Editar</th></tr>
		</thead>
		<tbody>
			@foreach($tb_habitaciones as $tb_habitacion)
				<tr><td>{{$tb_habitacion->id}}</td><td>{{$tb_habitacion->habitacion}}</td><td>{{$tb_habitacion->precio}}</td>

				<td>
					<form method="POST" action="/tb_habitaciones/{{$tb_habitacion->id}}">
						<input class="btn btn-danger" type="submit" value="Borrar"> 
						<input type="hidden" name="_method" value="DELETE">
						@csrf
					</form>		
				</td>
				<td>
					<a href="/tb_habitaciones/{{$tb_habitacion->id}}" class="btn btn-success">Ver</a>
				</td>
				<td>
					<a href="/tb_habitaciones/{{$tb_habitacion->id}}/edit" class="btn btn-warning">Editar</a>
				</td>	

				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<script>
	$(document).ready(function(){
		var t=$("#tabla_tb_habitaciones").DataTable({
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