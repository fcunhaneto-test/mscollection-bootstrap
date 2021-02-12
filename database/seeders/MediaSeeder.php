<?php

namespace Database\Seeders;

use App\Models\Qualifiers\Media;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $media = [
            ['name' => 'Blu-Ray'],
            ['name' => 'DVD'],
            ['name' => 'HD'],
            ['name' => 'Google Play'],
            ['name' => 'Microsoft Movies'],
            ['name' => 'Netflix', 'isstream' => true],
            ['name' => 'Prime Vídeo', 'isstream' => true],
            ['name' => 'Globo Play', 'isstream' => true],
            ['name' => 'Disney', 'isstream' => true],
            ['name' => 'Oldflix', 'isstream' => true],
            ['name' => 'Mega'],
            ['name' => 'Dropbox'],
        ];

        foreach ($media as $arr) {
            Media::create($arr);
        }
    }
}
