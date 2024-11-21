<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorCliente;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        //inicio
        return view('inicio');
    }

   

    public function select(){
        //tarjetas del cliente
        return view('clientes');
    }
    
    public function procesarCliente(validadorCliente $peticion){
       
        $usuario=$peticion->input('txtnombre');
        session()->flash('exito', 'Se guardo el usuario: '.$usuario);
        return to_route('rutacacas');
    }
    //
}
 //respuesta a la peticion POST
        //return 'La info del cliente llego al controlador ';
        //regresamos todo lo que envia la peticion
        //return $peticion->ip();
        //return $peticion->path();
        //return $peticion->url();
        //return $peticion->all();
        //return redirect('/'); 
        //return redirect()->route('rutaconsulta');
        //redireccion al origen de la peticion
        //return back();
        //redirecciones con valores adjuntos (variables, arreglos etc,)
        //$id= [['usuario'=>'1'], ['usuario'=> '2']];
        //return view ('formulario', compact('id'));
        //redireccion enviando msj en session