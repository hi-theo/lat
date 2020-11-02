<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Theo',
            'email' => 'a@a.com',
            'password' => bcrypt('1234'),
            'status' => true
        ]);
    }
}
