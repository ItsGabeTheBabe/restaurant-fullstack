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
            'title' => "Chicken Wings",
            'description' => 'Grass-Fed Beef, Organic American Cheese, Organic Ketchup, Mustard, Pickles, Chopped Onion',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => "Steak",
            'description' => 'Grass-Fed Beef, Organic American Cheese, Organic Ketchup, Mustard, Pickles, Chopped Onion',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 20.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => "Baby Back Ribs",
            'description' => 'Grass-Fed Beef, Organic American Cheese, Organic Ketchup, Mustard, Pickles, Chopped Onion',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 23.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => "Cesar Salad",
            'description' => 'Grass-Fed Beef, Organic American Cheese, Organic Ketchup, Mustard, Pickles, Chopped Onion',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 12.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => "Tres Leche Cup Cakes",
            'description' => 'Grass-Fed Beef, Organic American Cheese, Organic Ketchup, Mustard, Pickles, Chopped Onion',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => "Coke",
            'description' => 'Grass-Fed Beef, Organic American Cheese, Organic Ketchup, Mustard, Pickles, Chopped Onion',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 2.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => "Sprike",
            'description' => 'Grass-Fed Beef, Organic American Cheese, Organic Ketchup, Mustard, Pickles, Chopped Onion',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 2.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => "Moscow Mule",
            'description' => 'Grass-Fed Beef, Organic American Cheese, Organic Ketchup, Mustard, Pickles, Chopped Onion',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 7.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => "hSennessy Shot",
            'description' => 'Grass-Fed Beef, Organic American Cheese, Organic Ketchup, Mustard, Pickles, Chopped Onion',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 5.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
