<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $erica = [
            'name' => 'Erica Cunha',
            'email' => 'erica@gmail.com',
            'email_verified_at' => now(),
            'role' => 'assin',
            'password' => Hash::make('123456'),
            'remember_token' => Str::random(10),
        ];

        User::create($erica);

        $francisco = [
            'name' => 'Francisco Cunha Neto',
            'email' => 'fcunhaneto@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => Hash::make('123456'),
            'remember_token' => Str::random(10),
        ];

        User::create($francisco);

//        $faker = Factory::create();
//        for ($i = 0; $i < 50; $i++) {
//            $user = [
//                'name' => substr($faker->name, 0, 44),
//                'email' => $faker->unique()->safeEmail,
//                'email_verified_at' => now(),
//                'role' => 'assin',
//                'password' => Hash::make('123456'),
//                'remember_token' => Str::random(10),
//            ];
//            User::create($user);
//        }

    }
}
