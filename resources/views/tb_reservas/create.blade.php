@extends('layouts.app2')

@section('content')
	<div class="container">
		<div class="row justify-content-center">

	@if(isset($tb_reserva))
		<h1>Editando tb_reservas</h1>
	@else
		<h1>Insertando tb_reservas</h1>

	@endif

	@if(isset($tb_reserva))   {{-- Si estoy editando --}}
		 <form method="POST" action="{{url('/tb_reservas')}}/{{$tb_reserva->id}}">
			<input type="hidden" name="_method" value="PUT">
	@else
	     <form method="POST" action="{{url('/tb_reservas')}}">
	@endif
		 
	  <div class="form-group">
		<label >Dia de la reserva</label>
		<input name="pide_reserva" type="date" value="{{$tb_reserva->pide_reserva??''}}" class="form-control" >
		   @if ($errors->has('pide_reserva'))
            <span class="text-danger">{{ $errors->first('pide_reserva') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Entrada</label>
		<input  name="entrada" type="date" value="{{$tb_reserva->entrada??''}}"  class="form-control" >
		  @if ($errors->has('entrada'))
            <span class="text-danger">{{ $errors->first('entrada') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Hora de entrada</label>
		<input  name="hora_entrada" type="time" value="{{$tb_reserva->hora_entrada??''}}"  class="form-control" >
		  @if ($errors->has('hora_entrada'))
            <span class="text-danger">{{ $errors->first('hora_entrada') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Salida</label>
		<input  name="salida" type="date" value="{{$tb_reserva->salida??''}}" class="form-control" >
		  @if ($errors->has('salida'))
            <span class="text-danger">{{ $errors->first('salida') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Hora de salida</label>
		<input  name="hora_salida" type="time" value="{{$tb_reserva->hora_salida??''}}"  class="form-control" >
		  @if ($errors->has('hora_salida'))
            <span class="text-danger">{{ $errors->first('hora_salida') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Mascota</label>
		<select name="mascota_id" id="mascota_id" class="form-control">
			@foreach($tb_mascotas as $tb_mascota)
			<option value="{{$tb_mascota->id??''}}">{{$tb_mascota->nombre??''}}</option>
			@endforeach
		</select>
		  @if ($errors->has('mascota_id'))
            <span class="text-danger">{{ $errors->first('mascota_id') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Habitacion</label>
		<select name="habitacion_id" id="habitacion_id" class="form-control">
			@foreach($tb_habitaciones as $tb_habitacion)
			<option value="{{$tb_habitacion->id??''}}">{{$tb_habitacion->habitacion??''}}</option>
			@endforeach
		</select>
		  @if ($errors->has('habitacion_id'))
            <span class="text-danger">{{ $errors->first('habitacion_id') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Dieta</label>
		<select name="dieta_id" id="dieta_id" class="form-control">
			@foreach($tb_dietas as $tb_dieta)
			<option value="{{$tb_dieta->id??''}}">{{$tb_dieta->tipo_dieta??''}}</option>
			@endforeach
		</select>
		  @if ($errors->has('dieta_id'))
            <span class="text-danger">{{ $errors->first('dieta_id') }}</span>
        	@endif
	  </div>
		@csrf
	  <button type="submit" class="btn btn-primary">Guardar</button>
	  <a href="/tb_reservas" class="btn btn-success">Volver al listado </a>
	</form>
@endsection