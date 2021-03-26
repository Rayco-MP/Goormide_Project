@extends("layouts.app6")

@section("content")


	
<div class="btn btn-crimson btn-inline-block" data-toggle="modal" data-target="#myModalCreate">
	<a href="#" class="btn btn-primary"><i class="material-icons">add</i></a>
</div>
<a class="btn btn-warning pdf" href="/tb_mascotas/pdf"><i class="material-icons">picture_as_pdf</i></a>
	
 	
	<table id="tabla_mostrar" class="table table-bordered table-striped" style="100%">
		
		<thead>
			<tr>
				<th></th>
				
				<th>Propietario</th>
				<th>Nombre</th>
				<th>Sexo</th>
				<th>Raza</th>
				<th>Microchip</th>
				<th>Utilidades</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tb_mascotas as $tb_mascota)
				<tr>
					<td></td>
					
					<td>{{$tb_mascota->tb_cliente->nombre}}</td>
					<td>{{$tb_mascota->nombre}}</td>
					<td>{{$tb_mascota->sexo}}</td>
					<td>{{$tb_mascota->raza}}</td>
					<td>{{$tb_mascota->microchip}}</td>
					<td>	
						
						<div class="btn btn-crimson btn-inline-block" data-toggle="modal" data-target="#myModal-{{$tb_mascota->id}}">
							<a href="#" class="btn btn-info"><i class="material-icons">remove_red_eye</i></a>
						</div>
						
						<div class="btn btn-crimson btn-inline-block" data-toggle="modal" data-target="#myModalEdit-{{$tb_mascota->id}}">
							<a href="#" class="btn btn-warning"><i class="material-icons">border_color</i></a>
						</div>
						
						<div class="btn btn-crimson btn-inline-block">
							<form class="formulario-eliminar" method="POST" action="/tb_mascotas/{{$tb_mascota->id}}">
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

