<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function __construct()
  {
      $this->middleware('auth');
  }
  
    public function mostrarUsuarios(Request $request){
        
        return view('Usuarios.verUsuarios');
      }
}
