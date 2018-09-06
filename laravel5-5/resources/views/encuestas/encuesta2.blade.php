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
				<form class="form-inline" method="POST" action="{{URL::action('EncuestaController@storeP2')}}">

					{{ csrf_field()}}
					<input type="hidden" id="id" name="id" value="{{ $id }}">
					<input type="hidden" name="pB" value="B" hidden>
					<div class="form-row">
						<table class="table table-striped">
<p><b>B. Cuando inicio un trabajo en un proyecto grupal, que es lo más importante para mí:</b></p>
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
								<td>Entender los propósitos y el valor del proyecto</td>
								<td><input class="form-control" 
									type="number" 
									name="1b"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Descubrir las metas y valores de los individuos que forman parte del grupo.</td>
									<td><input type="number"
											class="form-control" 
											name="2b"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Determinar cómo vamos a abordar el proyecto</td>
									<td><input type="number"
											class="form-control" 
											name="3b"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Entender como el proyecto puede ser de beneficio para el grupo</td>
									<td><input type="number"
											class="form-control" 
											name="4b"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Organizar y poner en marcha el proyecto.</td>
									<td><input type="number"
											class="form-control" 
											name="5b"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<center><button class="btn btn-primary">Acceder</button></center>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection