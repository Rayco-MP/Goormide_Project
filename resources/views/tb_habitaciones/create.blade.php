@extends('layouts.app2')

@section('content')
	<div class="container">
		<div class="row justify-content-center">

	@if(isset($tb_habitacion))
		<h1>Editando tb_habitaciones</h1>
	@else
		<h1>Insertando tb_habitaciones</h1>

	@endif

	@if(isset($tb_habitacion))   {{-- Si estoy editando --}}
		 <form method="POST" action="{{url('/tb_habitaciones')}}/{{$tb_habitacion->id}}">
			<input type="hidden" name="_method" value="PUT">
	@else
	     <form method="POST" action="{{url('/tb_habitaciones')}}">
	@endif
		 
	  <div class="form-group">
		<label >Habitacion</label>
		<input name="habitacion" type="text" value="{{$tb_habitacion->habitacion??''}}" class="form-control" >
		  @if ($errors->has('habitacion'))
            <span class="text-danger">{{ $errors->first('habitacion') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Precio</label>
		<input  name="precio" type="text" value="{{$tb_habitacion->precio??''}}"  class="form-control" >
		  @if ($errors->has('precio'))
            <span class="text-danger">{{ $errors->first('precio') }}</span>
        	@endif
	  </div>
		@csrf
	  <button type="submit" class="btn btn-primary">Guardar</button>
	  <a href="/tb_habitaciones" class="btn btn-success">Volver al listado </a>
	</form>
@endsection