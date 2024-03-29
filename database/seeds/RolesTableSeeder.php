
<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //created users
        DB::table('roles')->insert([
            'title' => 'Admin',

        ]);

        DB::table('roles')->insert([
            'title' => 'Employee',
        ]);

        //assigned users a role
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);

        $faker = Faker::create();
        foreach (range(2, 20) as $index) {
            DB::table('role_user')->insert([
                'role_id' => rand(1, 2),
                'user_id' => $index,
            ]);
        }
    }
}
