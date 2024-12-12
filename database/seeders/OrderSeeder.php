<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    public function run():void
    {
        $faker = Faker::create();
        $users = User::all();

        // Crear 10 ordenes
        foreach ($users as $user) {
            Order::create([
                'user_id' => $user->id,
                'total_amount' => $faker->randomFloat(2, 100, 1000),
                'order_date' => now(),
                'order_status' => $faker->randomElement(['pending', 'shipped', 'delivered']),
                'payment_method' => $faker->randomElement(['credit_card', 'paypal', 'bank_transfer']),
                'shipping_address' => $faker->address,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
