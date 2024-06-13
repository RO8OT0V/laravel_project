<?php


namespace Database\Seeders;

use App\Models\Income;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class IncomesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Income::create([
                'date' => $faker->date,
                'amount' => $faker->randomNumber(2),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}