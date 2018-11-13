<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $main_user = [
            'name' => 'Eamon',
            'email' => 'eamon@symantic.co.za',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'), // secret
            'remember_token' => str_random(10),
        ];

        User::create($main_user);

        factory(User::class,10)->create();


    }
}
