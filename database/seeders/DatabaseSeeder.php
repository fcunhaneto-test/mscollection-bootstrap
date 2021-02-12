<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
   * Running after create and before import data
   */
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(MediaSeeder::class);

        /*
         * Running after import data
         */
//        $this->call(MovieUserSeeder::class);
//        $this->call(SeriesUserSeeder::class);
    }
}
