<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory('App\User', 50)->create([
            'name' => 'John Doe'
        ]);
    }
}