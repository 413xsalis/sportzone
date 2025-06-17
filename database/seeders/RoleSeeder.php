<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Colaborador']);
        $role3 = Role::create(['name' => 'Instructor']);

        Permission::create(['name'=> 'admin.dashboard']) ->assignRole($role1);

        Permission::create(['name'=> 'admin.Gestion_usuarios']) ->assignRole($role1);
        Permission::create(['name'=> 'admin.Formulario_empleados']) ->assignRole($role1);;
        
    }
}
