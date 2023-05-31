<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticuloRequest;
use Illuminate\Http\Request;
use App\Models\Articulo;

class Articulo02Controller extends Controller
{
    public function index()
    {
        return view('articulo.creaarticulo.index');
    }
    
    public function store(ArticuloRequest $request)
    {
        $articulo = Articulo::create($request->all());
        return redirect()->route('articulo.creaarticulo.index', $articulo)->with('mensaje', 'Articulo Insertado Exitosamente');
        //dd($request);
    }

}
