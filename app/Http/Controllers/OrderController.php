<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxResponseOrders()
    {
        $orders = Order::select('id', 'dx', 'created_at')->where( 'user_id', Auth::id() )->get();
 
        return datatables()->of($orders)->editColumn('created_at', function ($request) {
                                                    return $request->created_at->isoFormat( 'DD MMMM YYYY, h:mm:ss a' );
                                                    })
                                        ->addColumn('action', function ( $orders ){
                                            return '<a href="home/showorder/'.$orders->id.'" type="button" class="btn btn-primary btn-xs" target="_blank">Ver orden...</a>';
                                        } )
                                        ->rawColumns( ['action'] )
                                        ->toJson();
        
    }

    public function index( $id )
    {
        
        $orders = Order::select('id', 'dx', 'created_at')->where( 'user_id', $id )->get();
 
        return datatables()->of($orders)->editColumn('created_at', function ($request) {
                                             return $request->created_at->isoFormat( 'DD MMMM YYYY, h:mm:ss a' );
                                             })
                                        ->addColumn('action', function ( $orders ){
                                            return '<a href="/home/showorder/'.$orders->id.'" type="button" class="btn btn-primary btn-xs" target="_blank">Ver orden...</a>';
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
    public function store(StoreOrderRequest $request)
    {
        $order = Order::create([
            'user_id'       => $request->paciente,
            'medico_id'     => 1,
            'od_esf'        => $request->od_esf,
            'od_cyl'        => $request->od_cyl,
            'od_eje'        => $request->od_eje,
            'od_codigo'     => $request->od_codigo,
            'od_av'         => $request->od_av,
            'oi_esf'        => $request->oi_esf,
            'oi_cyl'        => $request->oi_cyl,
            'oi_eje'        => $request->oi_eje,
            'oi_codigo'     => $request->oi_codigo,
            'oi_av'         => $request->oi_av,
            'color'         => $request->color,
            'add'           => $request->add,
            'bifocal'       => $request->bifocal,
            'dep'           => $request->dep,
            'alt'           => $request->alt,
            'observaciones' => $request->observaciones,
            'tipo_lente'    => $request->tipo_lente,
            'fotocromatico' => $request->fotocromatico,
            'material'      => $request->material,
            'filtro'        => $request->filtro,
            'dx'            => $request->dx
        ]);

        $order->save();

        return redirect()->back()->with('OrdenCreada', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order, $id)
    {
       $order = Order::find($id);
       return view('services.viewOrder', [ 'order' => $order ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
