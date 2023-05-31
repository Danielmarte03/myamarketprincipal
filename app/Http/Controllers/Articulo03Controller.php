<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class Articulo03Controller extends Controller
{
    public function index()
    {
        return view('articulo.consultaprecio.index');
    }

    public function show(Request $request)
    {
        //dd($request);
        $empresa = 1; 
        $productos = Articulo::select(['codigo', 'nombre', 'precio', 'descripcion'])
            ->where('empresa', $empresa)
            ->where('codigo', $request->codigo)->get();
            return view('articulo.muestraprecio.show', compact('productos')); 
    } 

}
