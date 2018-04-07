<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'dashboard user',
            'email' => env('BASIC_AUTH_USERNAME'),
            'password' => bcrypt(env('BASIC_AUTH_PASSWORD')),
        ]);
    }
}
