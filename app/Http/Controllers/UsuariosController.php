<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Usuario;

class UsuariosController extends Controller
{
    function listado(){
        $usuarios = Usuario::get();
        return json_encode($usuarios);
    }
    
    function registrar(Request $request){
        $datos = $request->all();
        $datos[ 'contraseña' ]= sha1($datos[ 'contraseña' ]);
        Usuario::create($datos);
        echo "Se insertó correctamente";
    }

    function actualizar($id, Request $request){
        $datos = $request->all();
        $usuarios = Usuario::find($id);
        $usuarios->update($datos);
        echo "Se actualizo correctamente";
    }

    function eliminar($id){
      $usuarios = Usuario::find($id);
      $usuarios->delete();
      echo "Se elimino correctamente";
  }

  function login(Request $request) {
    $datos = $request->all();
    $usuarios = Usuario::where('correo', $datos['correo'])->where('contraseña',$datos['contraseña'])->first()
    if ($usuarios) {
        return json_encode($usuarios);
    } else {
        return "Usuario no existe";
    }
  }
}
