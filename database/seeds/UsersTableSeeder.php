<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Gabe',
            'lname' => 'Torres',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('12345678'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        $faker = Faker::create();
        foreach (range(2, 20) as $index) {
            DB::table('users')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'password' => Hash::make('12345678'),
                'updated_at' => $faker->dateTimeThisMonth('now', 'America/New_York'),
                'created_at' => $faker->dateTimeThisMonth('now', 'America/New_York')
            ]);
        }
    }
}
