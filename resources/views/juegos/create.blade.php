@extends('layouts.admin')

@section('header')
<h1>
    Nuevo Juego
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

        <form action="{{ route('Juegos.store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">




            <div class="col-md-6">

                <div class="form-group">
                    <label for="nombre">id juego</label>
                    <input type="text" name="id_juego" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="name" class="form-control" required>
                </div>



            </div>

            <div class="col-md-6">


                <div class="form-group">
                    <label for="stock">Descripción</label>
                    <input type="text" name="descripcion" class="form-control" required>
                </div>
                <div style="margin-top: 3.3vw" class="form-check">
                    <input type="checkbox" class="form-check-input" name="estatus" id="estatus">
                     <label style="margin-left: 2vw;" class="form-check-label" for="estatus">Activo</label>
                </div>

            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="codigo">url</label>
                    <input type="text" name="url" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Url Imagen</label>
                    <input type="text" name="url_imagen" class="form-control" required>
                </div>

            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        Guardar
                    </button>
                </div>
            </div>
        </form>
        <div class="">
            <a style="margin-left: 1vw;" href="{{route('Juegos.index')}}">
                <button class="btn btn-danger">Cancelar </button>
                <a />
        </div>

    </div>
</div>

@endsection
