<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => "Billy's Burgers is an American regional chain of fast food restaurants with locations primarily in 
            California and the Southwest. It was founded in Baldwin Park, California, in 1948 by Harry Snyder and Esther Snyder",
            'keywords' => "Burgers, Local Burger, Billy's Burgers, Best Burgers in Town",
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
