<?php

namespace App\Http\Controllers;

use App\Models\cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function home()
    {
        return view('inicio');
        //
    }
  
    public function index()
    {
        $consulta= cliente::all();
        return view('clientes', compact('consulta'));
        //
    }
    public function create()
    {
        return view('formulario');
        //
    }


    /**
     * Show the form for creating a new resource.
     */
   
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addCliente= new cliente();
        $addCliente->nombre=$request->input('txtnombre');
        $addCliente->apellido=$request->input('txtapellido');
        $addCliente->correo=$request->input('txtcorreo');
        $addCliente->telefono=$request->input('txttelefono');

        $addCliente->save();

        $usuario= $request->input('txtnombre');
        session()->flash('exito', 'Se guardo el usuario: ', $usuario);
        return redirect()->back();


        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $upCliente=  cliente::find($id);
        $upCliente->nombre= $request->input('txtnombre');
        $upCliente->apellido= $request->input('txtapellido');
        $upCliente->correo= $request->input('txtcorreo');
        $upCliente->telefono= $request->input('txttelefono');

        $upCliente->update();
        $usuario= $request->input('txtnombre');
        session()->flash('exito', 'Se actualizo el usuario: ', $usuario);
        return redirect()->back();

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $usuario=$request->input('txtnombre');

        $delCliente= cliente::find($id);
        $delCliente->delete();

        session()->flash('Exito', 'Se borro el cliente: '.$usuario);
        return redirect()->back();


    }
    
}
