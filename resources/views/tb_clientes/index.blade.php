@extends("layouts.app6")

@section("content")


	
<a class="btn btn-success" href="/tb_clientes/create">Nuevo Cliente</a>
<a class="btn btn-warning pdf" href="/tb_clientes/pdf">Sacar PDF</a>
	
 	
	<table id="tabla_mostrar" class="table table-bordered table-striped">
		
		<thead>
			<tr><th style="display:none"></th><th>Id</th><th>Nombre</th><th>Apellidos</th><th>Telefono</th><th>Email</th><th>NIF</th><th>Borrar</th><th>Ver</th><th>Editar</th><th></th></tr>
		</thead>
		<tbody>
			@foreach($tb_clientes as $tb_cliente)
				<tr><td style="display:none"></td><td>{{$tb_cliente->id}}</td><td>{{$tb_cliente->nombre}}</td><td>{{$tb_cliente->apellidos}}</td><td>{{$tb_cliente->telefono}}</td><td>{{$tb_cliente->email}}</td><td>{{$tb_cliente->nif}}</td>

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
				<td><div class="btn btn-crimson btn-inline-block" data-toggle="modal" data-target="#myModal-{{$tb_cliente->id}}"><a href="#" class="btn btn-success">View</a></div></td>
				</tr>
			<!--MODAL -->
			<div class="modal fade" id="myModal-{{$tb_cliente->id}}" role="dialog">
				<div class="modal-dialog modal-lg">
				  <!-- MODAL content -->
				  <div class="modal-content" style="width:70%; margin:0 auto; margin-top:100px; max-height: calc(100vh - 210px); overflow-y: auto;">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">×</button>
					  <h4 class="modal-title">Subject: {{ $tb_cliente->nombre }}</h4>
			   </div>
			<div class="modal-body" style="padding-top:0">

			</div>
			<div class="modal-footer">
			   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			<!-- /. modal content-->
			@endforeach
		</tbody>
	</table>

<script>
	$(document).ready(function(){
		var t=$("#tabla_mostrar").DataTable({
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