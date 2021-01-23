<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coordinacion;

class CoordinacionesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
  public function agregarCoordinacion(){
    return view('Coordinaciones.agregarCoordinacion');
  }

  public function insertarCoordinacion(Request $request){
    $request->user()->authorizeRoles(['operador', 'admin']);
    $coordinacion = new Coordinacion;
    $coordinacion->Nombre = $request->Nombre;
    $coordinacion->Telefono = $request->Telefono;

    $coordinacion->save();
    return back()->with('mensaje', 'Coordinacion agregada');
  }

  public function mostrarCoordinaciones(){

     $coordinaciones = Coordinacion::all();

     return view('Coordinaciones.verCoordinaciones', compact('coordinaciones'));
   }

   public function eliminarCoordinacion($id){
     $request->user()->authorizeRoles(['admin']);
     $coordinacionEliminar = Coordinacion::findOrFail($id)->delete();
     return back()->with('mensaje', 'Coordinacion Eliminada');
   }

   public function editarCoordinacion($id){
     $request->user()->authorizeRoles(['operador', 'admin']);
     $coordinacion = Coordinacion::findOrFail($id);
     return view('Coordinaciones.editarCoordinacion', compact('coordinacion'));
   }

   public function updateCoordinacion(Request $request , $id){
    $request->user()->authorizeRoles(['operador', 'admin']);
     $coordinacion = Coordinacion::findOrFail($id);
     $coordinacion->Nombre = $request->Nombre;
     $coordinacion->Telefono = $request->Telefono;

     $coordinacion->save();
     return back()->with('mensaje', 'Datos editados');
   }

}
