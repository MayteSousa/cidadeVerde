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
        # $ecopontos = Ecoponto::paginate(10);
        $ecopontos = Ecoponto::get();
         #dd($ecopontos);
         return view('ecoponto.index',['local' => $ecopontos]);
    }


    /*public function gmaps()
    {
    	$locations = DB::table('ecopontos')->get();
    	return view('gmaps')->with('local');
    }

        public function index()
    {
        $locations = Locations::get();
        return view('gmaps')->with('local',$locations);
    }*/


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
        return 'teste';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ecoponto  $ecoponto
     * @return \Illuminate\Http\Response
     */
    public function show(Ecoponto $ecoponto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ecoponto  $ecoponto
     * @return \Illuminate\Http\Response
     */
    public function edit(Ecoponto $ecoponto)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ecoponto  $ecoponto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ecoponto $ecoponto)
    {
        //
    }
}
