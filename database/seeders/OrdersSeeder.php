<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Order::create([
                'date' => $faker->date,
                'amount' => $faker->randomNumber(2),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}