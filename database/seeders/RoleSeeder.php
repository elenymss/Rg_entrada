<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1= Role::create(['name' => 'Admin']);
        $role2= Role::create(['name' => 'Empleado']);
        
        Permission::create(['name'=>'admin.home']);
        $role1= Role::create(['name' => 'Admin']);
        $role2= Role::create(['name' => 'Empleado']);
        
        Permission::create(['name'=>'admin.home']);
        
        Permission::create(['name'=>'admin.Registro.index']);
        Permission::create(['name'=>'admin.Registro.create']);
        Permission::create(['name'=>'admin.Registro.edit']);
        Permission::create(['name'=>'admin.Registro.destroy']);

        Permission::create(['name'=>'Empleado.Registro.index']);
      

        
    }
}
