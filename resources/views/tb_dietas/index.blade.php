@extends("layouts.app6")

@section("content")


	
<div class="btn btn-crimson btn-inline-block" data-toggle="modal" data-target="#myModalCreate">
	<a href="#" class="btn btn-primary"><i class="material-icons">add</i></a>
</div>
<a class="btn btn-warning pdf" href="/tb_dietas/pdf"><i class="material-icons">picture_as_pdf</i></a>
	
 	
	<table id="tabla_mostrar" class="table table-bordered table-striped">
		
		<thead>
			<tr><th style="display:none;"></th>
				<th>Id</th>
				<th>Dieta</th>
				<th>Precio</th>
				<th>Utilidades</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tb_dietas as $tb_dieta)
				<tr>
					<td style="display:none;"></td>
					<td>{{$tb_dieta->id}}</td>
					<td>{{$tb_dieta->tipo_dieta}}</td>
					<td>{{$tb_dieta->precio}}</td>
					<td>	
						<!--<a href="/tb_dietas/{{$tb_dieta->id}}" class="btn btn-success">Ver</a>-->
					
						<div class="btn btn-crimson btn-inline-block" data-toggle="modal" data-target="#myModalEdit-{{$tb_dieta->id}}">
							<a href="#" class="btn btn-warning"><i class="material-icons">border_color</i></a>
						</div>
						<div class="btn btn-crimson btn-inline-block">
							<form method="POST" action="/tb_dietas/{{$tb_dieta->id}}">
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

<!--MODAL Crear Dieta-->
			<div class="modal fade" id="myModalCreate" role="dialog">
				<div class="modal-dialog modal-xl">
				<!-- MODAL content -->
					<div class="modal-content" style="width:70%; margin:0 auto; margin-top:100px; max-height: calc(100vh - 210px); overflow-y: auto;">
						<div class="modal-header" style="background-color:#E2E2E2">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h1>Creando nueva Dieta</h1>
			    		</div>
						<div class="modal-body" style="height:70%;">
							<form class="form-horizontal" method="POST" action="{{ route('tb_dietas.store') }}">
								<div class="form-group">
								<label class="col-lg-2 control-label">Dieta:</label>
									<div class="col-lg-10">
										<input name="tipo_dieta" type="text" class="form-control" >
		  								@if ($errors->has('tipo_dieta'))
            								<span class="text-danger">{{ $errors->first('tipo_dieta') }}</span>
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


@foreach($tb_dietas as $tb_dieta)
<!--MODAL Editar Dieta-->
			<div class="modal fade" id="myModalEdit-{{$tb_dieta->id}}" role="dialog">
				<div class="modal-dialog modal-xl">
				<!-- MODAL content -->
					<div class="modal-content" style="width:70%; margin:0 auto; margin-top:100px; max-height: calc(100vh - 210px); overflow-y: auto;">
						<div class="modal-header" style="background-color:#E2E2E2">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h1>Editando Dieta</h1>
			    		</div>
						<div class="modal-body" style="height:70%;">
							<form class="form-horizontal" method="POST" action="{{url('/tb_dietas')}}/{{$tb_dieta->id}}">
							<input type="hidden" name="_method" value="PUT">
								<div class="form-group">
								<label class="col-lg-2 control-label">Dieta:</label>
									<div class="col-lg-10">
										<input name="tipo_dieta" type="text" value="{{$tb_dieta->tipo_dieta??''}}" class="form-control" >
		  								@if ($errors->has('tipo_dieta'))
            								<span class="text-danger">{{ $errors->first('tipo_dieta') }}</span>
        								@endif
									</div>
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Precio:</label>
									<div class="col-lg-10">
										<input  name="precio" type="text" value="{{$tb_dieta->precio??''}}"  class="form-control" >
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


@endsection