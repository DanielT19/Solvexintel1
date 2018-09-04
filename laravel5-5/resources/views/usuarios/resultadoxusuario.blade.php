@extends('layouts.app')
@section('content')
<head>
	
</head>
<div class="row">
	<div class="col-md-9 col-md-offset-1">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th scope="col">#</th>	
					<th scope="col">Nombre:</th>	
					<th scope="col">Email:</th>	
					<th scope="col">Creado el:</th>	
					<th scope="col">S</th>	
					<th scope="col">I</th>
					<th scope="col">P</th>
					<th scope="col">A</th>
					<th scope="col">R</th>
					<th scope="col">Total</th>
				</tr>
			</thead>
			@foreach($usuario as $usu)
			<tbody>
				<th scope="row">{{ $usu->id_usu }}</th>
				<td>{{ $usu->nombre }}</td>
				<td>{{ $usu->email }}</td>
				<td>{{ $usu->created_at}}</td>
				<td>@if($s>60)
					<span class="label label-success">{!! $s !!}</span>
					@elseif($s<60)
					<span class="label label-warning">{!! $s !!}</span>
					@else
					<span class="label label-default">{!! $s !!}</span>
					@endif
				</td>
				<td>
					@if($i>60)
					<span class="label label-success">{!! $i !!}</span>
					@elseif($i<60)
					<span class="label label-warning">{!! $i !!}</span>
					@else
					<span class="label label-default">{!! $i !!}</span>
					@endif
				</td>
				<td>
					@if($p>60)
					<span class="label label-success">{!! $p !!}</span>
					@elseif($p<60)
					<span class="label label-warning">{!! $p !!}</span>
					@else
					<span class="label label-default">{!! $p !!}</span>
					@endif
				</td>
				<td>
					@if($a>60)
					<span class="label label-success">{!! $a !!}</span>
					@elseif($a<60)
					<span class="label label-warning">{!! $a !!}</span>
					@else
					<span class="label label-default">{!! $a !!}</span>
					@endif
				</td>
				<td>
					@if($r>60)
					<span class="label label-success">{!! $r !!}</span>
					@elseif($r<60)
					<span class="label label-warning">{!! $r !!}</span>
					@else
					<span class="label label-default">{!! $r !!}</span>
					@endif
				</td>
				<td>{!! $total !!}</td>

			</tbody>
			@endforeach
		</table>
	</div>
</div>
@endsection