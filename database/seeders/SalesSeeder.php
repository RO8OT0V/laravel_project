<?php

namespace Database\Seeders;

use App\Models\Sale;
use Database\Factories\SaleFactory;
use Illuminate\Database\Seeder;

class SalesSeeder extends Seeder
{
    public function run()
    {
        SaleFactory::new()->count(10)->create();
    }
}