<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Alex',
            'email'=> 'alexsanchez@gmail.com',
            'password'=> bcrypt('12345678')
        ]) ->assignRole($role1);

        User::factory(9)->create();
    }
}
