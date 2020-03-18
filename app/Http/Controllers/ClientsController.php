<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = Client::all();

       
        return view('Cliente.viewConsultarCliente',compact('clients'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('Cliente.viewCrearCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(ClientRequest $request)
    {
        //
        $client=new Client($request->all());
       
        $client->save();
        
        return redirect('home');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $clients = Client::all();

       
        $client = Client::findOrFail($id);

        return view('Cliente.viewVerCliente',compact('client'));
        
        
    }


 


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $client = Client::where('id', $id)->findOrFail($id);
        return view('Cliente.viewEditarCliente', ['client' => $client]);
    }
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request,$id )
    {
        //
        
        $client = Client::where('id', $id)->findOrFail($id);
        
        $input = $request->all();

        $client->update($input);
      
   

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clients $clients)
    {
        //
    }
}
