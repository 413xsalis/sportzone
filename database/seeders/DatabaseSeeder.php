<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Puedes dejar este usuario de prueba o eliminarlo si no lo necesitas
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Llamada a tus seeders personalizados
        $this->call([
            InstructorSeeder::class,
            GrupoSeeder::class,
            HorarioSeeder::class,
        ]);
    }
}
