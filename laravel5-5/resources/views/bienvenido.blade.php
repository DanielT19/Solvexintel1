@extends('layouts.app')

@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-warning	">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif

	<div class="container">
		<div class="row">
			<div class="col-5-md-6">
				<br><br>
			</div>
			<div class="col-9">
				<div class="container">
						
					<nav class=" navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
						<a class="navbar-brand" href="">
							<img src="/images/ic_svl_iconapp.png" width="30" height="30" alt="">
						</a>Solvexintel
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Acciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Resultados</a>         
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" onclick="alert('Autor: Trejo Rojas Daniel Arturo para solexvintel, Esto es una BETA')" href="#">Beta v0.1</a>
      </li>
    </ul>

    
  </div>
</nav>
<div class="row">
	<div class="col-md-9 col-md-offset-1">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="panel-title">Acceso al Test</h1>
			</div>
			<div class="panel-body"><!--
				{!! Form::open() !!}
				<div class="form-group">
					{!! Form::label('Nombre:') !!}
					{!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa tu Nombre Completo']) !!}
				</div>
				{!! Form::close() !!}-->
				<form method="POST" action="{{URL::action('UsuariosController@store') }}">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					<div class="form-group">
						<label form="nombre">Nombre: </label>
						<input class="form-control" 
								type="text"
								name="nombre"
								placeholder="Ingresa tu Nombre completo, emepezando por apellidos">
					</div>
					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} ">
						<label form="nombre">Email: </label>
						<input class="form-control" 
								type="email"
								name="email"
								placeholder="Ingresa tu Email">
								{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
					</div>
					<small>*Asegurate de que tu email este escrito correctamente</small>
				<center><button class="btn btn-primary">Acceder</button></center>
				</form><br>
				<nav class="navbar fixed-bottom navbar-light bg-light">	
					<img src="/images/logo_solexvintel.png">
				</nav>	
			</div>
		</div>
	</div>
</div>
				
			</div>
			<div class="col">
				
			</div>
		</div>
	</div>
@endsection