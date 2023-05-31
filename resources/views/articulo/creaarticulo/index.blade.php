@extends('adminlte::page')

@section('title', 'Cenacor')

@section('content_header')
    <h1 class="m-0 text-dark">Crea Articulos</h1>
@stop

@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-body">
                    <form method="POST" action="{{ route('articulo.creaarticulo.store') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label> Codigo del Articulo</label>
                            <input type="text" name="codigo" value="{{old('codigo')}}"
                                class="form-control" placeholder="Codigo del Articulo" autofocus>
                        </div>

                        <div class="form-group">
                            <label> Nombre del Articulo</label>
                            <input type="text" name="nombre" value="{{old('nombre')}}"
                                class="form-control" placeholder="Nombre del Articulo">
                                @error('nombre')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label> Precio del Articulo</label>
                            <input type="decimal" name="precio" value="{{old('precio')}}"
                                class="form-control" placeholder="Precio del Articulo">
                                @error('precio')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label> Descripcion del Articulo</label>
                            <textarea name="descripcion" rows="8" class="form-control"  value="{{old('descripcion')}}"
                            placeholder="Descripcion del Articulo"></textarea>
                            @error('descripcion')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <button class="tbn btn-success" name="store">
                            Inserta Articulo
                        </button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection