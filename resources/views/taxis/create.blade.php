@extends ("layouts.app2")


@section("content")

		<form method="POST" action="{{url('/taxis')}}">
			<div class="form-group">
				<label>Matricula: </label>
				<input type="text" class="form-control" name="matricula">
					@if ($errors->has('matricula'))
            		<span class="text-danger">{{ $errors->first('matricula') }}</span>
        			@endif
			</div>
			<div class="form-group">
				<label>Modelo: </label>
				<input type="text" class="form-control" name="modelo">
					@if ($errors->has('modelo'))
            		<span class="text-danger">{{ $errors->first('modelo') }}</span>
        			@endif
			</div>
			<div class="form-group">
				<label>Fecha de matriculacion: </label>
				<input type="text" class="form-control" name="f_matriculacion">
					@if ($errors->has('f_matriculacion'))
					<span class="text-danger">{{ $errors->first('f_matriculacion') }}</span>
					@endif
			</div>
			<div class="form-group">
				<label>DNI de chofer: </label>
				<input type="text" class="form-control" name="dni_chofer">
					@if ($errors->has('dni_chofer'))
					<span class="text-danger">{{ $errors->first('dni_chofer') }}</span>
					@endif
			</div>
			<div class="form-group">
				<label>Kms: </label>
				<input type="text" class="form-control" name="kms">
					@if ($errors->has('kms'))
					<span class="text-danger">{{ $errors->first('kms') }}</span>
					@endif
			</div>
			<div class="form-group">
				<label>Fecha de Alta: </label>
				<input type="text" class="form-control" name="fecha_alta">
					@if ($errors->has('fecha_alta'))
					<span class="text-danger">{{ $errors->first('fecha_alta') }}</span>
					@endif
			</div>
			
			@csrf
			<input type="submit" value="Guardar">
		</form>
		
@endsection