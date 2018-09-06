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
				<form class="form-inline" method="POST" action="{{URL::action('EncuestaController@storeP14')}}">
					{{ csrf_field()}}
					<input type="hidden" id="id" name="id" value="{{ $id }}">
					<input type="hidden" name="pN" value="N" hidden>
					<div class="form-row">
						<table class="table table-striped">
							<p><b>N. En general, creo que una teoría es útil cuando.</b></p>
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
								<td>Parece estar relacionada con otras teorías o ideas que he aprendido.</td>
								<td><input class="form-control" 
									type="number" 
									name="1n"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Me explica las cosas de una nueva forma.</td>
									<td><input type="number"
											class="form-control" 
											name="2n"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Puede explicar sistemáticamente una cantidad de situaciones relacionadas.</td>
									<td><input type="number"
											class="form-control" 
											name="3n"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Sirve para clarificar mis propias observaciones experiencia.</td>
									<td><input type="number"
											class="form-control" 
											name="4n"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Tiene una aplicación práctica y concreta.</td>
									<td><input type="number"
											class="form-control" 
											name="5n"
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