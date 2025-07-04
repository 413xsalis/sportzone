<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('instructores')->insert([
            ['nombre' => 'Carlos Gómez'],
            ['nombre' => 'Laura Ramírez'],
            ['nombre' => 'Andrés Torres'],
        ]);
    }
}
