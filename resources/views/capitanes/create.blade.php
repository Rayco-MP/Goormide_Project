@extends ("layouts.app2")


@section("content")

		<form method="POST" action="{{url('/capitanes')}}">
			<div class="form-group">
				<label>Nombre: </label>
				<input type="text" class="form-control" name="nombre">
					@if ($errors->has('nombre'))
            		<span class="text-danger">{{ $errors->first('nombre') }}</span>
        			@endif
			</div>
			<div class="form-group">
				<label>Apellidos: </label>
				<input type="text" class="form-control" name="apellidos">
					@if ($errors->has('apellidos'))
            		<span class="text-danger">{{ $errors->first('apellidos') }}</span>
        			@endif
			</div>
			<div class="form-group">
				<label>Fecha de nacimiento: </label>
				<input type="text" class="form-control" name="f_nacimiento">
					@if ($errors->has('f_nacimiento'))
					<span class="text-danger">{{ $errors->first('f_nacimiento') }}</span>
					@endif
			</div>
			<div class="form-group">
				<label>Email: </label>
				<input type="text" class="form-control" name="email">
					@if ($errors->has('email'))
					<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
			</div>
			
			@csrf
			<input class="btn btn-success" type="submit" value="Guardar">
			<a class="btn btn-success" href="/capitanes">Atras</a>
		</form>
		
@endsection