<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMedicoRequest;

class MedicoController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
 
    }
    public function home() {

        $users = User::all();

        return view('services.medico.index', [ 'users' => $users ]);
    }


    /**
     * ver todos los medicos creados
     * 
     */

     public function index()
    {
        $Medico = Medico::select('id', 'numero_id', 'nombre', 'telefono')->get();
 
        return datatables()->of($Medico) ->addColumn('action', function ( $Medico ){
                                            return '<a href="home/showorder/'.$Medico->id.'" type="button" class="btn btn-primary btn-xs" target="_blank">Ver medico...</a>';
                                        } )
                                        ->rawColumns( ['action'] )
                                        ->toJson();
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
    public function store(StoreMedicoRequest $request)
    {

            $user =  new Medico();
            $user->nombre = $request->nombre;
            $user->numero_id = $request->numero_id;
            $user->telefono = $request->telefono;
            $user->correo = $request->correo;
            $user->registro = $request->registro;
            $user->contrasena = $request->contrasena;

            $user->save();

            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show(Medico $medico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit(Medico $medico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medico $medico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medico $medico)
    {
        //
    }
}
