@extends('layouts.admin')

@section('header')
	<h1>
		Listado de Juegos
	</h1>
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-xs-12">

		</div>
		<div class="col-md-2">
			<a href="{{ route('Juegos.create')}}" class="pull-right">
				<button class="btn btn-success">Crear Juegos</button>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<th width="10%">Id</th>
						<th width="15%">Nombre</th>
						<th width="15%">Descripción</th>
						<th width="15%">Url </th>
						<th width="15%">Url Imagen</th>
						<th width="15%">Activo</th>
						<th width="15%">Opciones</th>
					</thead>
					<tbody>
						@foreach($juegos as $juego)
							<tr>
								<td>{{ $juego->id }}</td>
								<td>{{ $juego->name}}</td>
								<td>{{ $juego->descripcion }}</td>
								<td><a href="{{ $juego->url }}"  target="_blank" >link</a></td>

								<td>
									<img src="{{$juego->url_imagen }}" alt="{{ $juego->name }}" class="img-fluid " height="100" width="100" >
								</td>
								<td>{{ $juego->estatus }}</td>
								<td>
								<a href="{{route('Juegos.edit', $juego->id)}}">
										<button class="btn btn-info">Editar</button>
									</a>
									<a href="" data-target="#modal-delete-{{$juego->id}}" data-toggle="modal">
										<button class="btn btn-danger">Eliminar</button>
									</a>
								</td>
							</tr>
							@include('juegos.modal')
						@endforeach
					</tbody>
				</table>
			</div>

		</div>
	</div>

@endsection
