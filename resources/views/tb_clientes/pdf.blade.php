@extends("layouts.app2")

@section("content")
<style>
	.table{
		font-size: 11px; 
	}
</style>
<table id="tabla_tb_clientes" class="table table-bordered table-striped">
		
		<thead>
			<tr><th>Id</th><th>Nombre</th><th>Apellidos</th><th>Direccion</th><th>CP</th><th>Localidad</th><th>Provincia</th><th>Pais</th><th>Telefono</th><th>Email</th><th>NIF</th></tr>
		</thead>
		<tbody>
			@foreach($tb_clientes as $tb_cliente)
				<tr><td>{{$tb_cliente->id}}</td><td>{{$tb_cliente->nombre}}</td><td>{{$tb_cliente->apellidos}}</td><td>{{$tb_cliente->direccion}}</td><td>{{$tb_cliente->cp}}</td><td>{{$tb_cliente->localidad}}</td><td>{{$tb_cliente->provincia}}</td><td>{{$tb_cliente->pais}}</td><td>{{$tb_cliente->telefono}}</td><td>{{$tb_cliente->email}}</td><td>{{$tb_cliente->nif}}</td>	

				</tr>
			@endforeach
		</tbody>
	</table>
@endsection