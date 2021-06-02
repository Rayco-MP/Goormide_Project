@extends("layouts.app6")

@section("content")

<h1>Clientes</h1>
<div class="btn btn-crimson btn-inline-block" data-toggle="modal" data-target="#myModalCreate">
	<a href="#" class="btn btn-primary"><i class="material-icons">add</i></a>
</div>
<!--<a class="btn btn-success" href="/tb_clientes/create">Nuevo Cliente</a>-->
<a class="btn btn-warning pdf" href="/tb_clientes/pdf"><i class="material-icons">picture_as_pdf</i></a>
	
 	
	<table id="tabla_mostrar" class="table table-bordered table-striped" style="100%">
		<thead class="thead-dark">
			<tr>
				<th></th>
				
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>NIF</th>
				<th>Utilidades</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tb_clientes as $tb_cliente)
				<tr>
					<td></td>
					
					<td>{{$tb_cliente->nombre}}</td>
					<td>{{$tb_cliente->apellidos}}</td>
					<td>{{$tb_cliente->telefono}}</td>
					<td>{{$tb_cliente->email}}</td>
					<td>{{$tb_cliente->nif}}</td>

					<td>
						<div class="btn btn-crimson btn-inline-block" data-toggle="modal" data-target="#myModal-{{$tb_cliente->id}}">
							<a href="#" class="btn btn-info"><i class="material-icons">remove_red_eye</i></a>
						</div>
						<!--<a href="/tb_clientes/{{$tb_cliente->id}}" class="btn btn-success">Ver</a>-->
					
					
						<div class="btn btn-crimson btn-inline-block" data-toggle="modal" data-target="#myModalEdit-{{$tb_cliente->id}}">
							<a href="#" class="btn btn-warning"><i class="material-icons">border_color</i></a>
						</div>
						<!--<div class="btn btn-crimson btn-inline-block">
							<a href="/tb_clientes/{{$tb_cliente->id}}/edit" class="btn btn-warning">Editar</a>
						</div>-->
						<div class="btn btn-crimson btn-inline-block">
							<form class="formulario-eliminar" method="POST" action="/tb_clientes/{{$tb_cliente->id}}">
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
	
	<!--MODAL Crear Cliente-->
			<div class="modal fade" id="myModalCreate" role="dialog">
				<div class="modal-dialog modal-xl">
				<!-- MODAL content -->
					<div class="modal-content" style="width:70%; margin:0 auto; margin-top:100px; max-height: calc(100vh - 210px); overflow-y: auto;">
						<div class="modal-header" style="background-color:#E2E2E2">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h1>Creando nuevo Cliente</h1>
			    		</div>
						<div class="modal-body" style="height:70%;">
							<form class="form-horizontal" method="POST" action="{{ route('tb_clientes.store') }}">
								<div class="form-group">
								<label class="col-lg-2 control-label">Nombre:</label>
									<div class="col-lg-10">
									  <input name="nombre" type="text" class="form-control" >
										@if ($errors->has('nombre'))
											<span class="text-danger">{{ $errors->first('nombre') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Apellidos:</label>
									<div class="col-lg-10">
									  <input  name="apellidos" type="text"  class="form-control" >
										@if ($errors->has('apellidos'))
											<span class="text-danger">{{ $errors->first('apellidos') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Direccion:</label>
									<div class="col-lg-10">
									  <input  name="direccion" type="text" class="form-control" >
										@if ($errors->has('direccion'))
											<span class="text-danger">{{ $errors->first('direccion') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">CP:</label>
									<div class="col-lg-10">
									  <input  name="cp" type="text" class="form-control" >
										@if ($errors->has('cp'))
											<span class="text-danger">{{ $errors->first('cp') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Localidad:</label>
									<div class="col-lg-10">
									  <input  name="localidad" type="text" class="form-control" >
										@if ($errors->has('localidad'))
											<span class="text-danger">{{ $errors->first('localidad') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Provincia:</label>
									<div class="col-lg-10">
									  <input  name="provincia" type="text" class="form-control" >
										@if ($errors->has('provincia'))
											<span class="text-danger">{{ $errors->first('provincia') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Pais:</label>
									<div class="col-lg-10">
									  <input  name="pais" type="text" class="form-control" >
										@if ($errors->has('pais'))
											<span class="text-danger">{{ $errors->first('pais') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Telefono:</label>
									<div class="col-lg-10">
									  <input  name="telefono" type="text" class="form-control" >
										@if ($errors->has('telefono'))
											<span class="text-danger">{{ $errors->first('telefono') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Email:</label>
									<div class="col-lg-10">
									  <input  name="email" type="text" class="form-control" >
										@if ($errors->has('email'))
											<span class="text-danger">{{ $errors->first('email') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">NIF:</label>
									<div class="col-lg-10">
									 <input  name="nif" type="text" class="form-control" >
										@if ($errors->has('nif'))
											<span class="text-danger">{{ $errors->first('nif') }}</span>
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

@foreach($tb_clientes as $tb_cliente)
<!--MODAL Mostrar Cliente-->
			<div class="modal fade" id="myModal-{{$tb_cliente->id}}" role="dialog">
				<div class="modal-dialog modal-xl">
				<!-- MODAL content -->
					<div class="modal-content" style="width:70%; margin:0 auto; margin-top:100px; max-height: calc(100vh - 210px); overflow-y: auto;">
						<div class="modal-header" style="background-color:#E2E2E2">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h1>Perfil de {{$tb_cliente->nombre}}</h1>
			    		</div>
						<div class="modal-body" style="height:70%;">
							<div class="row">
								<!-- left column -->
								<div class="col-md-3">
									<div class="text-center">
										<img src="/img/user.png" class="avatar img-circle" alt="avatar">
									</div>
								</div>

								<!-- edit form column -->
								<div class="col-md-9 personal-info">
									<h3>Informacion personal</h3>
									<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-lg-3 control-label">Nombre:</label>
										<div class="col-lg-8">
											<span class="form-control">{{$tb_cliente->nombre}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Apellidos:</label>
										<div class="col-lg-8">
											<span class="form-control">{{$tb_cliente->apellidos}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Direccion:</label>
										<div class="col-lg-8">
											<span class="form-control">{{$tb_cliente->direccion}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">CP:</label>
										<div class="col-lg-8">
											<span class="form-control">{{$tb_cliente->cp}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Localidad:</label>
										<div class="col-lg-8">
										<span class="form-control">{{$tb_cliente->localidad}}</span>  
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Provincia:</label>
										<div class="col-md-8">
											<span class="form-control">{{$tb_cliente->provincia}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Pais:</label>
										<div class="col-md-8">
											<span class="form-control">{{$tb_cliente->pais}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Telefono:</label>
										<div class="col-md-8">
											<span class="form-control">{{$tb_cliente->telefono}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Email:</label>
										<div class="col-md-8">
											<span class="form-control">{{$tb_cliente->email}}</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">NIF:</label>
										<div class="col-md-8">
											<span class="form-control">{{$tb_cliente->nif}}</span>
										</div>
									</div>
									</form>
								</div>
							</div>
							<h3>Mascotas de {{$tb_cliente->nombre}}</h3>
							<table id="tabla_mostrar" class="table table-bordered table-striped">
								<thead class="thead-dark">
									<tr>
										<th>Nombre</th>
										<th>Sexo</th>
										<th>Raza</th>
										<th>Microchip</th>
									</tr>
								</thead>
								<tbody>
									@foreach($tb_cliente->tb_mascota as $tb_mascota)
										<tr>
											<td>{{$tb_mascota->nombre}}</td>
											<td>{{$tb_mascota->sexo}}</td>
											<td>{{$tb_mascota->raza}}</td>
											<td>{{$tb_mascota->microchip}}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="modal-footer" style="background-color:#E2E2E2">
						   <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						</div>
				<!-- /. modal content-->
					</div>	
				</div>		
			</div>
@endforeach

@foreach($tb_clientes as $tb_cliente)
<!--MODAL Editar Cliente-->
			<div class="modal fade" id="myModalEdit-{{$tb_cliente->id}}" role="dialog">
				<div class="modal-dialog modal-xl">
				<!-- MODAL content -->
					<div class="modal-content" style="width:70%; margin:0 auto; margin-top:100px; max-height: calc(100vh - 210px); overflow-y: auto;">
						<div class="modal-header" style="background-color:#E2E2E2">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h1>Editando Cliente</h1>
			    		</div>
						<div class="modal-body" style="height:70%;">
							<form class="form-horizontal" method="POST" action="{{url('/tb_clientes')}}/{{$tb_cliente->id}}">
							<input type="hidden" name="_method" value="PUT">
								<div class="form-group">
								<label class="col-lg-2 control-label">Nombre:</label>
									<div class="col-lg-10">
									  <input name="nombre" type="text" value="{{$tb_cliente->nombre??''}}" class="form-control" >
										@if ($errors->has('nombre'))
											<span class="text-danger">{{ $errors->first('nombre') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Apellidos:</label>
									<div class="col-lg-10">
									  <input  name="apellidos" type="text" value="{{$tb_cliente->apellidos??''}}"  class="form-control" >
										@if ($errors->has('apellidos'))
											<span class="text-danger">{{ $errors->first('apellidos') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Direccion:</label>
									<div class="col-lg-10">
									  <input  name="direccion" type="text" value="{{$tb_cliente->direccion??''}}" class="form-control" >
										@if ($errors->has('direccion'))
											<span class="text-danger">{{ $errors->first('direccion') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">CP:</label>
									<div class="col-lg-10">
									  <input  name="cp" type="text" value="{{$tb_cliente->cp??''}}" class="form-control" >
										@if ($errors->has('cp'))
											<span class="text-danger">{{ $errors->first('cp') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Localidad:</label>
									<div class="col-lg-10">
									  <input  name="localidad" type="text" value="{{$tb_cliente->localidad??''}}" class="form-control" >
										@if ($errors->has('localidad'))
											<span class="text-danger">{{ $errors->first('localidad') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Provincia:</label>
									<div class="col-lg-10">
									  <input  name="provincia" type="text" value="{{$tb_cliente->provincia??''}}" class="form-control" >
										@if ($errors->has('provincia'))
											<span class="text-danger">{{ $errors->first('provincia') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Pais:</label>
									<div class="col-lg-10">
									  <input  name="pais" type="text" value="{{$tb_cliente->pais??''}}" class="form-control" >
										@if ($errors->has('pais'))
											<span class="text-danger">{{ $errors->first('pais') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Telefono:</label>
									<div class="col-lg-10">
									  <input  name="telefono" type="text" value="{{$tb_cliente->telefono??''}}" class="form-control" >
										@if ($errors->has('telefono'))
											<span class="text-danger">{{ $errors->first('telefono') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Email:</label>
									<div class="col-lg-10">
									  <input  name="email" type="text" value="{{$tb_cliente->email??''}}" class="form-control" >
										@if ($errors->has('email'))
											<span class="text-danger">{{ $errors->first('email') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">NIF:</label>
									<div class="col-lg-10">
									 <input  name="nif" type="text" value="{{$tb_cliente->nif??''}}" class="form-control" >
										@if ($errors->has('nif'))
											<span class="text-danger">{{ $errors->first('nif') }}</span>
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

@if(Session::has('crear_cliente'))
	<script>
		toastr.info("{!!Session::get('crear_cliente')!!}");
	</script>
@endif

@if(Session::has('editar_cliente'))
	<script>
		toastr.warning("{!!Session::get('editar_cliente')!!}");
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

