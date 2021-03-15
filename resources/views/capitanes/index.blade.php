@extends("layouts.app2")

@section("content")

<div class="container">
	
<a class="btn btn-success" href="/capitanes/create">Añadir capitan</a>

	
 	
	<table id="tabla_capitanes" class="table table-bordered table-striped">
		
		<thead>
			<tr><th>Id</th><th>Nombre</th><th>Apellidos</th><th>Fecha de nacimineto</th><th>Email</th><th>Edad</th><th>Borrar</th></tr>
		</thead>
		<tbody>
			@foreach($capitanes as $capitan)
				<tr><td>{{$capitan->id}}</td><td>{{$capitan->nombre}}</td><td>{{$capitan->apellidos}}</td><td>{{$capitan->f_nacimiento}}</td><td>{{$capitan->email}}</td><td>{{$capitan->edad}}</td>

				<td>
					<form method="POST" action="/capitanes/{{$capitan->id}}">
						<input class="btn btn-danger" type="submit" value="Borrar"> 
						<input type="hidden" name="_method" value="DELETE">
						@csrf
					</form>		
				</td>

				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<script>
	$(document).ready(function(){
		var t=$("#tabla_capitanes").DataTable({
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