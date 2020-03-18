<?php
use App\User;



namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //
    public function create()
    {
        return view('Vendedor.viewCrearVendedor');
        //
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (UserRequest $request)
    {
        //
        $user=new User($request->all());
       
        $user->save();
        
        return ('save');
        
        

    }
 /** 
    * @return \Illuminate\Http\Response
     */

    public function show()
    {
        //
        $users = User::all();

       
        return view('Vendedor.viewConsultarVendedor',compact('users'));
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

        $user = User::where('id', $id)->findOrFail($id);
        
        $input = $request->all();

        $user->update($input);
      
   

        return redirect('/Vendedor/viewConsultarVendedor');
    }


    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ver($id)
    {
        //
        $user = User::findOrFail($id);

       
        return view('Profesor.verProfesor',compact('user'));
    }





    

}
