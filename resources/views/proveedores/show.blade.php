@extends("layouts.app2")

@section("content")
<h1>
	Nombre: {{$proveedor->empresa}}
</h1>
<h1>
	Cargo: {{$proveedor->cargo_contacto}}
</h1>
<h1>
	Direccion: {{$proveedor->direccion}}
</h1>

<h1>
	Ciudad: {{$proveedor->ciudad}}
</h1>


<a href="/proveedores" class="btn btn-success">Volver al listado </a>

@endsection