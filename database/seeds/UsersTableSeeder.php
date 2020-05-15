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
            'fname' => 'Joe',
            'lname' => 'Marambi',
            'email' => 'jmarambi@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'fname' => 'Chaya',
            'lname' => 'Willis',
            'email' => 'cwillis@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
