@extends("layouts.app2")

@section("content")

<table id="tabla_tb_dietas" class="table table-bordered table-striped">
		
		<thead>
			<tr><th>Id</th><th>Dieta</th><th>Precio</th></tr>
		</thead>
		<tbody>
			@foreach($tb_dietas as $tb_dieta)
				<tr><td>{{$tb_dieta->id}}</td><td>{{$tb_dieta->tipo_dieta}}</td><td>{{$tb_dieta->precio}}</td></tr>
			@endforeach
		</tbody>
	</table>
@endsection