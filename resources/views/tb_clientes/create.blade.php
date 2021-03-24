@extends('layouts.app2')

@section('content')
	<div class="container">
		<div class="row justify-content-center">

	@if(isset($tb_cliente))
		<h1>Editando Cliente</h1>
	@else
		<h1>Creando nuevo Cliente</h1>

	@endif

	@if(isset($tb_cliente))   {{-- Si estoy editando --}}
		 <form class="form-horizontal" method="POST" action="{{url('/tb_clientes')}}/{{$tb_cliente->id}}">
			<input type="hidden" name="_method" value="PUT">
	@else
	     <form class="form-horizontal" method="POST" action="{{url('/tb_clientes')}}">
	@endif
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
			  <button type="submit" class="btn btn-success">Guardar</button>
              <span></span>
              <a href="/tb_clientes" class="btn btn-primary">Volver al listado </a>
            </div>
          </div>
		</form> 
			 
			 
			 
			 
			 
			 
			 
			 
			<!--<div class="form-group">
				<label >Nombre</label>
				<input name="nombre" type="text" value="{{$tb_cliente->nombre??''}}" class="form-control" >
				@if ($errors->has('nombre'))
					<span class="text-danger">{{ $errors->first('nombre') }}</span>
				@endif
			</div>
			<div class="form-group">
				<label >Apellidos</label>
				<input  name="apellidos" type="text" value="{{$tb_cliente->apellidos??''}}"  class="form-control" >
				@if ($errors->has('apellidos'))
					<span class="text-danger">{{ $errors->first('apellidos') }}</span>
				@endif
			</div>
			<div class="form-group">
				<label >Direccion</label>
				<input  name="direccion" type="text" value="{{$tb_cliente->direccion??''}}" class="form-control" >
				@if ($errors->has('direccion'))
					<span class="text-danger">{{ $errors->first('direccion') }}</span>
				@endif
			</div>
			<div class="form-group">
				<label >CP</label>
				<input  name="cp" type="text" value="{{$tb_cliente->cp??''}}" class="form-control" >
				@if ($errors->has('cp'))
					<span class="text-danger">{{ $errors->first('cp') }}</span>
				@endif
			</div>
			<div class="form-group">
				<label >Localidad</label>
				<input  name="localidad" type="text" value="{{$tb_cliente->localidad??''}}" class="form-control" >
				@if ($errors->has('localidad'))
					<span class="text-danger">{{ $errors->first('localidad') }}</span>
				@endif
			</div>
			<div class="form-group">
				<label >Provincia</label>
				<input  name="provincia" type="text" value="{{$tb_cliente->provincia??''}}" class="form-control" >
				@if ($errors->has('provincia'))
					<span class="text-danger">{{ $errors->first('provincia') }}</span>
				@endif
			</div>
			<div class="form-group">
				<label >Pais</label>
				<input  name="pais" type="text" value="{{$tb_cliente->pais??''}}" class="form-control" >
				@if ($errors->has('pais'))
					<span class="text-danger">{{ $errors->first('pais') }}</span>
				@endif
			</div>
			<div class="form-group">
				<label >Telefono</label>
				<input  name="telefono" type="text" value="{{$tb_cliente->telefono??''}}" class="form-control" >
				@if ($errors->has('telefono'))
					<span class="text-danger">{{ $errors->first('telefono') }}</span>
				@endif
			</div>
			<div class="form-group">
				<label >Email</label>
				<input  name="email" type="text" value="{{$tb_cliente->email??''}}" class="form-control" >
				@if ($errors->has('email'))
					<span class="text-danger">{{ $errors->first('email') }}</span>
				@endif
			</div>
			<div class="form-group">
				<label >NIF</label>
				<input  name="nif" type="text" value="{{$tb_cliente->nif??''}}" class="form-control" >
				@if ($errors->has('nif'))
					<span class="text-danger">{{ $errors->first('nif') }}</span>
				@endif
			</div>
			@csrf
			<div class="form-group">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-10">
			  <button type="submit" class="btn btn-success">Guardar</button>
              <span></span>
              <a href="/tb_clientes" class="btn btn-primary">Volver al listado </a>
            </div>
          </div>
			<!--<button type="submit" class="btn btn-primary">Guardar</button>
			<a href="/tb_clientes" class="btn btn-success">Volver al listado </a>
		</form>-->
@endsection