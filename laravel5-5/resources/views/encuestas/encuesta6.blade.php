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
				<form class="form-inline" method="POST" action="{{URL::action('EncuestaController@storeP6')}}">
					{{ csrf_field()}}
					<input type="text" id="id" name="id" value="{{ $id }}">
					<input type="text" name="pF" value="F" hidden>
					<div class="form-row">
					<table class="table table-striped">
							<p><b>F. Si fuera a obtener información de los vecinos sobre una preocupación comunitaria preferiría.</b></p>
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
								<td>Reunirme con ellos individualmente a hacer preguntas especificas..</td>
								<td><input class="form-control" 
									type="number" 
									name="1f"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Tener una reunión abierta con todos y pedirles que externen sus observaciones.</td>
									<td><input type="number"
											class="form-control" 
											name="2f"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Entrevistarlos en pequeños grupos y hacerles preguntas generales.</td>
									<td><input type="number"
											class="form-control" 
											name="3f"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Reunirme de manera informal con personas clave para obtener sus ideas.</td>
									<td><input type="number"
											class="form-control" 
											name="4f"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Solicitar que me entreguen toda la información relevante en su posesión.</td>
									<td><input type="number"
											class="form-control" 
											name="5f"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						</table>
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