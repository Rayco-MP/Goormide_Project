@extends("layouts.app2")

@section("content")
<h1>
	Dieta: {{$tb_dieta->tipo_dieta}}
</h1>
<h1>
	Precio: {{$tb_dieta->precio}}
</h1>



<a href="/tb_dietas" class="btn btn-success">Volver al listado </a>

@endsection