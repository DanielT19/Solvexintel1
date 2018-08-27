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
				<form class="form-inline" method="POST" action="{{URL::action('UsuariosController@saveenc')}}">

					{{ csrf_field()}}
					<input type="text" id="id" name="id" value="{{ $id }}">
					<input type="text" name="pA" value="A" hidden>
					<input type="text" name="pB" value="B" hidden>
					<input type="text" name="pC" value="C" hidden>
					<input type="text" name="pD" value="D" hidden>
					<input type="text" name="pE" value="E" hidden>
					<input type="text" name="pF" value="F" hidden>
					<input type="text" name="pG" value="G" hidden>
					<input type="text" name="pH" value="H" hidden>
					<input type="text" name="pI" value="I" hidden>
					<input type="text" name="pJ" value="J" hidden>
					<input type="text" name="pK" value="K" hidden>
					<input type="text" name="pL" value="L" hidden>
					<input type="text" name="pM" value="M" hidden>
					<input type="text" name="pN" value="N" hidden>
					<input type="text" name="pO" value="O" hidden>
					<input type="text" name="pP" value="P" hidden>
					<input type="text" name="pQ" value="Q" hidden>
					<input type="text" name="pR" value="R" hidden>
					<div class="form-row">
						<table class="table table-striped">
							<p><b>A. Cuando se presenta un conflicto entre personas acerca de ideas. Tiendo a estar a favor de la parte que</b></p>
							
							<thead>
								<th></th>
								<th></th>
								<th></th>
							
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Identifica e intenta sacar a la luz el conflicto</td>
								<td><input class="form-control" 
									type="number" 
									name="a[1a]"
									id="1a"
									required
									pattern="[0-9]"
									min="1"
									max="5"></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Expresa de la mejor manera los valores e ideales involucrados</td>
									<td><input type="number"
											class="form-control" 
											name="a[1b]"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Refleja de la mejor manera mi opinión y experiencia personal</td>
									<td><input type="number"
											class="form-control" 
											name="a[1c]"
											required
											pattern="[0-9]"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Se aproxima a la situación con la mayor lógica y consistencia</td>
									<td><input type="number"
											class="form-control" 
											name="a[1d]"
											required
											pattern="^[0-9]+"
											min="1"
											max="5"></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Mejor expresa el argumento de forma más concisa y contundente.</td>
									<td><input type="number"
											class="form-control" 
											name="a[1e]"
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