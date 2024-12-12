<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CartItem;
use App\Models\ProductVariant;
use Faker\Factory as Faker;

class CartItemSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $variants = ProductVariant::all();

        // Crear 20 elementos de carrito
        for ($i = 0; $i < 20; $i++) {
            CartItem::create([
                'variant_id' => $faker->randomElement($variants)->id,
                'quantity' => $faker->numberBetween(1, 5),
                'unit_price' => $faker->randomFloat(2, 10, 500),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

