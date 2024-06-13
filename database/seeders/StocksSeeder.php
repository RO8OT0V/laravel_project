<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StocksSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Stock::create([
                'date' => $faker->date,
                'amount' => $faker->randomNumber(2),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}