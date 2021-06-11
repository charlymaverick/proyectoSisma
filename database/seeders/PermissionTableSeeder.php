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
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
           'notice-list',
           'notice-create',
           'notice-edit',
           'notice-delete',
           'question-list',
           'question-create',
           'question-edit',
           'question-delete',
           'cuest-list',
           'cuest-create',
           'cuest-edit',
           'cuest-delete',
           'event-list', 
           'event-create',
           'event-edit',
           'event-delete'
           

          

           
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}