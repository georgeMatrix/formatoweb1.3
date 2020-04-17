<?php

namespace App\Http\Controllers;

use App\Aguacate;
use App\Inicio;
use Illuminate\Http\Request;

class AguacateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $aguacates = Aguacate::all();
            $inicios = Inicio::all();
            return view('negocios/negocios')->with('aguacates', $aguacates)->with('inicios', $inicios);
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
     * @param  \App\Aguacate  $aguacate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aguacate = Aguacate::find($id);
        $etiqueta = $id;
        return view('negocios/detalle')->with('aguacate', $aguacate)->with('etiqueta', $etiqueta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aguacate  $aguacate
     * @return \Illuminate\Http\Response
     */
    public function edit(Aguacate $aguacate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aguacate  $aguacate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aguacate $aguacate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aguacate  $aguacate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aguacate $aguacate)
    {
        //
    }
}
