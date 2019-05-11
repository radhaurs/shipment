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
            'name' => 'radha',
            'email' => 'radhaursm@gmail.com',
            'mobile' => '39085776',
            'type' => 'admin',
            'password' => bcrypt('admin123'),
        ]);
    }
}
