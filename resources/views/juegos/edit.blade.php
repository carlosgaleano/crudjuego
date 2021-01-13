@extends('layouts.admin')

@section('header')
	<h1>
		Editar Juegos: {{ $juego->name }}
	</h1>
@endsection

@section('content')

	<div class="row">
		<div class="col-md-12 col-xs-12">
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
		
		


			<form action="{{ route('Juegos.update', $juego->id) }}" method="POST" enctype="multipart/form-data">
				<!-- <input name="_method" type="hidden" value="PUT"> -->
				{{ method_field('PUT') }}
				{{ csrf_field() }}

				<div class="col-md-6">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="name" class="form-control"  value="{{ $juego->name }}">
					</div>
					<div class="form-group">
						<label for="codigo">url</label>
						<input type="text" name="codigo" class="form-control" value="{{ $juego->url}}"> 
					</div>
					<div class="form-group">
						<label for="stock">Descripción</label>
						<input type="text" name="descripcion" class="form-control" value="{{ $juego->descripcion}}">
					</div>
				</div>

				<div class="col-md-6">
					

					<div class="form-group">
						<label for="descripcion">Url Imagen</label>
						<input type="text" name="url_imagen" class="form-control"
						value="{{ $juego->imagen}}">
					</div>
                    <div class="form-group">
						<label for="descripcion">Activo</label>
						<input type="text" name="estatus" class="form-control"
						value="{{ $juego->estatus}}">
					</div>

				</div>
				
				<div class="form-group">
					<button class="btn btn-primary" type="submit">
						Guardar
					</button>
					<button class="btn btn-danger" type="reset">
						Cancelar
					</button>
				</div>

			</form>

		</div>
	</div>

@stop