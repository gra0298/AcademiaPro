<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;


// ALTER TABLE operaciones ADD name Varchar(100)

class personaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = Persona::all();//se instancia el modelo
        return view ('sobrepersonas.index',compact('persona'));
        /*
        $docente = Docentes::all();//se instancia el modelo
        return view('sobredocentes.index',compact('docente'));
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sobrepersonas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $persona = new Persona();
        $persona ->nombre = $request->input('nombre');
        return view('sobrepersonas.correcto');
        */
        $persona = new Persona();

        $persona ->name = $request->input('name');
        $persona ->identification_number = $request->input('identification_number');
        $persona ->user_rol = $request->input('user_rol');
        $persona ->email = $request->input('email');
        $persona ->phone_number = $request->input('phone_number');
        $persona ->state = $request->input('state');
        $persona ->save();

        return 'completado';


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
}
