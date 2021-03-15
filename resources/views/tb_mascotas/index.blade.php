@extends("layouts.app4")

@section("content")

<div class="container">
	
<a class="btn btn-success" href="/tb_mascotas/create">Nueva Mascota</a>
<a class="btn btn-warning pdf" href="/tb_mascotas/pdf">Sacar PDF</a>
	
 	
	<table id="tabla_tb_mascotas" class="table table-bordered table-striped">
		
		<thead>
			<tr><th>Id</th><th>Propietario</th><th>Nombre</th><th>Sexo</th><th>Raza</th><th>Color</th><th>Peso</th><th>Fecha de Nacimiento</th><th>Microchip</th><th>Esterilizado</th><th>Borrar</th><th>Ver</th><th>Editar</th></tr>
		</thead>
		<tbody>
			@foreach($tb_mascotas as $tb_mascota)
				<tr><td>{{$tb_mascota->id}}</td><td>{{$tb_mascota->tb_cliente->nombre}}</td><td>{{$tb_mascota->nombre}}</td><td>{{$tb_mascota->sexo}}</td><td>{{$tb_mascota->raza}}</td><td>{{$tb_mascota->color}}</td><td>{{$tb_mascota->peso}}</td><td>{{$tb_mascota->fecha_nacimiento}}</td><td>{{$tb_mascota->microchip}}</td><td>{{$tb_mascota->esterilizado}}</td>

				<td>
					<form method="POST" action="/tb_mascotas/{{$tb_mascota->id}}">
						<input class="btn btn-danger" type="submit" value="Borrar"> 
						<input type="hidden" name="_method" value="DELETE">
						@csrf
					</form>		
				</td>
				<td>
					<a href="/tb_mascotas/{{$tb_mascota->id}}" class="btn btn-success">Ver</a>
				</td>
				<td>
					<a href="/tb_mascotas/{{$tb_mascota->id}}/edit" class="btn btn-warning">Editar</a>
				</td>	

				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<script>
	$(document).ready(function(){
		var t=$("#tabla_tb_mascotas").DataTable({
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