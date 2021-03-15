@extends("layouts.app2")

@section("content")
<h1>
	Nombre: {{$tb_cliente->nombre}}
</h1>
<h1>
	Apellidos: {{$tb_cliente->apellidos}}
</h1>
<h1>
	Direccion: {{$tb_cliente->direccion}}
</h1>
<h1>
	CP: {{$tb_cliente->cp}}
</h1>
<h1>
	Localidad: {{$tb_cliente->localidad}}
</h1>
<h1>
	Provincia: {{$tb_cliente->provincia}}
</h1>
<h1>
	Pais: {{$tb_cliente->pais}}
</h1>
<h1>
	Telefono: {{$tb_cliente->telefono}}
</h1>
<h1>
	Email: {{$tb_cliente->email}}
</h1>
<h1>
	NIF: {{$tb_cliente->nif}}
</h1>

<a href="/tb_clientes" class="btn btn-success">Volver al listado </a>

@endsection