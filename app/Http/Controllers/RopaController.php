<?php

namespace App\Http\Controllers;

use App\Aguacate;
use App\Inicio;
use App\Ropa;
use Illuminate\Http\Request;

class RopaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ropas = Ropa::all();
        $inicios = Inicio::all();
        return view('negocios/negocios')->with('ropas', $ropas)->with('inicios', $inicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ropa  $ropa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ropa = Ropa::find($id);
        $etiqueta = $id;
        return view('negocios/detalle')->with('ropa', $ropa)->with('etiqueta', $etiqueta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ropa  $ropa
     * @return \Illuminate\Http\Response
     */
    public function edit(Ropa $ropa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ropa  $ropa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ropa $ropa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ropa  $ropa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ropa $ropa)
    {
        //
    }
}
