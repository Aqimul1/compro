<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $i) {
            Product::create([
                'nama' => $faker->word,
                'gambar' => 'images/product.jpg',
                'harga' => $faker->numberBetween(10000, 100000),
                'stok' => $faker->numberBetween(1, 50),
            ]);
        }
    }
}
