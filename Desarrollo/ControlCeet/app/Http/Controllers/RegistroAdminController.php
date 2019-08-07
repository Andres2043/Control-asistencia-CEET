<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\TipoDocumento;

class RegistroAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipodocumento=TipoDocumento::all();
        
        return view('Admin/RegistroAdmin', compact('tipodocumento'));
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
        $this->validate(request(),[

            'TipoDocumento' => 'required',
            'NumeroDocumento' => 'required|max:11',
            'PrimerNombre' => 'required|string',
            'SegundoNombre'=>'required|string',
            'PrimerApellido' => 'required|string',
            'SegundoApellido' => 'required|string',
            'correo' => 'email|required|string',
            'Contraseña' => 'required|string',

        ]);

        Admin::create([
            'primer_nombre'=>$request->input('PrimerNombre'),
            'segundo_nombre'=>$request->input('SegundoNombre'),
            'primer_apellido'=>$request->input('PrimerApellido'),
            'segundo_apellido'=>$request->input('SegundoApellido'),
            'correo'=>$request->input('correo'),
            'documento'=>$request->input('NumeroDocumento'),
            'contraseña'=>$request->input('Contraseña'),
            'fk_tipo_documento'=>$request->input('TipoDocumento')
        ]);
        return redirect('Inicio')->with('success','El administrador ha sido creado de forma exitosa!');
    }

}
