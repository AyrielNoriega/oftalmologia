<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
 
    }


    public function ajaxCitas( $id ){

        $citas = Cita::select('dia', 'especialidad', 'created_at')->where( 'user_id', $id )->get();
 
        return datatables()->of($citas)->editColumn('created_at', function ($request) {
                                             return $request->created_at->isoFormat( 'DD MMMM YYYY, h:mm:ss a' );
                                             })
                                        // ->addColumn('action', function ( $citas ){
                                        //     return '<a href="/home/showorder/'.$citas->id.'" type="button" class="btn btn-primary btn-xs" target="_blank">Ver orden...</a>';
                                        // } )
                                        // ->rawColumns( ['action'] )
                                        ->toJson();
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $horas = [ 
                    '07:00:00',
                    '07:30:00',
                    '08:00:00',
                    '08:30:00',
                    '09:00:00',
                    '09:30:00',
                    '10:00:00',
                    '10:30:00',
                    '11:00:00',
                    '11:30:00',
                    '12:00:00',
                    '12:30:00',
                    '13:00:00',
                    '13:30:00',
                    '14:00:00',
                    '14:30:00',
                    '15:00:00',
                    '15:30:00',
                    '16:00:00',
                    '16:30:00',
                    '17:00:00',
                    '17:30:00',
                    '18:00:00',
                    '18:30:00',
                    '19:00:00',
                    '19:30:00',
                    '20:00:00',
         ];

        $citas = Cita::select('hora')->where('dia', $request->dia)->get();


        foreach ($citas as $key => $value) { //recorrer, formatear y guardar cada hora

            $clave = array_search($value->hora, $horas); // buscar hora extraida en array
        
            array_splice($horas, $clave, 1); //borrar hora del array horas            
        }

        foreach ($horas as $key => $value) { //formatear cada hora y guardarla en array
            $cita = strtotime($value);
            $cadena = date('h:i A', $cita);

            $hora[] = $cadena;
        }

        return response()->json($hora, 200);
 
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

        $hora = date_create( $request->hora );
        $cita = Cita::create([
            'hora' => $hora,
            'dia'  => $request->dia,
            'especialidad' => $request->especialidad,
            'user_id' => Auth::id(),
        ]);

        $cita->save();

        return view('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        $citas = Cita::select('id', 'hora', 'especialidad' , 'user_id' )->get();

        // $user = User::find
 
        return datatables()->of($citas) ->addColumn('action', function ( $citas ){
                                            return '<a href="/user/'.$citas->user_id.'" type="button" class="btn btn-primary" target="_blank">Ver usuario...</a>';
                                        } )
                                        ->rawColumns( ['action'] )
                                        ->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        //
    }
}
