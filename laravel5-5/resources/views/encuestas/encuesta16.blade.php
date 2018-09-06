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
				<form class="form-inline" method="POST" action="{{URL::action('EncuestaController@storeP16')}}">
					{{ csrf_field()}}
					<input type="hidden" id="id" name="id" value="{{ $id }}">
					<input type="hidden" name="pP" value="P" hidden>
					<div class="form-row">
						<table class="table table-striped">
							<p><b>P. Si leo un libro fuera de mi campo profesional, es muy probable que lo haga debido a:</b></p>
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
								<td>Un interés en mejorar mi conocimiento profesional.</td>
								<td><input class="form-control" 
									type="number" 
									name="1p"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Que alguien a quien respeto haya dicho que es útil.</td>
									<td><input type="number"
											class="form-control" 
											name="2p"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>El deseo de incrementar mi conocimiento general.</td>
									<td><input type="number"
											class="form-control" 
											name="3p"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Un deseo de cambiar, saliendo de mi campo profesional.</td>
									<td><input type="number"
											class="form-control" 
											name="4p"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>La curiosidad de aprender más acerca de un tema específico.</td>
									<td><input type="number"
											class="form-control" 
											name="5p"
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