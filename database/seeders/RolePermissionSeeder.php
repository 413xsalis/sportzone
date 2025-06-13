<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
        'crear-cursos',
        'editar-cursos',
        'eliminar-cursos',
        'ver-reportes',
        'gestionar-usuarios'
    ];
    
    foreach ($permissions as $permission) {
        Permission::create(['name' => $permission]);
    }
    
    // Crear roles y asignar permisos
    $admin = Role::create(['name' => 'administrador']);
    $admin->givePermissionTo([
        'crear-cursos',
        'editar-cursos',
        'eliminar-cursos',
        'ver-reportes',
        'gestionar-usuarios'
    ]);
    
    $instructor = Role::create(['name' => 'instructor']);
    $instructor->givePermissionTo([
        'crear-cursos',
        'editar-cursos',
        'ver-reportes'
    ]);
    
    $colaborador = Role::create(['name' => 'colaborador']);
    $colaborador->givePermissionTo([
        'ver-reportes'
    ]);
    }

    
}
