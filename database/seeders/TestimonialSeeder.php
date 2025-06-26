<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;
use Faker\Factory as Faker;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $i) {
            Testimonial::create([
                'nama' => $faker->name,
                'pekerjaan' => $faker->jobTitle,
                'pesan' => $faker->paragraph,
                'foto' => 'images/user.jpg',
            ]);
    }
}
}