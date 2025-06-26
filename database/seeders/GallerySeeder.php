<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gallery;
use Faker\Factory as Faker;

class GallerySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $i) {
            Gallery::create([
                'judul' => $faker->sentence(3),
                'deskripsi' => $faker->paragraph,
                'gambar' => 'images/dummy.jpg',
            ]);
        }
    }
}

