<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => "Billy's Burger",
            'description' => 'Grass-Fed Beef, Organic American Cheese, Organic Ketchup, Mustard, Pickles, Chopped Onion',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('food_items')->insert([
            'title' => "BBQ Burger",
            'description' => 'Grass-Fed Beef, Organic American Cheese, Organic Ketchup, Mustard, Pickles, Chopped Onion',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('food_items')->insert([
            'title' => "Texas Burger",
            'description' => 'Grass-Fed Beef, Organic American Cheese, Organic Ketchup, Mustard, Pickles, Chopped Onion',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
