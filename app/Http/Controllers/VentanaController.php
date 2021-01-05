<?php

namespace App\Http\Controllers;

use App\Ventana;
use Illuminate\Http\Request;

class VentanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tiposzapatos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tiposzapatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ventana  $ventana
     * @return \Illuminate\Http\Response
     */
    public function show(Ventana $ventana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ventana  $ventana
     * @return \Illuminate\Http\Response
     */
    public function edit(Ventana $ventana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ventana  $ventana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ventana $ventana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ventana  $ventana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ventana $ventana)
    {
        //
    }
}
