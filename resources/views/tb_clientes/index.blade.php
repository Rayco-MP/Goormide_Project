@extends("layouts.app4")

@section("content")

<div class="index">
	
<a class="btn btn-success" href="/tb_clientes/create">Nuevo Cliente</a>
<a class="btn btn-warning pdf" href="/tb_clientes/pdf">Sacar PDF</a>
	
 	
	<table id="tabla_tb_clientes" class="table table-bordered table-striped">
		
		<thead>
			<tr><th>Id</th><th>Nombre</th><th>Apellidos</th><th>Direccion</th><th>CP</th><th>Localidad</th><th>Provincia</th><th>Pais</th><th>Telefono</th><th>Email</th><th>NIF</th><th>Borrar</th><th>Ver</th><th>Editar</th></tr>
		</thead>
		<tbody>
			@foreach($tb_clientes as $tb_cliente)
				<tr><td>{{$tb_cliente->id}}</td><td>{{$tb_cliente->nombre}}</td><td>{{$tb_cliente->apellidos}}</td><td>{{$tb_cliente->direccion}}</td><td>{{$tb_cliente->cp}}</td><td>{{$tb_cliente->localidad}}</td><td>{{$tb_cliente->provincia}}</td><td>{{$tb_cliente->pais}}</td><td>{{$tb_cliente->telefono}}</td><td>{{$tb_cliente->email}}</td><td>{{$tb_cliente->nif}}</td>

				<td>
					<form method="POST" action="/tb_clientes/{{$tb_cliente->id}}">
						<input class="btn btn-danger" type="submit" value="Borrar"> 
						<input type="hidden" name="_method" value="DELETE">
						@csrf
					</form>		
				</td>
				<td>
					<a href="/tb_clientes/{{$tb_cliente->id}}" class="btn btn-success">Ver</a>
				</td>
				<td>
					<a href="/tb_clientes/{{$tb_cliente->id}}/edit" class="btn btn-warning">Editar</a>
				</td>	

				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<script>
	$(document).ready(function(){
		var t=$("#tabla_tb_clientes").DataTable({
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