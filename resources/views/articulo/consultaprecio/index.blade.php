@extends('adminlte::page')

@section('title', 'Cenacor')

@section('content_header')
    <h1 class="m-0 text-dark">Consulta Articulo</h1>
@stop

@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-body">
                    <form method="GET" action="{{ route('articulo.muestraprecio.show') }}">
                        
                        <div class="form-group">
                            <label> Codigo del Articulo</label>
                            <input type="text" name="codigo" value=""
                                class="form-control" placeholder="Codigo del Articulo" autofocus>
                        </div>
                        
                        <button class="tbn btn-success" name="show">
                            Muestra Precio
                        </button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