<!--MODAL Crear Mascota-->
			<div class="modal fade" id="myModalCreate" role="dialog">
				<div class="modal-dialog modal-xl">
				<!-- MODAL content -->
					<div class="modal-content" style="width:70%; margin:0 auto; margin-top:100px; max-height: calc(100vh - 210px); overflow-y: auto;">
						<div class="modal-header" style="background-color:#E2E2E2">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h1>Creando nueva Mascota</h1>
			    		</div>
						<div class="modal-body" style="height:70%;">
							<form class="form-horizontal" method="POST" action="{{ route('tb_mascotas.store') }}">
								<div class="form-group">
									<label class="col-lg-2 control-label">Propietario:</label>
									<div class="col-lg-10">
										<select name="cliente_id" id="cliente_id" class="form-control">
											<option value="" selected disabled hidden>Seleccione Propietario</option>
											@foreach($tb_clientes as $tb_cliente)
											<option value="{{$tb_cliente->id??''}}">{{$tb_cliente->nombre??''}}</option>
											@endforeach
										</select>
										@if ($errors->has('cliente_id'))
											<span class="text-danger">{{ $errors->first('cliente_id') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Nombre:</label>
										<div class="col-lg-10">
											<input  name="nombre" type="text"  class="form-control" >
											@if ($errors->has('nombre'))
												<span class="text-danger">{{ $errors->first('nombre') }}</span>
											@endif
										</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Sexo:</label>
									<div class="col-lg-10">
										<select name="sexo" id="sexo" class="form-control">
											<option value="" selected disabled hidden>Selecione sexo</option>
											<option value="macho">Macho</option>
											<option value="hembra">Hembra</option>
										</select>
										@if ($errors->has('sexo'))
											<span class="text-danger">{{ $errors->first('sexo') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Raza:</label>
										<div class="col-lg-10">
											<input  name="raza" type="text" class="form-control" >
											@if ($errors->has('raza'))
												<span class="text-danger">{{ $errors->first('raza') }}</span>
											@endif
										</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Color:</label>
										<div class="col-lg-10">
											<input  name="color" type="text" class="form-control" >
											@if ($errors->has('color'))
												<span class="text-danger">{{ $errors->first('color') }}</span>
											@endif
										</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Peso:</label>
										<div class="col-lg-10">
											<input  name="peso" type="text" class="form-control" >
											@if ($errors->has('peso'))
												<span class="text-danger">{{ $errors->first('peso') }}</span>
											@endif
										</div>
								</div> 
								<div class="form-group">
									<label class="col-lg-2 control-label">Fecha de nacimiento:</label>
									<div class="col-lg-10">
										<input  name="fecha_nacimiento" type="date" class="form-control" >
										@if ($errors->has('fecha_nacimiento'))
											<span class="text-danger">{{ $errors->first('fecha_nacimiento') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Microchip:</label>
									<div class="col-lg-10">
										<input  name="microchip" type="text" class="form-control" >
										@if ($errors->has('microchip'))
											<span class="text-danger">{{ $errors->first('microchip') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Esterilizado:</label>
									<div class="col-lg-10">
										<select name="esterilizado" id="esterilizado" class="form-control">
											<option value="" selected disabled hidden>Si/No</option>
											<option value="si">Si</option>
											<option value="no">No</option>
										</select>
										@if ($errors->has('esterilizado'))
											<span class="text-danger">{{ $errors->first('esterilizado') }}</span>
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

@foreach($tb_mascotas as $tb_mascota)
	<!--MODAL Crear Mascota-->
			<div class="modal fade" id="myModalEdit-{{$tb_mascota->id}}" role="dialog">
				<div class="modal-dialog modal-xl">
				<!-- MODAL content -->
					<div class="modal-content" style="width:70%; margin:0 auto; margin-top:100px; max-height: calc(100vh - 210px); overflow-y: auto;">
						<div class="modal-header" style="background-color:#E2E2E2">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h1>Editando Mascota</h1>
			    		</div>
						<div class="modal-body" style="height:70%;">
							<form class="form-horizontal" method="POST" action="{{url('/tb_mascotas')}}/{{$tb_mascota->id}}">
							<input type="hidden" name="_method" value="PUT">
								<div class="form-group">
									<label class="col-lg-2 control-label">Propietario:</label>
									<div class="col-lg-10">
										<select name="cliente_id" id="cliente_id" class="form-control">
											<option value="" selected disabled hidden>Seleccione Propietario</option>
											@foreach($tb_clientes as $tb_cliente)
											<option value="{{$tb_cliente->id??''}}">{{$tb_cliente->nombre??''}}</option>
											@endforeach
										</select>
										@if ($errors->has('cliente_id'))
											<span class="text-danger">{{ $errors->first('cliente_id') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Nombre:</label>
										<div class="col-lg-10">
											<input  name="nombre" type="text" value="{{$tb_mascota->nombre??''}}" class="form-control" >
											@if ($errors->has('nombre'))
												<span class="text-danger">{{ $errors->first('nombre') }}</span>
											@endif
										</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Sexo:</label>
									<div class="col-lg-10">
										<select name="sexo" id="sexo" class="form-control">
											<option value="" selected disabled hidden>Selecione sexo</option>
											<option value="macho">Macho</option>
											<option value="hembra">Hembra</option>
										</select>
										@if ($errors->has('sexo'))
											<span class="text-danger">{{ $errors->first('sexo') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Raza:</label>
										<div class="col-lg-10">
											<input  name="raza" type="text" value="{{$tb_mascota->raza??''}}" class="form-control" >
											@if ($errors->has('raza'))
												<span class="text-danger">{{ $errors->first('raza') }}</span>
											@endif
										</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Color:</label>
										<div class="col-lg-10">
											<input  name="color" type="text" value="{{$tb_mascota->color??''}}" class="form-control" >
											@if ($errors->has('color'))
												<span class="text-danger">{{ $errors->first('color') }}</span>
											@endif
										</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Peso:</label>
										<div class="col-lg-10">
											<input  name="peso" type="text" value="{{$tb_mascota->peso??''}}" class="form-control" >
											@if ($errors->has('peso'))
												<span class="text-danger">{{ $errors->first('peso') }}</span>
											@endif
										</div>
								</div> 
								<div class="form-group">
									<label class="col-lg-2 control-label">Fecha de nacimiento:</label>
									<div class="col-lg-10">
										<input  name="fecha_nacimiento" type="date" value="{{$tb_mascota->fecha_nacimiento??''}}" class="form-control" >
										@if ($errors->has('fecha_nacimiento'))
											<span class="text-danger">{{ $errors->first('fecha_nacimiento') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Microchip:</label>
									<div class="col-lg-10">
										<input  name="microchip" type="text" value="{{$tb_mascota->microchip??''}}" class="form-control" >
										@if ($errors->has('microchip'))
											<span class="text-danger">{{ $errors->first('microchip') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Esterilizado:</label>
									<div class="col-lg-10">
										<select name="esterilizado" id="esterilizado" class="form-control">
											<option value="" selected disabled hidden>Si/No</option>
											<option value="si">Si</option>
											<option value="no">No</option>
										</select>
										@if ($errors->has('esterilizado'))
											<span class="text-danger">{{ $errors->first('esterilizado') }}</span>
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

@foreach($tb_mascotas as $tb_mascota)
<!--MODAL Mostrar Cliente-->
			<div class="modal fade" id="myModal-{{$tb_mascota->id}}" role="dialog">
				<div class="modal-dialog modal-xl">
				<!-- MODAL content -->
					<div class="modal-content" style="width:70%; margin:0 auto; margin-top:100px; max-height: calc(100vh - 210px); overflow-y: auto;">
						<div class="modal-header" style="background-color:#E2E2E2">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h1>Datos de {{$tb_mascota->nombre}}</h1>
			    		</div>
						<div class="modal-body" style="height:70%;">
							<div class="row">
								<!-- left column -->
								<div class="col-md-3">
									<div class="text-center">
										<img src="/img/logo1.png" class="avatar img-circle" alt="avatar">
									</div>
								</div>

								<!-- edit form column -->
								<div class="col-md-9 personal-info">
									<h3>Informacion de la mascota</h3>
									<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-lg-3 control-label">Propietario:</label>
										<div class="col-lg-8">
											<span class="form-control">{{$tb_mascota->cliente_id}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Nombre:</label>
										<div class="col-lg-8">
											<span class="form-control">{{$tb_mascota->nombre}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Sexo:</label>
										<div class="col-lg-8">
											<span class="form-control">{{$tb_mascota->sexo}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Raza:</label>
										<div class="col-lg-8">
											<span class="form-control">{{$tb_mascota->raza}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Color:</label>
										<div class="col-lg-8">
										<span class="form-control">{{$tb_mascota->color}}</span>  
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Peso:</label>
										<div class="col-md-8">
											<span class="form-control">{{$tb_mascota->peso}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Fecha de nacimiento:</label>
										<div class="col-md-8">
											<span class="form-control">{{$tb_mascota->fecha_nacimiento}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Microchip:</label>
										<div class="col-md-8">
											<span class="form-control">{{$tb_mascota->microchip}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Esterilizado:</label>
										<div class="col-md-8">
											<span class="form-control">{{$tb_mascota->esterilizado}}</span>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
						<div class="modal-footer" style="background-color:#E2E2E2">
						   <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						</div>
				<!-- /. modal content-->
					</div>	
				</div>		
			</div>
@endforeach

@if(Session::has('crear_mascota'))
	<script>
		toastr.info("{!!Session::get('crear_mascota')!!}");
	</script>
@endif

@if(Session::has('editar_mascota'))
	<script>
		toastr.warning("{!!Session::get('editar_mascota')!!}");
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