@extends('layouts.app2')

@section('content')
	<div class="container">
		<div class="row justify-content-center">

	@if(isset($tb_dieta))
		<h1>Editando tb_dietas</h1>
	@else
		<h1>Insertando tb_dietas</h1>

	@endif

	@if(isset($tb_dieta))   {{-- Si estoy editando --}}
		 <form method="POST" action="{{url('/tb_dietas')}}/{{$tb_dieta->id}}">
			<input type="hidden" name="_method" value="PUT">
	@else
	     <form method="POST" action="{{url('/tb_dietas')}}">
	@endif
		 
	  <div class="form-group">
		<label >Dieta</label>
		<input name="tipo_dieta" type="text" value="{{$tb_dieta->tipo_dieta??''}}" class="form-control" >
		  @if ($errors->has('tipo_dieta'))
            <span class="text-danger">{{ $errors->first('tipo_dieta') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Precio</label>
		<input  name="precio" type="text" value="{{$tb_dieta->precio??''}}"  class="form-control" >
		  @if ($errors->has('precio'))
            <span class="text-danger">{{ $errors->first('precio') }}</span>
        	@endif
	  </div>
		@csrf
	  <button type="submit" class="btn btn-primary">Guardar</button>
	  <a href="/tb_dietas" class="btn btn-success">Volver al listado </a>
	</form>
@endsection