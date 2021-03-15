@extends("layouts.app2")

@section("content")

<style>
	.rojo {
		background-color: red !important;
	}

</style>


<div class="container">
	
<a class="btn btn-success" href="/proveedores/create">Añadir Proveedor</a>

	
 	
<table class="table table-bordered table-striped">
	<tr><th>Id</th><th>Empresa</th><th>Cargo de contacto</th><th>Ciudad</th><th>Borrar</th><th>Ver</th><th>Editar</th></tr>
	@foreach($proveedores as $proveedor)
		<tr><td>{{$proveedor->id}}</td><td contenteditable>{{$proveedor->empresa}}</td><td contenteditable>{{$proveedor->cargo_contacto}}</td><td contenteditable>{{$proveedor->ciudad}}</td>
	
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
	</table>
	{{ $proveedores->links() }}
</div>

@endsection