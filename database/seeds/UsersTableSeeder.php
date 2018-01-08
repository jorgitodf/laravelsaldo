<?php

use App\User;
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
        User::create([
            'name' => 'Jorgito Paiva',
            'email' => 'jorgito@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
