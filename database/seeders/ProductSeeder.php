<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run():void
    {
        $faker = Faker::create();

        // Crear 10 productos
        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'name' => $faker->word,
                'description' => $faker->text,
                'price' => $faker->randomFloat(2, 10, 1000), // Precio entre 10 y 1000
                'other_attributes' => json_encode(['color' => $faker->colorName, 'material' => $faker->word]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

