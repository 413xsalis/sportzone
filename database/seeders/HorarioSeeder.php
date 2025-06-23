<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorarioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('horarios')->insert([
            [
                'dia' => 'Lunes',
                'hora_inicio' => '08:00:00',
                'hora_fin' => '10:00:00',
                'instructor_id' => 1,
                'grupo_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'dia' => 'Miércoles',
                'hora_inicio' => '10:00:00',
                'hora_fin' => '12:00:00',
                'instructor_id' => 2,
                'grupo_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'dia' => 'Viernes',
                'hora_inicio' => '14:00:00',
                'hora_fin' => '16:00:00',
                'instructor_id' => 3,
                'grupo_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
