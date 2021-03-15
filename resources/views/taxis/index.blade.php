@extends("layouts.app2")

@section("content")

<div class="container">
	
<a class="btn btn-success" href="/taxis/create">Añadir Taxi</a>

	
 	
	<table id="tabla_taxis" class="table table-bordered table-striped">
		
		<thead>
			<tr><th>Id</th><th>Matricula</th><th>Modelo</th><th>Fecha Matriculacion</th><th>DNI del Chofer</th><th>Kms</th><th>Fecha Alta</th><th>Fecha Creacion</th><th>Fecha Actualizacion</th></tr>
		</thead>
		<tbody>
			@foreach($taxis as $taxi)
				<tr><td>{{$taxi->id}}</td><td>{{$taxi->matricula}}</td><td>{{$taxi->modelo}}</td><td>{{$taxi->f_matriculacion}}</td><td>{{$taxi->dni_chofer}}</td><td>{{$taxi->kms}}</td><td>{{$taxi->fecha_alta}}</td><td>{{$taxi->f_creacion}}</td><td>{{$taxi->f_actualizacion}}</td></tr>
			@endforeach
		</tbody>
	</table>
</div>

<script>
	$(document).ready(function(){
		var t=$("#tabla_taxis").DataTable({
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