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
			<a href="articulo/create" class="pull-right">
				<button class="btn btn-success">Crear Juegos</button>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Url</th>
						<th>Stock</th>
						<th>Url </th>
						<th>descripcion</th>
						<th>Url</th>
						<th width="180">Opciones</th>
					</thead>
					<tbody>
						@foreach($juegos as $juego)
							<tr>
								<td>{{ $juego->id }}</td>
								<td>{{ $juego->name}}</td>
								<td>{{ $juego->name }}</td>
								<td>{{ $juego->name }}</td>
								<td>{{ $juego->name }}</td>
								<td>
									<img src="{{ asset('imagenes/articulos/'.$juego->name) }}" alt="{{ $juego->name }}" height="100" width="100" class="img-thumbnail">
								</td>
								<td>{{ $juego->estatus }}</td>
								<td>
									<a href="">
										<button class="btn btn-info">Editar</button>
									</a>
									<a href="" data-target="#modal-delete-{{$juego->id}}" data-toggle="modal">
										<button class="btn btn-danger">Eliminar</button>
									</a>
								</td>
							</tr>

						@endforeach
					</tbody>
				</table>
			</div>

		</div>
	</div>

@endsection
