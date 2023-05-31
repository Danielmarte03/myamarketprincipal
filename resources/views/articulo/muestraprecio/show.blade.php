
@extends('adminlte::page')

@section('title', 'Resultado')

@section('content_header')
    <h1 class="m-0 text-dark">Muestra Precio</h1>
    <link rel="stylesheet" href="css/estilos.css" >
    <style type="text/css">
        td { color: blue;
            font-size: 40px;
        }
    </style>
@stop

@section('content')

<div class="container p-4">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body">
                <form method="get" action="{{ route('articulo.muestraprecio.show') }}">
                    
                    <div class="form-group">
                        <label> Codigo del Articulo</label>
                        <input type="text" name="codigo" value=""
                            class="form-control" placeholder="Codigo del Articulo" autofocus>
                    </div>
                    
                    <button class="tbn btn-success" name="show">
                        Buscar Articulo
                    </button> 
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container p-0">
    <div class="card">
        <div class="card-body">
            <table class="table table-stripped  table-responsive">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th colspan="2">
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->nombre }} </td> 
                            <td>{{ $producto->precio}}</td>
                        </tr>
                    @endforeach
               </tbody>
            </table>
        </div>
    </div>
</div>
@endsection