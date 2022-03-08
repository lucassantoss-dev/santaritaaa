<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socio;


class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Socio::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $socio = Socio::create($request->all());

        return $socio;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $socio = Socio::find($id);
        return $socio;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $socio = Socio::findOrFail($id);
        $socio->update($request->all());

        return $socio;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socio = Socio::destroy($id);

        return $socio;
    }

    public function search($nome)
    {
        $search = Socio::where('nome', 'like', '%' .$nome. '%')->get();

        return $search;
    }
}
