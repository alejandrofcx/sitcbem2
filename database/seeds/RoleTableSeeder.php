<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Estado;
use App\TipoPlaza;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role = new Role();
      $role->name = 'admin';
      $role->description = 'Usuario encargado de gestionar los usuarios del sistema y otorgar permisos a los módulos';
      $role->save();
      $role = new Role();
      $role->name = 'secretario';
      $role->description = 'Este usuario es el encargado de una cartera o secretaria dentro de la estructura orgánica del sindicato. ';
      $role->save();
      $role = new Role();
      $role->name = 'operador';
      $role->description = 'Este usuario es para el personal de apoyo que se encarga de llevar a cabo los procesos de la cartera o secretaria a la que pertenece.';
      $role->save();


      $estado = new Estado();
      $estado->Estado = 'Activo';
      $estado->Descripcion = 'El afiliado esta activo';
      $estado->save();

      $estado = new Estado();
      $estado->Estado = 'Inactivo';
      $estado->Descripcion = 'El afiliado esta inactivo';
      $estado->save();

      $tipoPlaza = new TipoPlaza();
      $tipoPlaza->Nombre = 'Tipo Plaza 1';
      $tipoPlaza->Descripcion = 'Tipo plaza 1';
      $tipoPlaza->save();


      $tipoPlaza = new TipoPlaza();
      $tipoPlaza->Nombre = 'Tipo Plaza 2';
      $tipoPlaza->Descripcion = 'Tipo plaza 2';
      $tipoPlaza->save();

      $tipoPlaza = new TipoPlaza();
      $tipoPlaza->Nombre = 'Tipo Plaza 3';
      $tipoPlaza->Descripcion = 'Tipo plaza 3';
      $tipoPlaza->save();
    }
}
