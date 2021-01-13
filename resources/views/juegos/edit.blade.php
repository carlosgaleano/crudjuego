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
                    <input type="text" name="name" class="form-control" value="{{ $juego->name }}">
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="estatus" id="estatus" @php $selectedCondCheckbox=$juego->estatus;
                    if(isset($juego->estatus)) {
                    if($juego->estatus ==1)
                    { echo "checked=checked"; }}@endphp

                    value="{{ $juego->estatus }}" >
                    <label style="margin-left: 2vw;" class="form-check-label" for="estatus"> Activo</label>
                </div>

            </div>

            <div class="col-md-6">


                <div class="form-group">
                    <label for="stock">Descripción</label>
                    <input type="text" name="descripcion" class="form-control" value="{{ $juego->descripcion}}">
                </div>


            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="codigo">url</label>
                    <input type="text" name="url" class="form-control" value="{{ $juego->url}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Url Imagen</label>
                    <input type="text" name="url_imagen" class="form-control" value="{{ $juego->url_imagen}}">
                </div>

            </div>
            <div class="col-md-12">
                <div class="col-md-8"></div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        Guardar
                    </button>
                    <a href="{{route('Juegos.index')}}">
                        <button class="btn btn-danger">Cancelar </button>
                     <a/>

                </div>
            </div>
        </form>

    </div>
</div>

@stop
