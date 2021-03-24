@extends("layouts.app6")

@section("content")


	
<div class="btn btn-crimson btn-inline-block" data-toggle="modal" data-target="#myModalCreate">
	<a href="#" class="btn btn-primary"><i class="material-icons">add</i></a>
</div>
<a class="btn btn-warning pdf" href="/tb_reservas/pdf"><i class="material-icons">picture_as_pdf</i></a>
	
 	
	<table id="tabla_mostrar" class="table table-bordered table-striped">
		
		<thead>
			<tr>
				<th style="display:none;"></th>
				<th>Id</th>
				<th>Dia de la reserva</th>
				<th>Entrada</th>
				<th>Hora de entrada</th>
				<th>Salida</th>
				<th>Hora de salida</th>
				<th>Mascota</th>
				<th>Habitacion</th>
				<th>Dieta</th>
				<th>Utilidades</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tb_reservas as $tb_reserva)
				<tr>
					<td style="display:none;"></td>
					<td>{{$tb_reserva->id}}</td>
					<td>{{$tb_reserva->pide_reserva}}</td>
					<td>{{$tb_reserva->entrada}}</td>
					<td>{{$tb_reserva->hora_entrada}}</td>
					<td>{{$tb_reserva->salida}}</td>
					<td>{{$tb_reserva->hora_salida}}</td>
					<td>{{$tb_reserva->tb_mascota->nombre}}</td>
					<td>{{$tb_reserva->tb_habitacion->habitacion}}</td>
					<td>{{$tb_reserva->tb_dieta->tipo_dieta}}</td>
					<td>	
					
						<!--<a href="/tb_reservas/{{$tb_reserva->id}}" class="btn btn-success">Ver</a>-->
					
						<div class="btn btn-crimson btn-inline-block" data-toggle="modal" data-target="#myModalEdit-{{$tb_reserva->id}}">
							<a href="#" class="btn btn-warning"><i class="material-icons">border_color</i></a>
						</div>
						<div class="btn btn-crimson btn-inline-block">
							<form method="POST" action="/tb_reservas/{{$tb_reserva->id}}">
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

