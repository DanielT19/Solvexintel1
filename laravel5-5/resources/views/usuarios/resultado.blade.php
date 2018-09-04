@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-md-9 col-md-offset-1">

		<table id="buscarusu" class="table display"  width="100%"	>
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Resultados</th>
				</tr>
			</thead>
			@foreach($usuario as $usu)
		
			<tbody>
				<th scope="row">{{ $usu->id_usu }}</th>
				<td>{{ $usu->nombre }}</td>
				<td><a href="{{ URL::action('UsuariosController@verRes', $usu->id_usu) }}"><button class="btn btn-success">Ver Detalles</button></a></td>
				
			</tbody>
			
			@endforeach
		</table>
		<br><br><br>
		<a href="{{ route('inicio') }}" 
		<button class="btn btn-danger">Regresar</button>
	</a>
	</div>
</div>

{!! $usuario->render() !!}


@endsection