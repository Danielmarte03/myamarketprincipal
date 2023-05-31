<link rel="stylesheet" href="css/estilos.css">

@extends('adminlte::page')

@section('title', 'Cenacor')

@section('content_header')
    <link rel="stylesheet" href="css/estilos.css">
    <h1 class="m-0 text-dark">Chequeo Cuadre</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-stripped  table-responsive">
                <thead>
                    <tr>
                        <th>Fecha Dia</th>
                        <th>Caja</th>
                        <th>Moneda</th>
                        <th>Cajera</th>
                        <th>Total</th>
                        <th colspan="1">
                    </tr>
                </thead>
                <tbody>
                    @foreach ($chequeocuadres as $chequeocuadre)
                        <tr>
                            <td>{{ $chequeocuadre->fecha_dia }}</td>
                            <td>{{ $chequeocuadre->codigo_caja }}</td>
                            <td>{{ $chequeocuadre->nombre_moneda }}</td>
                            <td>{{ $chequeocuadre->nombre_cajera }}</td>
                            <td>{{ $chequeocuadre->total_moneda }}</td>
                            <td> <a href="{{route('chequeocuadres.edit', $chequeocuadre)}}" 
                                    class="btn btn-primary btn-sm">Editar</a>  </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
