<?php

namespace App\Http\Controllers;

use App\Models\Ecoponto;
use Illuminate\Http\Request;

class EcopontoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ecopontos = Ecoponto::all(); //ecopontosartamento::all();
        return View('ecoponto.index')->with('ecopontos',$ecopontos);     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('ecoponto.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ecoponto::create( $request->all() );

        return redirect("/ecoponto");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ecoponto  $ecoponto
     * @return \Illuminate\Http\Response
     */
    public function show(Ecoponto $ecoponto)
    {
        return View('ecoponto.show')->with('ecoponto',$ecoponto);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ecoponto  $ecoponto
     * @return \Illuminate\Http\Response
     */
    public function edit(Ecoponto $ecoponto)
    {
        return View('ecoponto.edit')->with('ecoponto',$ecoponto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ecoponto  $ecoponto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ecoponto $ecoponto)
    {
        $ecoponto->update(  $request->all()  );

        return redirect('/ecoponto');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ecoponto  $ecoponto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ecoponto $ecoponto)
    {
        $ecoponto->delete();

        return redirect('/ecoponto');
    }
}
