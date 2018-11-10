<?php

use Illuminate\Database\Seeder;

class CreateAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' 				=> 'John Wick',
            'email' 			=> 'admin@example.com',
            'email_verified_at' => now(),
            'password' 			=> bcrypt('password'),
            'type'				=> 'admin',
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
    }
}
