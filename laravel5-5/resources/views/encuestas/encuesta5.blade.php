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
				<form class="form-inline" method="POST" action="{{URL::action('EncuestaController@storeP5')}}">
					{{ csrf_field()}}
					<input type="hidden" id="id" name="id" value="{{ $id }}">
					<input type="hidden" name="pE" value="E" hidden>
					<table class="table table-striped">
						<div class="form-row">
							<p><b>E. Si me fuera solicitado realizar un proyecto de investigación, probablemente comenzaría por:</b></p>
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
								<td>Tratar de encuadrar el proyecto dentro de una perspectiva amplia.</td>
								<td><input class="form-control" 
									type="number" 
									name="1e"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Decidir si puedo hacerlo solo o requiero de ayuda.</td>
									<td><input type="number"
											class="form-control" 
											name="2e"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Especular acerca de cuáles serían los posibles resultados.</td>
									<td><input type="number"
											class="form-control" 
											name="3e"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Determinar si el proyecto debería o no realizarse.</td>
									<td><input type="number"
											class="form-control" 
											name="4e"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Tratar de formular el problema lo más exhaustivamente posible.</td>
									<td><input type="number"
											class="form-control" 
											name="5e"
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