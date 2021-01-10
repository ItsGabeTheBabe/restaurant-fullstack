
<?php

use Illuminate\Database\Seeder;

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
            'lname' => 'Draper',
            'email' => 'Gabe@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'fname' => 'Eveline',
            'lname' => 'Draper',
            'email' => 'Eveline@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
