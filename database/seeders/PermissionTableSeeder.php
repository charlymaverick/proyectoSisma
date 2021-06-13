<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'Lista Roles',
           'Crear Roles',
           'Editar Roles',
           'Eliminar Roles',
           'Listar Usuarios',
           'Crear Usuarios',
           'Editar Usuarios',
           'Eliminar Usuarios',
           'Listar Noticias',
           'Crear Noticias',
           'Editar Noticias',
           'Eliminar Norticias',
           'Listar Preguntas',
           'Crear Preguntas',
           'Editar Preguntas',
           'Eliminar Preguntas',
           'Listar Cuestionarios',
           'Crear Cuestionarios',
           'Editar Cuestionarios',
           'Eliminar Cuestionarios',
           'Listar Eventos', 
           'Crear Eventos',
           'Editar Eventos',
           'Eliminar Eventos'
           

          

           
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}