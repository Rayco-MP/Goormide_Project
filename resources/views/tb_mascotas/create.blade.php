@extends('layouts.app2')

@section('content')
	<div class="container">
		<div class="row justify-content-center">

	@if(isset($tb_mascota))
		<h1>Editando tb_mascota</h1>
	@else
		<h1>Insertando tb_mascota</h1>

	@endif

	@if(isset($tb_mascota))   {{-- Si estoy editando --}}
		 <form method="POST" action="{{url('/tb_mascotas')}}/{{$tb_mascota->id}}">
			<input type="hidden" name="_method" value="PUT">
	@else
	     <form method="POST" action="{{url('/tb_mascotas')}}">
	@endif
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
					<input  name="nombre" type="text" value="{{$tb_mascota->nombre??''}}"  class="form-control" >
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
				<button type="submit" class="btn btn-success">Guardar</button>
				<span></span>
				<a href="/tb_mascotas" class="btn btn-primary">Volver al listado </a>
			</div>
        </div>
	</form> 
			 
	<!--		 
	  <div class="form-group">
		<label >Propietario</label>
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
	  <div class="form-group">
		<label >Nombre</label>
		<input  name="nombre" type="text" value="{{$tb_mascota->nombre??''}}"  class="form-control" >
		  @if ($errors->has('nombre'))
            <span class="text-danger">{{ $errors->first('nombre') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Sexo</label>
		<select name="sexo" id="sexo" class="form-control">
			<option value="" selected disabled hidden>Selecione sexo</option>
			<option value="macho">Macho</option>
			<option value="hembra">Hembra</option>
		</select>
		  @if ($errors->has('sexo'))
            <span class="text-danger">{{ $errors->first('sexo') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Raza</label>
		<input  name="raza" type="text" value="{{$tb_mascota->raza??''}}" class="form-control" >
		  @if ($errors->has('raza'))
            <span class="text-danger">{{ $errors->first('raza') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Color</label>
		<input  name="color" type="text" value="{{$tb_mascota->color??''}}" class="form-control" >
		  @if ($errors->has('color'))
            <span class="text-danger">{{ $errors->first('color') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Peso</label>
		<input  name="peso" type="text" value="{{$tb_mascota->peso??''}}" class="form-control" >
		  @if ($errors->has('peso'))
            <span class="text-danger">{{ $errors->first('peso') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Fecha de nacimiento</label>
		<input  name="fecha_nacimiento" type="date" value="{{$tb_mascota->fecha_nacimiento??''}}" class="form-control" >
		  @if ($errors->has('fecha_nacimiento'))
            <span class="text-danger">{{ $errors->first('fecha_nacimiento') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Microchip</label>
		<input  name="microchip" type="text" value="{{$tb_mascota->microchip??''}}" class="form-control" >
		  @if ($errors->has('microchip'))
            <span class="text-danger">{{ $errors->first('microchip') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Esterilizado</label>
		<select name="esterilizado" id="esterilizado" class="form-control">
			<option value="" selected disabled hidden>Si/No</option>
			<option value="si">Si</option>
			<option value="no">No</option>
		</select>
		  @if ($errors->has('esterilizado'))
            <span class="text-danger">{{ $errors->first('esterilizado') }}</span>
        	@endif
	  </div>
		@csrf
	  <button type="submit" class="btn btn-primary">Guardar</button>
	  <a href="/tb_mascotas" class="btn btn-success">Volver al listado </a>
	</form>-->
@endsection