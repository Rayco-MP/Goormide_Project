@extends("layouts.app6")

@section("content")


	
<a class="btn btn-success" href="/tb_dietas/create">Nueva dieta</a>
<a class="btn btn-warning pdf" href="/tb_dietas/pdf">Sacar PDF</a>
	
 	
	<table id="tabla_tb_dietas" class="table table-bordered table-striped">
		
		<thead>
			<tr><th style="display:none;"></th><th>Id</th><th>Dieta</th><th>Precio</th><th>Borrar</th><th>Ver</th><th>Editar</th></tr>
		</thead>
		<tbody>
			@foreach($tb_dietas as $tb_dieta)
				<tr><td style="display:none;"></td><td>{{$tb_dieta->id}}</td><td>{{$tb_dieta->tipo_dieta}}</td><td>{{$tb_dieta->precio}}</td>

				<td>
					<form method="POST" action="/tb_dietas/{{$tb_dieta->id}}">
						<input class="btn btn-danger" type="submit" value="Borrar"> 
						<input type="hidden" name="_method" value="DELETE">
						@csrf
					</form>		
				</td>
				<td>
					<a href="/tb_dietas/{{$tb_dieta->id}}" class="btn btn-success">Ver</a>
				</td>
				<td>
					<a href="/tb_dietas/{{$tb_dieta->id}}/edit" class="btn btn-warning">Editar</a>
				</td>	

				</tr>
			@endforeach
		</tbody>
	</table>


<script>
	$(document).ready(function(){
		var t=$("#tabla_tb_dietas").DataTable({
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