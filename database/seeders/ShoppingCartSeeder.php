<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ShoppingCart;
use App\Models\User;
use Faker\Factory as Faker;

class ShoppingCartSeeder extends Seeder
{
    public function run():void
    {
        $faker = Faker::create();
        $users = User::all();

        // Crear 10 carritos de compras para usuarios
        foreach ($users as $user) {
            ShoppingCart::create([
                'user_id' => $user->id,
                'cart_item_id' => $faker->randomDigitNotNull,
                'status' => $faker->randomElement(['active', 'completed', 'abandoned']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

