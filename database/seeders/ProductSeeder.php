<?php
//Stoyan: created by chatgpt
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            DB::table('products')->insert([
                'product_name' => $faker->words(3, true), // Random product name with 3 words
                'width' => $faker->randomFloat(2, 1, 100), // Width between 1 and 100
                'height' => $faker->randomFloat(2, 1, 100), // Height between 1 and 100
                'price' => $faker->randomFloat(2, 10, 1000), // Price between 10 and 1000
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}