<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('grupos')->insert([
            ['nombre' => 'Infantil'],
            ['nombre' => 'Juvenil'],
            ['nombre' => 'Avanzado'],
        ]);
    }
}
