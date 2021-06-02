@extends("layouts.app6")

@section("content")


<h1>Habitaciones</h1>
<div class="btn btn-crimson btn-inline-block" data-toggle="modal" data-target="#myModalCreate">
	<a href="#" class="btn btn-primary"><i class="material-icons">add</i></a>
</div>
<a class="btn btn-warning pdf" href="/tb_habitaciones/pdf"><i class="material-icons">picture_as_pdf</i></a>
	
 	
	<table id="tabla_mostrar" class="table table-bordered table-striped" style="100%">
		
		<thead>
			<tr>
				<th></th>
				
				<th>Habitacion</th>
				<th>Precio</th>
				<th>Utilidades</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tb_habitaciones as $tb_habitacion)
				<tr>
					<td></td>
					
					<td>{{$tb_habitacion->habitacion}}</td>
					<td>{{$tb_habitacion->precio}}</td>
					<td>
							
						<!--<a href="/tb_habitaciones/{{$tb_habitacion->id}}" class="btn btn-success">Ver</a>-->
					
						<div class="btn btn-crimson btn-inline-block" data-toggle="modal" data-target="#myModalEdit-{{$tb_habitacion->id}}">
							<a href="#" class="btn btn-warning"><i class="material-icons">border_color</i></a>
						</div>
						<div class="btn btn-crimson btn-inline-block">
							<form class="formulario-eliminar" method="POST" action="/tb_habitaciones/{{$tb_habitacion->id}}">
								<button class="btn btn-danger" type="submit"><i class="material-icons">delete</i></button>
								<input type="hidden" name="_method" value="DELETE">
								@csrf
							</form>
						</div>
					</td>	
				</tr>
			@endforeach
		</tbody>
	</table>

<!--MODAL Crear Habitacion-->
			<div class="modal fade" id="myModalCreate" role="dialog">
				<div class="modal-dialog modal-xl">
				<!-- MODAL content -->
					<div class="modal-content" style="width:70%; margin:0 auto; margin-top:100px; max-height: calc(100vh - 210px); overflow-y: auto;">
						<div class="modal-header" style="background-color:#E2E2E2">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h1>Creando nueva Habitacion</h1>
			    		</div>
						<div class="modal-body" style="height:70%;">
							<form class="form-horizontal" method="POST" action="{{ route('tb_habitaciones.store') }}">
								<div class="form-group">
								<label class="col-lg-2 control-label">Habitacion:</label>
									<div class="col-lg-10">
										<input name="habitacion" type="text" class="form-control" >
										@if ($errors->has('habitacion'))
											<span class="text-danger">{{ $errors->first('habitacion') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Precio:</label>
									<div class="col-lg-10">
										<input  name="precio" type="text" class="form-control" >
										@if ($errors->has('precio'))
											<span class="text-danger">{{ $errors->first('precio') }}</span>
										@endif
									</div>
								</div>
								@csrf
								<div class="form-group">
								<label class="col-md-2 control-label"></label>
								<div class="col-md-10">
								  <button type="submit" class="btn btn-primary">Guardar</button>
								  <span></span>
								  
								</div>
							  </div>
							</form> 
						</div>
						<div class="modal-footer" style="background-color:#E2E2E2">
						   <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						</div>
				<!-- /. modal content-->
					</div>	
				</div>		
			</div>


@foreach($tb_habitaciones as $tb_habitacion)
<!--MODAL Editar Dieta-->
			<div class="modal fade" id="myModalEdit-{{$tb_habitacion->id}}" role="dialog">
				<div class="modal-dialog modal-xl">
				<!-- MODAL content -->
					<div class="modal-content" style="width:70%; margin:0 auto; margin-top:100px; max-height: calc(100vh - 210px); overflow-y: auto;">
						<div class="modal-header" style="background-color:#E2E2E2">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h1>Editando Habitacion</h1>
			    		</div>
						<div class="modal-body" style="height:70%;">
							<form class="form-horizontal" method="POST" action="{{url('/tb_habitaciones')}}/{{$tb_habitacion->id}}">
							<input type="hidden" name="_method" value="PUT">
								<div class="form-group">
								<label class="col-lg-2 control-label">Habitacion:</label>
									<div class="col-lg-10">
										<input name="habitacion" type="text" value="{{$tb_habitacion->habitacion??''}}" class="form-control" >
										@if ($errors->has('habitacion'))
											<span class="text-danger">{{ $errors->first('habitacion') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Precio:</label>
									<div class="col-lg-10">
										<input  name="precio" type="text" value="{{$tb_habitacion->precio??''}}"  class="form-control" >
										@if ($errors->has('precio'))
											<span class="text-danger">{{ $errors->first('precio') }}</span>
										@endif
									</div>
								</div>
								@csrf
								<div class="form-group">
								<label class="col-md-2 control-label"></label>
								<div class="col-md-10">
								  <button type="submit" class="btn btn-primary">Guardar</button>
								  <span></span>
								  
								</div>
							  </div>
							</form> 
						</div>
						<div class="modal-footer" style="background-color:#E2E2E2">
						   <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						</div>
				<!-- /. modal content-->
					</div>	
				</div>		
			</div>
@endforeach

@if(Session::has('crear_habitacion'))
	<script>
		toastr.info("{!!Session::get('crear_habitacion')!!}");
	</script>
@endif

@if(Session::has('editar_habitacion'))
	<script>
		toastr.warning("{!!Session::get('editar_habitacion')!!}");
	</script>
@endif

@if(Session('eliminar') == "Ok.")
	<script>
		Swal.fire(
			  '¡Eliminado!',
			  'Los datos se han borrado.',
			  'success'
			)
	</script>
@endif

@endsection