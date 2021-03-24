@extends("layouts.app6")

@section("content")
<div class="container">
    <h1>Perfil de {{$tb_cliente->nombre}}</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="/img/user.png" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Informacion personal</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nombre:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$tb_cliente->nombre}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Apellidos:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$tb_cliente->apellidos}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Direccion:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$tb_cliente->direccion}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">CP:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$tb_cliente->cp}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Localidad:</label>
            <div class="col-lg-8">
              <span class="form-control">{{$tb_cliente->localidad}}</span>  
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Provincia:</label>
            <div class="col-md-8">
              <span class="form-control">{{$tb_cliente->provincia}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Pais:</label>
            <div class="col-md-8">
              <span class="form-control">{{$tb_cliente->pais}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Telefono:</label>
            <div class="col-md-8">
              <span class="form-control">{{$tb_cliente->telefono}}</span>
            </div>
          </div>
		  <div class="form-group">
            <label class="col-md-3 control-label">Email:</label>
            <div class="col-md-8">
              <span class="form-control">{{$tb_cliente->email}}</span>
            </div>
          </div>
		  <div class="form-group">
            <label class="col-md-3 control-label">NIF:</label>
            <div class="col-md-8">
              <span class="form-control">{{$tb_cliente->nif}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
			  <a href="/tb_clientes" class="btn btn-primary">Volver al listado</a>
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
<!--<h1>
	Nombre: {{$tb_cliente->nombre}}
</h1>
<h1>
	Apellidos: {{$tb_cliente->apellidos}}
</h1>
<h1>
	Direccion: {{$tb_cliente->direccion}}
</h1>
<h1>
	CP: {{$tb_cliente->cp}}
</h1>
<h1>
	Localidad: {{$tb_cliente->localidad}}
</h1>
<h1>
	Provincia: {{$tb_cliente->provincia}}
</h1>
<h1>
	Pais: {{$tb_cliente->pais}}
</h1>
<h1>
	Telefono: {{$tb_cliente->telefono}}
</h1>
<h1>
	Email: {{$tb_cliente->email}}
</h1>
<h1>
	NIF: {{$tb_cliente->nif}}
</h1>

<a href="/tb_clientes" class="btn btn-success">Volver al listado </a>-->

@endsection