<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function __construct()
  {
      $this->middleware('auth');
  }

  public function mostrarUsuarios(Request $request){
    $usuarios = User::all();

    return view('Usuarios.verUsuarios', compact('usuarios'));
  }
}
