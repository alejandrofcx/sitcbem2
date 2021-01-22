<?php

use Illuminate\Database\Seeder;
use App\Role;

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
    }
}
