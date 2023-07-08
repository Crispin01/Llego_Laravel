<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Evento;

class EventosController extends Controller
{
    function listado(){
        $eventos = Evento::get();
        return json_encode($eventos);
    }
    function detalle($id){
        $evento = Evento::find($id);
        return json_encode($evento);
    }
    
    function registrar(Request $request){
        $datos = $request->all();
        Evento::create($datos);
        echo "Se insertó correctamente";
    }

    function actualizar($id, Request $request){
        $datos = $request->all();
        $eventos = Evento::find($id);
        $eventos->update($datos);
        echo "Se actualizo correctamente";
    }

    function eliminar($id){
      $eventos = Evento::find($id);
      $eventos->delete();
      echo "Se elimino correctamente";
  }
}
