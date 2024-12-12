<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductVariant;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductVariantSeeder extends Seeder
{
    public function run():void
    {
        $faker = Faker::create();
        $products = Product::all();

        // Crear 5 variantes por cada producto
        foreach ($products as $product) {
            for ($i = 0; $i < 5; $i++) {
                ProductVariant::create([
                    'product_id' => $product->id,
                    'variant_id' => $faker->uuid,
                    'color' => $faker->colorName,
                    'size' => $faker->randomElement(['S', 'M', 'L', 'XL']),
                    'stock_quantity' => $faker->numberBetween(0, 100),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}

