<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 10) as $i) {
            Contact::create([
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'message' => $faker->sentence,
            ]);
        }
    }
}
