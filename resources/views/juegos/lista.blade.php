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

	</div>

	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<th>Id</th>
						<th >Nombre</th>
						<th>Descripción</th>
						<th >Url </th>
						<th >Url Imagen</th>


					</thead>
					<tbody>
						@foreach($juegos as $juego)
							<tr>
								<td>{{ $juego->id }}</td>
								<td>{{ $juego->name}}</td>
								<td>{{ $juego->descripcion }}</td>
								<td><a href="{{ $juego->url }}" target="_blank"  >link</a></td>

								<td>
									<img src="{{$juego->url_imagen }}" alt="{{ $juego->name }}" class="img-fluid " height="100" width="100" >
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