<!--MODAL Crear Reserva-->
			<div class="modal fade" id="myModalCreate" role="dialog">
				<div class="modal-dialog modal-xl">
				<!-- MODAL content -->
					<div class="modal-content" style="width:70%; margin:0 auto; margin-top:100px; max-height: calc(100vh - 210px); overflow-y: auto;">
						<div class="modal-header" style="background-color:#E2E2E2">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h1>Creando Reserva</h1>
			    		</div>
						<div class="modal-body" style="height:70%;">
							<form class="form-horizontal" method="POST" action="{{ route('tb_reservas.store') }}">
								<div class="form-group">
								<label class="col-lg-2 control-label">Dia de la reserva:</label>
									<div class="col-lg-10">
										<input name="pide_reserva" type="date" class="form-control" >
										@if ($errors->has('pide_reserva'))
											<span class="text-danger">{{ $errors->first('pide_reserva') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Entrada:</label>
									<div class="col-lg-10">
										<input  name="entrada" type="date" class="form-control" >
										@if ($errors->has('entrada'))
            								<span class="text-danger">{{ $errors->first('entrada') }}</span>
        								@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Hora de entrada:</label>
									<div class="col-lg-10">
										<input  name="hora_entrada" type="time" class="form-control" >
										@if ($errors->has('hora_entrada'))
            								<span class="text-danger">{{ $errors->first('hora_entrada') }}</span>
        								@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Salida:</label>
									<div class="col-lg-10">
										<input  name="salida" type="date" class="form-control" >
										@if ($errors->has('salida'))
            								<span class="text-danger">{{ $errors->first('salida') }}</span>
        								@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Hora de salida:</label>
									<div class="col-lg-10">
										<input  name="hora_salida" type="time" class="form-control" >
										@if ($errors->has('hora_salida'))
            								<span class="text-danger">{{ $errors->first('hora_salida') }}</span>
        								@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Mascota:</label>
									<div class="col-lg-10">
										<select name="mascota_id" id="mascota_id" class="form-control">
											<option value="" selected disabled hidden>Seleccione Mascota</option>
											@foreach($tb_mascotas as $tb_mascota)
											<option value="{{$tb_mascota->id??''}}">{{$tb_mascota->nombre??''}}</option>
											@endforeach
										</select>
										@if ($errors->has('mascota_id'))
            								<span class="text-danger">{{ $errors->first('mascota_id') }}</span>
        								@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Habitacion:</label>
									<div class="col-lg-10">
										<select name="habitacion_id" id="habitacion_id" class="form-control">
											<option value="" selected disabled hidden>Seleccione Habitacion</option>
											@foreach($tb_habitaciones as $tb_habitacion)
											<option value="{{$tb_habitacion->id??''}}">{{$tb_habitacion->habitacion??''}}</option>
											@endforeach
										</select>
										@if ($errors->has('habitacion_id'))
											<span class="text-danger">{{ $errors->first('habitacion_id') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Dieta:</label>
									<div class="col-lg-10">
										<select name="dieta_id" id="dieta_id" class="form-control">
											<option value="" selected disabled hidden>Seleccione Dieta</option>
											@foreach($tb_dietas as $tb_dieta)
											<option value="{{$tb_dieta->id??''}}">{{$tb_dieta->tipo_dieta??''}}</option>
											@endforeach
										</select>
										@if ($errors->has('dieta_id'))
											<span class="text-danger">{{ $errors->first('dieta_id') }}</span>
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


@foreach($tb_reservas as $tb_reserva)
<!--MODAL Editar Reserva-->
			<div class="modal fade" id="myModalEdit-{{$tb_reserva->id}}" role="dialog">
				<div class="modal-dialog modal-xl">
				<!-- MODAL content -->
					<div class="modal-content" style="width:70%; margin:0 auto; margin-top:100px; max-height: calc(100vh - 210px); overflow-y: auto;">
						<div class="modal-header" style="background-color:#E2E2E2">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h1>Editando Reserva</h1>
			    		</div>
						<div class="modal-body" style="height:70%;">
							<form class="form-horizontal" method="POST" action="{{url('/$tb_reservas')}}/{{$tb_reserva->id}}">
							<input type="hidden" name="_method" value="PUT">
								<div class="form-group">
								<label class="col-lg-2 control-label">Dia de la reserva:</label>
									<div class="col-lg-10">
										<input name="pide_reserva" type="date" value="{{$tb_reserva->pide_reserva??''}}" class="form-control" >
										@if ($errors->has('pide_reserva'))
											<span class="text-danger">{{ $errors->first('pide_reserva') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Entrada:</label>
									<div class="col-lg-10">
										<input  name="entrada" type="date" value="{{$tb_reserva->entrada??''}}"  class="form-control" >
										@if ($errors->has('entrada'))
            								<span class="text-danger">{{ $errors->first('entrada') }}</span>
        								@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Hora de entrada:</label>
									<div class="col-lg-10">
										<input  name="hora_entrada" type="time" value="{{$tb_reserva->hora_entrada??''}}"  class="form-control" >
										@if ($errors->has('hora_entrada'))
            								<span class="text-danger">{{ $errors->first('hora_entrada') }}</span>
        								@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Salida:</label>
									<div class="col-lg-10">
										<input  name="salida" type="date" value="{{$tb_reserva->salida??''}}" class="form-control" >
										@if ($errors->has('salida'))
            								<span class="text-danger">{{ $errors->first('salida') }}</span>
        								@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Hora de salida:</label>
									<div class="col-lg-10">
										<input  name="hora_salida" type="time" value="{{$tb_reserva->hora_salida??''}}"  class="form-control" >
										@if ($errors->has('hora_salida'))
            								<span class="text-danger">{{ $errors->first('hora_salida') }}</span>
        								@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Mascota:</label>
									<div class="col-lg-10">
										<select name="mascota_id" id="mascota_id" class="form-control">
											@foreach($tb_mascotas as $tb_mascota)
											<option value="{{$tb_mascota->id??''}}">{{$tb_mascota->nombre??''}}</option>
											@endforeach
										</select>
										@if ($errors->has('mascota_id'))
            								<span class="text-danger">{{ $errors->first('mascota_id') }}</span>
        								@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Habitacion:</label>
									<div class="col-lg-10">
										<select name="habitacion_id" id="habitacion_id" class="form-control">
											@foreach($tb_habitaciones as $tb_habitacion)
											<option value="{{$tb_habitacion->id??''}}">{{$tb_habitacion->habitacion??''}}</option>
											@endforeach
										</select>
										@if ($errors->has('habitacion_id'))
											<span class="text-danger">{{ $errors->first('habitacion_id') }}</span>
										@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Dieta:</label>
									<div class="col-lg-10">
										<select name="dieta_id" id="dieta_id" class="form-control">
											@foreach($tb_dietas as $tb_dieta)
											<option value="{{$tb_dieta->id??''}}">{{$tb_dieta->tipo_dieta??''}}</option>
											@endforeach
										</select>
										@if ($errors->has('dieta_id'))
											<span class="text-danger">{{ $errors->first('dieta_id') }}</span>
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

@endsection