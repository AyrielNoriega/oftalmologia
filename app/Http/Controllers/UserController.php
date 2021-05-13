<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medico;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $User = User::select('id', 'num_id', 'name', 'phone')->get();
 
        return datatables()->of($User) ->addColumn('action', function ( $User ){
                                            return '<a href="home/showorder/'.$User->id.'" type="button" class="btn btn-primary btn-xs" target="_blank">Ver usuario...</a>';
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        // $user = User::create();

            $user =  new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->type_id = $request->type_id;
            $user->num_id = $request->num_id;
            $user->phone = $request->phone;
            $user->f_nacimiento = $request->f_nacimiento;
            $user->age = $request->age;
            $user->sex = $request->sex;
            $user->city = $request->city;
            // $user->direction = $request->direction; 
            $user->password = $request->password; 
            $user->save();

            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $user = User::find( $id );

        return response()->json( $user );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = User::find($request->id);
        
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }else {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->type_id = $request->type_id;
            $user->num_id = $request->num_id;
            $user->phone = $request->phone;
            $user->f_nacimiento = $request->f_nacimiento;
            $user->age = $request->age;
            $user->sex = $request->sex;
            $user->city = $request->city;
            $user->direction = $request->direction;
        }

        $user->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
