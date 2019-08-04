<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jornada;
use App\Ficha;


class RegistroFichasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jornada=Jornada::all();
        return view('Fichas/RegistroFichas', compact('jornada'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     public function Login(Request $request)
    {
        $credenciales = $this->validate(request(), [
            'NombreFicha' => 'required|string|max:100',
            'NumFicha'=> 'required|integer',
            'Jornada' => 'required',
        ]);

        Ficha::create([
            'num_ficha'=>$request->input('NumFicha'),
            'nombre_ficha'=>$request->input('NombreFicha'),
            'fk_jornada'=>$request->input('Jornada')
        ]);

       return redirect('Inicio')->with('success','La ficha ha sido creada de forma exitosa!');

    }
}
