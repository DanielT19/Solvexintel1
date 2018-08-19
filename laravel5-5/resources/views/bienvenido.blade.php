@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-5-md-6">
				<br><br>
			</div>
			<div class="col-9">
				<div class="container">
					<nav class=" navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
						<a class="navbar-brand" href="#">
							<img src="/images/bloc.png" width="30" height="30" alt="">
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
          <a class="dropdown-item" href="#">Ver Preguntas</a>          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Beta v0.1</a>
      </li>
    </ul>

    
  </div>
</nav>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="panel-title">Acceso al Test</h1>
			</div>
			<div class="panel-body">
				<form method="POST" action="">
					{{ csrf_field()}}
					<div class="form-group">
						<label form="nombre">Nombre: </label>
						<input class="form-control" 
								type="text"
								name="nombre"
								placeholder="Ingresa tu Nombre">
					</div>
					<div class="form-group">
						<label form="nombre">Email: </label>
						<input class="form-control" 
								type="email"
								name="Email"
								placeholder="Ingresa tu Email">
					</div>
					<button class="btn btn-info btn-block">Acceder</button>
				</form>
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