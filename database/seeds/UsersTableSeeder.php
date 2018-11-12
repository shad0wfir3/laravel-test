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
        $main_user = [
            'name' => 'Eamon',
            'email' => 'eamon@symantic.co.za',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'), // secret
            'remember_token' => str_random(10),
        ];

        User::create($main_user);
    }
}
