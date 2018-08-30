@extends('layouts.app')
@section('content')
@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
			<?php $message=Session::get('message') ?>
			@if ($message=='store')
    <div class="alert alert-warning	">
        <ul>
            Bienvenido, Recuerda que no debes repetir los numeros en Cada una de las preguntas.
        </ul>
    </div><br />
@endif
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="panel-title">El arte de pensar</h1><br>
				<small class="text-muted">Leyenda: </small>
			</div>
			<div class="panel-body">
				<form class="form-inline" method="POST" action="{{URL::action('EncuestaController@storeP15')}}">
					{{ csrf_field()}}
					<input type="text" id="id" name="id" value="{{ $id }}">
					<input type="text" name="pO" value="O" hidden>
					<div class="form-row">
						<table class="table table-striped">
							<p><b>O. Cuando leo un artículo sobre un tema controvertido, prefiero que</b></p>
							<thead>	
							<tr>
								<th></th>
								<th></th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Me muestre los beneficios de tomar un punto de vista determinado.</td>
								<td><input class="form-control" 
									type="number" 
									name="1o"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Exponer todos los hechos de la controversia.</td>
									<td><input type="number"
											class="form-control" 
											name="2o"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Esbozar de una manera lógica los temas involucrados.</td>
									<td><input type="number"
											class="form-control" 
											name="3o"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Identificar los valores que respalda el escritor.</td>
									<td><input type="number"
											class="form-control" 
											name="4o"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Resaltar ambos lados de la problemática y aclarar el conflicto.</td>
									<td><input type="number"
											class="form-control" 
											name="5o"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						<hr>
						</div><!--Cierre del form row-->
			</div><!--Cierre del panel body-->
					<button class="btn btn-success btn-block">Enviar</button>
				</form>
			</div>
		</div>
	</div>
</div>
				
			</div>
			<div class="col">
				
			</div>
		</div>
@endsection