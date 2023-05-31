<?php

namespace App\Http\Controllers;

use App\Models\ChequeoCuadre;
use Illuminate\Http\Request;

class ChequeoCuadreController extends Controller
{
    public function index()
    {
        $chequeocuadres = Chequeocuadre::all();
        //dd($chequeocuadres);
        return view('chequeocuadres.index', compact("chequeocuadres"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ChequeoCuadre $chequeoCuadre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChequeoCuadre $chequeoCuadre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChequeoCuadre $chequeoCuadre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChequeoCuadre $chequeoCuadre)
    {
        //
    }
}
