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
				<form class="form-inline" method="POST" action="{{URL::action('EncuestaController@storeP4')}}">
					{{ csrf_field()}}
					<input type="hidden" id="id" name="id" value="{{ $id }}">
					<input type="hidden" name="pD" value="D">
					<table class="table table-striped">
							<p><b>D. Para mí, las tablas y gráficas en un libro o artículo son usualmente:</b></p>
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
								<td>Mas útiles que una narrativa si son exactas.</td>
								<td><input class="form-control" 
									type="number" 
									name="1d"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Útiles, si claramente muestran los hechos importantes.</td>
									<td><input type="number"
											class="form-control" 
											name="2d"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Útiles, si están apoyados y explicados por la narrativa.</td>
									<td><input type="number"
											class="form-control" 
											name="3d"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Útiles, si generan preguntas acerca de la narrativa.</td>
									<td><input type="number"
											class="form-control" 
											name="4d"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Ni menos ni más útil que otro material.</td>
									<td><input type="number"
											class="form-control" 
											name="5d"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
							</tbody>
						</table>
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