@extends("layouts.app2")

@section("content")

<div class="container">
	
<a class="btn btn-success" href="/proveedores/create">Añadir Proveedor</a>

	
 	
	<table id="tabla_proveedores" class="table table-bordered table-striped">
		
		<thead>
			<tr><th style="display:none">Id</th><th>Id</th><th>Empresa</th><th>Cargo de contacto</th><th>Ciudad</th><th>Borrar</th><th>Ver</th><th>Editar</th></tr>
		</thead>
		<tbody>
			@foreach($proveedores as $proveedor)
				<tr><td style="display:none">{{$proveedor->id}}</td><td>{{$proveedor->id}}</td><td>{{$proveedor->empresa}}</td><td>{{$proveedor->cargo_contacto}}</td><td>{{$proveedor->ciudad}}</td>

				<td>
					<form method="POST" action="/proveedores/{{$proveedor->id}}">
						<input class="btn btn-danger" type="submit" value="Borrar"> 
						<input type="hidden" name="_method" value="DELETE">
						@csrf
					</form>		
				</td>
				<td>
					<a href="/proveedores/{{$proveedor->id}}" class="btn btn-success">Ver</a>
				</td>
				<td>
					<a href="/proveedores/{{$proveedor->id}}/edit" class="btn btn-warning">Editar</a>
				</td>	

				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<script>
	$(document).ready(function(){
		var t=$("#tabla_proveedores").DataTable({
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