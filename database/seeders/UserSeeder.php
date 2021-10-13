<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
            DB::table('users')->insert([
                'name' => "Nawaf",
                'email' => 'Nawaf@gmail.com',
                'password' => Hash::make('11111111'),
            ]);
    }
}
