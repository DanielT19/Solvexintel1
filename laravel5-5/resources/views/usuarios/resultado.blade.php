@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-md-9 col-md-offset-1">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Email</th>
					<th>Creado el:</th>
				</tr>
			</thead>
			@foreach($usuario as $usu)
			<tbody>
				<th scope="row">{{ $usu->id_usu }}</th>
				<td>{{ $usu->nombre }}</td>
				<td>{{ $usu->email }}</td>
				<td>{{ $usu->created_at}}</td>
			</tbody>
			@endforeach
		</table>
		<br><br><br>
		<a href="{{URL::action('UsuariosController@index')}}"
		<button class="btn btn-danger">Regresar</button>
	</a>
	</div>
</div>

{!! $usuario->render() !!}

@endsection