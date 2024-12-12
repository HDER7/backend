<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\ProductVariant;
use Faker\Factory as Faker;

class OrderItemSeeder extends Seeder
{
    public function run():void
    {
        $faker = Faker::create();
        $orders = Order::all();
        $variants = ProductVariant::all();

        // Crear 30 articulos de orden
        foreach ($orders as $order) {
            for ($i = 0; $i < 3; $i++) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'variant_id' => $faker->randomElement($variants)->id,
                    'quantity' => $faker->numberBetween(1, 5),
                    'unit_price' => $faker->randomFloat(2, 10, 500),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}


