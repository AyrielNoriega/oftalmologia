<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxResponseOrders()
    {
        $orders = Order::select('id', 'dx', 'created_at')->get();
 
        return datatables()->of($orders)->editColumn('created_at', function ($request) {
                                                    return $request->created_at->isoFormat( 'DD MMMM YYYY, h:mm:ss a' );
                                                    })
                                        ->addColumn('action', function ( $orders ){
                                            return '<a href="home/showorder/'.$orders->id.'" type="button" class="btn btn-primary btn-xs" target="_blank">Ver orden...</a>';
                                        } )
                                        ->rawColumns( ['action'] )
                                        ->toJson();
        
    }

    public function index()
    {
        //
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
