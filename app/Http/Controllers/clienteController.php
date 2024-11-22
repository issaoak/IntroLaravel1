<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//Importacion querybuilder
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;


class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultarClientes=DB::table('cliente')-> get();
        return view('clientes', compact('consultarClientes'));
    }

    public function editar($id)
    {
        $cliente = DB::table('cliente')->where('id', $id)->first();
        return view('editar', compact('cliente'));
    }    

    public function actualizar(validadorCliente $request, $id)
    {
        DB::table('cliente')->where('id', $id)->update([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'updated_at' => now(),
        ]);

        return redirect()->route('rutaconsulta')->with('exito', 'El cliente ha sido actualizado correctamente.');
    }

    public function eliminar($id)
    {
        DB::table('cliente')->where('id', $id)->delete();

        return redirect()->route('rutaconsulta')->with('exito', 'El cliente ha sido eliminado correctamente.');
    }


    /**
     * Sirve para abrir el formulario
     */
    public function create()
    {
        return view('formulario');
        
    }

    /**
     *Aqui preparo el insert.
     */
    public function store(validadorCliente $request)
    {
        DB::table('cliente')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        $usuario= $request->input('txtnombre');
        session()->flash('exito', 'Se guardo el usuario:', $usuario);
        return to_route('rutacacas');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
