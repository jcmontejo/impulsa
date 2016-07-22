<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('users')->insert([
            'name' => 'Impulsa',
            'last_name' => 'UNICACH',
            'phone' => '9616170400',
            'role' => 'admin',
            'status' => 'active',
            'email' => 'unicach@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
