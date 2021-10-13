<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(2)->create();
         $this->call([
          UserSeeder::class,
            // UserDetailSeeder::class,
            // EducationSeeder::class,
            // SkillsSeeder::class,
            // ExperiencesSeeder::class,
            // CertsSeeder::class
        ]);
    }
}
