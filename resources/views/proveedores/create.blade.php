@extends('layouts.app2')

@section('content')
	<div class="container">
		<div class="row justify-content-center">

	@if(isset($proveedor))
		<h1>Editando Proveedor</h1>
	@else
		<h1>Insertando Proveedor</h1>

	@endif

	@if(isset($proveedor))   {{-- Si estoy editando --}}
		 <form method="POST" action="{{url('/proveedores')}}/{{$proveedor->id}}">
			<input type="hidden" name="_method" value="PUT">
	@else
	     <form method="POST" action="{{url('/proveedores')}}">
	@endif
		 
	  <div class="form-group">
		<label >Empresa</label>
		<input name="empresa" type="text" value="{{$proveedor->empresa??''}}" class="form-control" >
			@if ($errors->has('empresa'))
            <span class="text-danger">{{ $errors->first('empresa') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Cargo de Contacto</label>
		<input  name="cargo_contacto" type="text" value="{{$proveedor->cargo_contacto??''}}"  class="form-control" >
		  @if ($errors->has('cargo_contacto'))
            <span class="text-danger">{{ $errors->first('cargo_contacto') }}</span>
        	@endif
	  </div>
	  <div class="form-group">
		<label >Ciudad</label>
		<input  name="ciudad" type="text" value="{{$proveedor->ciudad??''}}" class="form-control" >
		  @if ($errors->has('ciudad'))
            <span class="text-danger">{{ $errors->first('ciudad') }}</span>
        	@endif
	  </div>
		@csrf
	  <button type="submit" class="btn btn-primary">Guardar</button>
	</form>
@endsection